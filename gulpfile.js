var gulp = require('gulp');
var php = require('gulp-connect-php');
var browserSync = require('browser-sync').create();

gulp.task('php', function(){
    php.server({base:'./', port:8010, keepalive:true});
});

gulp.task('browserSync',['php'], function() {
    browserSync.init({
        proxy:"localhost:8010",
        baseDir: "./",
        open:true,
        notify:false

    });
});

gulp.task('dev', [ 'browserSync'], function() {
   
  gulp.watch('./*.php', browserSync.reload);
});