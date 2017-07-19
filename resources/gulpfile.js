// Project related.
var project                 = 'Tilt Website'; // Project Name.
var projectURL              = 'tilt.dev'; // Project URL. Could be something like localhost:8888.

// Style related.
var styleSRC                = './assets/css/global.scss'; // Path to main .scss file.
var styleDestination        = '../wp-content/themes/tilt-site/css/'; // Path to place the compiled CSS file.
// Defualt set to root folder.

// JS Vendor related.
var jsVendorSRC             = './assets/js/vendor/*.js'; // Path to JS vendor folder.
var jsVendorDestination     = '../wp-content/themes/tilt-site/js/'; // Path to place the compiled JS vendors file.
var jsVendorFile            = 'vendors'; // Compiled JS vendors file name.
// Default set to vendors i.e. vendors.js.

// JS Custom related.
var jsCustomSRC             = './assets/js/*.js'; // Path to JS custom scripts folder.
var jsCustomDestination     = '../wp-content/themes/tilt-site/js/'; // Path to place the compiled JS custom scripts file.
var jsCustomFile            = 'main'; // Compiled JS custom file name.
// Default set to custom i.e. custom.js.

// Watch files paths.
var styleWatchFiles         = './assets/css/**/*.scss'; // Path to all *.scss files inside css folder and inside them.
var vendorJSWatchFiles      = './assets/js/vendor/*.js'; // Path to all vendor JS files.
var customJSWatchFiles      = './assets/js/*.js'; // Path to all custom JS files.
var projectPHPWatchFiles    = './**/*.php'; // Path to all PHP files.


// Browsers you care about for autoprefixing.
// Browserlist https        ://github.com/ai/browserslist
const AUTOPREFIXER_BROWSERS = [
    'last 2 version',
    '> 1%',
    'ie >= 8'
  ];

// STOP Editing Project Variables.

/**
 * Load Plugins.
 *
 * Load gulp plugins and assing them semantic names.
 */
var gulp         = require('gulp'); // Gulp of-course

// CSS related plugins.
var sass         = require('gulp-sass'); // Gulp pluign for Sass compilation.
var minifycss    = require('gulp-uglifycss'); // Minifies CSS files.
var autoprefixer = require('gulp-autoprefixer'); // Autoprefixing magic.
var mmq          = require('gulp-merge-media-queries'); // Combine matching media queries into one media query definition.
var inline_base64= require('gulp-inline-base64');

// JS related plugins.
var concat       = require('gulp-concat'); // Concatenates JS files
var uglify       = require('gulp-uglify'); // Minifies JS files

// Image realted plugins.
var imagemin     = require('gulp-imagemin'); // Minify PNG, JPEG, GIF and SVG images with imagemin.

// Utility related plugins.
var rename       = require('gulp-rename'); // Renames files E.g. style.css -> style.min.css
var lineec       = require('gulp-line-ending-corrector'); // Consistent Line Endings for non UNIX systems. Gulp Plugin for Line Ending Corrector (A utility that makes sure your files have consistent line endings)
var filter       = require('gulp-filter'); // Enables you to work on a subset of the original files by filtering them using globbing.
var sourcemaps   = require('gulp-sourcemaps'); // Maps code in a compressed file (E.g. style.css) back to it’s original position in a source file (E.g. structure.scss, which was later combined with other css files to generate style.css)
var notify       = require('gulp-notify'); // Sends message notification to you
var browserSync  = require('browser-sync').create(); // Reloads browser and injects CSS. Time-saving synchronised browser testing.
var reload       = browserSync.reload; // For manual browser reload.
var wpPot        = require('gulp-wp-pot'); // For generating the .pot file.
var sort         = require('gulp-sort'); // Recommended to prevent unnecessary changes in pot-file.


gulp.task( 'browser-sync', function() {
  browserSync.init( {
    proxy: projectURL,
    open: true,
    injectChanges: true,
  } );
});

 gulp.task('styles', function () {
    gulp.src( styleSRC )
    .pipe( sourcemaps.init() )
    .pipe( sass( {
      errLogToConsole: true,
      outputStyle: 'compact',
      //outputStyle: 'compressed',
      // outputStyle: 'nested',
      // outputStyle: 'expanded',
      precision: 10
    } ) )
    .on('error', console.error.bind(console))
    .pipe( sourcemaps.write( { includeContent: false } ) )
    .pipe( sourcemaps.init( { loadMaps: true } ) )
    .pipe( autoprefixer( AUTOPREFIXER_BROWSERS ) )
    .pipe( sourcemaps.write ( styleDestination ) )
    .pipe( gulp.dest( styleDestination ) )
    .pipe( lineec() ) // Consistent Line Endings for non UNIX systems.
    .pipe( gulp.dest( '' ) )

    .pipe( filter( '**/*.css' ) ) // Filtering stream to only css files
    .pipe( mmq( { log: true } ) ) // Merge Media Queries only for .min.css version.

    .pipe( browserSync.stream() ) // Reloads style.css if that is enqueued.


    // LIVE
    .pipe( rename( { suffix: '.min' } ) )
    .pipe( minifycss( {
      // maxLineLen: 10
    }))
    .pipe(inline_base64({
        baseDir: '../wp-content/themes/tilt-site/css/',
        maxSize: 1024*100,
        debug: true
    }))
    .pipe( lineec() )
    .pipe( gulp.dest( styleDestination ) )

    .pipe( filter( '**/*.css' ) ) 
    // .pipe( browserSync.stream() )
 });
 

 gulp.task( 'vendorsJs', function() {
  gulp.src( jsVendorSRC )
    .pipe( concat( jsVendorFile + '.js' ) )
    .pipe( lineec() ) // Consistent Line Endings for non UNIX systems.
    .pipe( gulp.dest( jsVendorDestination ) )
    .pipe( rename( {
      basename: jsVendorFile,
      suffix: '.min'
    }))
    .pipe( uglify() )
    .pipe( lineec() ) // Consistent Line Endings for non UNIX systems.
    .pipe( gulp.dest( jsVendorDestination ) )
    // .pipe( notify( { message: 'TASK: "vendorsJs" Completed! 💯', onLast: true } ) );
 });


 gulp.task( 'customJS', function() {
    gulp.src( jsCustomSRC )
    .pipe( concat( jsCustomFile + '.js' ) )
    .pipe( lineec() ) // Consistent Line Endings for non UNIX systems.
    .pipe( gulp.dest( jsCustomDestination ) )
    .pipe( rename( {
      basename: jsCustomFile,
      suffix: '.min'
    }))
    .pipe( uglify() )
    .pipe( lineec() ) // Consistent Line Endings for non UNIX systems.
    .pipe( gulp.dest( jsCustomDestination ) )
    // .pipe( notify( { message: 'TASK: "customJs" Completed! 💯', onLast: true } ) );
 });


 /**
  * Watch Tasks.
  *
  * Watches for file changes and runs specific tasks.
  */
 gulp.task( 'default', ['styles', 'vendorsJs', 'customJS', 'browser-sync' ], function () {
  gulp.watch( projectPHPWatchFiles, reload ); // Reload on PHP file changes.
  gulp.watch( styleWatchFiles, [ 'styles' ] ); // Reload on SCSS file changes.
  gulp.watch( vendorJSWatchFiles, [ 'vendorsJs', reload ] ); // Reload on vendorsJs file changes.
  gulp.watch( customJSWatchFiles, [ 'customJS', reload ] ); // Reload on customJS file changes.
 });
