# Drupal Code Check

A Git pre-commit hook to check Drupal Coding Standards and more.

[![Latest Stable Version](https://poser.pugx.org/jover_be/drupal-code-check/v/stable)](https://packagist.org/packages/jover_be/drupal-code-check) [![Total Downloads](https://poser.pugx.org/jover_be/drupal-code-check/downloads)](https://packagist.org/packages/jover_be/drupal-code-check) [![Latest Unstable Version](https://poser.pugx.org/jover_be/drupal-code-check/v/unstable)](https://packagist.org/packages/jover_be/drupal-code-check) [![License](https://poser.pugx.org/jover_be/drupal-code-check/license)](https://packagist.org/packages/jover_be/drupal-code-check) [![composer.lock](https://poser.pugx.org/jover_be/drupal-code-check/composerlock)](https://packagist.org/packages/jover_be/drupal-code-check)

## Description

This Git pre-commit hook will be active on your Composer based Drupal project.

Things which will be checked in the pre-commit hook:

* Syntax checking using _PHP Linter_
* Automatically try to match code style via _PHP Code Sniffer Beautifier and Fixer_
* Coding standards checking using _PHP Code Sniffer_
* Blacklisted strings checking/validation

Note that files of the following origins are **not checked**:

* Drupal Core
* Contributed Modules
* Contributed Libraries
* Contributed Themes
* Contributed Profiles

## Getting started

### Prerequisites

* Composer
* Composer based Drupal project
* PHP 5.4 or higher

### Installation

Add this code to "repositories" part of composer.json

```
    {
      "type":"package",
      "package": {
        "name": "geo0000/drupal-code-check",
        "version":"master",
        "source": {
          "url": "https://github.com/geo0000/drupal-code-check.git",
          "type": "git",
          "reference":"master"
        },
        "autoload": {
          "classmap": ["/"]
        },
        "require": {
          "php": ">=5.4",
          "drupal/coder": "~8.2",
          "symfony/console": "~2.8|~3.0",
          "symfony/process": "~2.8|~3.0"
        }
      }
    }
```

Add this line to "require" part of composer.json
```
"geo0000/drupal-code-check": "master"
```

Add this code to "scripts" part of composer.json
```
    "post-install-cmd": [
      "geo0000\\drupal_code_check\\GitHooks::create"
    ],
    "post-update-cmd": [
      "geo0000\\drupal_code_check\\GitHooks::create"
    ]
```

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
