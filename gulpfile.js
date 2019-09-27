/**
 *  Initialize Gulp
 */
const gulp = require('gulp');

/**
 *  Load Gulp Dependencies
 */
const sass = require('gulp-sass');
// const minifycss = require('gulp-minify-css');
const cleancss = require('gulp-clean-css');
const rename = require('gulp-rename');
const util = require('gulp-util');
const browserSync = require('browser-sync').create();

// chalk colors: red | blue | yellow | green | cyan | magenta | white

gulp.task('scss', function () {
    gulp.src(['includes/scss/import.scss'])
        .pipe(sass({style: 'compressed', errLogToConsole: true}))
        .pipe(rename('main.min.css'))
        .pipe(cleancss())
        .pipe(gulp.dest('includes/css/'))
        .pipe(browserSync.stream());
    util.log(util.colors.red('Compiled!'));
});

gulp.task('default', ['scss', 'watch', 'browser-sync']);


gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "mistersteev.local", // this proxys my dev site to localhost:3000
        open: true,
        port: 8000
    });
});

gulp.task('watch', function () {

    /**
     *  Watch PHP files for changes
     */
    var php = '**/*.php';

    gulp.watch(php).on('change', function (file) {

        gulp.src(php).pipe(browserSync.stream());

        util.log(util.colors.blue('[ ' + file.path + ' ]'));
    });

    /**
     *  Watch SCSS files for changes - trigger 'scss' task
     */
    gulp.watch('includes/scss/**/*.scss', ['scss']);
});
