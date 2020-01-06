const gulp   = require( 'gulp' ),
      babel  = require( 'gulp-babel' )
      clean  = require( 'gulp-clean-css' ),
      concat = require( 'gulp-concat' ),
      rename = require( 'gulp-rename' ),
      sass   = require( 'gulp-sass' ),
      uglify = require( 'gulp-uglify' ),
      watch  = require( 'gulp-watch' );

// Array of JS files, in order by dependency.
const jsFiles = [
  'assets/source/js/component/primary-nav.js'
];

// JS build task.
gulp.task( 'js', () => {
  return gulp.src( jsFiles )
    .pipe( babel( {
      presets: [ 'minify', 'es2015' ]
    } ) )
    .pipe( concat( 'scripts.min.js' ) )
    .pipe( gulp.dest( 'assets/build/js' ) );
} );

// CSS build task.
gulp.task( 'css', () => {
  return gulp.src( 'assets/source/scss/styles.scss' )
    .pipe( sass().on( 'error', sass.logError ) )
    .pipe( clean() )
    .pipe( rename( { suffix: '.min' } ) )
    .pipe( gulp.dest( 'assets/build/css' ) );
} );

// Default task.
gulp.task( 'default', gulp.series( 'css', 'js' ) );
