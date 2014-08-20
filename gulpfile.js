var gulp = require('gulp'),
    sass = require('gulp-sass');;

gulp.task('default', function() {

    gulp.task('css', function() {
        gulp.src('app/Japan/Layout/scss')
            .pipe(sass())
            .pipe(autoprefixer('last 10 version'))
            .pipe(gulp.dest('public/css'));
    });

});