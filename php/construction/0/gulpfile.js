var browserSync = require('browser-sync').create();
const gulp = require('gulp');
const sass = require('gulp-sass');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');

gulp.task('php', function() {
	return gulp.src('src/*.php')
		.pipe(gulp.dest('dist'));
});

// scripts
gulp.task('scripts', function() {
	gulp.src('src/js/*.js')
		.pipe(concat('main.js'))
		.pipe(uglify())
		.pipe(gulp.dest('dist/js'));
});

gulp.task('sass', function() {
	return gulp.src('src/scss/*.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(gulp.dest('dist/css'));
});

gulp.task('watch_ops', ['sass', 'php', 'scripts'], function(done) {
	browserSync.reload();
	done();
});

gulp.task('watch', function() {
	gulp.watch('src/js/*.js', ['scripts']);
	gulp.watch('src/scss/**/*.scss', ['sass']);
	gulp.watch('src/**/*.php', ['php']);
});

gulp.task('default', ['watch_ops'], function() {
	browserSync.init({
		server: {
			baseDir: './dist/'
		}
	});
	gulp.watch('src/**/*', ['watch_ops']);
});
