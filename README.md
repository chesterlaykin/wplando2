

- [Install the project with Lando for local development](#install-the-project-with-lando-for-local-development)
- [Local development url](#local-development-url)
- [Sage theme "wplando2"](#sage-theme-wplando2)
  - [Theme folder](#theme-folder)
  - [Install composer and npm packages](#install-composer-and-npm-packages)
  - [Start development server](#start-development-server)

# Install the project with Lando for local development

First you need Lando to be installed.

Run commands:
```
lando start
```

```
lando composer install
```

# Local development url
http://wplando2.lndo.site/

# Sage theme "wplando2"

## Theme folder

Theme folder: `web/app/themes/wplando2` 

## Install composer and npm packages

go to theme folder and run:

```
lando yarn
```

```
lando yarn build
```

```
lando composer install
```

## Start development server

go to theme folder and run:

```
yarn start
```
