Pharos
=======

Create resources and api json endpoints in Laravel in mere seconds. Also comes with a nifty javascript helper that will blow your mind. -_^


- Have Quickstart (composer stuff, server provider stuff)

- Have 5 minute walk through building some blog app or something.

- How to get websockets part running. (Later)


## Contributing and Testing

I took great care to test this application. If you want to contribute to the project, you must write tests for javascript and php. Grunt will run both jasmine/phantomjs + phpunit tests continously for you and here is the process I use to get my tests running all the time.

```
bower install
npm install
grunt
```

**Note** I will likely use protractor to run e2e tests if I need those, for now I'm just focusing on unit testing.