var gulp        = require('gulp'),
	sass        = require('gulp-sass'),
	rename      = require('gulp-rename'),
	uglify      = require('gulp-uglify'),
	uglifycss   = require('gulp-uglifycss'),
	gutil       = require('gulp-util'),
	concat      = require('gulp-concat'),
	sourcemaps  = require('gulp-sourcemaps'),
	runSequence = require('run-sequence');



var paths = {
	dist: {
		base: 		'../dist',
		fonts:  	'../dist/assets/fonts',
		js: 		'../dist/assets/js',
		css: 		'../dist/css'
	},
	demo: {
		base: 		'../demo/assets',
		css: 		'../demo/assets/css',
		scss: 		'../demo/assets/scss/*.scss'
	},
	base: {
		base: 		'../',
		node: 		'../node_modules'
	},
	src: {
		base: 		'../src/',
		js:   		'../src/js/**/*.js',
		scss: 		'../src/scss/**/*.scss'
	}
}


// Compile Demo SCSS
gulp.task('demo-scss', function() {
	return gulp.src(paths.demo.scss)
	.pipe(sass().on('error', sass.logError))
	.pipe(sourcemaps.init())
	.pipe(concat('demo.css'))
	.pipe(gulp.dest(paths.demo.css))
});

// Compile SCSS
gulp.task('scss', function() {
	return gulp.src([
		'../node_modules/bootstrap/dist/css/bootstrap.min.css',
		'../node_modules/node-waves/dist/waves.min.css',
		'../src/scss/style.scss'
		])
	.pipe(sass().on('error', sass.logError))
	.pipe(sourcemaps.init())
	.pipe(concat('gt-kit.css'))
	.pipe(gulp.dest(paths.dist.css))

	.pipe(rename('gt-kit.min.css'))
	.pipe(uglifycss())
	.pipe(sourcemaps.write('./'))
	.pipe(gulp.dest(paths.dist.css));
});

// Clean
gulp.task('clean:dist', function() {
    return del.sync(paths.dist.base);
});








// Compile JS
gulp.task('js', function() {
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
	.pipe(gulp.dest(paths.dist.js))

	.pipe(rename('gt-kit.min.js'))
	.pipe(uglify().on('error', function(err) { gutil.log(gutil.colors.red('[Error]'), err.toString()); }))
	.pipe(gulp.dest(paths.dist.js));
});






// Build CSS
gulp.task('build-css', function(callback) {
    runSequence('clean:dist', 'scss',
        callback);
});

gulp.task('build-css:watch', function() {
    gulp.watch(paths.src.scss, ['scss']);
});

// Build JS
gulp.task('build-js', function(callback) {
    runSequence('clean:dist', 'js',
        callback);
});

gulp.task('build-js:watch', function() {
    gulp.watch(paths.src.js, ['js']);
});


gulp.task('build-all', function(callback) {
    runSequence('clean:dist', 'scss', 'js',
        callback);
});

// Development
gulp.task('dev', function(callback) {
    runSequence('clean:dist', 'scss', 'js', 'demo-scss',
        callback);
});

gulp.task('dev:watch', ['scss'], function() {
    gulp.watch(paths.src.scss, ['scss']);
    gulp.watch(paths.demo.scss, ['demo-scss']);
});

gulp.task('prod', function(callback) {
    runSequence('clean:dist', 'scss', 'js', 
        callback);
});