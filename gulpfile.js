var gulp = require('gulp'),
  concat = require('gulp-concat'),
  uglify = require('gulp-uglify'),
  minifycss = require('gulp-minify-css'),
  connectPHP = require('gulp-connect-php'),
  livereload = require('gulp-livereload');

gulp.task('todo', function () {
  gulp.src('js/src/*.js').pipe(concat('todo.min.js')).pipe(uglify()).pipe(gulp.dest('js/'))
});

gulp.task('style', function () {
  gulp.src('css/src/*.css').pipe(concat('style.min.css')).pipe(minifycss()).pipe(gulp.dest('css/'))
});

gulp.task('components', function (){
  gulp.src('php/components/*.php').pipe(concat('components.php')).pipe(gulp.dest('php/'))
})

gulp.task('functions', function (){
  gulp.src('php/functions/*.php').pipe(concat('functions.php')).pipe(gulp.dest('php/'))
})

gulp.task('watch', function(){
  gulp.watch('js/src/*.js', ['todo']);
  gulp.watch('css/src/*.css', ['style']);
  gulp.watch('php/components/*.php', ['components']);
  gulp.watch('php/functions/*.php', ['functions']);
});

gulp.task('connect-php', function() {
  connectPHP.server({
    hostname: '0.0.0.0',
    port: 9000,
    livereload: true
  });
});

gulp.task('default', ['watch','connect-php']);
