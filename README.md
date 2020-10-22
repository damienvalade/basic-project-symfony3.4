# Projet basique SF 3.4

Mise en route projet symfony 3.4

## Creation projet

Symfony 3.4 [doc](https://symfony.com/doc/3.4/index.html)
```
symfony new project-name --version=3.4
```

Profiler Bar
```
composer require --dev symfony/profiler-pack
```

## Bundle require

Twig [doc](https://twig.symfony.com/doc/2.x/)
```
composer require twig-bundle
```

Doctrine [doc](https://symfony.com/doc/3.4/doctrine.html)
```
composer require doctrine
```

Maker [doc](https://symfony.com/doc/current/bundles/SymfonyMakerBundle/index.html)
```
composer require maker-bundle 
```

Fixture [doc](https://symfony.com/doc/master/bundles/DoctrineFixturesBundle/index.html)
```
composer require doctrine/doctrine-fixtures-bundle
```

Form [doc](https://symfony.com/doc/3.4/forms.html)
```
composer require form
```

Security [doc](https://symfony.com/doc/3.4/security.html)
```
composer require validator security
```

## Bootstrap & JQuery & Font-Awesome CDN

Bootstrap v3.3.7 [doc](https://getbootstrap.com/docs/3.4/)

CSS
```
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
  integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
```


JS
```
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
 integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
 crossorigin="anonymous"></script>     
```

Font-Awesome [doc](https://fontawesome.com/v3.2.1/get-started/)
```
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
```

Jquery 
```
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
```

## Use Doctrine

Create database
```
php bin/console doctrine:database:create
```

Make entity
```
php bin/console make:entity
```

Create migration
```
php bin/console make:migration
```

Migrate
```
php bin/console doctrine:migrations:migrate
```

## Use fixture

Load data / With options help
```
php bin/console doctrine:fixtures:load

or

php bin/console doctrine:fixtures:load --help
```

## Create register form

Make user
```
php bin/console make:user
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```

Make register form 
```
php bin/console make:registration-form
```

Make auth / login - logout
```
php bin/console make:auth
```