// Dependencies
const path = require('path')
const gulp = require('gulp')
const clean = require('gulp-clean')

// SCSS
const sass = require('gulp-sass')
const base64 = require('gulp-css-base64')
const autoprefixer = require('gulp-autoprefixer')
const cleanCSS = require('gulp-clean-css')

// JS
const babel = require('gulp-babel')
const uglify = require('gulp-uglify')

// Define the plugins destination folder.
const themePath = path.resolve(__dirname + '/wordpress/wp-content/themes/trainhack')


/**
 * CSS methods
 */
gulp.task('scss', () => {
  return gulp.src('./src/**/*.scss')
    .pipe(base64())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(gulp.dest(themePath))
})


/**
 * JS methods
 */
gulp.task('js', () => {
  return gulp.src(['./src/assets/js/**/*.js'])
    .pipe(babel({
      presets: ['es2015-nostrict', 'babel-preset-es2016', 'babel-preset-es2017', 'babel-preset-stage-2']
    }))
    .pipe(uglify())
    .pipe(gulp.dest(themePath + '/assets/js'))
})


/**
 * Static file methods
 */
gulp.task('static', () => {
  return gulp.src(['./src/**/*.php', './src/**/*.svg', './src/**/*.png', './src/**/*.jpg', './src/**/*.txt', './src/**/*.json'])
    .pipe(gulp.dest(themePath))
})

gulp.task('libs', () => {
  return gulp.src(['./src/assets/libs/**/*.js', './src/assets/libs/**/*.css'])
    .pipe(gulp.dest(themePath + '/assets/libs'))
})


/**
 * Gulp processes
 */
gulp.task('watch', () => {
  gulp.watch(['./src/**/*.php', './src/**/*.svg', './src/**/*.png', './src/**/*.jpg', './src/icon.txt'], ['static'])
  gulp.watch(['./src/assets/libs/**/*.js', './src/assets/libs/**/*.css'], ['libs'])
  gulp.watch('./src/**/*.scss', ['scss'])
  gulp.watch('./src/**/*.js', ['js'])
})

gulp.task('clean', () => {
  return gulp.src(themePath, { read: false })
    .pipe(clean({ force: true }))
})

gulp.task('build', ['static', 'libs', 'scss', 'js'])
gulp.task('default', ['static', 'libs', 'scss', 'js', 'watch'])
