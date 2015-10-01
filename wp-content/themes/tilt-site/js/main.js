/*
 * classList.js: Cross-browser full element.classList implementation.
 * 1.1.20150312
 *
 * By Eli Grey, http://eligrey.com
 * License: Dedicated to the public domain.
 *   See https://github.com/eligrey/classList.js/blob/master/LICENSE.md
 */

/*global self, document, DOMException */

/*! @source http://purl.eligrey.com/github/classList.js/blob/master/classList.js */

if ("document" in self) {

// Full polyfill for browsers with no classList support
if (!("classList" in document.createElement("_"))) {

(function (view) {

"use strict";

if (!('Element' in view)) return;

var
	  classListProp = "classList"
	, protoProp = "prototype"
	, elemCtrProto = view.Element[protoProp]
	, objCtr = Object
	, strTrim = String[protoProp].trim || function () {
		return this.replace(/^\s+|\s+$/g, "");
	}
	, arrIndexOf = Array[protoProp].indexOf || function (item) {
		var
			  i = 0
			, len = this.length
		;
		for (; i < len; i++) {
			if (i in this && this[i] === item) {
				return i;
			}
		}
		return -1;
	}
	// Vendors: please allow content code to instantiate DOMExceptions
	, DOMEx = function (type, message) {
		this.name = type;
		this.code = DOMException[type];
		this.message = message;
	}
	, checkTokenAndGetIndex = function (classList, token) {
		if (token === "") {
			throw new DOMEx(
				  "SYNTAX_ERR"
				, "An invalid or illegal string was specified"
			);
		}
		if (/\s/.test(token)) {
			throw new DOMEx(
				  "INVALID_CHARACTER_ERR"
				, "String contains an invalid character"
			);
		}
		return arrIndexOf.call(classList, token);
	}
	, ClassList = function (elem) {
		var
			  trimmedClasses = strTrim.call(elem.getAttribute("class") || "")
			, classes = trimmedClasses ? trimmedClasses.split(/\s+/) : []
			, i = 0
			, len = classes.length
		;
		for (; i < len; i++) {
			this.push(classes[i]);
		}
		this._updateClassName = function () {
			elem.setAttribute("class", this.toString());
		};
	}
	, classListProto = ClassList[protoProp] = []
	, classListGetter = function () {
		return new ClassList(this);
	}
;
// Most DOMException implementations don't allow calling DOMException's toString()
// on non-DOMExceptions. Error's toString() is sufficient here.
DOMEx[protoProp] = Error[protoProp];
classListProto.item = function (i) {
	return this[i] || null;
};
classListProto.contains = function (token) {
	token += "";
	return checkTokenAndGetIndex(this, token) !== -1;
};
classListProto.add = function () {
	var
		  tokens = arguments
		, i = 0
		, l = tokens.length
		, token
		, updated = false
	;
	do {
		token = tokens[i] + "";
		if (checkTokenAndGetIndex(this, token) === -1) {
			this.push(token);
			updated = true;
		}
	}
	while (++i < l);

	if (updated) {
		this._updateClassName();
	}
};
classListProto.remove = function () {
	var
		  tokens = arguments
		, i = 0
		, l = tokens.length
		, token
		, updated = false
		, index
	;
	do {
		token = tokens[i] + "";
		index = checkTokenAndGetIndex(this, token);
		while (index !== -1) {
			this.splice(index, 1);
			updated = true;
			index = checkTokenAndGetIndex(this, token);
		}
	}
	while (++i < l);

	if (updated) {
		this._updateClassName();
	}
};
classListProto.toggle = function (token, force) {
	token += "";

	var
		  result = this.contains(token)
		, method = result ?
			force !== true && "remove"
		:
			force !== false && "add"
	;

	if (method) {
		this[method](token);
	}

	if (force === true || force === false) {
		return force;
	} else {
		return !result;
	}
};
classListProto.toString = function () {
	return this.join(" ");
};

if (objCtr.defineProperty) {
	var classListPropDesc = {
		  get: classListGetter
		, enumerable: true
		, configurable: true
	};
	try {
		objCtr.defineProperty(elemCtrProto, classListProp, classListPropDesc);
	} catch (ex) { // IE 8 doesn't support enumerable:true
		if (ex.number === -0x7FF5EC54) {
			classListPropDesc.enumerable = false;
			objCtr.defineProperty(elemCtrProto, classListProp, classListPropDesc);
		}
	}
} else if (objCtr[protoProp].__defineGetter__) {
	elemCtrProto.__defineGetter__(classListProp, classListGetter);
}

}(self));

} else {
// There is full or partial native classList support, so just check if we need
// to normalize the add/remove and toggle APIs.

(function () {
	"use strict";

	var testElement = document.createElement("_");

	testElement.classList.add("c1", "c2");

	// Polyfill for IE 10/11 and Firefox <26, where classList.add and
	// classList.remove exist but support only one argument at a time.
	if (!testElement.classList.contains("c2")) {
		var createMethod = function(method) {
			var original = DOMTokenList.prototype[method];

			DOMTokenList.prototype[method] = function(token) {
				var i, len = arguments.length;

				for (i = 0; i < len; i++) {
					token = arguments[i];
					original.call(this, token);
				}
			};
		};
		createMethod('add');
		createMethod('remove');
	}

	testElement.classList.toggle("c3", false);

	// Polyfill for IE 10 and Firefox <24, where classList.toggle does not
	// support the second argument.
	if (testElement.classList.contains("c3")) {
		var _toggle = DOMTokenList.prototype.toggle;

		DOMTokenList.prototype.toggle = function(token, force) {
			if (1 in arguments && !this.contains(token) === !force) {
				return force;
			} else {
				return _toggle.call(this, token);
			}
		};

	}

	testElement = null;
}());

}

}

// WAY POINTS script
/*!
Waypoints - 3.1.1
Copyright © 2011-2015 Caleb Troughton
Licensed under the MIT license.
https://github.com/imakewebthings/waypoints/blog/master/licenses.txt
*/
var resourceUri;
(function() {
  'use strict'

  var keyCounter = 0
  var allWaypoints = {}

  /* http://imakewebthings.com/waypoints/api/waypoint */
  function Waypoint(options) {
    if (!options) {
      throw new Error('No options passed to Waypoint constructor')
    }
    if (!options.element) {
      throw new Error('No element option passed to Waypoint constructor')
    }
    if (!options.handler) {
      throw new Error('No handler option passed to Waypoint constructor')
    }

    this.key = 'waypoint-' + keyCounter
    this.options = Waypoint.Adapter.extend({}, Waypoint.defaults, options)
    this.element = this.options.element
    this.adapter = new Waypoint.Adapter(this.element)
    this.callback = options.handler
    this.axis = this.options.horizontal ? 'horizontal' : 'vertical'
    this.enabled = this.options.enabled
    this.triggerPoint = null
    this.group = Waypoint.Group.findOrCreate({
      name: this.options.group,
      axis: this.axis
    })
    this.context = Waypoint.Context.findOrCreateByElement(this.options.context)

    if (Waypoint.offsetAliases[this.options.offset]) {
      this.options.offset = Waypoint.offsetAliases[this.options.offset]
    }
    this.group.add(this)
    this.context.add(this)
    allWaypoints[this.key] = this
    keyCounter += 1
  }

  /* Private */
  Waypoint.prototype.queueTrigger = function(direction) {
    this.group.queueTrigger(this, direction)
  }

  /* Private */
  Waypoint.prototype.trigger = function(args) {
    if (!this.enabled) {
      return
    }
    if (this.callback) {
      this.callback.apply(this, args)
    }
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/destroy */
  Waypoint.prototype.destroy = function() {
    this.context.remove(this)
    this.group.remove(this)
    delete allWaypoints[this.key]
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/disable */
  Waypoint.prototype.disable = function() {
    this.enabled = false
    return this
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/enable */
  Waypoint.prototype.enable = function() {
    this.context.refresh()
    this.enabled = true
    return this
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/next */
  Waypoint.prototype.next = function() {
    return this.group.next(this)
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/previous */
  Waypoint.prototype.previous = function() {
    return this.group.previous(this)
  }

  /* Private */
  Waypoint.invokeAll = function(method) {
    var allWaypointsArray = []
    for (var waypointKey in allWaypoints) {
      allWaypointsArray.push(allWaypoints[waypointKey])
    }
    for (var i = 0, end = allWaypointsArray.length; i < end; i++) {
      allWaypointsArray[i][method]()
    }
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/destroy-all */
  Waypoint.destroyAll = function() {
    Waypoint.invokeAll('destroy')
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/disable-all */
  Waypoint.disableAll = function() {
    Waypoint.invokeAll('disable')
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/enable-all */
  Waypoint.enableAll = function() {
    Waypoint.invokeAll('enable')
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/refresh-all */
  Waypoint.refreshAll = function() {
    Waypoint.Context.refreshAll()
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/viewport-height */
  Waypoint.viewportHeight = function() {
    return window.innerHeight || document.documentElement.clientHeight
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/viewport-width */
  Waypoint.viewportWidth = function() {
    return document.documentElement.clientWidth
  }

  Waypoint.adapters = []

  Waypoint.defaults = {
    context: window,
    continuous: true,
    enabled: true,
    group: 'default',
    horizontal: false,
    offset: 0
  }

  Waypoint.offsetAliases = {
    'bottom-in-view': function() {
      return this.context.innerHeight() - this.adapter.outerHeight()
    },
    'right-in-view': function() {
      return this.context.innerWidth() - this.adapter.outerWidth()
    }
  }

  window.Waypoint = Waypoint
}())
;(function() {
  'use strict'

  function requestAnimationFrameShim(callback) {
    window.setTimeout(callback, 1000 / 60)
  }

  var keyCounter = 0
  var contexts = {}
  var Waypoint = window.Waypoint
  var oldWindowLoad = window.onload

  /* http://imakewebthings.com/waypoints/api/context */
  function Context(element) {
    this.element = element
    this.Adapter = Waypoint.Adapter
    this.adapter = new this.Adapter(element)
    this.key = 'waypoint-context-' + keyCounter
    this.didScroll = false
    this.didResize = false
    this.oldScroll = {
      x: this.adapter.scrollLeft(),
      y: this.adapter.scrollTop()
    }
    this.waypoints = {
      vertical: {},
      horizontal: {}
    }

    element.waypointContextKey = this.key
    contexts[element.waypointContextKey] = this
    keyCounter += 1

    this.createThrottledScrollHandler()
    this.createThrottledResizeHandler()
  }

  /* Private */
  Context.prototype.add = function(waypoint) {
    var axis = waypoint.options.horizontal ? 'horizontal' : 'vertical'
    this.waypoints[axis][waypoint.key] = waypoint
    this.refresh()
  }

  /* Private */
  Context.prototype.checkEmpty = function() {
    var horizontalEmpty = this.Adapter.isEmptyObject(this.waypoints.horizontal)
    var verticalEmpty = this.Adapter.isEmptyObject(this.waypoints.vertical)
    if (horizontalEmpty && verticalEmpty) {
      this.adapter.off('.waypoints')
      delete contexts[this.key]
    }
  }

  /* Private */
  Context.prototype.createThrottledResizeHandler = function() {
    var self = this

    function resizeHandler() {
      self.handleResize()
      self.didResize = false
    }

    this.adapter.on('resize.waypoints', function() {
      if (!self.didResize) {
        self.didResize = true
        Waypoint.requestAnimationFrame(resizeHandler)
      }
    })
  }

  /* Private */
  Context.prototype.createThrottledScrollHandler = function() {
    var self = this
    function scrollHandler() {
      self.handleScroll()
      self.didScroll = false
    }

    this.adapter.on('scroll.waypoints', function() {
      if (!self.didScroll || Waypoint.isTouch) {
        self.didScroll = true
        Waypoint.requestAnimationFrame(scrollHandler)
      }
    })
  }

  /* Private */
  Context.prototype.handleResize = function() {
    Waypoint.Context.refreshAll()
  }

  /* Private */
  Context.prototype.handleScroll = function() {
    var triggeredGroups = {}
    var axes = {
      horizontal: {
        newScroll: this.adapter.scrollLeft(),
        oldScroll: this.oldScroll.x,
        forward: 'right',
        backward: 'left'
      },
      vertical: {
        newScroll: this.adapter.scrollTop(),
        oldScroll: this.oldScroll.y,
        forward: 'down',
        backward: 'up'
      }
    }

    for (var axisKey in axes) {
      var axis = axes[axisKey]
      var isForward = axis.newScroll > axis.oldScroll
      var direction = isForward ? axis.forward : axis.backward

      for (var waypointKey in this.waypoints[axisKey]) {
        var waypoint = this.waypoints[axisKey][waypointKey]
        var wasBeforeTriggerPoint = axis.oldScroll < waypoint.triggerPoint
        var nowAfterTriggerPoint = axis.newScroll >= waypoint.triggerPoint
        var crossedForward = wasBeforeTriggerPoint && nowAfterTriggerPoint
        var crossedBackward = !wasBeforeTriggerPoint && !nowAfterTriggerPoint
        if (crossedForward || crossedBackward) {
          waypoint.queueTrigger(direction)
          triggeredGroups[waypoint.group.id] = waypoint.group
        }
      }
    }

    for (var groupKey in triggeredGroups) {
      triggeredGroups[groupKey].flushTriggers()
    }

    this.oldScroll = {
      x: axes.horizontal.newScroll,
      y: axes.vertical.newScroll
    }
  }

  /* Private */
  Context.prototype.innerHeight = function() {
    /*eslint-disable eqeqeq */
    if (this.element == this.element.window) {
      return Waypoint.viewportHeight()
    }
    /*eslint-enable eqeqeq */
    return this.adapter.innerHeight()
  }

  /* Private */
  Context.prototype.remove = function(waypoint) {
    delete this.waypoints[waypoint.axis][waypoint.key]
    this.checkEmpty()
  }

  /* Private */
  Context.prototype.innerWidth = function() {
    /*eslint-disable eqeqeq */
    if (this.element == this.element.window) {
      return Waypoint.viewportWidth()
    }
    /*eslint-enable eqeqeq */
    return this.adapter.innerWidth()
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/context-destroy */
  Context.prototype.destroy = function() {
    var allWaypoints = []
    for (var axis in this.waypoints) {
      for (var waypointKey in this.waypoints[axis]) {
        allWaypoints.push(this.waypoints[axis][waypointKey])
      }
    }
    for (var i = 0, end = allWaypoints.length; i < end; i++) {
      allWaypoints[i].destroy()
    }
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/context-refresh */
  Context.prototype.refresh = function() {
    /*eslint-disable eqeqeq */
    var isWindow = this.element == this.element.window
    /*eslint-enable eqeqeq */
    var contextOffset = this.adapter.offset()
    var triggeredGroups = {}
    var axes

    this.handleScroll()
    axes = {
      horizontal: {
        contextOffset: isWindow ? 0 : contextOffset.left,
        contextScroll: isWindow ? 0 : this.oldScroll.x,
        contextDimension: this.innerWidth(),
        oldScroll: this.oldScroll.x,
        forward: 'right',
        backward: 'left',
        offsetProp: 'left'
      },
      vertical: {
        contextOffset: isWindow ? 0 : contextOffset.top,
        contextScroll: isWindow ? 0 : this.oldScroll.y,
        contextDimension: this.innerHeight(),
        oldScroll: this.oldScroll.y,
        forward: 'down',
        backward: 'up',
        offsetProp: 'top'
      }
    }

    for (var axisKey in axes) {
      var axis = axes[axisKey]
      for (var waypointKey in this.waypoints[axisKey]) {
        var waypoint = this.waypoints[axisKey][waypointKey]
        var adjustment = waypoint.options.offset
        var oldTriggerPoint = waypoint.triggerPoint
        var elementOffset = 0
        var freshWaypoint = oldTriggerPoint == null
        var contextModifier, wasBeforeScroll, nowAfterScroll
        var triggeredBackward, triggeredForward

        if (waypoint.element !== waypoint.element.window) {
          elementOffset = waypoint.adapter.offset()[axis.offsetProp]
        }

        if (typeof adjustment === 'function') {
          adjustment = adjustment.apply(waypoint)
        }
        else if (typeof adjustment === 'string') {
          adjustment = parseFloat(adjustment)
          if (waypoint.options.offset.indexOf('%') > - 1) {
            adjustment = Math.ceil(axis.contextDimension * adjustment / 100)
          }
        }

        contextModifier = axis.contextScroll - axis.contextOffset
        waypoint.triggerPoint = elementOffset + contextModifier - adjustment
        wasBeforeScroll = oldTriggerPoint < axis.oldScroll
        nowAfterScroll = waypoint.triggerPoint >= axis.oldScroll
        triggeredBackward = wasBeforeScroll && nowAfterScroll
        triggeredForward = !wasBeforeScroll && !nowAfterScroll

        if (!freshWaypoint && triggeredBackward) {
          waypoint.queueTrigger(axis.backward)
          triggeredGroups[waypoint.group.id] = waypoint.group
        }
        else if (!freshWaypoint && triggeredForward) {
          waypoint.queueTrigger(axis.forward)
          triggeredGroups[waypoint.group.id] = waypoint.group
        }
        else if (freshWaypoint && axis.oldScroll >= waypoint.triggerPoint) {
          waypoint.queueTrigger(axis.forward)
          triggeredGroups[waypoint.group.id] = waypoint.group
        }
      }
    }

    for (var groupKey in triggeredGroups) {
      triggeredGroups[groupKey].flushTriggers()
    }

    return this
  }

  /* Private */
  Context.findOrCreateByElement = function(element) {
    return Context.findByElement(element) || new Context(element)
  }

  /* Private */
  Context.refreshAll = function() {
    for (var contextId in contexts) {
      contexts[contextId].refresh()
    }
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/context-find-by-element */
  Context.findByElement = function(element) {
    return contexts[element.waypointContextKey]
  }

  window.onload = function() {
    if (oldWindowLoad) {
      oldWindowLoad()
    }
    Context.refreshAll()
  }

  Waypoint.requestAnimationFrame = function(callback) {
    var requestFn = window.requestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      requestAnimationFrameShim
    requestFn.call(window, callback)
  }
  Waypoint.Context = Context
}())
;(function() {
  'use strict'

  function byTriggerPoint(a, b) {
    return a.triggerPoint - b.triggerPoint
  }

  function byReverseTriggerPoint(a, b) {
    return b.triggerPoint - a.triggerPoint
  }

  var groups = {
    vertical: {},
    horizontal: {}
  }
  var Waypoint = window.Waypoint

  /* http://imakewebthings.com/waypoints/api/group */
  function Group(options) {
    this.name = options.name
    this.axis = options.axis
    this.id = this.name + '-' + this.axis
    this.waypoints = []
    this.clearTriggerQueues()
    groups[this.axis][this.name] = this
  }

  /* Private */
  Group.prototype.add = function(waypoint) {
    this.waypoints.push(waypoint)
  }

  /* Private */
  Group.prototype.clearTriggerQueues = function() {
    this.triggerQueues = {
      up: [],
      down: [],
      left: [],
      right: []
    }
  }

  /* Private */
  Group.prototype.flushTriggers = function() {
    for (var direction in this.triggerQueues) {
      var waypoints = this.triggerQueues[direction]
      var reverse = direction === 'up' || direction === 'left'
      waypoints.sort(reverse ? byReverseTriggerPoint : byTriggerPoint)
      for (var i = 0, end = waypoints.length; i < end; i += 1) {
        var waypoint = waypoints[i]
        if (waypoint.options.continuous || i === waypoints.length - 1) {
          waypoint.trigger([direction])
        }
      }
    }
    this.clearTriggerQueues()
  }

  /* Private */
  Group.prototype.next = function(waypoint) {
    this.waypoints.sort(byTriggerPoint)
    var index = Waypoint.Adapter.inArray(waypoint, this.waypoints)
    var isLast = index === this.waypoints.length - 1
    return isLast ? null : this.waypoints[index + 1]
  }

  /* Private */
  Group.prototype.previous = function(waypoint) {
    this.waypoints.sort(byTriggerPoint)
    var index = Waypoint.Adapter.inArray(waypoint, this.waypoints)
    return index ? this.waypoints[index - 1] : null
  }

  /* Private */
  Group.prototype.queueTrigger = function(waypoint, direction) {
    this.triggerQueues[direction].push(waypoint)
  }

  /* Private */
  Group.prototype.remove = function(waypoint) {
    var index = Waypoint.Adapter.inArray(waypoint, this.waypoints)
    if (index > -1) {
      this.waypoints.splice(index, 1)
    }
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/first */
  Group.prototype.first = function() {
    return this.waypoints[0]
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/last */
  Group.prototype.last = function() {
    return this.waypoints[this.waypoints.length - 1]
  }

  /* Private */
  Group.findOrCreate = function(options) {
    return groups[options.axis][options.name] || new Group(options)
  }

  Waypoint.Group = Group
}())
;(function() {
  'use strict'

  var Waypoint = window.Waypoint

  function isWindow(element) {
    return element === element.window
  }

  function getWindow(element) {
    if (isWindow(element)) {
      return element
    }
    return element.defaultView
  }

  function NoFrameworkAdapter(element) {
    this.element = element
    this.handlers = {}
  }

  NoFrameworkAdapter.prototype.innerHeight = function() {
    var isWin = isWindow(this.element)
    return isWin ? this.element.innerHeight : this.element.clientHeight
  }

  NoFrameworkAdapter.prototype.innerWidth = function() {
    var isWin = isWindow(this.element)
    return isWin ? this.element.innerWidth : this.element.clientWidth
  }

  NoFrameworkAdapter.prototype.off = function(event, handler) {
    function removeListeners(element, listeners, handler) {
      for (var i = 0, end = listeners.length - 1; i < end; i++) {
        var listener = listeners[i]
        if (!handler || handler === listener) {
          element.removeEventListener(listener)
        }
      }
    }

    var eventParts = event.split('.')
    var eventType = eventParts[0]
    var namespace = eventParts[1]
    var element = this.element

    if (namespace && this.handlers[namespace] && eventType) {
      removeListeners(element, this.handlers[namespace][eventType], handler)
      this.handlers[namespace][eventType] = []
    }
    else if (eventType) {
      for (var ns in this.handlers) {
        removeListeners(element, this.handlers[ns][eventType] || [], handler)
        this.handlers[ns][eventType] = []
      }
    }
    else if (namespace && this.handlers[namespace]) {
      for (var type in this.handlers[namespace]) {
        removeListeners(element, this.handlers[namespace][type], handler)
      }
      this.handlers[namespace] = {}
    }
  }

  /* Adapted from jQuery 1.x offset() */
  NoFrameworkAdapter.prototype.offset = function() {
    if (!this.element.ownerDocument) {
      return null
    }

    var documentElement = this.element.ownerDocument.documentElement
    var win = getWindow(this.element.ownerDocument)
    var rect = {
      top: 0,
      left: 0
    }

    if (this.element.getBoundingClientRect) {
      rect = this.element.getBoundingClientRect()
    }

    return {
      top: rect.top + win.pageYOffset - documentElement.clientTop,
      left: rect.left + win.pageXOffset - documentElement.clientLeft
    }
  }

  NoFrameworkAdapter.prototype.on = function(event, handler) {
    var eventParts = event.split('.')
    var eventType = eventParts[0]
    var namespace = eventParts[1] || '__default'
    var nsHandlers = this.handlers[namespace] = this.handlers[namespace] || {}
    var nsTypeList = nsHandlers[eventType] = nsHandlers[eventType] || []

    nsTypeList.push(handler)
    this.element.addEventListener(eventType, handler)
  }

  NoFrameworkAdapter.prototype.outerHeight = function(includeMargin) {
    var height = this.innerHeight()
    var computedStyle

    if (includeMargin && !isWindow(this.element)) {
      computedStyle = window.getComputedStyle(this.element)
      height += parseInt(computedStyle.marginTop, 10)
      height += parseInt(computedStyle.marginBottom, 10)
    }

    return height
  }

  NoFrameworkAdapter.prototype.outerWidth = function(includeMargin) {
    var width = this.innerWidth()
    var computedStyle

    if (includeMargin && !isWindow(this.element)) {
      computedStyle = window.getComputedStyle(this.element)
      width += parseInt(computedStyle.marginLeft, 10)
      width += parseInt(computedStyle.marginRight, 10)
    }

    return width
  }

  NoFrameworkAdapter.prototype.scrollLeft = function() {
    var win = getWindow(this.element)
    return win ? win.pageXOffset : this.element.scrollLeft
  }

  NoFrameworkAdapter.prototype.scrollTop = function() {
    var win = getWindow(this.element)
    return win ? win.pageYOffset : this.element.scrollTop
  }

  NoFrameworkAdapter.extend = function() {
    var args = Array.prototype.slice.call(arguments)

    function merge(target, obj) {
      if (typeof target === 'object' && typeof obj === 'object') {
        for (var key in obj) {
          if (obj.hasOwnProperty(key)) {
            target[key] = obj[key]
          }
        }
      }

      return target
    }

    for (var i = 1, end = args.length; i < end; i++) {
      merge(args[0], args[i])
    }
    return args[0]
  }

  NoFrameworkAdapter.inArray = function(element, array, i) {
    return array == null ? -1 : array.indexOf(element, i)
  }

  NoFrameworkAdapter.isEmptyObject = function(obj) {
    /* eslint no-unused-vars: 0 */
    for (var name in obj) {
      return false
    }
    return true
  }

  Waypoint.adapters.push({
    name: 'noframework',
    Adapter: NoFrameworkAdapter
  })
  Waypoint.Adapter = NoFrameworkAdapter
}())
;



// window.onload = function(){
//
// }

document.addEventListener("DOMContentLoaded", function(event) {
    document.body.setAttribute("class","loaded");
});

var allModules = document.getElementsByClassName('module');

for (var i = 0; i < allModules.length; i++){
    var module = allModules[i];
    new Waypoint({
        element: module,
        handler: function(){
            this.element.classList.add('module--visible');
        },
        offset: '100%'
    });
}

// Get all the carousel controls on the page and all the images on the page
//TODO: Add a way where the controls are created based on the number of images
//This might break centering
var carouselImages = document.getElementsByClassName('carousel-image');
var carouselControls = document.getElementsByClassName('carousel-control');

// Loop through all the controls and add a click handler to all of them.
for (var iterator = 0; iterator < carouselControls.length; iterator++){
    var carouselControl = carouselControls[iterator];
    carouselControl.onclick = function (){
        //grab the ID from the carousel control
        var imageToShow = this.getAttribute('ID').slice(-1);

        //Target the image with the matching ID and expand it while hiding all the others
        for(var iterator2 = 0; iterator2 < carouselImages.length; iterator2++){
            carouselImage = carouselImages[iterator2];
            carouselImage.style.height = 0;
            carouselControls[iterator2].classList.remove("selected");
        }
        document.getElementById('carousel-image-' + imageToShow).style.height = '100%';
        this.classList.add('selected');
    }
}

if(document.getElementById('header-video-player')){
    var myPlayer =  videojs('header-video-player');
        myPlayer.play();

		var theHeader = document.getElementsByTagName('header');
		//This assumes there is only one header element per page.
		var headerID = theHeader[0].getAttribute('ID');

		switch (headerID) {
			//work-page
			case "page_barclays_integrity":
				var clipVideoSrc = "https://player.vimeo.com/external/140671448.sd.mp4?s=4c8fa29917b77e5bf2cabc4ef37ff99c&profile_id=112";
				var fullVideoSrc = "https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113";
			break;

			case "page_barclays_values":
				var clipVideoSrc = "https://player.vimeo.com/external/140671448.sd.mp4?s=4c8fa29917b77e5bf2cabc4ef37ff99c&profile_id=112";
				var fullVideoSrc = "https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113";
			break;

			case "bp-fll":
				var clipVideoSrc = "https://player.vimeo.com/external/140671448.sd.mp4?s=4c8fa29917b77e5bf2cabc4ef37ff99c&profile_id=112";
				var fullVideoSrc = "https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113";
			break;

			case "page_bp_fll_stories":
				var clipVideoSrc = "https://player.vimeo.com/external/140671448.sd.mp4?s=4c8fa29917b77e5bf2cabc4ef37ff99c&profile_id=112";
				var fullVideoSrc = "https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113";
			break;

			case "page_discover_bp":
				var clipVideoSrc = "https://player.vimeo.com/external/140671448.sd.mp4?s=4c8fa29917b77e5bf2cabc4ef37ff99c&profile_id=112";
				var fullVideoSrc = "https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113";
			break;

			case "page_gfk":
				var clipVideoSrc = "https://player.vimeo.com/external/140667746.hd.mp4?s=65dbf2593c9f3bed0c770c497eda1964&profile_id=113";
				var fullVideoSrc = "https://player.vimeo.com/external/109216250.hd.mp4?s=4554075b1bbddc5346e47acad348d420&profile_id=113";
			break;

			case "page_legacy":
				var clipVideoSrc = "https://player.vimeo.com/external/140671448.sd.mp4?s=4c8fa29917b77e5bf2cabc4ef37ff99c&profile_id=112";
				var fullVideoSrc = "https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113";
			break;

			case "page_reliace":
				var clipVideoSrc = "https://player.vimeo.com/external/140671448.sd.mp4?s=4c8fa29917b77e5bf2cabc4ef37ff99c&profile_id=112";
				var fullVideoSrc = "https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113";
			break;

			case "page_sdnpa":
				var clipVideoSrc = "https://player.vimeo.com/external/140671448.sd.mp4?s=4c8fa29917b77e5bf2cabc4ef37ff99c&profile_id=112";
				var fullVideoSrc = "https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113";
			break;

			case "page_take_the_lead":
				var clipVideoSrc = "https://player.vimeo.com/external/140671448.sd.mp4?s=4c8fa29917b77e5bf2cabc4ef37ff99c&profile_id=112";
				var fullVideoSrc = "https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113";
			break;

			case "work_page":
				var clipVideoSrc = "https://player.vimeo.com/external/140671448.sd.mp4?s=4c8fa29917b77e5bf2cabc4ef37ff99c&profile_id=112";
				var fullVideoSrc = "https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113";
			break;

			default:
				// do nothing
		}

    var videoWaypoint = new Waypoint({
      element: document.getElementById('header-video-player'),
      handler: function(direction) {
        if(direction === 'down'){
            myPlayer.pause();
        } else if(direction === 'up'){
            myPlayer.play();
        }

      },
      offset: function() {
        return -this.element.clientHeight
      }
    });

    if(document.getElementById('header-play')){
        document.getElementById('header-play').addEventListener('click', function(){
                myPlayer.ready(function(){
                    myPlayer.src(fullVideoSrc);
                    myPlayer.requestFullscreen();
                    myPlayer.play();
                    myPlayer.controls(true);
                });
        });
    }

    myPlayer.on('fullscreenchange', function(){
        if((myPlayer.currentSrc() === fullVideoSrc) && (!myPlayer.isFullscreen())){
            myPlayer.src(clipVideoSrc);
            myPlayer.controls(false);
            myPlayer.muted(false);
        }
    });
}



var staff = document.getElementsByClassName('module');
for (var iterator3 = 0; iterator3 < staff.length; iterator3++){
    staffMember = staff[iterator3];

    staffMember.onclick = function (){
        var self = this;
        var rect = this.getBoundingClientRect();
        var staffMemberInfo = this.getAttribute('ID');
        this.classList.add('module--selected');
    }
}

var menuButton = document.getElementById('menuButton');
var pageMenu = document.getElementById('pageMenu');
var staffMember;
var staffBox;
var staffObject;
var staffBoxClose;
var startingHeight;
var startingWidth;
var leftPosition;
var topPosition;
var rect;
var scrollPosition;
var doc = document.documentElement;

menuButton.onclick = function(){


    [].map.call(document.querySelectorAll('.wrapper'), function(el){
        el.classList.toggle('wrapper--navved');
    });
    if(pageMenu.style.visibility === 'inherit'){
        pageMenu.style.opacity = '0'
        setTimeout(function(){
            pageMenu.style.visibility = 'hidden';
        },300);
        pageMenu.style.transform = "scale(1.5, 1.5)";
        document.getElementById('footer').style.display = 'block';

        if(document.getElementById('header-video-player')){
            myPlayer.play();
        }

    } else{
        pageMenu.style.visibility = 'inherit';
        pageMenu.style.opacity = 0.98;
        pageMenu.style.transform = "scale(1, 1)";
        document.getElementById('footer').style.display = 'none';

        if(document.getElementById('header-video-player')){
            myPlayer.pause();
        }
    }
}

var lookUpStaffMember = function(staffMember){
    return staffData[staffMember];
}

var fadeInStaffInfo = function(staffObject){
    document.getElementById('staff-member__info').style.opacity = '1';
    document.getElementById('staff-member__wrapper').style.opacity = '1';
    document.getElementById('staff-member__wrapper').style.backgroundImage = 'url(' + window.directoryURI + '/' + staffObject.image + ')';
}

var populateAndSizeStaffInfo = function(staffBox, staffObject){
    staffBox.style.height = '100vh';
    staffBox.style.width = '100%';
    staffBox.style.left = '0px';
    staffBox.style.top = '0px';
    // staffBox.style.transform = 'translate(' + left + ', ' + top + ')';
    document.getElementById('staff-member__name').innerHTML = staffObject.name;
    document.getElementById('staff-member__position').innerHTML = staffObject.position;
    document.getElementById('staff-member__department').innerHTML = staffObject.department;
    document.getElementById('staff-member__about').innerHTML = staffObject.about;
    document.getElementById('staff-member__did-you-know').innerHTML = '<strong class="highlight">Did you know?</strong> ' + staffObject["did-you-know"];
}

var hideStaffBoxAndAllowScrolling = function(staffBox){
    staffBox.style.display = 'none';
    // document.body.classList.remove('stop-scrolling');
}

var resetStaffBox = function(staffBox, startingHeight, startingWidth, leftPosition, topPosition){
    staffBox.style.height = startingHeight;
    staffBox.style.width = startingWidth;
    staffBox.style.left = leftPosition;
    staffBox.style.top = topPosition;
}

var getScrollPosition = function(){
    var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
    return top;
}

var staff = document.getElementsByClassName('module');
var videoFunction = '';

if(document.getElementById('staff-member')){
    for (var iterator3 = 0; iterator3 < staff.length; iterator3++){
        staffMember = staff[iterator3];

		var staffMemberID = 'Staff-' + (iterator3 + 1);
		var staffVideoSrc;
		var staffFullScreenVid;
		var videoIWant;
		console.log(staffMemberID);
		console.log(staffFullScreenVid);
        //Some closure magic to get this working. - MT
		//I came back to this comment...It was not helpful... - MT
        (function(){
            staffMember.addEventListener('mouseenter', function(event){
				var that = this;
				var thisStaffID = that.id;
				console.log(thisStaffID);
				switch (thisStaffID) {
					//work-page
					case "Staff-1":
						staffVideoSrc = "https://player.vimeo.com/external/140403279.sd.mp4?s=5c6b2cbfb2ef0f48e4d4c2d7a2c3656a&profile_id=112";
					break;

					case "Staff-2":
						staffVideoSrc = "https://player.vimeo.com/external/140403284.sd.mp4?s=09bc9929175c10c46ec8fb7dc62a119b&profile_id=112";
					break;

					case "Staff-3":
						staffVideoSrc = "https://player.vimeo.com/external/140403285.sd.mp4?s=1c80332d3883f4581f7a584c83826da7&profile_id=112";
					break;

					case "Staff-4":
						staffVideoSrc = "https://player.vimeo.com/external/140403277.sd.mp4?s=29c1365532165fa7c8d7138eec8e163c&profile_id=112";
					break;

					case "Staff-5":
						staffVideoSrc = "https://player.vimeo.com/external/140403273.sd.mp4?s=91b80135b2f7602578df0f11bd9b8e18&profile_id=112";
					break;

					case "Staff-6":
						staffVideoSrc = "https://player.vimeo.com/external/140403276.sd.mp4?s=ea179e3f47a824b0c5f4868ff97393aa&profile_id=112";
					break;

					case "Staff-7":
						staffVideoSrc = "https://player.vimeo.com/external/140403270.sd.mp4?s=0206047835fecf68feef275f56b33cef&profile_id=112";
					break;

					case "Staff-8":
						staffVideoSrc = "https://player.vimeo.com/external/140403275.sd.mp4?s=1eb2bc24302d7fc2a8ab2993feab5586&profile_id=112";
					break;

					case "Staff-9":
						staffVideoSrc = "https://player.vimeo.com/external/140403281.sd.mp4?s=35498172b93da64e3aa8d15a894cafa6&profile_id=112";
					break;

					case "Staff-10":
						staffVideoSrc = "https://player.vimeo.com/external/140403288.sd.mp4?s=eb9ce38ce409022ac660aac48376a250&profile_id=112";
					break;

					case "Staff-11":
						staffVideoSrc = "https://player.vimeo.com/external/140403296.sd.mp4?s=f1f19de8ff8f3870ac0fde5132f4fad9&profile_id=112";
					break;

					case "Staff-12":
						staffVideoSrc = "https://player.vimeo.com/external/140403294.sd.mp4?s=b27782cf9097d798e9956d3e4285a205&profile_id=112";
					break;

					case "Staff-13":
						staffVideoSrc = "https://player.vimeo.com/external/140403278.sd.mp4?s=87cf89bfeb39d10c65e49d88de1b1cbd&profile_id=112";
					break;

					case "Staff-14":
						staffVideoSrc = "https://player.vimeo.com/external/140403289.sd.mp4?s=f04cff5c4ee7456ece6f61632d6fdef1&profile_id=112";
					break;

					case "Staff-15":
						staffVideoSrc = "https://player.vimeo.com/external/140403280.sd.mp4?s=d8b4e6a74d8135f5e091f254344c5901&profile_id=112";
					break;

					case "Staff-16":
						staffVideoSrc = "https://player.vimeo.com/external/140403290.sd.mp4?s=0e1e564e06cc5b284c190a8b0d20791e&profile_id=112";
					break;

					case "Staff-17":
						staffVideoSrc = "https://player.vimeo.com/external/140403272.sd.mp4?s=3bcc352281b93bbd8fc66df067156493&profile_id=112";
					break;

					case "Staff-18":
						staffVideoSrc = "https://player.vimeo.com/external/140403274.sd.mp4?s=f7ea813281b01caf596bfb5c00adca74&profile_id=112";
					break;

					case "Staff-19":
						staffVideoSrc = "https://player.vimeo.com/external/140403271.sd.mp4?s=541308d08653d1fb132ab55203ce4e82&profile_id=112";
					break;

					case "Staff-20":
						staffVideoSrc = "https://player.vimeo.com/external/140403295.sd.mp4?s=b1daa0f944cda8009b47296f821189cd&profile_id=112";
					break;

					case "Staff-21":
						staffVideoSrc = "https://player.vimeo.com/external/140403286.sd.mp4?s=6af207b741e9c1b261384d91132861c1&profile_id=112";
					break;

					default:
						// do nothing
				}
					console.log('Mouse has entered');
					videoFunction = setTimeout(function(){
							if(!that.children[1]){
								console.log(thisStaffID);
								document.getElementById(thisStaffID).innerHTML += '<div class="ratio"><video poster="' + window.directoryURI + '/images/staff/about_' + thisStaffID + '.jpg" loop="false" muted="true"><source src="' + staffVideoSrc + '" type="video/mp4"></video></div>';
							}
							var ratio2 = that.children[1];
							var video2 = ratio2.children[0];
							videoIWant = video2;
	                    	videoIWant.play();
						}, 100);

            });

            staffMember.addEventListener('mouseleave', function(event, video){
					console.log("Mouse has exited");
					clearTimeout(videoFunction);
					console.log(videoIWant);
					videoIWant.pause();
            });
        })();

        staffBoxClose = document.getElementById('staff-member__close');

        staffMember.onclick = function (){
            staffMember = this.id;
			staffFullScreenVid = this.dataset.fullvideo;
            staffObject = lookUpStaffMember(staffMember);
            staffBox = document.getElementById('staff-member');
            staffBox.style.display = 'block';
            rect = this.getBoundingClientRect();
            startingHeight = window.getComputedStyle(this).height;
            startingWidth = window.getComputedStyle(this).width;
            leftPosition = (rect['left'] + 'px');
            topPosition = (rect['top'] + 'px');
            // document.body.classList.add('stop-scrolling');
            scrollPosition = getScrollPosition();


            staffBox.style.position = "fixed";
            staffBox.style.transition = "all 0s ease";
            staffBox.style.left = leftPosition;
            staffBox.style.top = topPosition;
            staffBox.style.height = startingHeight;
            staffBox.style.width = startingWidth;
            document.body.appendChild(staffBox);
            staffBox.appendChild(staffBoxClose);
            staffBox.style.backgroundColor = '#FF0066';
            staffBox.style.zIndex = '6';
			document.getElementById('blahblahblah').innerHTML = '<div class="module module--video module--visible module--no-zoom" style="position: absolute; z-index: 6; width: 100%; height: 100%;"><div class="ratio"><video poster="images/test-screen-video.png" autoplay muted="true"><source src="' + staffFullScreenVid + '" type="video/mp4"></video></div></div>';

            setTimeout(function(){
				console.log('Hello');
                staffBox.style.transition = "all 0.5s ease";
                populateAndSizeStaffInfo(staffBox, staffObject);
            }, 500);

            setTimeout(function(){
                fadeInStaffInfo(staffObject);
            }, 1050);

        }

		staffBoxClose.onclick = function(){
			document.getElementById('staff-member__wrapper').style.opacity = '0';
			document.getElementById('staff-member__info').style.opacity = '0';
			window.scrollTo(0, scrollPosition);

			setTimeout(function(){
				resetStaffBox(staffBox, startingHeight, startingWidth, leftPosition, topPosition);
			}, 500);

			setTimeout(function(){
				hideStaffBoxAndAllowScrolling(staffBox)
				document.getElementById('blahblahblah').innerHTML = '';
			}, 1050);
		}
    }

}

// if(document.getElementById('staff-member')){
//     for (var iterator3 = 0; iterator3 < staff.length; iterator3++){
//         staffMember = staff[iterator3];
//
// 		var staffMemberID = 'Staff-' + (iterator3 + 1);
// 		var staffVideoSrc = '';
// 		var staffFullScreenVid= '';
// 		console.log(staffMemberID);
// 		console.log(staffFullScreenVid);
//
// 		switch (staffMemberID) {
// 			//work-page
// 			case "Staff-1":
// 				var staffVideoSrc = "https://player.vimeo.com/external/140403279.sd.mp4?s=5c6b2cbfb2ef0f48e4d4c2d7a2c3656a&profile_id=112";
// 			break;
//
// 			case "Staff-2":
// 				var staffVideoSrc = "https://player.vimeo.com/external/140403284.sd.mp4?s=09bc9929175c10c46ec8fb7dc62a119b&profile_id=112";
// 			break;
//
// 			case "Staff-3":
// 				var staffVideoSrc = "https://player.vimeo.com/external/140403285.sd.mp4?s=1c80332d3883f4581f7a584c83826da7&profile_id=112";
// 			break;
//
// 			case "Staff-4":
// 				var staffVideoSrc = "https://player.vimeo.com/external/140403277.sd.mp4?s=29c1365532165fa7c8d7138eec8e163c&profile_id=112";
// 			break;
//
// 			case "Staff-5":
// 				var staffVideoSrc = "https://player.vimeo.com/external/140403273.sd.mp4?s=91b80135b2f7602578df0f11bd9b8e18&profile_id=112";
// 			break;
//
// 			case "Staff-6":
// 				var staffVideoSrc = "https://player.vimeo.com/external/140403276.sd.mp4?s=ea179e3f47a824b0c5f4868ff97393aa&profile_id=112";
// 			break;
//
// 			case "Staff-7":
// 				var staffVideoSrc = "https://player.vimeo.com/external/140403270.sd.mp4?s=0206047835fecf68feef275f56b33cef&profile_id=112";
// 			break;
//
// 			case "Staff-8":
// 				var staffVideoSrc = "https://player.vimeo.com/external/140403275.sd.mp4?s=1eb2bc24302d7fc2a8ab2993feab5586&profile_id=112";
// 			break;
//
// 			case "Staff-9":
// 				var staffVideoSrc = "https://player.vimeo.com/external/140403281.sd.mp4?s=35498172b93da64e3aa8d15a894cafa6&profile_id=112";
// 			break;
//
// 			case "Staff-10":
// 				var staffVideoSrc = "https://player.vimeo.com/external/140403288.sd.mp4?s=eb9ce38ce409022ac660aac48376a250&profile_id=112";
// 			break;
//
// 			case "Staff-11":
// 				var staffVideoSrc = "https://player.vimeo.com/external/140403296.sd.mp4?s=f1f19de8ff8f3870ac0fde5132f4fad9&profile_id=112";
// 			break;
//
// 			case "Staff-12":
// 				var staffVideoSrc = "https://player.vimeo.com/external/140403294.sd.mp4?s=b27782cf9097d798e9956d3e4285a205&profile_id=112";
// 			break;
//
// 			case "Staff-13":
// 				var staffVideoSrc = "https://player.vimeo.com/external/140403278.sd.mp4?s=87cf89bfeb39d10c65e49d88de1b1cbd&profile_id=112";
// 			break;
//
// 			case "Staff-14":
// 				var staffVideoSrc = "https://player.vimeo.com/external/140403289.sd.mp4?s=f04cff5c4ee7456ece6f61632d6fdef1&profile_id=112";
// 			break;
//
// 			case "Staff-15":
// 				var staffVideoSrc = "https://player.vimeo.com/external/140403280.sd.mp4?s=d8b4e6a74d8135f5e091f254344c5901&profile_id=112";
// 			break;
//
// 			case "Staff-16":
// 				var staffVideoSrc = "https://player.vimeo.com/external/140403290.sd.mp4?s=0e1e564e06cc5b284c190a8b0d20791e&profile_id=112";
// 			break;
//
// 			case "Staff-17":
// 				var staffVideoSrc = "https://player.vimeo.com/external/140403272.sd.mp4?s=3bcc352281b93bbd8fc66df067156493&profile_id=112";
// 			break;
//
// 			case "Staff-18":
// 				var staffVideoSrc = "https://player.vimeo.com/external/140403274.sd.mp4?s=f7ea813281b01caf596bfb5c00adca74&profile_id=112";
// 			break;
//
// 			case "Staff-19":
// 				var staffVideoSrc = "https://player.vimeo.com/external/140403271.sd.mp4?s=541308d08653d1fb132ab55203ce4e82&profile_id=112";
// 			break;
//
// 			case "Staff-20":
// 				var staffVideoSrc = "https://player.vimeo.com/external/140403295.sd.mp4?s=b1daa0f944cda8009b47296f821189cd&profile_id=112";
// 			break;
//
// 			case "Staff-21":
// 				var staffVideoSrc = "https://player.vimeo.com/external/140403286.sd.mp4?s=6af207b741e9c1b261384d91132861c1&profile_id=112";
// 			break;
//
// 			default:
// 				// do nothing
// 		}
//
//
//         document.getElementById('Staff-' + (iterator3 + 1)).innerHTML += '<div class="ratio"><video poster="images/test-screen-video.png" loop="false" muted="true"><source src="' + staffVideoSrc + '" type="video/mp4"></video></div>';
//
//         var ratio = staffMember.children[1];
//         var video = ratio.children[0];
//         //Some closure magic to get this working.
//         (function(){
//             var videoIWant = video;
//             staffMember.addEventListener('mouseenter', function(event, video){
//                     videoIWant.play();
//             });
//
//             staffMember.addEventListener('mouseleave', function(event, video){
//                     videoIWant.pause();
//             });
//         })();
//
//
//
//         staffMember.onclick = function (){
//             staffMember = this.id;
// 			staffFullScreenVid = this.dataset.fullvideo;
//             staffObject = lookUpStaffMember(staffMember);
//             staffBox = document.getElementById('staff-member');
//             staffBox.style.display = 'block';
//             staffBoxClose = document.getElementById('staff-member__close');
//             rect = this.getBoundingClientRect();
//             startingHeight = window.getComputedStyle(this).height;
//             startingWidth = window.getComputedStyle(this).width;
//             leftPosition = (rect['left'] + 'px');
//             topPosition = (rect['top'] + 'px');
//             // document.body.classList.add('stop-scrolling');
//             scrollPosition = getScrollPosition();
//
//             staffBoxClose.onclick = function(){
//                 document.getElementById('staff-member__wrapper').style.opacity = '0';
//                 document.getElementById('staff-member__info').style.opacity = '0';
//                 window.scrollTo(0, scrollPosition);
//
//                 setTimeout(function(){
//                     resetStaffBox(staffBox, startingHeight, startingWidth, leftPosition, topPosition);
//                 }, 500);
//
//                 setTimeout(function(){
//                     hideStaffBoxAndAllowScrolling(staffBox)
//                 }, 1050);
//             }
//             staffBox.style.position = "fixed";
//             staffBox.style.transition = "all 0s ease";
//             staffBox.style.left = leftPosition;
//             staffBox.style.top = topPosition;
//             staffBox.style.height = startingHeight;
//             staffBox.style.width = startingWidth;
//             document.body.appendChild(staffBox);
//             staffBox.appendChild(staffBoxClose);
//             staffBox.style.backgroundColor = '#FF0066';
//             staffBox.style.zIndex = '6';
// 			document.getElementById('blahblahblah').innerHTML += '<div class="module module--video module--visible module--no-zoom" style="position: absolute; z-index: 6; width: 100%; height: 100%;"><div class="ratio"><video poster="images/test-screen-video.png" autoplay muted="true"><source src="' + staffFullScreenVid + '" type="video/mp4"></video></div></div>';
//
//             setTimeout(function(){
// 				console.log('Hello');
//                 staffBox.style.transition = "all 0.5s ease";
//                 populateAndSizeStaffInfo(staffBox, staffObject);
//             }, 500);
//
//             setTimeout(function(){
//                 fadeInStaffInfo(staffObject);
//             }, 1050);
//
//         }
//     }
//
// }

if(document.getElementById('work_all')){

    [].map.call(document.querySelectorAll('.work-item-title'), function(el){
        el.onclick = function(){
                itemsToShow = el.id;
                itemsToShow = itemsToShow.slice(5);
                console.log(itemsToShow);
                [].map.call(document.querySelectorAll('.work-container'), function(el3){
                    el3.style.opacity = 0;
                    el3.style.display = 'none';
                });

                if(itemsToShow === 'all'){

                    [].map.call(document.querySelectorAll('.work-container'), function(el3){
                        el3.style.opacity = 1;
                        el3.style.display = 'block';
                    });

                } else {
                    document.getElementById(itemsToShow).style.opacity = 1;
                    document.getElementById(itemsToShow).style.display = 'block';

                    [].map.call(document.querySelectorAll('.module'), function(el2){
                        el2.classList.remove('module--visible');
                        console.log(el2);
                    });
                    [].map.call(document.querySelectorAll('.module'), function(el4){
                        setTimeout(function(){
                            el4.classList.add('module--visible');
                        }, 500);
                    });
                }
        }
    });
}


//footer stuff

var footerImageToDisplay = Math.floor((Math.random() * 8 + 1));
var footer = document.getElementById('footer');
    footer.style.backgroundImage = "url('" + window.directoryURI + "/images/footer/footer_" + footerImageToDisplay +".jpg')";
