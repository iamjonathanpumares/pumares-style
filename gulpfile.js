var gulp = require('gulp'),
	stylus = require('gulp-stylus'),
	minifyCSS = require('gulp-minify-css'),
	nib = require('nib'),
	browserify = require('browserify'),
	source = require('vinyl-source-stream'),
	buffer = require('vinyl-buffer'),
	uglify = require('gulp-uglify');

var config = {
	styles: {
		main: './src/styles/style.styl',
		watch: './src/styles/**/*.styl',
		output: './'
	},
	templates: {
		watch: './**/*.php'
	},
	scripts: {
		main: './src/scripts/main.js',
		watch: './src/scripts/**/*.js',
		output: './js'
	}
};

gulp.task('build:css', function () {
	gulp.src(config.styles.main)
		.pipe(stylus({
			use: nib(),
			'include css': true
		}))
		.pipe(minifyCSS())
		.pipe(gulp.dest(config.styles.output));
});

gulp.task('build:js', function () {
	return browserify(config.scripts.main)
		.bundle()
		.pipe(source('bundle.js'))
		.pipe(buffer())
		.pipe(uglify())
		.pipe(gulp.dest(config.scripts.output));
});

gulp.task('watch', function () {
	gulp.watch(config.scripts.watch, ['build:js']);
	gulp.watch(config.styles.watch, ['build:css']);
	gulp.watch(config.templates.watch, ['build']);
});

gulp.task('build', ['build:css', 'build:js']);

gulp.task('default', ['watch', 'build']);