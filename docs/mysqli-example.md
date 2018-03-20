### PHP-mysql integration

## Task
Extend v1.0 release to integrate with mysql and replace the countlog.txt text file functionality with a DB.

## Supporting example

Run official mysql docker
```
docker run --name some-mysql -e MYSQL_ROOT_PASSWORD=my-secret-pw -d mysql:5
```

Checkout visit-counter repo and run tommylau example with modified index.php
```
git clone https://github.com/wdbasson/visit-counter
cd visit-counter
docker run --rm \
  -v $(pwd)/examples/mysqli-example:/app \
  -w /app \
  --link some-mysql \
  tommylau/php php index.php
```

# Tips

To install mysqli PHP extention see official PHP docker hub on how to install PHP core extentions: https://hub.docker.com/_/php/

To add mysql extention to docker image add the following to Dockerfile:

```
RUN docker-php-ext-install -j$(nproc) mysqli
```


## Acknowledgements

Adapted from https://www.shiphp.com/blog/2017/php-mysql-docker
