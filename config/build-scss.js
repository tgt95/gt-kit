var gulp       = require('gulp'),
    sass       = require('gulp-sass'),
    rename     = require('gulp-rename'),
    uglify     = require('gulp-uglify'),
    uglifycss  = require('gulp-uglifycss'),
    concat     = require('gulp-concat');

var cssDestFolder = '../built/css',
    jsDestFolder  = '../built/js';

    gulp.slurped  = false;


/* ----------------------------- Complied CSS -----------------------------*/

// Style CSS
gulp.task('complie-style-css', function() {
    return gulp.src([
            '../src/scss/style.scss'
        ])
        .pipe(sass().on('error', sass.logError))
        .pipe(rename('gt-kit.min.css'))
        .pipe(uglifycss())
        .pipe(gulp.dest(cssDestFolder));
});

// Core CSS
gulp.task('complie-core-css', function() {
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





/* ----------------------------- Complied JS ------------------------------*/

// Core CSS
gulp.task('complie-core-js', function() {
    return gulp.src([
            '../node_modules/bootstrap/dist/js/bootstrap.min.js',
            '../node_modules/jquery/dist/js/jquery.min.js'
        ])
        .pipe(concat('core.js'))
        .pipe(gulp.dest(jsDestFolder))
        // min files
        .pipe(rename('core.min.js'))
        .pipe(uglify().on('error', function(err) { gutil.log(gutil.colors.red('[Error]'), err.toString()); }))
        .pipe(gulp.dest(jsDestFolder));
});