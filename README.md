# Corona Cases

## Overview

A simple app built with Laravel Valet (works on Mac OS) that shows, creates, edits and deletes the number of Corona cases in the countries with the highest number of cases in the World on July 22, 2020 to demonstrate CRUD functionality using this framework.

### Resources used

* Laravel framework version 7.4
* Bootstrap CSS framework
* MySQL database

#### Installation

* Laravel PhP Framework : https://laravel.com/docs/7.x/installation
* MySQL DB: https://dev.mysql.com/doc/mysql-getting-started/en/

##### Tutorials to install Laravel correctly for this app to run

https://medium.com/ariel-mejia-dev/install-laravel-valet-on-mac-6e5229cba1e <br>

* to install composer, please just use
```brew install composer ```
 (this tutorial gives an old version for it). 
* Laravel Valet looks for a directory called /Sites and runs the app from there. The repo has to be cloned to that directory(the pathing in the tutorial above is slightly different)
* ``` valet park ```
command is needed once the correct directory is cd -ed into. Alternatively, the 
``` valet link [project name] ```
also works.


### To run this project:


```
git clone https://github.com/SowmyaAji/CoronaCases.git

cd [cloned directory]

composer install

copy .env.example .env

php artisan key:generate

```

And then, to seed the database afresh:

```

php artisan migrate:fresh --seed

```

### Routes:

* valet runs this project in the browser on the address http://corona.test/coronas
* to get a single case: http://corona.test/coronas/{id}
* to add new data: http://corona.test/coronas/create
* to update/edit, use the button
* to delete, use the button

#### API endpoints for json data:
**** GET requests <br>
* http://corona.test/api/coronas
* http://corona.test/api/coronas/{id}
<br>
**** POST request <br>
* http://corona.test/api/coronas
<br><br>
**** PUT request <br>
*  http://corona.test/api/coronas/{id}
<br><br>
**** DELETE request <br>
*  http://corona.test/api/coronas/{id}
<br><br>

**** Sample payload to test the API on Postman <br>
{
	
    "country_name": "Italy",
    "symptoms": "Lombardy, Piedmont, Emilia-Romagna, Venito, Tuscany have the highest cases.",
    "cases": 245000,
    "fatalities": 35082

	
}

<br><br>




<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

### About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
