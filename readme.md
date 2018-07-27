# An api sample run on the Android app

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Basically this is a starter kit for you to integrate Lumen with [JWT Authentication](https://jwt.io/).

## Quick Start

- Clone this repo or download it's release archive and extract it somewhere
- You may delete .git folder if you get this code via git clone
- Run composer install
- Run php artisan jwt:generate
- Configure your .env file for authenticating via database
- Run php artisan migrate --seed


## A Live PoC

**Run a PHP built in server from your root project:**
```
php -S localhost:8000 -t public/
```
**Or via artisan command:**
```
php artisan serve
```
To authenticate a user, make a POST request to /login with parameter as mentioned below:
```
username: admin
password: admin
```
**Request:**
```
/list?token={token}
or
/list/{id}?token={token}
```
**Response:**
```
{
    "id":1,
    "title":"CHANEL",
    "img":"\/images\/chanel.jpg",
    "created_at":"2018-06-12 09:17:30",
    "updated_at":null
}
```

## Related Android project

[Android source code](https://github.com/nimashafiei/AndroidWebSocketProject).

## License

The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
