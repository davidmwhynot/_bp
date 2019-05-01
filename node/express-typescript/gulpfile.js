/* XXX imports XXX */
/* vendor */
const gulp = require('gulp');
const typescript = require('gulp-typescript');
const ForkEvents = require('fork-events');
const browsersync = require('browser-sync');
const debug = require('debug');

// sass
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');

// webpack
const compiler = require('webpack');
const webpack = require('webpack-stream');
const webpackConfig = require('./webpack.config');

/* XXX config XXX */
const log = debug('TODO:gulpfile.js');
const browserSync = browsersync.create();
const AUTOPREFIXER_BROWSERS = ['> 1%', 'last 2 versions'];
let server;

/* XXX main XXX */
/* tasks */
// front end sass
gulp.task('sass-front', () => {
	return gulp
		.src('./src/public/sass/front/style.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
		.pipe(gulp.dest('./dist/public/css'));
});

// email sass
gulp.task('sass-email', () => {
	return gulp
		.src('./src/public/sass/email/style.scss')
		.pipe(
			sass({
				includePaths: ['./node_modules/foundation-emails/scss']
			}).on('error', sass.logError)
		)
		.pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
		.pipe(gulp.dest('./dist/email/css'));
});

// sass
gulp.task('sass', gulp.parallel('sass-front', 'sass-email'));

// scripts
gulp.task('scripts', () => {
	return gulp
		.src('./src/public/js/index.js')
		.pipe(webpack(webpackConfig, compiler))
		.pipe(gulp.dest('./dist/public/js'));
});

// front
gulp.task('front', gulp.parallel('scripts', 'sass'));

// views
gulp.task('views', () => {
	return gulp.src('./src/views/**/*').pipe(gulp.dest('./dist/server/views'));
});

// server
gulp.task('server', () => {
	// prettier-ignore
	return gulp.src(['./src/**/*.ts', '!./src/public'])
		.pipe(typescript({ esModuleInterop: true }))
		.pipe(gulp.dest('./dist/server'));
});

// build
gulp.task('build', gulp.series(gulp.parallel('server', 'views', 'front')));

// dev
const devServer = cb => {
	log('server executed');
	server = ForkEvents.fork('./server.js');

	server.on('listening', e => {
		log('event caught... e.reforked', e.reforked);
		if (e.reforked) {
			browserSync.reload({ stream: false });
		} else {
			browserSync.init(null, {
				proxy: 'http://localhost:5000',
				port: 7000,
				delay: 100,
				notify: false,
				files: ['./dist/public/**/*.*', './dist/server/views/**/*.*']
			});
			cb();
		}
	});
};

const refork = cb => {
	log('reforking...');
	server.refork();
	cb();
};

// default
gulp.task(
	'default',
	gulp.series('build', devServer, () => {
		// watch compiled server
		gulp.watch(
			['./server.js', './dist/server/**/*.js', '!./dist/server/views'],
			gulp.series(refork)
		);

		// watch src server
		gulp.watch(
			['./src/**/*.ts', '!./src/public', '!./src/views'],
			gulp.series('server')
		);

		// watch views
		gulp.watch('./src/views/**/*', gulp.series('views'));

		// watch scripts
		gulp.watch('./src/public/js/**/*', gulp.series('scripts'));

		// watch front end sass
		gulp.watch('./src/public/sass/front/**/*', gulp.series('sass-front'));

		// watch email sass
		gulp.watch('./src/public/sass/email/**/*', gulp.series('sass-email'));
	})
);
