const {
    src,
    dest,
    watch,
    parallel
} = require('gulp');

const sass = require('gulp-sass');
const minifyCSS = require('gulp-csso');
const concat = require('gulp-concat');
const browserSync = require('browser-sync');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');

function css() {
    return src('src/sass/*.sass')
        .pipe(sass({
            includePaths: ['node_modules']
        }))
        .pipe(minifyCSS())
        .pipe(rename({suffix: '.min'}))
        .pipe(dest('./css/'))
        .pipe(browserSync.stream())
}

function js() {
    return src('src/js/*.js')
        /* .pipe(concat('app.min.js')) */
        .pipe(uglify())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(dest('js/'))
        .pipe(browserSync.stream())
}

function live() {
    browserSync.init({
        proxy: 'localhost/pandenor'
    });

    watch('src/sass/*.sass', css)
    watch('src/js/*.js', js)
    watch('template-part/*.php').on('change', browserSync.reload);
    watch('./*.php').on('change', browserSync.reload);
}

exports.js = js;
exports.css = css;
exports.live = live;
exports.default = parallel(css, js, live);