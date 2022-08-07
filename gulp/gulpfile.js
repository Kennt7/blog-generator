'use strict';


const gulp = require('gulp');
var concat = require('gulp-concat');
var sass = require('gulp-sass')(require('sass'));

gulp.task('sass', function() {
    return gulp.src('/scss/style.scss')
        .pipe(sass())
        .pipe(gulp.dest('/css'));
});

gulp.task('pack-js', function() {
    return gulp.src([
            //ARRAY OF JS FILES TO BE BUNDLED
            /*   
                      '../js/main.js' */
        ])
        .pipe(concat('index.min.js'))
        .pipe(gulp.dest('../dist'));
});

gulp.task('pack-css', function() {
    return gulp.src([
            //ARRAY OF CSS FILES TO BE BUNDLED

            '/css/style.css'
        ])
        .pipe(concat('styles.min.css'))
        .pipe(gulp.dest('../dist'));
});

function defaultTask(cb) {
    cb();
}
exports.default = defaultTask;

gulp.task('default', gulp.series(['sass', 'pack-js', 'pack-css']));
gulp.watch('./scss', gulp.series(['sass', 'pack-js', 'pack-css']))