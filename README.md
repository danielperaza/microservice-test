# microservice-test

I included a `docker-compose.yml` in case you don't have PHP installed on your system or if you wish to use Docker instead of PHP's buil-in web server.

## Using Docker
Make sure you have docker installed on your system and there is no other processess using port 80 on your local. Then run:

```
cd /path/to/your/local/working/copy
docker-compose up -d
```


## Using PHP's built-in web server:
```
cd /path/to/your/local/working/copy
php -S localhost[:port]
```

Where `[:port]` is an optional port on your system in case you don't want to use the default port `80`

