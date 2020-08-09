/*------------------------------
 Gulp
------------------------------*/

// Notes...

/* Plugins
------------------------------*/

// Notes...

var gulp = require('gulp');

var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

var sass = require('gulp-sass');

var autoprefixer = require('gulp-autoprefixer');

var imagemin = require('gulp-imagemin');

var browsersync = require('browser-sync');

/* Directories
------------------------------*/

// Notes...

var basePaths = {

	dev:    'src/',
	dist:   'dist/html/system/user/templates/labyrinth/',
	assets: 'dist/html/themes/user/site/labyrinth/assets/'

};

/* Sass
------------------------------*/

// Notes...

gulp.task('sass', function() {

	return gulp.src(basePaths.dev + 'scss/**/*.scss')

	.pipe(sass({

		outputStyle: 'compressed',
		precision: 9

	}).on('error', sass.logError))

	.pipe(autoprefixer({

		browsers: ['last 2 versions'],
		cascade: false

	}))

	.pipe(gulp.dest(basePaths.assets + 'css'))

	.pipe(browsersync.stream());

});

/* JavaScript
------------------------------*/

// Notes...

gulp.task('js', function() {

	return gulp.src([

		// basePaths.dev + 'js/modernizr.js',
		// basePaths.dev + 'js/jquery.js',
		// basePaths.dev + 'js/flexslider.js',
		// basePaths.dev + 'js/scroll.js',
		// basePaths.dev + 'js/holder.js',
		basePaths.dev + 'js/functions.js'

	])

	.pipe(concat('global.js'))

	// .pipe(rename({

		// suffix: '.min'

	// }))

	.pipe(uglify())

	.pipe(gulp.dest(basePaths.assets + 'js'))

	.pipe(browsersync.stream());

});

/* Images
------------------------------*/

// Notes...

gulp.task('img', function() {

	return gulp.src(basePaths.dev + 'img/**/*')

	.pipe(imagemin({

		optimizationLevel: 5,
		progressive: true,
		interlaced: true

	}))

	.pipe(gulp.dest(basePaths.assets + 'img'));

});

/* Fonts
------------------------------*/

// Notes...

gulp.task('fonts', function() {

	return gulp.src(basePaths.dev + 'fonts/**/*')

	.pipe(gulp.dest(basePaths.assets + 'fonts'));

});

/* Watch
------------------------------*/

// Notes...

gulp.task('watch', function() {

	browsersync.init({

		proxy: "http://rtggolf.local",
		host: "rtggolf.local",
		open: "external"

	});

	gulp.watch(basePaths.dev + 'scss/**/*.scss', gulp.series('sass'));

	gulp.watch(basePaths.dev + 'js/*.js', gulp.series('js'));

	gulp.watch(basePaths.dev + 'img/**/*', gulp.series('img'));

	gulp.watch(basePaths.dev + 'fonts/**/*', gulp.series('fonts'));

	gulp.watch(basePaths.dist + '**/*.html').on('change', browsersync.reload);

});

/* Title
------------------------------*/

// Notes...

gulp.task('default', gulp.parallel('sass', 'js', 'img', 'fonts', 'watch'));