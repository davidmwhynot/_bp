'use strict';

// imports
const gulp = require('gulp');
const sass = require('gulp-sass');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const babel = require('gulp-babel');
const autoprefixer = require('gulp-autoprefixer');

// config
const AUTOPREFIXER_BROWSERS = [
	'> 1%',
	'last 2 versions'
];

// tasks
gulp.task('db', function() {
	gulp.src('src/db/*.sql')
		.pipe(gulp.dest('dist/db'));
});

gulp.task('php_pub', function() {
	gulp.src('src/*.php')
		.pipe(gulp.dest('dist/pub'));
});

gulp.task('php_lib', function() {
	gulp.src('src/lib/**/*.php')
		.pipe(gulp.dest('dist/lib'));
});

gulp.task('pub_lib', function() {
	gulp.src('src/pub_lib/**/*.php')
		.pipe(gulp.dest('dist/pub/lib'));
});

// scripts
gulp.task('scripts', function() {
	gulp.src('src/js/*.js')
		.pipe(concat('main.js'))
		.pipe(babel({
			presets: ['env']
		}))
		.pipe(uglify())
		.pipe(gulp.dest('dist/pub/js'));
});

gulp.task('sass', function() {
	gulp.src('src/scss/*.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
		.pipe(gulp.dest('dist/pub/css'));
});


gulp.task('watch', function() {
	gulp.watch('src/js/*.js', ['scripts']);
	gulp.watch('src/scss/**/*.scss', ['sass']);
	gulp.watch('src/*.php', ['php_pub']);
	gulp.watch('src/lib/**/*.php', ['php_lib']);
	gulp.watch('src', ['db']);
});

gulp.task('default', ['php_pub','php_lib','pub_lib','sass','scripts','db']);
