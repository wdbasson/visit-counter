This repo demonstrates a simple site visit counter in a PHP docker.

# How to build
```
docker build -t zenlab/visit-counter .
```

# How to run
```
docker run -dti \
  -p 80:80 \
  --name visit-counter \
  -v "$PWD/scripts":/var/www/html \
  zenlab/visit-counter
```

# How to access
```
http://localhost/visit.counter
```

# Acknowledgments

Code adapted from http://justintadlock.com/web-design/counter

Docker image extended from https://hub.docker.com/_/php/
