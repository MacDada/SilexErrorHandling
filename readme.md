# SilexErrorHandling


## What is it?

It's a test project, to choose the best (working?) error handling configuration for Silex.

Check out `web/index.php` file.

## Goals?

* `php.ini`: `display_errors = Off` – we shouldn't see any errors by default
* production usage: nice error page (not a blank page)
* debugging: stacktrace (would be nice if it was shown by Silex, not Xdebug)


## What's recommended/required to use it?

* git
* composer
* vagrant
* ansible


## How to install it?

* add `10.66.1.114 silexerrorhandling.local` to your `/etc/hosts`
* `git clone`
* `composer install`
* `vagrant up`
* `vagrant ssh`
* browse [http://silexerrorhandling.local](http://silexerrorhandling.local)


## How to use it?

##### Working pages:

* [http://silexerrorhandling.local/](http://silexerrorhandling.local/)
* [http://silexerrorhandling.local/?debug=1](http://silexerrorhandling.local/?debug=1)

##### Exception pages:

* [http://silexerrorhandling.local/exception](http://silexerrorhandling.local/exception)
* [http://silexerrorhandling.local/exception?debug=1](http://silexerrorhandling.local/exception?debug=1)
* [http://silexerrorhandling.local/exception?debug=2](http://silexerrorhandling.local/exception?debug=2)
* [http://silexerrorhandling.local/exception?debug=3](http://silexerrorhandling.local/exception?debug=3)
* [http://silexerrorhandling.local/exception?debug=4](http://silexerrorhandling.local/exception?debug=4)
* [http://silexerrorhandling.local/exception?debug=5](http://silexerrorhandling.local/exception?debug=5)
* [http://silexerrorhandling.local/exception?debug=6](http://silexerrorhandling.local/exception?debug=6)
* [http://silexerrorhandling.local/exception?debug=7](http://silexerrorhandling.local/exception?debug=7)

##### Error pages:

* [http://silexerrorhandling.local/error](http://silexerrorhandling.local/error)
* [http://silexerrorhandling.local/error?debug=1](http://silexerrorhandling.local/error?debug=1)
* [http://silexerrorhandling.local/error?debug=2](http://silexerrorhandling.local/error?debug=2)
* [http://silexerrorhandling.local/error?debug=3](http://silexerrorhandling.local/error?debug=3)
* [http://silexerrorhandling.local/error?debug=4](http://silexerrorhandling.local/error?debug=4)
* [http://silexerrorhandling.local/error?debug=5](http://silexerrorhandling.local/error?debug=5)
* [http://silexerrorhandling.local/error?debug=6](http://silexerrorhandling.local/error?debug=6)
* [http://silexerrorhandling.local/error?debug=7](http://silexerrorhandling.local/error?debug=7)


## Conclusions?

* Exceptions? Silex error pages shown (with stacktrace if in debug) – `COOL :)`
* Errors? No recommended ways work. Just a blank page. `BLAH :(`
* Errors? `ini_set('display_errors', 1);` gives `Xdebug` stacktrace. `BLAH :|`
* Am I doing something wrong?
