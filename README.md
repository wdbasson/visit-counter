# Synopsis

This repo serves as an introduction to containerization for interns at our lab.

## Description

The vanilla example demonstrates a simple stateful site visit counter in a PHP container.

Two core concepts are conveyed in the vanilla example: 1) how to build your own docker from Dockerfile, and 2) how to mount a volume inside of a docker.

The progression from the vanilla example is documented in [docs/README.md](../development/docs/README.md) where interns should incrementally build on the vanilla example in order to finally replace the functionality of the countlog.txt text file with a SQL DB running in a different container.

## How to build
```
docker build -t zenlab/visit-counter .
```

# How to run
## run with docker image built from Dockerfile
```
docker run --rm \
  -p 80:80 \
  --name visit-counter \
  zenlab/visit-counter
```
## run with official php docker image
```
docker run --rm \
  -p 80:80 \
  --name php \
  -v "$PWD/scripts":/var/www/html \
  php:7.0-apache
```

# How to overwrite the web root with a volume at runtime
```
docker run --rm \
  -p 80:80 \
  --name visit-counter \
  -v "$PWD/scripts":/var/www/html \
  zenlab/visit-counter
```

# How to access
```
http://localhost/visit.counter
```
or
```
http://localhost/php.info
```

# Acknowledgments

Code adapted from http://justintadlock.com/web-design/counter

Docker image extended from https://hub.docker.com/_/php/
