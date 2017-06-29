var gulp             = require('gulp'),
		sass         = require('gulp-sass'),
		autoprefixer = require('gulp-autoprefixer'),
		cleanCSS     = require('gulp-clean-css'),
		rename       = require('gulp-rename'),
		browserSync  = require('browser-sync').create(),
		concat       = require('gulp-concat');

// 		uglify       = require('gulp-uglify');
// var gutil = require( 'gulp-util' );
// var ftp = require( 'vinyl-ftp' );
gulp.task('browser-sync', ['styles', 'scripts'], function() {
		browserSync.init({
				// server: {
				// 		baseDir: "./"
				// },
				proxy: "http://bangshow.loc",
				notify: false
		});
});

gulp.task('styles', function () {
	return gulp.src('bangshow/sass/*.sass')
	.pipe(sass({
		includePaths: require('node-bourbon').includePaths
	}).on('error', sass.logError))
	.pipe(concat('style.css'))
	.pipe(autoprefixer({browsers: ['last 15 versions'], cascade: false}))
	.pipe(cleanCSS())
	.pipe(gulp.dest('bangshow/'))
	.pipe(browserSync.stream());
});

gulp.task('scripts', function() {
	return gulp.src([
		// './bangshow/app/libs/jquery/dist/jquery.min.js',
		'./bangshow/app/libs/wow/dist/wow.min.js',
		'./bangshow/app/libs/jquery_lazyload/jquery.lazyload.js',
		'./bangshow/app/libs/owl.carousel/dist/owl.carousel.min.js',
		'./bangshow/app/libs/magnific-popup/dist/jquery.magnific-popup.min.js',
		'./bangshow/app/libs/fotorama/fotorama.js'
		])
		.pipe(concat('libs.js'))
		// .pipe(uglify()) //Minify libs.js
		.pipe(gulp.dest('bangshow/js/'));
});

gulp.task('watch', function () {
	gulp.watch('bangshow/sass/*.sass', ['styles']);
	gulp.watch('bangshow/app/libs/**/*.js', ['scripts']);
	gulp.watch('bangshow/js/*.js').on("change", browserSync.reload);
	// gulp.watch('app/*.html').on('change', browserSync.reload);
});

gulp.task('default', ['browser-sync', 'watch']);


// gulp.task( 'deploy', function () {

// 	var conn = ftp.create( {
// 		host:     'w07.hoster.by',
// 		user:     'showbang',
// 		password: 'eeJahZ0o',
// 		parallel: 10,
// 		log:      gutil.log
// 	} );

// 	var globs = [
// 		'app/**/*'
// 	];

	// using base = '.' will transfer everything to /public_html correctly
	// turn off buffering in gulp.src for best performance

// 	return gulp.src( globs, { base: 'app', buffer: false } )
// 		.pipe( conn.newer( '/showbang.by/wwwroot' ) ) // only upload newer files
// 		.pipe( conn.dest( '/showbang.by/wwwroot' ) );

// } );