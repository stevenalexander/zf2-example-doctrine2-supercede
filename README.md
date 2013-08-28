ZF2 with Doctrine 2 Supercede model
=======================

Introduction
------------
This is an example Zend Framework 2 application using Doctrine 2 ORM to implement entity versioning using the supercede model. This is forked off my [original repo](https://github.com/stevenalexander/zf2-example-doctrine2) showing the setup of a ZF2 application with Doctrine 2.

Creation Steps
--------------

Creation Steps
--------------

1.Create ZF2 project from skeleton using composer

```
curl -s https://getcomposer.org/installer | php --
php composer.phar create-project -sdev --repository-url="http://packages.zendframework.com" zendframework/skeleton-application zf2-example-doctrine2
```

2.Update composer.json to require Doctrine 2

```
php composer.phar self-update
php composer.phar require doctrine/doctrine-module:dev-master
php composer.phar require doctrine/doctrine-orm-module:dev-master
```

3.Install ZF Dev tools

```
php composer.phar require zendframework/zend-developer-tools:dev-master
```

4.Copy ZF Dev tools autoload config to application config and add modules

```
cp vendor/zendframework/zend-developer-tools/config/zenddevelopertools.local.php.dist config/autoload/zdt.local.php
```

Edit config/application.config.php:

```
...
'modules' => array(
    'ZendDeveloperTools',
    'DoctrineModule',
    'DoctrineORMModule',
    'Application',
),
...
```

5.Add the Entity folder (will contain generated entity classes)

```
mkdir module/Application/src/Application/Entity
```

6.Add the Doctrine Driver to application config

Edit config/module.config.php:

```
return array(
    'doctrine' => array(
        'driver' => array(
            'application_entities' => array(
                'class' =>'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/Application/Entity')
            ),

            'orm_default' => array(
                'drivers' => array(
                    'Application\Entity' => 'application_entities'
                )
            )
        )
    ),
    ...
```

7.Add database config for Doctrine

New file local.php:

```
<?php

return array(
);
```

New file config/autoload/doctrine.local.php (for local MySql):

```
<?php

return array(
  'doctrine' => array(
    'connection' => array(
      'orm_default' => array(
        'driverClass' =>'Doctrine\DBAL\Driver\PDOMySql\Driver',
        'params' => array(
          'host'     => 'localhost',
          'port'     => '3306',
          'user'     => 'username',
          'password' => 'password',
          'dbname'   => 'database',
)))));
```

Links
-----
* [ZF2](http://framework.zend.com/)
* [Doctrine 2](http://www.doctrine-project.org/)
* [Slowly changing dimension style entity versioning](http://en.wikipedia.org/wiki/Slowly_changing_dimension#Type_II)