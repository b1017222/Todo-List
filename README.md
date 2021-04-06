# docker-laravel 🐳

![License](https://img.shields.io/github/license/ucan-lab/docker-laravel?color=f05340)
![Stars](https://img.shields.io/github/stars/ucan-lab/docker-laravel?color=f05340)
![Issues](https://img.shields.io/github/issues/ucan-lab/docker-laravel?color=f05340)
![Forks](https://img.shields.io/github/forks/ucan-lab/docker-laravel?color=f05340)

## Introduction

Build a simple laravel development environment with docker-compose.

## Usage

```bash
$ git clone git@github.com:ucan-lab/docker-laravel.git
$ cd docker-laravel
$ make create-project # Install the latest Laravel project
$ make install-recommend-packages # Not required
```

http://localhost

Read this [Makefile](https://github.com/ucan-lab/docker-laravel/blob/master/Makefile).

## Tips

Read this [Wiki](https://github.com/ucan-lab/docker-laravel/wiki).

## Laravel関連

[ここ](https://github.com/b1017034/docker-laravel/blob/main/Laravel_commands.md)

```bash
$ docker-compose down -v && docker-compose up
```
