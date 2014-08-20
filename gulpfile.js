var gulp = require('gulp'),
    sass = require('gulp-sass'),
    rename = require('gulp-rename');

gulp.task('css', function() {
    gulp.src('app/Japan/Layout/scss/bootstrap.scss')
        .pipe(sass())
        .pipe(gulp.dest('public/css'))
        .pipe(rename('bootstrap.min.css'));
});