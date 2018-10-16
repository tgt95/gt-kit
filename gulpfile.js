var gulp = require('gulp'),
	php2html = require("gulp-php2html");
 


// Default

gulp.task('default', function(callback) {
    gulp.src("*.php")
    .pipe(php2html())
    .pipe(gulp.dest("./"));
});
