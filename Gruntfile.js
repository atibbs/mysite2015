module.exports = function(grunt) {
 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        jshint: {
            files: [
                'wp-content/themes/andrewtibbs2015/js/site.js'
            ],
            options: {
                expr: true,
                globals: {
                    jQuery: true,
                    console: true,
                    module: true,
                    document: true
                }
            }
        },
        sass: {
            dist: {
                options: {
                    banner: '/*! <%= pkg.name %> <%= pkg.version %> filename.min.css <%= grunt.template.today("yyyy-mm-dd h:MM:ss TT") %> */\n',
                    style: 'compressed'
                },
                files: [{
                    expand: true,
                    cwd: 'wp-content/themes/andrewtibbs2015/css/scss',
                    src: [
                        '*.scss'
                    ],
                    dest: 'wp-content/themes/andrewtibbs2015/css',
                    ext: '.min.css'
                }]
            },
            dev: {
                options: {
                    banner: '/*! <%= pkg.name %> <%= pkg.version %> filename.css <%= grunt.template.today("yyyy-mm-dd h:MM:ss TT") %> */\n',
                    style: 'expanded'
                },
                files: [{
                    expand: true,
                    cwd: 'wp-content/themes/andrewtibbs2015/css/scss',
                    src: [
                        '*.scss'
                    ],
                    dest: 'wp-content/themes/andrewtibbs2015/css',
                    ext: '.css'
                }]
            }
        },

    });
 
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-sass');
    //grunt.loadNpmTasks('grunt-contrib-uglify');
 
    grunt.registerTask('default', [
        'jshint',
        //'uglify:dev',
        //'uglify:dist',
        'sass:dev',
        'sass:dist'
    ]);
 
};