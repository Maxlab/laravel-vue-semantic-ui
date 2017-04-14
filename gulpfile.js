var
  gulp         = require('gulp'),
  watch        = require('./resources/assets/semantic/tasks/watch'),
  build        = require('./resources/assets/semantic/tasks/build')
;


/*******************************
             Tasks
*******************************/
gulp.task('watch-ui', watch);
gulp.task('build-ui', build);