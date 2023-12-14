const gulp = require( 'gulp' ),
      sass = require( 'gulp-dart-sass' );


// CSS build task.
gulp.task( 'css', () => {
  return gulp.src( 'assets/source/scss/styles.scss' )
    .pipe( sass( { outputStyle: 'compressed' } ) )
    .pipe( gulp.dest( 'assets/build/css' ) );
} );


// Default task.
gulp.task( 'default', gulp.series( 'css' ) );
