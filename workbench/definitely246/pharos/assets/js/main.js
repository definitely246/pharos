
// creates the pageData module
angular.module('common', ['ngMessages']).value('pageData', window.appPageData);

// create the resources module
angular.module('resources', ['common']);

// create the main module that depends on all the other modules
angular.module('main', ['resources']);