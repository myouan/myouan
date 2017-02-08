var gulp         = require('gulp');
var sass         = require('gulp-sass');
var postcss      = require('gulp-postcss');
var cssnano      = require('cssnano');
var rename       = require('gulp-rename');
var uglify       = require('gulp-uglify');
var browserify   = require('browserify');
var babelify     = require('babelify');
var source       = require('vinyl-source-stream');
var browser_sync = require('browser-sync');
var autoprefixer = require('autoprefixer');
var rimraf       = require('rimraf');

var dir = {
  src: {
    css     : './src/scss',
    js      : './src/js',
    packages: 'src/packages'
  },
  dist: {
    css     : './assets/css',
    js      : './assets/js',
    packages: 'assets/packages'
  }
}

gulp.task('sass', function() {
  return gulp.src(dir.src.css + '/*.scss')
    .pipe(sass())
    .pipe(postcss([
      autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
      })
   ]))
    .pipe(gulp.dest(dir.dist.css))
    .pipe(postcss([cssnano()]))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest(dir.dist.css));
});

gulp.task('browserify', function() {
  return browserify(dir.src.js + '/app.js')
    .transform('babelify', { presets: ['es2015'] })
    .transform('browserify-shim')
    .bundle()
    .pipe(source('app.js'))
    .pipe(gulp.dest(dir.dist.js))
    .on('end', function() {
      gulp.src([dir.dist.js + '/app.js'])
        .pipe(uglify())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest(dir.dist.js));
    });
});

gulp.task('remove-packages-dir', function(cb) {
  rimraf(dir.dist.packages, cb);
});

gulp.task('copy-packages', ['remove-packages-dir'], function(cb) {
  var packages = [
    'node_modules/bootstrap/**',
    'node_modules/html5shiv/**',
    'node_modules/font-awesome/**'
  ];
  return gulp.src(packages, {base: 'node_modules'})
    .pipe(gulp.dest(dir.dist.packages));
});

gulp.task('build', ['sass', 'browserify', 'copy-packages']);

gulp.task('browsersync', function() {
  browser_sync.init({
    proxy: '127.0.0.1:8080',
    files: [
      '**/*.php',
      dir.dist.js + '/app.min.js',
      dir.dist.css + 'style.min.css'
    ]
  });
});

gulp.task('default', ['build', 'browsersync'], function() {
  gulp.watch([dir.src.css + '/**/*.scss'], ['sass']);
  gulp.watch([dir.src.js + '/**/*.js'], ['browserify']);
});
