var gulp       = require('gulp'),
    sass       = require('gulp-sass'),
    rename     = require('gulp-rename'),
    uglify     = require('gulp-uglify'),
    uglifycss  = require('gulp-uglifycss'),
    concat     = require('gulp-concat');

var cssDestFolder = '../built/css',
    jsDestFolder  = '../built/js';

    gulp.slurped  = false;


/* ----------------------------- Compiled CSS -----------------------------*/

// Style CSS
gulp.task('compile-style-css', function() {
    return gulp.src([
            '../src/scss/style.scss'
        ])
        .pipe(sass().on('error', sass.logError))
        .pipe(rename('gt-kit.min.css'))
        .pipe(uglifycss())
        .pipe(gulp.dest(cssDestFolder));
});

gulp.task('compile-demo-css', function() {
    return gulp.src([
            '../src/demo/demo.scss'
        ])
        .pipe(sass().on('error', sass.logError))
        .pipe(rename('demo.min.css'))
        .pipe(uglifycss())
        .pipe(gulp.dest(cssDestFolder));
});

gulp.task('watch-style-css', function () {
    gulp.watch(['../src/scss/**/*'], ['compile-style-css']);
});

gulp.task('watch-demo-css', function () {
    gulp.watch(['../src/demo/**/*'], ['compile-demo-css']);
});

gulp.task('watch-dev-css', function () {
    gulp.watch(['../src/demo/**/*'], ['watch-style-css', 'watch-demo-css']);
});


// Core CSS
gulp.task('compile-core-css', function() {
    return gulp.src([
            '../node_modules/bootstrap/dist/css/bootstrap.min.css'
        ])
        .pipe(concat('core.css'))
        .pipe(gulp.dest(cssDestFolder))
        // min files
        .pipe(rename('core.min.css'))
        .pipe(uglify().on('error', function(err) { gutil.log(gutil.colors.red('[Error]'), err.toString()); }))
        .pipe(gulp.dest(cssDestFolder));
});





/* ----------------------------- Compiled JS ------------------------------*/

// Core CSS
gulp.task('compile-core-js', function() {
    return gulp.src([
            '../node_modules/jquery/dist/jquery.min.js',
            '../node_modules/bootstrap/dist/js/bootstrap.min.js'
        ])
        .pipe(concat('core.js'))
        .pipe(gulp.dest(jsDestFolder))
        // min files
        .pipe(rename('core.min.js'))
        .pipe(uglify().on('error', function(err) { gutil.log(gutil.colors.red('[Error]'), err.toString()); }))
        .pipe(gulp.dest(jsDestFolder));
});