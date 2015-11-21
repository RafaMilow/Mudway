var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('scss', function() {
    gulp.src('./scss/*.scss')
      .pipe(sass({
        includePaths: ['./bower_components/foundation-sites/scss']
      }))
      .pipe(gulp.dest('./css'));
});

var watcher = gulp.watch('./scss/*.scss', ['scss']);
watcher.on('change', function(event) {
  console.log('File ' + event.path + ' was ' + event.type + ', running SCSS...');
});

gulp.task('default', ['scss']);