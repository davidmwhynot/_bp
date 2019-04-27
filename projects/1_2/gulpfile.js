var browserSync = require('browser-sync').create();
const gulp = require('gulp');
const sass = require('gulp-sass');
const imagemin = require('gulp-imagemin');

// const uglify = require('gulp-uglify'); // TODO
// const concat = require('gulp-concat'); // TODO

gulp.task('html', function() {
	return gulp.src('src/*.html')
		.pipe(gulp.dest('dist'));
});

gulp.task('sass', function() {
	return gulp.src('src/scss/*.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(gulp.dest('dist/css'));
});

gulp.task('images', function() {
	gulp.src('src/img/*')
	 	.pipe(imagemin())
		.pipe(gulp.dest('dist/img'));
});

gulp.task('watch_ops', ['html','sass'], function(done) {
	browserSync.reload();
	done();
});

gulp.task('default', ['watch_ops'], function() {
	browserSync.init({
		server: {
			baseDir: './dist/'
		}
	});
	gulp.watch('src/**/*', ['watch_ops']);
});
