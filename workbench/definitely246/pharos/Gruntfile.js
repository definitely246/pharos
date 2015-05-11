module.exports = function(grunt)
{
    var tasks = {};
    var config = grunt.file.readJSON('package.json');

    //
    // concatenate all the files into a single js and css file
    //
    tasks.concat = {
        js: {
            src: config.assets.jsPaths,
            dest: config.assets.jsConcatFile
        },
        css: {
            src: config.assets.cssPaths,
            dest: config.assets.cssConcatFile
        }
    };



    //
    // minify our concatenated css file
    //
    tasks.cssmin = {
        css: {
            src: config.assets.cssConcatFile,
            dest: config.assets.cssMinifyFile
        }
    };



    //
    // minify our concatenated js file
    //
    tasks.uglify = { js: { files: { } } };
    tasks.uglify.js.files[config.assets.jsMinifyFile] = [config.assets.jsConcatFile];



    //
    // copy files into the correct places
    //
    tasks.copy = {
        main: {
            files: config.assets.copy
        },
        minifyjs: {
            src: config.assets.jsConcatFile,
            dest: config.assets.jsMinifyFile,
        },
        minifycss: {
            src: config.assets.cssConcatFile,
            dest: config.assets.cssMinifyFile,
        }
    };



    //
    // the watch task concats and minifies css/js anytime it sees changes
    //
    tasks.watch = {
        js: {
            files: config.assets.jsPaths,
            tasks: ['concat:js', 'copy:minifyjs', 'copy:main'],
            options: { livereload: true }
        },
        css: {
            files: config.assets.cssPaths,
            tasks: ['concat:css', 'copy:minifycss', 'copy:main'],
            options: { livereload: true }
        },
        reload: {
            files: [ config.assets.viewPath ],
            options: { livereload: true }
        },
        jsUnitTests: {
            files: config.jasmine.watchPaths,
            tasks: ['jasmine:unit']
        },
        phpUnitTests: {
            files: config.phpunit.watchPaths,
            tasks: ['phpunit']
        }
    };



    //
    // test phpunit stuff... woot, woot
    //
    tasks.phpunit = {
        classes: {
            dir: config.phpunit.testDirectory
        },
        options: {
            configuration: config.phpunit.configuration,
            logTap: config.phpunit.logFile,
            colors: true
        }
    },



    //
    // run unit tests with jasmine & phantomjs
    //
    tasks.jasmine = {
        unit: {
            src: config.jasmine.sources,
            options: {
                specs: config.jasmine.unitTests
            }
        }
    };



    //
    // configure grunt with these tasks
    //
    require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);
    grunt.initConfig(tasks);
    grunt.registerTask('default', ['watch']);
    grunt.registerTask('build', ['concat', 'cssmin', 'uglify', 'copy:main']);
    grunt.registerTask('test', ['phpunit', 'jasmine']);
}