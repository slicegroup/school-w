var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var cssnano = require('gulp-cssnano');
var imagemin = require('gulp-imagemin');
var autoprefixer = require('gulp-autoprefixer');
var htmlmin = require('gulp-htmlmin');
var browserSync = require('browser-sync').create();

gulp.task('default', ['css', 'javascript'], function() {
    browserSync.init({
        server: "./app"
    });

    gulp.watch("app/assets/js/*.js", ["javascript"]).on('change', browserSync.reload);
    gulp.watch("scss/**/*.scss", ['css']);
    gulp.watch("app/assets/*.html").on('change', browserSync.reload);
    gulp.watch("./*.html", ["html"]);
});

gulp.task('html', function() {
   return gulp.src('./*.html')
     //.pipe(htmlmin({collapseWhitespace: true}))
    .pipe(gulp.dest('app'));
});

gulp.task('imagenes', function() {
    gulp.src('img/*')
        .pipe(imagemin())
        .pipe(gulp.dest('app/assets/img'));
});

gulp.task('javascript', function() {
    gulp.src('app/assets/js/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('app/assets/js/dist'));
});

gulp.task('css', function(){
    return gulp.src('scss/**/*.scss')
        .pipe(sass())
        //.pipe(cssnano())
        .pipe(autoprefixer({
            browsers: ['last 3 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('app/assets/css'))
        .pipe(browserSync.stream());
});