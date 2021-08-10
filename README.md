[![Build Status](https://www.travis-ci.com/DMoest/MVC-Framework.svg?branch=master)](https://www.travis-ci.com/DMoest/MVC-Framework)  
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/DMoest/MVC-Framework/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/DMoest/MVC-Framework/?branch=master)  
[![Code Coverage](https://scrutinizer-ci.com/g/DMoest/MVC-Framework/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/DMoest/MVC-Framework/?branch=master)  
[![Build Status](https://scrutinizer-ci.com/g/DMoest/MVC-Framework/badges/build.png?b=master)](https://scrutinizer-ci.com/g/DMoest/MVC-Framework/build-status/master)  
[![Code Intelligence Status](https://scrutinizer-ci.com/g/DMoest/MVC-Framework/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)  



# MVC Course - PHP Frameworks 2021

Repository for the course MVC at Bleking Institute of Technologies.

The course MVC is part of the education webbprogramming 120hp at Blekinge Institute of Technology.
Course pages for all the exercises and assignments made in this repository are published at:

* [Link: DB-Webb, MVC course page](https://dbwebb-se.github.io/mvc/)

All information supporting this course is created by the DB-webb team, a part of the faculty at BTH. For further information please checkout the website.

This part of the course introduces frameworks for object oriented programming with PHP and a few things more for web application development.
We are exploring subjects as a framework of choice, ORM for databases in frameworks, test driven developement through unit tests and continuous integreation testing with Travis CI and Scrutinizer.

Notice the tags starts at v.4.0.0, this is intended to say its part 4 in the course MVC. 
If you are interested in the previous work done for this course you will find them in [this repository](https://github.com/DMoest/MVC).

* * *

### Checkout the application:
1. Clone the repository.

2. Make sure you have the latest version of `Composer` and `Make` installed on your local environment:  
    To check your version of `Composer` run the following commands:  
    * `Composer`, run `which composer` and then `composer --version`.  
    * `Make`, run `which make` and then `make --version`.  
    * If you intend to work with this project you need `npm` to install `node modules`. Run `which npm` and `npm --version` to check if you have it installed.
    *If not installed, make sure to install what you need.*

3. Install project dependencies:  
   *If you are in doubt with what is about to be install into you local environment. Dependencies for the project are declared in `composer.json` and `package.json`.*
      * Navigate to the project root in the folder `app/` through your command line terminal.
      * Run the command `make install`.
      * If you intend to work with the project also run `npm install`.

4. Compile router cache files and other necessities for Laravel to run as intended:  
   * Make sure to cache the routes with `php artisan optimize`.  

5. Start a local webserver and run the application:  
   * Run the command `php artisan serve` and run the application your preferred browser at `localhost:8000/`.  

   *You should be good to go now!*

<br>




* * *

```
 .
..:  2021 Daniel Andersson, daap19. Student @ BTH.
```
