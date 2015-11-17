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
var isOpera = !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;
    // Opera 8.0+ (UA detection to detect Blink/v8-powered Opera)
var isFirefox = typeof InstallTrigger !== 'undefined';   // Firefox 1.0+
var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
    // At least Safari 3+: "[object HTMLElementConstructor]"
var isChrome = !!window.chrome && !isOpera;              // Chrome 1+
var isIE = /*@cc_on!@*/false || !!document.documentMode; // At least IE6

console.log(isChrome);

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

/*! modernizr 3.2.0 (Custom Build) | MIT *
 * http://modernizr.com/download/?-touchevents-video-videoautoplay !*/
!function(A,e,o){function t(A,e){return typeof A===e}function n(){var A,e,o,n,a,i,c;for(var l in d)if(d.hasOwnProperty(l)){if(A=[],e=d[l],e.name&&(A.push(e.name.toLowerCase()),e.options&&e.options.aliases&&e.options.aliases.length))for(o=0;o<e.options.aliases.length;o++)A.push(e.options.aliases[o].toLowerCase());for(n=t(e.fn,"function")?e.fn():e.fn,a=0;a<A.length;a++)i=A[a],c=i.split("."),1===c.length?Modernizr[c[0]]=n:(!Modernizr[c[0]]||Modernizr[c[0]]instanceof Boolean||(Modernizr[c[0]]=new Boolean(Modernizr[c[0]])),Modernizr[c[0]][c[1]]=n),r.push((n?"":"no-")+c.join("-"))}}function a(A){var e=E.className,o=Modernizr._config.classPrefix||"";if(u&&(e=e.baseVal),Modernizr._config.enableJSClass){var t=new RegExp("(^|\\s)"+o+"no-js(\\s|$)");e=e.replace(t,"$1"+o+"js$2")}Modernizr._config.enableClasses&&(e+=" "+o+A.join(" "+o),u?E.className.baseVal=e:E.className=e)}function i(){return"function"!=typeof e.createElement?e.createElement(arguments[0]):u?e.createElementNS.call(e,"http://www.w3.org/2000/svg",arguments[0]):e.createElement.apply(e,arguments)}function c(A,e){if("object"==typeof A)for(var o in A)p(A,o)&&c(o,A[o]);else{A=A.toLowerCase();var t=A.split("."),n=Modernizr[t[0]];if(2==t.length&&(n=n[t[1]]),"undefined"!=typeof n)return Modernizr;e="function"==typeof e?e():e,1==t.length?Modernizr[t[0]]=e:(!Modernizr[t[0]]||Modernizr[t[0]]instanceof Boolean||(Modernizr[t[0]]=new Boolean(Modernizr[t[0]])),Modernizr[t[0]][t[1]]=e),a([(e&&0!=e?"":"no-")+t.join("-")]),Modernizr._trigger(A,e)}return Modernizr}function l(){var A=e.body;return A||(A=i(u?"svg":"body"),A.fake=!0),A}function s(A,o,t,n){var a,c,s,r,d="modernizr",h=i("div"),R=l();if(parseInt(t,10))for(;t--;)s=i("div"),s.id=n?n[t]:d+(t+1),h.appendChild(s);return a=i("style"),a.type="text/css",a.id="s"+d,(R.fake?R:h).appendChild(a),R.appendChild(h),a.styleSheet?a.styleSheet.cssText=A:a.appendChild(e.createTextNode(A)),h.id=d,R.fake&&(R.style.background="",R.style.overflow="hidden",r=E.style.overflow,E.style.overflow="hidden",E.appendChild(R)),c=o(h,A),R.fake?(R.parentNode.removeChild(R),E.style.overflow=r,E.offsetHeight):h.parentNode.removeChild(h),!!c}var r=[],d=[],h={_version:"3.2.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(A,e){var o=this;setTimeout(function(){e(o[A])},0)},addTest:function(A,e,o){d.push({name:A,fn:e,options:o})},addAsyncTest:function(A){d.push({name:null,fn:A})}},Modernizr=function(){};Modernizr.prototype=h,Modernizr=new Modernizr;var R=h._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):[];h._prefixes=R;var E=e.documentElement,u="svg"===E.nodeName.toLowerCase();Modernizr.addTest("video",function(){var A=i("video"),e=!1;try{(e=!!A.canPlayType)&&(e=new Boolean(e),e.ogg=A.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,""),e.h264=A.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,""),e.webm=A.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,""),e.vp9=A.canPlayType('video/webm; codecs="vp9"').replace(/^no$/,""),e.hls=A.canPlayType('application/x-mpegURL; codecs="avc1.42E01E"').replace(/^no$/,""))}catch(o){}return e});var p;!function(){var A={}.hasOwnProperty;p=t(A,"undefined")||t(A.call,"undefined")?function(A,e){return e in A&&t(A.constructor.prototype[e],"undefined")}:function(e,o){return A.call(e,o)}}(),h._l={},h.on=function(A,e){this._l[A]||(this._l[A]=[]),this._l[A].push(e),Modernizr.hasOwnProperty(A)&&setTimeout(function(){Modernizr._trigger(A,Modernizr[A])},0)},h._trigger=function(A,e){if(this._l[A]){var o=this._l[A];setTimeout(function(){var A,t;for(A=0;A<o.length;A++)(t=o[A])(e)},0),delete this._l[A]}},Modernizr._q.push(function(){h.addTest=c}),Modernizr.addAsyncTest(function(){function A(o){clearTimeout(e),t.removeEventListener("playing",A,!1),c("videoautoplay",o&&"playing"===o.type||0!==t.currentTime),t.parentNode.removeChild(t)}var e,o=300,t=i("video"),n=t.style;if(!(Modernizr.video&&"autoplay"in t))return void c("videoautoplay",!1);n.position="absolute",n.height=0,n.width=0;try{if(Modernizr.video.ogg)t.src="data:video/ogg;base64,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";else{if(!Modernizr.video.h264)return void c("videoautoplay",!1);t.src="data:video/mp4;base64,AAAAHGZ0eXBtcDQyAAAAAG1wNDJpc29tYXZjMQAAAz5tb292AAAAbG12aGQAAAAAzaNacc2jWnEAAV+QAAFfkAABAAABAAAAAAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAAAAGGlvZHMAAAAAEICAgAcAT////3//AAACQ3RyYWsAAABcdGtoZAAAAAHNo1pxzaNacQAAAAEAAAAAAAFfkAAAAAAAAAAAAAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAEAAAAAAEAAAABAAAAAAAd9tZGlhAAAAIG1kaGQAAAAAzaNacc2jWnEAAV+QAAFfkFXEAAAAAAAhaGRscgAAAAAAAAAAdmlkZQAAAAAAAAAAAAAAAAAAAAGWbWluZgAAABR2bWhkAAAAAQAAAAAAAAAAAAAAJGRpbmYAAAAcZHJlZgAAAAAAAAABAAAADHVybCAAAAABAAABVnN0YmwAAACpc3RzZAAAAAAAAAABAAAAmWF2YzEAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAEAAQAEgAAABIAAAAAAAAAAEOSlZUL0FWQyBDb2RpbmcAAAAAAAAAAAAAAAAAAAAAAAAY//8AAAAxYXZjQwH0AAr/4QAZZ/QACq609NQYBBkAAAMAAQAAAwAKjxImoAEABWjOAa8gAAAAEmNvbHJuY2xjAAYAAQAGAAAAGHN0dHMAAAAAAAAAAQAAAAUAAEZQAAAAKHN0c3oAAAAAAAAAAAAAAAUAAAIqAAAACAAAAAgAAAAIAAAACAAAAChzdHNjAAAAAAAAAAIAAAABAAAABAAAAAEAAAACAAAAAQAAAAEAAAAYc3RjbwAAAAAAAAACAAADYgAABaQAAAAUc3RzcwAAAAAAAAABAAAAAQAAABFzZHRwAAAAAAREREREAAAAb3VkdGEAAABnbWV0YQAAAAAAAAAhaGRscgAAAAAAAAAAbWRpcgAAAAAAAAAAAAAAAAAAAAA6aWxzdAAAADKpdG9vAAAAKmRhdGEAAAABAAAAAEhhbmRCcmFrZSAwLjkuOCAyMDEyMDcxODAwAAACUm1kYXQAAAHkBgX/4NxF6b3m2Ui3lizYINkj7u94MjY0IC0gY29yZSAxMjAgLSBILjI2NC9NUEVHLTQgQVZDIGNvZGVjIC0gQ29weWxlZnQgMjAwMy0yMDExIC0gaHR0cDovL3d3dy52aWRlb2xhbi5vcmcveDI2NC5odG1sIC0gb3B0aW9uczogY2FiYWM9MCByZWY9MSBkZWJsb2NrPTE6MDowIGFuYWx5c2U9MHgxOjAgbWU9ZXNhIHN1Ym1lPTkgcHN5PTAgbWl4ZWRfcmVmPTAgbWVfcmFuZ2U9NCBjaHJvbWFfbWU9MSB0cmVsbGlzPTAgOHg4ZGN0PTAgY3FtPTAgZGVhZHpvbmU9MjEsMTEgZmFzdF9wc2tpcD0wIGNocm9tYV9xcF9vZmZzZXQ9MCB0aHJlYWRzPTYgc2xpY2VkX3RocmVhZHM9MCBucj0wIGRlY2ltYXRlPTEgaW50ZXJsYWNlZD0wIGJsdXJheV9jb21wYXQ9MCBjb25zdHJhaW5lZF9pbnRyYT0wIGJmcmFtZXM9MCB3ZWlnaHRwPTAga2V5aW50PTUwIGtleWludF9taW49NSBzY2VuZWN1dD00MCBpbnRyYV9yZWZyZXNoPTAgcmM9Y3FwIG1idHJlZT0wIHFwPTAAgAAAAD5liISscR8A+E4ACAACFoAAITAAAgsAAPgYCoKgoC+L4vi+KAvi+L4YfAEAACMzgABF9AAEUGUgABDJiXnf4AAAAARBmiKUAAAABEGaQpQAAAAEQZpilAAAAARBmoKU"}}catch(a){return void c("videoautoplay",!1)}t.setAttribute("autoplay",""),t.style.cssText="display:none",E.appendChild(t),setTimeout(function(){t.addEventListener("playing",A,!1),e=setTimeout(A,o)},0)});var g=h.testStyles=s;Modernizr.addTest("touchevents",function(){var o;if("ontouchstart"in A||A.DocumentTouch&&e instanceof DocumentTouch)o=!0;else{var t=["@media (",R.join("touch-enabled),("),"heartz",")","{#modernizr{top:9px;position:absolute}}"].join("");g(t,function(A){o=9===A.offsetTop})}return o}),n(),a(r),delete h.addTest,delete h.addAsyncTest;for(var w=0;w<Modernizr._q.length;w++)Modernizr._q[w]();A.Modernizr=Modernizr}(window,document);

/* Object fit for IE */
/*!  - v - 2015-08-25 */!function(ELEMENT){ELEMENT.matches=ELEMENT.matches||ELEMENT.mozMatchesSelector||ELEMENT.msMatchesSelector||ELEMENT.oMatchesSelector||ELEMENT.webkitMatchesSelector||function(selector){for(var element=this,elements=(element.document||element.ownerDocument).querySelectorAll(selector),index=0;elements[index]&&elements[index]!==element;)++index;return elements[index]?!0:!1},ELEMENT.closest=ELEMENT.closest||function(selector){for(var element=this;element&&!element.matches(selector);)element=element.parentElement;return element}}(Element.prototype),function(){if("function"!=typeof window.getMatchedCSSRules){var ELEMENT_RE=/[\w-]+/g,ID_RE=/#[\w-]+/g,CLASS_RE=/\.[\w-]+/g,ATTR_RE=/\[[^\]]+\]/g,PSEUDO_CLASSES_RE=/\:(?!not)[\w-]+(\(.*\))?/g,PSEUDO_ELEMENTS_RE=/\:\:?(after|before|first-letter|first-line|selection)/g,toArray=function(list){for(var items=[],i=0,listLength=list.length;listLength>i;i++)items.push(list[i]);return items},getCSSHost=function(href){var fakeLinkOfSheet=document.createElement("a");return fakeLinkOfSheet.href=href,fakeLinkOfSheet.host},getSheetRules=function(stylesheet){var sheetHost,sheetMedia=stylesheet.media&&stylesheet.media.mediaText;if("true"==objectFit.disableCrossDomain&&(sheetHost=getCSSHost(stylesheet.href),sheetHost!==window.location.host))return[];if(stylesheet.disabled)return[];if(window.matchMedia){if(sheetMedia&&sheetMedia.length&&!window.matchMedia(sheetMedia).matches)return[]}else if(sheetMedia&&sheetMedia.length)return[];return toArray(stylesheet.cssRules)},_find=function(string,re){string.match(re);return re?re.length:0},calculateScore=function(selector){for(var part,match,score=[0,0,0],parts=selector.split(" ");part=parts.shift(),"string"==typeof part;)match=_find(part,PSEUDO_ELEMENTS_RE),score[2]=match,match&&(part=part.replace(PSEUDO_ELEMENTS_RE,"")),match=_find(part,PSEUDO_CLASSES_RE),score[1]=match,match&&(part=part.replace(PSEUDO_CLASSES_RE,"")),match=_find(part,ATTR_RE),score[1]+=match,match&&(part=part.replace(ATTR_RE,"")),match=_find(part,ID_RE),score[0]=match,match&&(part=part.replace(ID_RE,"")),match=_find(part,CLASS_RE),score[1]+=match,match&&(part=part.replace(CLASS_RE,"")),score[2]+=_find(part,ELEMENT_RE);return parseInt(score.join(""),10)},getSpecificityScore=function(element,selectorText){for(var selector,score,selectors=selectorText.split(","),result=0;selector=selectors.shift();)element.closest(selector)&&(score=calculateScore(selector),result=score>result?score:result);return result},sortBySpecificity=function(element,rules){var compareSpecificity=function(a,b){return getSpecificityScore(element,b.selectorText)-getSpecificityScore(element,a.selectorText)};return rules.sort(compareSpecificity)};window.getMatchedCSSRules=function(element){var styleSheets,sheet,rules,rule,result=[];for(styleSheets=toArray(window.document.styleSheets);sheet=styleSheets.shift();)for(rules=getSheetRules(sheet);rule=rules.shift();)rule.styleSheet?rules=getSheetRules(rule.styleSheet).concat(rules):rule.media?rules=getSheetRules(rule).concat(rules):element.closest(rule.selectorText)&&result.push(rule);return sortBySpecificity(element,result)}}}(),function(window){for(var lastTime=0,vendors=["webkit","moz"],requestAnimationFrame=window.requestAnimationFrame,cancelAnimationFrame=window.cancelAnimationFrame,i=vendors.length;--i>=0&&!requestAnimationFrame;)requestAnimationFrame=window[vendors[i]+"RequestAnimationFrame"],cancelAnimationFrame=window[vendors[i]+"CancelAnimationFrame"];requestAnimationFrame&&cancelAnimationFrame||(requestAnimationFrame=function(callback){var now=+new Date,nextTime=Math.max(lastTime+16,now);return setTimeout(function(){callback(lastTime=nextTime)},nextTime-now)},cancelAnimationFrame=clearTimeout),window.requestAnimationFrame=requestAnimationFrame,window.cancelAnimationFrame=cancelAnimationFrame}(window),function(global){"use strict";var objectFit={};objectFit._debug=!1,objectFit.observer=null,objectFit.disableCrossDomain="false",objectFit.getComputedStyle=function(element,context){return context=context||window,context.getComputedStyle?context.getComputedStyle(element,null):element.currentStyle},objectFit.getDefaultComputedStyle=function(element){var newelement=element.cloneNode(!0),styles={},iframe=document.createElement("iframe");document.body.appendChild(iframe),iframe.contentWindow.document.open(),iframe.contentWindow.document.write("<body></body>"),iframe.contentWindow.document.body.appendChild(newelement),iframe.contentWindow.document.close();var value,property,defaultElement=iframe.contentWindow.document.querySelectorAll(element.nodeName.toLowerCase())[0],defaultComputedStyle=this.getComputedStyle(defaultElement,iframe.contentWindow);for(property in defaultComputedStyle)if(value=defaultComputedStyle.getPropertyValue===!0?defaultComputedStyle.getPropertyValue(property):defaultComputedStyle[property],null!==value)switch(property){default:styles[property]=value;break;case"width":case"height":case"minWidth":case"minHeight":case"maxWidth":case"maxHeight":}return document.body.removeChild(iframe),styles},objectFit.getMatchedStyle=function(element,property){var val=null,inlineval=null;element.style.getPropertyValue?inlineval=element.style.getPropertyValue(property):element.currentStyle&&(inlineval=element.currentStyle[property]);var r,important,rules=window.getMatchedCSSRules(element),i=rules.length;if(i)for(;i-->0&&(r=rules[i],important=r.style.getPropertyPriority(property),null!==val&&!important||(val=r.style.getPropertyValue(property),!important)););return val||null===inlineval||(val=inlineval),val},objectFit.orientation=function(replacedElement){if(replacedElement.parentNode&&"x-object-fit"===replacedElement.parentNode.nodeName.toLowerCase()){var width=replacedElement.naturalWidth||replacedElement.clientWidth,height=replacedElement.naturalHeight||replacedElement.clientHeight,parentWidth=replacedElement.parentNode.clientWidth,parentHeight=replacedElement.parentNode.clientHeight;!height||width/height>parentWidth/parentHeight?"wider"!==replacedElement.getAttribute("data-x-object-relation")&&(replacedElement.setAttribute("data-x-object-relation","wider"),replacedElement.className+=" x-object-fit-wider",this._debug&&window.console&&console.log("x-object-fit-wider")):"taller"!==replacedElement.getAttribute("data-x-object-relation")&&(replacedElement.setAttribute("data-x-object-relation","taller"),replacedElement.className+=" x-object-fit-taller",this._debug&&window.console&&console.log("x-object-fit-taller"))}},objectFit.process=function(args){if(args.selector&&args.replacedElements){switch(objectFit.disableCrossDomain=args.disableCrossDomain||"false",args.fittype=args.fittype||"none",args.fittype){default:return;case"none":case"fill":case"contain":case"cover":}var replacedElements=args.replacedElements;if(replacedElements.length)for(var i=0,replacedElementsLength=replacedElements.length;replacedElementsLength>i;i++)this.processElement(replacedElements[i],args)}},objectFit.processElement=function(replacedElement,args){var property,value,replacedElementStyles=objectFit.getComputedStyle(replacedElement),replacedElementDefaultStyles=objectFit.getDefaultComputedStyle(replacedElement),wrapperElement=document.createElement("x-object-fit");objectFit._debug&&window.console&&console.log("Applying to WRAPPER-------------------------------------------------------");for(property in replacedElementStyles)switch(property){default:value=objectFit.getMatchedStyle(replacedElement,property),null!==value&&""!==value&&(objectFit._debug&&window.console&&console.log(property+": "+value),wrapperElement.style[property]=value);break;case"length":case"parentRule":}objectFit._debug&&window.console&&console.log("Applying to REPLACED ELEMENT-------------------------------------------------------");for(property in replacedElementDefaultStyles)switch(property){default:value=replacedElementDefaultStyles[property],objectFit._debug&&window.console&&""!==value&&(console.log(property+": "+value),void 0===replacedElement.style[property]&&console.log("Indexed style properties (`"+property+"`) not supported in: "+window.navigator.userAgent)),replacedElement.style[property]?replacedElement.style[property]=value:replacedElement.style.property=value;break;case"length":case"parentRule":}wrapperElement.setAttribute("class","x-object-fit-"+args.fittype),replacedElement.parentNode.insertBefore(wrapperElement,replacedElement),wrapperElement.appendChild(replacedElement),objectFit.orientation(replacedElement);var resizeTimer=null,resizeAction=function(){null!==resizeTimer&&window.cancelAnimationFrame(resizeTimer),resizeTimer=window.requestAnimationFrame(function(){objectFit.orientation(replacedElement)})};switch(args.fittype){default:break;case"contain":case"cover":window.addEventListener?(replacedElement.addEventListener("load",resizeAction,!1),window.addEventListener("resize",resizeAction,!1),window.addEventListener("orientationchange",resizeAction,!1)):(replacedElement.attachEvent("onload",resizeAction),window.attachEvent("onresize",resizeAction))}},objectFit.listen=function(args){var domInsertedAction=function(element){for(var i=0,argsLength=args.length;argsLength>i;i++)(element.mozMatchesSelector&&element.mozMatchesSelector(args[i].selector)||element.msMatchesSelector&&element.msMatchesSelector(args[i].selector)||element.oMatchesSelector&&element.oMatchesSelector(args[i].selector)||element.webkitMatchesSelector&&element.webkitMatchesSelector(args[i].selector))&&(args[i].replacedElements=[element],objectFit.process(args[i]),objectFit._debug&&window.console&&console.log("Matching node inserted: "+element.nodeName))},domInsertedObserverFunction=function(element){objectFit.observer.disconnect(),domInsertedAction(element),objectFit.observer.observe(document.documentElement,{childList:!0,subtree:!0})},domInsertedEventFunction=function(event){window.removeEventListener("DOMNodeInserted",domInsertedEventFunction,!1),domInsertedAction(event.target),window.addEventListener("DOMNodeInserted",domInsertedEventFunction,!1)},domRemovedAction=function(element){"x-object-fit"===element.nodeName.toLowerCase()&&(element.parentNode.removeChild(element),objectFit._debug&&window.console&&console.log("Matching node removed: "+element.nodeName))},domRemovedObserverFunction=function(element){objectFit.observer.disconnect(),domRemovedAction(element),objectFit.observer.observe(document.documentElement,{childList:!0,subtree:!0})},domRemovedEventFunction=function(event){window.removeEventListener("DOMNodeRemoved",domRemovedEventFunction,!1),domRemovedAction(event.target.parentNode),window.addEventListener("DOMNodeRemoved",domRemovedEventFunction,!1)};window.MutationObserver?(objectFit._debug&&window.console&&console.log("DOM MutationObserver"),this.observer=new MutationObserver(function(mutations){mutations.forEach(function(mutation){if(mutation.addedNodes&&mutation.addedNodes.length)for(var nodes=mutation.addedNodes,i=0,nodesLength=nodes.length;nodesLength>i;i++)domInsertedObserverFunction(nodes[i]);mutation.removedNodes&&mutation.removedNodes.length&&domRemovedObserverFunction(mutation.target)})}),this.observer.observe(document.documentElement,{childList:!0,subtree:!0})):window.addEventListener&&(objectFit._debug&&window.console&&console.log("DOM Mutation Events"),window.addEventListener("DOMNodeInserted",domInsertedEventFunction,!1),window.addEventListener("DOMNodeRemoved",domRemovedEventFunction,!1))},objectFit.init=function(args){if(args){args instanceof Array||(args=[args]);for(var i=0,argsLength=args.length;argsLength>i;i++)args[i].replacedElements=document.querySelectorAll(args[i].selector),this.process(args[i]);this.listen(args)}},objectFit.polyfill=function(args){"objectFit"in document.documentElement.style==!1?(objectFit._debug&&window.console&&console.log("object-fit not natively supported"),"complete"===document.readyState?objectFit.init(args):window.addEventListener?window.addEventListener("load",function(){objectFit.init(args)},!1):window.attachEvent("onload",function(){objectFit.init(args)})):objectFit._debug&&window.console&&console.log("object-fit natively supported")},"object"==typeof module&&module&&"object"==typeof module.exports?module.exports=objectFit:"function"==typeof define&&define.amd?define([],function(){return objectFit}):"object"==typeof global&&"object"==typeof global.document&&(global.objectFit=objectFit)}(window);

// window.onload = function(){
//
// }

if(document.getElementById('page_404')){
	var videoToGet = Math.floor((Math.random() * 7 + 1));
	var gorillaSrc = '';
	var posterGorilla = window.directoryURI + '/images/404/gorilla_poster_' + videoToGet + '.jpg';
	switch(videoToGet) {
		case 1:
			var gorillaSrc = "https://player.vimeo.com/external/145886208.hd.mp4?s=3788db7c62a0ffaf53f237112f17fee38c7b617e&profile_id=113";
	   	break;
		case 2:
			var gorillaSrc = "https://player.vimeo.com/external/145886198.hd.mp4?s=f2a4b7651ce4c251713018af44d9f9be8f728277&profile_id=113";
		break;
		case 3:
			var gorillaSrc = "https://player.vimeo.com/external/145886197.hd.mp4?s=d86fe3331ce8d5da4086d84222ea89babd0f743c&profile_id=113";
		break;
		case 4:
			var gorillaSrc = "https://player.vimeo.com/external/145886196.hd.mp4?s=fd1b935cf759f6dcfb60ca383674b3f269199589&profile_id=113";
		break;
		case 5:
			var gorillaSrc = "https://player.vimeo.com/external/145886195.hd.mp4?s=53c1bfc33fd1ec4f525d215743663b612156a8d7&profile_id=113";
		break;
		case 6:
			var gorillaSrc = "https://player.vimeo.com/external/145886193.hd.mp4?s=a1998f8f792c3158bb2d990b90b8509a06473420&profile_id=113";
		break;
		case 7:
			var gorillaSrc = "https://player.vimeo.com/external/145886194.hd.mp4?s=ec06bb801839ce68f9734583eb72f7f53b70d53d&profile_id=113";
		break;
		default:
			//do nothing
		break;
	}
	videojs("header-video-player").src(gorillaSrc);
	videojs("header-video-player").poster(posterGorilla);
}

document.addEventListener("DOMContentLoaded", function(event) {

	if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
		document.body.setAttribute("class","loaded safari");

		if(document.getElementById('video-overlay')) {

			Modernizr.on('videoautoplay', function(result){
				console.log('Video Autoplay result: ' + result)

				if(!result) {

					videojs("header-video-player").ready(function(){
						var myPlayer = this;
						myPlayer.pause();

						if(document.getElementsByTagName('header')){
							var theHeader = document.getElementsByTagName('header');
							var headerID = theHeader[0].getAttribute('ID');
							// jQuery('#header-play').hide();
							jQuery('.header-text').hide();
						}


						if(document.getElementById('header-play')){
							var playButton = document.getElementById('header-play');

							playButton.addEventListener('click', function(){
								jQuery('.container--header').hide();
								// myPlayer.requestFullscreen();
								myPlayer.play();
							});
						}

						switch (headerID) {
							//work-page
							case "page_barclays_integrity":
								myPlayer.src("https://player.vimeo.com/external/141174440.hd.mp4?s=4f32dd0a8cda06b1dfa13e74d2fc5abf&profile_id=113");
								//myPlayer.src("https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113");
							break;

							case "page_barclays_values":
								myPlayer.src("https://player.vimeo.com/external/139330733.hd.mp4?s=cd31cd725d1122faa95cf8242d677c3e&profile_id=113");
								// myPlayer.src("https://player.vimeo.com/external/88791766.hd.mp4?s=01c82c0c307c791f78f402a0b264fbf0&profile_id=113");
							break;

							case "bp-fll":
								myPlayer.src("https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113");
							break;

							case "page_bp_fll_stories":
								myPlayer.src("https://player.vimeo.com/external/139330951.hd.mp4?s=3d1c83178ba678c46e7f01baebb21bff&profile_id=113");
								//myPlayer.src("https://player.vimeo.com/external/141101947.hd.mp4?s=cd503eb677f03e6164bee57bccb92c1c&profile_id=113");
							break;

							case "page_discover_bp":
								myPlayer.src("https://player.vimeo.com/external/141529090.hd.mp4?s=9319fb63f3d31c680a7ccc8dea210503&profile_id=113");
								// myPlayer.src("https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113");
							break;

							case "page_gfk":
								myPlayer.src("https://player.vimeo.com/external/140667746.hd.mp4?s=65dbf2593c9f3bed0c770c497eda1964&profile_id=113");
								//myPlayer.src("https://player.vimeo.com/external/109216250.hd.mp4?s=4554075b1bbddc5346e47acad348d420&profile_id=113");
							break;

							case "page_legacy":
								myPlayer.src("https://player.vimeo.com/external/66887877.hd.mp4?s=fdc4231994bcacbc95927f1ab19b489890fe327e&profile_id=113");
							break;

							case "page_reliace":
								myPlayer.src("https://player.vimeo.com/external/131908894.hd.mp4?s=644b8069e39833f3c9d1c401fe31b190&profile_id=113");
							break;

							case "page_sdnpa":
								myPlayer.src("https://player.vimeo.com/external/141048772.hd.mp4?s=9410c4302324a7d77893874178f3ec83&profile_id=113");
								// myPlayer.src("https://player.vimeo.com/external/89417008.hd.mp4?s=b970f0c992ca4f0299fe30801dd6fe08&profile_id=113");
							break;

							case "page_take_the_lead":
								myPlayer.src("https://player.vimeo.com/external/139331070.hd.mp4?s=b2d4b3506fa6f57cee7b8cf917f32298&profile_id=113");
								// myPlayer.src("https://player.vimeo.com/external/94658351.hd.mp4?s=4dd1fa0e776ac4e2ada6b0fbbb81363e&profile_id=113");
							break;

							case "work_page":
								myPlayer.src("https://player.vimeo.com/external/141548149.hd.mp4?s=c38947ea65f3bad06d05e9881fe92ead&profile_id=113");
								// myPlayer.src("https://player.vimeo.com/external/139889786.hd.mp4?s=d9fe82039d4d8929cc0eeb62741a8bed&profile_id=113");
							break;

							case "page_404":
								myPlayer.src("https://player.vimeo.com/external/145886748.hd.mp4?s=292e3a5fb013706f99d5b94470ac19c92af3c199&profile_id=113");
							break;

							default:
						}


					});

				}

			});

		}

	} else {

		document.body.setAttribute("class","loaded");

		if(document.getElementById('video-overlay')) {

			Modernizr.on('videoautoplay', function(result){

				if(!result) {

					autoPlay = true;

					videojs("header-video-player").ready(function(){
						var myPlayer = this;
						myPlayer.pause();

						var theHeader = document.getElementsByTagName('header');
						var headerID = theHeader[0].getAttribute('ID');
						jQuery('#header-play').hide();
						jQuery('.header-text').hide();

					switch (headerID) {
						//work-page
						case "page_barclays_integrity":
							myPlayer.src("https://player.vimeo.com/external/141174440.hd.mp4?s=4f32dd0a8cda06b1dfa13e74d2fc5abf&profile_id=113");
							//myPlayer.src("https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113");
						break;

						case "page_barclays_values":
							myPlayer.src("https://player.vimeo.com/external/139330733.hd.mp4?s=cd31cd725d1122faa95cf8242d677c3e&profile_id=113");
							// myPlayer.src("https://player.vimeo.com/external/88791766.hd.mp4?s=01c82c0c307c791f78f402a0b264fbf0&profile_id=113");
						break;

						case "bp-fll":
							myPlayer.src("https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113");
						break;

						case "page_bp_fll_stories":
							myPlayer.src("https://player.vimeo.com/external/139330951.hd.mp4?s=3d1c83178ba678c46e7f01baebb21bff&profile_id=113");
							//myPlayer.src("https://player.vimeo.com/external/141101947.hd.mp4?s=cd503eb677f03e6164bee57bccb92c1c&profile_id=113");
						break;

						case "page_discover_bp":
							myPlayer.src("https://player.vimeo.com/external/141529090.hd.mp4?s=9319fb63f3d31c680a7ccc8dea210503&profile_id=113");
							// myPlayer.src("https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113");
						break;

						case "page_gfk":
							myPlayer.src("https://player.vimeo.com/external/140667746.hd.mp4?s=65dbf2593c9f3bed0c770c497eda1964&profile_id=113");
							//myPlayer.src("https://player.vimeo.com/external/109216250.hd.mp4?s=4554075b1bbddc5346e47acad348d420&profile_id=113");
						break;

						case "page_legacy":
							myPlayer.src("https://player.vimeo.com/external/66887877.hd.mp4?s=fdc4231994bcacbc95927f1ab19b489890fe327e&profile_id=113");
						break;

						case "page_reliace":
							myPlayer.src("https://player.vimeo.com/external/131908894.hd.mp4?s=644b8069e39833f3c9d1c401fe31b190&profile_id=113");
						break;

						case "page_sdnpa":
							myPlayer.src("https://player.vimeo.com/external/141048772.hd.mp4?s=9410c4302324a7d77893874178f3ec83&profile_id=113");
							// myPlayer.src("https://player.vimeo.com/external/89417008.hd.mp4?s=b970f0c992ca4f0299fe30801dd6fe08&profile_id=113");
						break;

						case "page_take_the_lead":
							myPlayer.src("https://player.vimeo.com/external/139331070.hd.mp4?s=b2d4b3506fa6f57cee7b8cf917f32298&profile_id=113");
							// myPlayer.src("https://player.vimeo.com/external/94658351.hd.mp4?s=4dd1fa0e776ac4e2ada6b0fbbb81363e&profile_id=113");
						break;

						case "work_page":
							myPlayer.src("https://player.vimeo.com/external/141548149.hd.mp4?s=c38947ea65f3bad06d05e9881fe92ead&profile_id=113");
							// myPlayer.src("https://player.vimeo.com/external/139889786.hd.mp4?s=d9fe82039d4d8929cc0eeb62741a8bed&profile_id=113");
						break;

						case "page_404":
							myPlayer.src("https://player.vimeo.com/external/145886748.hd.mp4?s=292e3a5fb013706f99d5b94470ac19c92af3c199&profile_id=113");
						break;

						default:
							// do nothing
					}

					});

				}
			});
		}

	}







});

var getClosest = function (elem, selector) {
    var firstChar = selector.charAt(0);
    // Get closest match
    for ( ; elem && elem !== document; elem = elem.parentNode ) {
        // If selector is a class
        if ( firstChar === '.' ) {
            if ( elem.classList.contains( selector.substr(1) ) ) {
                return elem;
            }
        }
        // If selector is an ID
        if ( firstChar === '#' ) {
            if ( elem.id === selector.substr(1) ) {
                return elem;
            }
        }
        // If selector is a data attribute
        if ( firstChar === '[' ) {
            if ( elem.hasAttribute( selector.substr(1, selector.length - 2) ) ) {
                return elem;
            }
        }
        // If selector is a tag
        if ( elem.tagName.toLowerCase() === selector ) {
            return elem;
        }
    }

    return false;
};

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
var carouselControls = document.getElementsByClassName('carousel-control');

// Loop through all the controls and add a click handler to all of them.
for (var iterator = 0; iterator < carouselControls.length; iterator++){
    var carouselControl = carouselControls[iterator];
    carouselControl.onclick = function (){
        //grab the ID from the carousel control
		var controlsHolder = this.parentNode;
		var imagesHolder = controlsHolder.previousElementSibling;
		var carouselImages = imagesHolder.children;
		var theseControls = controlsHolder.children;
        var imageToShow = this.getAttribute('ID').slice(-1);

        //Target the image with the matching ID and expand it while hiding all the others
        for(var iterator2 = 0; iterator2 < carouselImages.length; iterator2++){
            carouselImage = carouselImages[iterator2];
            carouselImage.style.height = 0;
			theseControls[iterator2].classList.remove("selected");
        }
        document.getElementById('carousel-image-' + imageToShow).style.height = '100%';
        this.classList.add('selected');
    }
}


/**
* HEADER VIDEO FUNCTION
*
*/
if(document.getElementById('header-video-player')){ // if has header video

    var myPlayer =  videojs('header-video-player'); // create video player

		if(document.getElementById('header-play')){ // if video player
			myPlayer.on("progress", function() {
				if(myPlayer.bufferedPercent()>.3){
					myPlayer.removeClass('vjs-waiting');
					document.getElementById('header-play').classList.add('video-ready');
					myPlayer.play();
				} else {
					myPlayer.addClass('vjs-waiting');
				}
			}, false);

			// myPlayer.ready(function(){
			// 	document.getElementById('header-play').classList.add('video-ready');
			// }, true);
		}

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
				var clipVideoSrc = "https://player.vimeo.com/external/139330733.hd.mp4?s=cd31cd725d1122faa95cf8242d677c3e&profile_id=113";
				var fullVideoSrc = "https://player.vimeo.com/external/88791766.hd.mp4?s=01c82c0c307c791f78f402a0b264fbf0&profile_id=113";
			break;

			case "bp-fll":
				var clipVideoSrc = "https://player.vimeo.com/external/140671448.sd.mp4?s=4c8fa29917b77e5bf2cabc4ef37ff99c&profile_id=112";
				var fullVideoSrc = "https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113";
			break;

			case "page_bp_fll_stories":
				var clipVideoSrc = "https://player.vimeo.com/external/139330951.hd.mp4?s=3d1c83178ba678c46e7f01baebb21bff&profile_id=113";
				var fullVideoSrc = "https://player.vimeo.com/external/141101947.hd.mp4?s=cd503eb677f03e6164bee57bccb92c1c&profile_id=113";
			break;

			case "page_discover_bp":
				var clipVideoSrc = "https://player.vimeo.com/external/140671448.sd.mp4?s=4c8fa29917b77e5bf2cabc4ef37ff99c&profile_id=112";
				var fullVideoSrc = "https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113";
			break;

			case "page_gfk":
				var clipVideoSrc = "https://player.vimeo.com/external/140667746.hd.mp4?s=65dbf2593c9f3bed0c770c497eda1964&profile_id=113";
				var fullVideoSrc = "https://player.vimeo.com/external/109216250.hd.mp4?s=4554075b1bbddc5346e47acad348d420&profile_id=113";
			break;

			case "page_legacy":
				var clipVideoSrc = "https://player.vimeo.com/external/140664772.hd.mp4?s=916c756982174f097892598f2bf7d363&profile_id=113";
				var fullVideoSrc = "https://player.vimeo.com/external/66887877.hd.mp4?s=fdc4231994bcacbc95927f1ab19b489890fe327e&profile_id=113";
			break;

			case "page_reliace":
				var clipVideoSrc = "https://player.vimeo.com/external/139331071.hd.mp4?s=9d1090404ff15a8fba76c4e4c46c2a5f&profile_id=113";
				var fullVideoSrc = "https://player.vimeo.com/external/131908894.hd.mp4?s=644b8069e39833f3c9d1c401fe31b190&profile_id=113";
			break;

			case "page_sdnpa":
				var clipVideoSrc = "https://player.vimeo.com/external/141048772.hd.mp4?s=9410c4302324a7d77893874178f3ec83&profile_id=113";
				var fullVideoSrc = "https://player.vimeo.com/external/89417008.hd.mp4?s=b970f0c992ca4f0299fe30801dd6fe08&profile_id=113";
			break;

			case "page_take_the_lead":
				var clipVideoSrc = "https://player.vimeo.com/external/139331070.hd.mp4?s=b2d4b3506fa6f57cee7b8cf917f32298&profile_id=113";
				var fullVideoSrc = "https://player.vimeo.com/external/94658351.hd.mp4?s=4dd1fa0e776ac4e2ada6b0fbbb81363e&profile_id=113";
			break;

			case "work_page":
				var clipVideoSrc = "https://player.vimeo.com/external/141548149.hd.mp4?s=c38947ea65f3bad06d05e9881fe92ead&profile_id=113";
				var fullVideoSrc = "https://player.vimeo.com/external/139889786.hd.mp4?s=d9fe82039d4d8929cc0eeb62741a8bed&profile_id=113";
			break;

			default:
				// do nothing
		}

		Modernizr.on('touchevents', function(result){
			if(result === false){
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
			}
		});


	if(document.getElementById('overlay-video')){
	    var videoOverlay = videojs('overlay-video');

		Modernizr.on('videoautoplay', function(result){
			console.log('in here');
			if(!result) {
				if(document.getElementById('header-play')){
					var videoPlayButton = document.getElementById('header-play');
					videoPlayButton.addEventListener('click', function(){
						videoOverlay.play();
						videoOverlay.requestFullscreen();
					});
				}

			} else {
				videoOverlay.requestFullscreen(function(){
					return false;
				});
			}
		});



	    document.getElementById('video-overlay-close').addEventListener('click', function(){
	        document.getElementById('video-overlay').style.display = "none";
	        videoOverlay.pause();

			if(jQuery('.container--header')){
				jQuery('.container--header').show();
			}


	        myPlayer.play();


			document.getElementById('tilt--logo').style.display = 'block';
	        document.getElementById('menuButton').style.display = 'block';

			if(document.getElementById('wordButton')){
				if(document.getElementById('workButton').style.display != null) {
				   document.getElementById('workButton').style.display = 'block';
				}
			}



	    });
	}

	if(document.getElementById('header-play')){
	    document.getElementById('header-play').addEventListener('click', function(){
	            myPlayer.ready(function(){
	                if(videoOverlay.currentSrc() === "https://player.vimeo.com/external/141548149.hd.mp4?s=c38947ea65f3bad06d05e9881fe92ead&profile_id=113"){
	                    videoOverlay.src(fullVideoSrc);
	                }
	                videoOverlay.play();
	                myPlayer.pause();
	                document.getElementById('video-overlay').style.display = 'block';

					document.getElementById('tilt--logo').style.display = 'none';
					document.getElementById('menuButton').style.display = 'none';


					if(document.getElementById('wordButton')){
						if(document.getElementById('workButton').style.display != null) {
						   document.getElementById('workButton').style.display = 'block';
						}
					}
	            });
	    });
	}
}

if(document.getElementsByClassName('page-video')){
	var pageVideos = document.getElementsByClassName('page-video');

	for(var iterator8 = 0; iterator8 < pageVideos.length; iterator8 ++){
		videojs(pageVideos[iterator8]);
	}
}

var menuButton = document.getElementById('menuButton');
var pageMenu = document.getElementById('pageMenu');
var closeButton = document.getElementById('closeButton');
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
var inputsParent;
var inputsParentPosition;
var inputPosition;
var newFunkyBorderHeight;
var funkyBorder;
var funkyBorderToChange;
var formHolders;
var formBorders;
var doc = document.documentElement;

menuButton.onclick = function(){


    /*
[].map.call(document.querySelectorAll('.wrapper'), function(el){
        el.classList.toggle('wrapper--navved');
    });
*/

	jQuery('#menuButton').fadeOut(500,function(){
		jQuery('#closeButton').fadeIn(500);
	});


    pageMenu.style.visibility = 'inherit';
    pageMenu.style.opacity = 0.98;
    pageMenu.style.transform = "scale(1, 1)";
    document.getElementById('footer').style.display = 'none';

    if(document.getElementById('header-video-player')){
        myPlayer.pause();
    }

    if(document.getElementById('workButton')){
	    jQuery('#workButton').fadeOut();
    }

}

closeButton.onclick = function(){

	/*
[].map.call(document.querySelectorAll('.wrapper'), function(el){
        el.classList.toggle('wrapper--navved');
    });
*/

	jQuery('#closeButton').fadeOut(500,function(){
		jQuery('#menuButton').fadeIn(500);

		 if(document.getElementById('workButton')){
	    	jQuery('#workButton').fadeIn(500);
		 }

	});

	 pageMenu.style.opacity = '0'
        setTimeout(function(){
            pageMenu.style.visibility = 'hidden';
        },300);
        pageMenu.style.transform = "scale(1.5, 1.5)";
        document.getElementById('footer').style.display = 'block';

        if(document.getElementById('header-video-player')){
            myPlayer.play();
        }

}


var videoFunction = '';

if(document.getElementById('staff-member')){

	var lookUpStaffMember = function(staffMember){
	    return staffData[staffMember];
	}

	var fadeInStaffInfo = function(staffObject){
	    document.getElementById('staff-member__info').style.opacity = '1';
	    document.getElementById('staff-member__wrapper').style.opacity = '1';
	    document.getElementById('staff-member__wrapper').style.backgroundImage = 'url(' + window.directoryURI + '/' + staffObject.image + ')';
	    document.getElementById('staff-member__close').style.opacity = '1';


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

	var staff = document.getElementsByClassName('module--staff');

    for (var iterator3 = 0; iterator3 < staff.length; iterator3++){
        staffMember = staff[iterator3];

		staffMember.onclick = function (){
			var rect = this.getBoundingClientRect();
			var staffMemberInfo = this.getAttribute('ID');
			this.classList.add('module--selected');
		}

		var staffMemberID = 'Staff-' + (iterator3 + 1);
		var staffVideoSrc;
		var staffFullScreenVid;
		var videoIWant;

        //Some closure magic to get this working. - MT
		//I came back to this comment...It was not helpful... - MT



        (function(){
            staffMember.addEventListener('mouseenter', function(event){
				var that = this;
				var thisStaffID = that.id;
				switch (thisStaffID) {
					//work-page
					case "staff-1":
						staffVideoSrc = "https://player.vimeo.com/external/140403279.sd.mp4?s=5c6b2cbfb2ef0f48e4d4c2d7a2c3656a&profile_id=112";
					break;

					case "staff-2":
						staffVideoSrc = "https://player.vimeo.com/external/140403284.sd.mp4?s=09bc9929175c10c46ec8fb7dc62a119b&profile_id=112";
					break;

					case "staff-3":
						staffVideoSrc = "https://player.vimeo.com/external/140403285.sd.mp4?s=1c80332d3883f4581f7a584c83826da7&profile_id=112";
					break;

					case "staff-4":
						staffVideoSrc = "https://player.vimeo.com/external/140403277.sd.mp4?s=29c1365532165fa7c8d7138eec8e163c&profile_id=112";
					break;

					case "staff-5":
						staffVideoSrc = "https://player.vimeo.com/external/140403273.sd.mp4?s=91b80135b2f7602578df0f11bd9b8e18&profile_id=112";
					break;

					case "staff-6":
						staffVideoSrc = "https://player.vimeo.com/external/140403276.sd.mp4?s=ea179e3f47a824b0c5f4868ff97393aa&profile_id=112";
					break;

					case "staff-7":
						staffVideoSrc = "https://player.vimeo.com/external/140403270.sd.mp4?s=0206047835fecf68feef275f56b33cef&profile_id=112";
					break;

					case "staff-8":
						staffVideoSrc = "https://player.vimeo.com/external/140403275.sd.mp4?s=1eb2bc24302d7fc2a8ab2993feab5586&profile_id=112";
					break;

					case "staff-9":
						staffVideoSrc = "https://player.vimeo.com/external/140403281.sd.mp4?s=35498172b93da64e3aa8d15a894cafa6&profile_id=112";
					break;

					case "staff-10":
						staffVideoSrc = "https://player.vimeo.com/external/140403288.sd.mp4?s=eb9ce38ce409022ac660aac48376a250&profile_id=112";
					break;

					case "staff-11":
						staffVideoSrc = "https://player.vimeo.com/external/140403296.sd.mp4?s=f1f19de8ff8f3870ac0fde5132f4fad9&profile_id=112";
					break;

					case "staff-12":
						staffVideoSrc = "https://player.vimeo.com/external/140403294.sd.mp4?s=b27782cf9097d798e9956d3e4285a205&profile_id=112";
					break;

					case "staff-13":
						staffVideoSrc = "https://player.vimeo.com/external/140403278.sd.mp4?s=87cf89bfeb39d10c65e49d88de1b1cbd&profile_id=112";
					break;

					case "staff-14":
						staffVideoSrc = "https://player.vimeo.com/external/140403289.sd.mp4?s=f04cff5c4ee7456ece6f61632d6fdef1&profile_id=112";
					break;

					case "staff-15":
						staffVideoSrc = "https://player.vimeo.com/external/142259886.hd.mp4?s=fa9b8c7acd96993ed4a8eec0475f786e&profile_id=113";
					break;

					case "staff-16":
						staffVideoSrc = "https://player.vimeo.com/external/140403290.sd.mp4?s=0e1e564e06cc5b284c190a8b0d20791e&profile_id=112";
					break;

					case "staff-17":
						staffVideoSrc = "https://player.vimeo.com/external/140403272.sd.mp4?s=3bcc352281b93bbd8fc66df067156493&profile_id=112";
					break;

					case "staff-18":
						staffVideoSrc = "https://player.vimeo.com/external/140403274.sd.mp4?s=f7ea813281b01caf596bfb5c00adca74&profile_id=112";
					break;

					case "staff-19":
						staffVideoSrc = "https://player.vimeo.com/external/140403271.sd.mp4?s=541308d08653d1fb132ab55203ce4e82&profile_id=112";
					break;

					case "staff-20":
						staffVideoSrc = "https://player.vimeo.com/external/140403295.sd.mp4?s=b1daa0f944cda8009b47296f821189cd&profile_id=112";
					break;

					case "staff-21":
						staffVideoSrc = "https://player.vimeo.com/external/140403286.sd.mp4?s=6af207b741e9c1b261384d91132861c1&profile_id=112";
					break;

					default:
						// do nothing
				}
					// console.log('Mouse has entered');
					videoFunction = setTimeout(function(){
						if(!that.children[1]){
							if(isChrome){
								document.getElementById(thisStaffID).innerHTML += '<div class="ratio"><video poster="' + window.directoryURI + '/images/staff/about_' + thisStaffID + '.jpg" muted="true"><source src="' + staffVideoSrc + '" type="video/mp4"></video></div>';
							} else{
								document.getElementById(thisStaffID).innerHTML += '<div class="ratio"><video muted="true"><source src="' + staffVideoSrc + '" type="video/mp4"></video></div>';
							}
						}
							var ratio2 = that.children[1];
							var video2 = ratio2.children[0];
							videoIWant = video2;
	                    	videoIWant.play();
							videoIWant.addEventListener('ended', function(){
								this.currentTime = 0;
							});
						}, 100);

            });

            staffMember.addEventListener('mouseleave', function(event, video){
					// console.log("Mouse has exited");
					clearTimeout(videoFunction);
					// console.log(videoIWant);
					//videoIWant.pause();
            });
        })();

        staffBoxClose = document.getElementById('staff-member__close');

        staffMember.onclick = function (){

			// staff members
            staffMember = this.id;

			// check screen size
			var width = $( window ).width();

			if (width > 1024) {
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
	            staffBox.style.backgroundColor = '#ff4c74';
	            staffBox.style.zIndex = '6';
				document.getElementById('blahblahblah').innerHTML = '<div class="module module--video module--visible module--no-zoom" style="position: absolute; z-index: 6; width: 100%; height: 100%;"><div class="ratio"><video autoplay muted="true"><source src="' + staffFullScreenVid + '" type="video/mp4"></video></div></div>';

	            setTimeout(function(){
					console.log('Hello');
	                staffBox.style.transition = "all 0.5s ease";



	                populateAndSizeStaffInfo(staffBox, staffObject);
	            }, 500);

	            setTimeout(function(){
	                fadeInStaffInfo(staffObject);
	            }, 1050);

			} else { // if screen is mobile

			}

	    }

		staffBoxClose.onclick = function(){
			document.getElementById('staff-member__wrapper').style.opacity = '0';
			document.getElementById('staff-member__info').style.opacity = '0';
			document.getElementById('staff-member__close').style.opacity = '0';
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


jQuery(document).ready(function(){

	if(document.getElementById('work_all')){

		if(window.location.hash) {

			$('html, body').animate({scrollTop: $('#scroll_point').offset().top }, 'slow');

			[].map.call(document.querySelectorAll('.work-container'), function(el3){
                el3.style.opacity = 0;
                el3.style.display = 'none';
            });

            resetClass();

            if(window.location.hash == '#motion') {

	            document.getElementById('motion').style.opacity = 1;
                document.getElementById('motion').style.display = 'block';
                document.getElementById('work_motion').className = 'work-item--selected work-item-title';

            } else if(window.location.hash == '#film') {

	            document.getElementById('film').style.opacity = 1;
                document.getElementById('film').style.display = 'block';
                document.getElementById('work_film').className = 'work-item--selected work-item-title';

            } else if(window.location.hash == '#web') {

	            document.getElementById('web').style.opacity = 1;
                document.getElementById('web').style.display = 'block';
                document.getElementById('work_web').className = 'work-item--selected work-item-title';

            } else if(window.location.hash == '#interactive') {

	            document.getElementById('interactive').style.opacity = 1;
                document.getElementById('interactive').style.display = 'block';
                document.getElementById('work_interactive').className = 'work-item--selected work-item-title';

            }

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


if(document.getElementById('work_all')){


    [].map.call(document.querySelectorAll('.work-item-title'), function(el){
        el.onclick = function(){
                itemsToShow = el.id;
                itemsToShow = itemsToShow.slice(5);
                [].map.call(document.querySelectorAll('.work-container'), function(el3){
                    el3.style.opacity = 0;
                    el3.style.display = 'none';
                });

				resetClass();

				document.getElementById('work_' + itemsToShow).className = 'work-item--selected work-item-title';

                if(itemsToShow === 'all'){

                    [].map.call(document.querySelectorAll('.work-container'), function(el3){
                        el3.style.opacity = 1;
                        el3.style.display = 'block';
                    });

                    $('html, body').animate({scrollTop: $('#scroll_point').offset().top }, 'slow');


                } else {

                	$('html, body').animate({scrollTop: $('#scroll_point').offset().top }, 'slow');

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

function resetClass() {
	document.getElementById('work_all').className = 'work-item-title';
	document.getElementById('work_film').className = 'work-item-title';
	document.getElementById('work_interactive').className = 'work-item-title';
	document.getElementById('work_motion').className = 'work-item-title';
	document.getElementById('work_web').className = 'work-item-title';

}

var controlContactBorder = function(inputClicked, borderToChange){
	inputsParentPosition = inputsParent.getBoundingClientRect();
	inputPosition = inputClicked.getBoundingClientRect();
	newFunkyBorderHeight = inputPosition.top - inputsParentPosition.top + inputPosition.height;
	funkyBorder = 'funky-border-' + borderToChange;
	funkyBorderToChange = document.getElementById(funkyBorder);
	funkyBorderToChange.style.height = newFunkyBorderHeight + "px";
}

var handleBorderTiming = function(inputsParent){
	var borderID = inputsParent.id.slice(-1);
	var borderToSelect = "funky-border-" + borderID;
	var borderToAffect = document.getElementById(borderToSelect);

	if(inputsParent.classList.contains('inUse')){
		borderToAffect.style.transitionDelay = '0s';
	} else {
		for(var iterator7 = 0; iterator7 < formHolders.length; iterator7++){
			formHolders[iterator7].classList.remove('inUse');
			formBorders[iterator7].style.transitionDelay = '0s';
		}
		inputsParent.classList.add('inUse');
		borderToAffect.style.transitionDelay = '0.2s';
	}
}

var completeBorder = function(inputsParent){
	if(inputsParent.id === "form-holder-1"){
			handleBorderTiming(inputsParent);
		for(var iterator6 = 0; iterator6 < formHolders.length; iterator6++){
			formHolders[0].parentNode.style.borderTop = '1px solid #5e5e5e';
			setTimeout(function(){
				formHolders[1].parentNode.style.borderTop = 'none';
				formHolders[2].parentNode.style.borderTop = 'none';
				formHolders[0].parentNode.classList.remove('contact-form__fieldset--completed');
				formHolders[1].parentNode.classList.remove('contact-form__fieldset--completed');
				formHolders[2].parentNode.classList.remove('contact-form__fieldset--completed');
			}, 200);
			formBorders[iterator6].style.height = '0px';
		}
	} else if(inputsParent.id === "form-holder-2"){
		handleBorderTiming(inputsParent);
		document.getElementById('funky-border-1').style.height = '100%';
		document.getElementById('funky-border-3').style.height = '0%';
		setTimeout(function(){
			formHolders[0].parentNode.style.borderTop = '1px solid #5e5e5e';
			formHolders[1].parentNode.style.borderTop = '1px solid #5e5e5e';
			formHolders[2].parentNode.style.borderTop = 'none';
			formHolders[0].parentNode.classList.add('contact-form__fieldset--completed');
			formHolders[1].parentNode.classList.remove('contact-form__fieldset--completed');
			formHolders[2].parentNode.classList.remove('contact-form__fieldset--completed');
		}, 200);

	} else if(inputsParent.id === "form-holder-3"){
		handleBorderTiming(inputsParent);
		document.getElementById('funky-border-1').style.height = '100%';
		document.getElementById('funky-border-2').style.height = '100%';
		setTimeout(function(){
			formHolders[0].parentNode.style.borderTop = '1px solid #5e5e5e';
			formHolders[1].parentNode.style.borderTop = '1px solid #5e5e5e';
			formHolders[2].parentNode.style.borderTop = '1px solid #5e5e5e';
			formHolders[0].parentNode.classList.add('contact-form__fieldset--completed');
			formHolders[1].parentNode.classList.add('contact-form__fieldset--completed');
		}, 200);

	}
}

if(document.getElementById('contact-form')){

	var worksheetButtonOpen = document.getElementById('form_open');
	var worksheetButtonClose = document.getElementById('form_close');
	var inputs = document.getElementsByClassName('contact-form__input');
		formHolders = document.getElementsByClassName('form-info-holder');
		formBorders = document.getElementsByClassName('funky-border-shizz');

	for (var iterator5 = 0; iterator5 < inputs.length; iterator5++){
		var inputIWant = inputs[iterator5];
		(function(){
			inputIWant.addEventListener('blur', function(){
				if(this.value !== ""){
					var inputID = this.id;
					var inputLabel = document.getElementById(inputID).previousSibling;
					inputLabel.classList.add('contact-form__label--completed');
				} else if ((this.value === "")){
					var inputID = this.id;
					var inputLabel = document.getElementById(inputID).previousSibling;
					inputLabel.classList.remove('contact-form__label--completed');
				}
			});

			inputIWant.addEventListener('focus', function(event){
				inputsParent = this.parentNode;
				switch (inputsParent.id) {
					case "form-holder-1":
						borderToChange = 1;
					break;

					case "form-holder-2":
						borderToChange = 2;
					break;

					case "form-holder-3":
						borderToChange = 3;
					break;

					default:

				}
				completeBorder(inputsParent);
				controlContactBorder(this, borderToChange);
			});
		})();
	}

	worksheetButtonOpen.addEventListener('click', function(){
		worksheetButtonClose.style.display = 'inline-block';
		this.style.display = 'none';
	});

	worksheetButtonClose.addEventListener('click', function(){
		worksheetButtonOpen.style.display = 'inline-block';
		this.style.display = 'none';
	});

}


jQuery(document).ready(function(){

	jQuery('.vjs-loading-spinner').html('<div class="circle-container"><div class="circle circle--1"></div><div class="circle circle--2"></div></div>');


	if(document.getElementById('services--list')){

		var stickySidebar = jQuery('#services--list').offset().top;

		jQuery(window).scroll(function() {
		    if ($(window).scrollTop() > stickySidebar) {
		        jQuery('#services--list').addClass('sticky');
		    }
		    else {
		        jQuery('#services--list').removeClass('sticky');
		    }
		});

	}

});

Modernizr.on('touchevents', function(result){
	if(result === true){
		console.log('hello');
		jQuery('.module a').on("click", function (e) {
			'use strict'; //satisfy code inspectors
			var link = jQuery(this); //preselect the link
			if (link.hasClass('hover')) {
				return true;
			} else {
				link.addClass('hover');
				jQuery('.module a').not(this).removeClass('hover');
				e.preventDefault();
				return false; //extra, and to make sure the function has consistent return points
			}
		});
	}
});

//footer stuff
if(document.getElementById('footer')){
	var footerImageToDisplay = Math.floor((Math.random() * 8 + 1));
	var footer = document.getElementById('footer')
	var width = $(window).width(), height = $(window).height();

	if(width <= 400) {
		footer.style.backgroundImage = "url('" + window.directoryURI + "/images/footer/small_square/footer_" + footerImageToDisplay +".jpg')";
	} else if(width <= 800) {
		footer.style.backgroundImage = "url('" + window.directoryURI + "/images/footer/small_1024/footer_" + footerImageToDisplay +".jpg')";

	} else {
		footer.style.backgroundImage = "url('" + window.directoryURI + "/images/footer/footer_" + footerImageToDisplay +".jpg')";
	}
}

var footerImageToDisplay = Math.floor((Math.random() * 8 + 1));
var footer = document.getElementById('footer');
var width = $(window).width(), height = $(window).height();





$('.button--disabled').on("click", function(e){
	e.preventDefault();
});
/*
if (width <= 1024) {
	footer.style.backgroundImage = "url('" + window.directoryURI + "/images/footer/small_1024/footer_" + footerImageToDisplay +".jpg')";
} else if(width <= 800) {
	footer.style.backgroundImage = "url('" + window.directoryURI + "/images/footer/small_768/footer_" + footerImageToDisplay +".jpg')";
} else {
	footer.style.backgroundImage = "url('" + window.directoryURI + "/images/footer/footer_" + footerImageToDisplay +".jpg')";
}
*/
