module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        less: {
            development: {
                options: {
                    compress: false,
                    cleancss:false,
                    optimization: 2,
                    sourceMap: true,
                    sourceMapFilename: 'public/css/site.css.map',
                    sourceMapURL: '/css/site.css.map',
                    sourceMapRootpath: '/',
                    outputSourceFiles: true
                },
                files: {
                    "public/css/site.css": "public/less/init.less"
                }
            }
        },
        autoprefixer: {
            dist: {
                options: {
                    browsers: ['last 2 versions', 'ie 8', 'ie 9']
                },
                src: 'public/css/site.css',
                dest: 'public/css/site.dist.css'
            }
        },
        watch: {
            styles: {
                files: ['public/less/**/*.less'], // which files to watch
                tasks: ['less'],
                options: {
                    nospawn: true
                    }
                },
            css: {
                files: ['public/css/site.css'], // which files to watch
                tasks: ['autoprefixer:dist']        
                
                }
            
        },
          bower: {
            install: {
               //just run 'grunt bower:install' and you'll see files from your Bower packages in lib directory
               options: {
                   targetDir:'public/assets'
               }
            }
          }

    });

    // Load the plugin that provides the "uglify" task.
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-bower-task');
    // Default task(s).
    grunt.registerTask('default', ['watch']);
    
    grunt.registerTask('restorer', ['bower:install', 'less:development', 'autoprefixer:dist']);

    
};