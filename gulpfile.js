const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
var rename = require("gulp-rename");
const browserSync = require('browser-sync').create();

// compile scss into css
function style() {
// return gulp.src('./scss/**/*.scss')
return gulp.src('./assets/scss/**/*.scss')
.pipe(sass())
.pipe(rename('style.css'))
.pipe(gulp.dest('./'))
}

exports.style = style;

function watch(done) {
    browserSync.init({
      proxy: "http://boilerplate-template.local/",
    });
    gulp.watch('./assets/scss/**/*.scss', style).on('change',browserSync.reload);
    gulp.watch('./**/*.css').on('change', browserSync.reload);
    gulp.watch('./assets/js/**/*.js').on('change', browserSync.reload);
    gulp.watch('./**/*.php').on('change', browserSync.reload);
    done();
}

exports.watch = watch;