# Short urls

HTTP API service to create short urls


## Getting Started


### Installing

* Clone project from repository
```
git clone git@github.com:Kapral87/short_urls.git
```
Or download zip archive

* Copy .env.example to .env and set variables
```
DB_DATABASE={db_name}
DB_USERNAME={user_name}
DB_PASSWORD={user_password}
```

* Execute commands to install and update dependencies
```
composer install
composer update
```

* Migrate database structure
```
php artisan migrate
```


### Executing program

* Send POST request to API endpoint {current_project_domain}/api/v1/short_urls to create short url


Required header
Accept: application/json

Required POST params
unique_id - short_url_part after domain name. Example {current_project_domain}/{unique_id}
long_url - url, which you want to make short



* Success response

```
{
    "unique_id": {unique_id},
    "long_url": {long_url},
    "short_url": {short_url}
}

```

unique_id and long_url - were send with POST create request
short_url - result short url


* Error response

```
{
    "message": "The given data was invalid.",
    "errors": {
        "unique_id": [
            "A unique_id already exists"
        ]
    }
}

```

message - error message
errors - array of errors, where key is error field and value is array of error messages for that field

### Comments

Eloquent ORM in Laravel escape strings to avoid sql injection. So no need in additional checks.