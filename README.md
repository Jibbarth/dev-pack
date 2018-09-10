# DevPack for Symfony

This is a Flex pack to install multiple dev tools.

## Why

On Symfony, we create a project rapidly using composer :

```bash
composer create-project symfony/skeleton
```

After, we just have to require some [pack dependencies](http://fabien.potencier.org/symfony4-unpack-the-packs.html), and thanks to [flex](https://github.com/symfony/flex), all is configured.

But, for some time, when I start a new project, I add dev-dependencies to improve code quality and keep it in the long run, so I grouped them in this pack with pre-configured files.

It allows me to have clean codes rules to share with project team, and avoid useless discussion in Code Reviews.

![When using tabs instead space](https://ljdchost.com/vEKPc7F.gif)

## Installation and usage

For the following, I assume you just freshly created a new Symfony Project.

Require the pack as dev dependency

```bash
composer require --dev barth/dev-pack
```

You now have [my list of dev tools](#list-of-installed-packages), with preconfigured files.
Don't hesitate to alterate with your settings or feel free to fork this repo to have your own list and settings.

## Cleaning / Unpack

Because it's a **symfony-pack**, you may want to unpack it to keep only required dependencies and no more **barth/dev-pack** in your **composer.json**.

:warning: I don't recommand to require this pack direclty with the **--unpack** flex option.
If you do this, you won't have the preconfigured files.

To do this properly, unpack it after install:

```bash
composer unpack barth/dev-pack
```

Then, you can also remove [endroid/installer](https://github.com/endroid/installer)
which provides a composer plugin to copy file from my pack.

```bash
composer remove --dev endroid/installer
```

## List of installed packages

### [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)

This is the most well-known tool in the PHP community, configured with PSR2 ruleset.

### [PHPMD - Mess Detector](https://phpmd.org/)

This tool focuses on the form of the code.
Here are the different rules it enforces:

- [Clean Code Rules](https://phpmd.org/rules/index.html#clean-code-rules): Do not pass a boolean as a parameter of a function, avoid `else` and access in` static`.
- [Code Size Rules](https://phpmd.org/rules/index.html#code-size-rules): A class too long, a method that takes too much parameter, a function too complicated, it's here that it happens.
- [Controversial Rules](https://phpmd.org/rules/index.html#controversial-rules): Controversial rules... They focus on naming, especially through the use of CamelCase.
- [Design Rules](https://phpmd.org/rules/index.html#design-rules): A collection of rules that detect problems with software design.
- [Naming Rules](https://phpmd.org/rules/index.html#naming-rules): Rules on names of variables, methods, classes - too long, too short, etc.
- [Unused Code Rules](https://phpmd.org/rules/index.html#unused-code-rules): Detects unused pieces of code.

### [PHPStan - Static Analysis Tool](https://github.com/phpstan/phpstan)

This tool prevents potential bugs before even executing the code. You can see [list of its features](https://github.com/phpstan/phpstan#consider-supporting-it-on-patreon-so-im-able-to-make-it-even-more-awesome ) and even test it [online](https://phpstan.org/)

### [Sensio Security Checker](https://github.com/sensiolabs/security-checker)

This tool will not avoid us (or very little) return code reviews, but ensures that our dependencies installed via [composer](https://getcomposer.org) do not contain known security vulnerabilities.

### [PHPCPD - Copy / Paste Detector](https://github.com/sebastianbergmann/phpcpd)

Very useful to refactor code and avoid having identical pieces of code in several places of a project.

### [PHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)

Similar to PHP CodeSniffer, it offers in my opinion a simpler configuration, and fixes errors in a command line.

### [GrumPHP](https://github.com/phpro/grumphp)

Allows to orchestrate all these tools on the precommit hook.

## Contribute

First of all, thank you for contributing :heart:

Keep in mind that if you add tools, I certainly accept only if fits with my own needs.
Don't hesitate to fork this project to fit with your organization needs.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
