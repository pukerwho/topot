// gulpfile.js
const { watch, series, src, dest } = require("gulp");
const sass = require('gulp-sass');
const postcss = require("gulp-postcss");
const purgecss = require('gulp-purgecss');
const concat = require('gulp-concat');
const concatCss = require('gulp-concat-css');
const tailwindcss = require('tailwindcss');

function createTailwindProd() {
  return src("./source/css/tailwind.scss")
  .pipe(postcss([
    tailwindcss('./tailwind.config.js'),
    ...(process.env.NODE_ENV === "production"
      ? [
          purgecss({
            content: ["**/*.php"],
            defaultExtractor: content =>
              content.match(/[\w-/:]+(?<!:)/g) || []
          })
        ]
      : [])
  ]))
  .pipe(dest("./source/css/src"))
}

function scss() {
  return src('./source/css/styles.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(dest('./build/css'));
}

function scripts() {
  return src('./source/javascript/**/*.js')
    .pipe(concat('all.js'))
    .pipe(dest('./build/js'));
}

// Default Gulp Task
exports.tailwindPurge = createTailwindProd;
exports.scss = scss;
exports.scripts = scripts;

exports.dev = series(scss, scripts);
exports.build = series(createTailwindProd, scss, scripts);