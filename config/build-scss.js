var gulp       = require('gulp'),
    sass       = require('gulp-sass'),
    rename     = require('gulp-rename'),
    uglify     = require('gulp-uglify'),
    uglifycss  = require('gulp-uglifycss'),
    gutil      = require('gulp-util'),
    concat     = require('gulp-concat'),
    sourcemaps = require('gulp-sourcemaps');

var cssDestFolder = '../built/css',
    jsDestFolder  = '../built/js';

    gulp.slurped  = false;


/*!
 * Compiled CSS
 */

gulp.task('compile-demo-css', function() {
    return gulp.src([
            '../src/demo/demo.scss'
        ])
        .pipe(sass().on('error', sass.logError))
        .pipe(rename('demo.min.css'))
        .pipe(uglifycss())
        .pipe(gulp.dest(cssDestFolder));
});

gulp.task('compile-core-css', function() {
    return gulp.src([
            '../node_modules/bootstrap/dist/css/bootstrap.min.css',
            '../node_modules/node-waves/dist/waves.min.css',
            '../src/scss/style.scss'
        ])
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(concat('gt-kit.css'))
        .pipe(gulp.dest(cssDestFolder))
        // min files
        .pipe(rename('gt-kit.min.css'))
        .pipe(uglifycss())
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(cssDestFolder));
});





/*!
 * Compiled JS
 */

gulp.task('compile-core-js', function() {
    return gulp.src([
            '../node_modules/jquery/dist/jquery.min.js',
            '../node_modules/popper.js/dist/umd/popper.min.js',
            '../node_modules/bootstrap/dist/js/bootstrap.min.js',
            '../node_modules/moment/moment.js',
            '../node_modules/node-waves/dist/waves.min.js',
            '../src/js/bootstrap-datetimepicker.min.js'
            // '../src/js/main.js'
        ])
        .pipe(concat('gt-kit.js'))
        .pipe(gulp.dest(jsDestFolder))
        // min files
        .pipe(rename('gt-kit.min.js'))
        .pipe(uglify().on('error', function(err) { gutil.log(gutil.colors.red('[Error]'), err.toString()); }))
        .pipe(gulp.dest(jsDestFolder));
});

gulp.task('dev:watch', function () {
    // gulp.watch(['../src/js/**/*'], ['compile-core-js']);
    gulp.watch(['../src/scss/**/*'], ['compile-core-css']);
    gulp.watch(['../src/demo/**/*'], ['compile-demo-css']);
});