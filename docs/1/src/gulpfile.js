var browserSync = require('browser-sync').create();
const marked = require('marked');
const gulp = require('gulp');
const markdown = require('gulp-markdown');
const ext_replace = require('gulp-ext-replace');
const concat = require('gulp-concat');

marked.setOptions({
  renderer: new marked.Renderer(),
  gfm: true,
  tables: true,
  breaks: true,
  pedantic: false,
  sanitize: false,
  smartLists: true,
  smartypants: false,
  xhtml: false
});

gulp.task('parse_md', function() {
	return gulp.src('src/*.md')
		.pipe(markdown())
		.pipe(ext_replace('.html'))
		.pipe(gulp.dest('src/temp'));
});

gulp.task('create_docs', ['parse_md'], function(done) {
	gulp.src(['src/template/header.html','src/temp/*.html','src/template/footer.html'])
		.pipe(concat('index.html'))
		.pipe(gulp.dest('dist'));
	done();
});

gulp.task('watch_docs', ['create_docs'], function(done) {
	browserSync.reload();
	done();
});

gulp.task('default', ['watch_docs'], function() {
	browserSync.init({
		server: {
			baseDir: './dist/'
		}
	});
	gulp.watch('src/**/*', ['watch_docs']);
});
