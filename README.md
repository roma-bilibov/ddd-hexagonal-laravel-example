<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## DDD + Hexagonal Architecture using Laravel

This project is used to create a clean laravel instalation + DDD + Hexagonal Architecture. 

### Choosing Your Sail Services
When creating a new Laravel application via Sail, you may use the with query string variable to choose which services should be configured in your new application's docker-compose.yml file. Available services include mysql, pgsql, mariadb, redis, valkey, memcached, meilisearch, typesense, minio, selenium, and mailpit:

```
curl -s "https://laravel.build/example-app?with=mariadb,redis,memcached,mailpit" | bash
```

After Sail downloaded all the containers and installed laravel you can run the app:
```
cd example-app && ./vendor/bin/sail up
```
Create a shortcut for sail in your ~/.bashrc
```
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```
Use this command to automatically create ddd structure for a domain. You need to specify the bundled context and the domain. In this example(bundled context: platform and domain: purchase)
```
sail artisan make:ddd platform purchase
```