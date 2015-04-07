module.exports = function(grunt) {
 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            dist: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'wp-content/themes/andrewtibbs2015/style.css': 'wp-content/themes/andrewtibbs2015/css/scss/style.scss'
                }
            } 
        },
        watch: {
           css: {
                files: ['wp-content/themes/andrewtibbs2015/css/scss/*.scss'],
                tasks: ['sass'],
                options: {
                    spawn: false,
                }
            }
        }
    });
 
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
 
    grunt.registerTask('default', ['sass','watch']);
 
};