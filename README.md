# PusheNotificationBundle
PHP pushe.co API wrapper for Symfony applications 

## Install

Via Composer

``` bash
composer require borsaco/pushe-notification-bundle
```

## Initialise

first initialise with this code and token you get from http://poushe.co 

Edit your app/AppKernel.php to register the bundle in the ```registerBundles()``` method as above:
```php
class AppKernel extends Kernel
{

    public function registerBundles()
    {
        $bundles = array(
            // ...
            // register the bundle here
            new Borsaco\PusheNotificationBundle\PusheNotificationBundle()
        );
    }
}
```
then you have to config token for send notification you can get token from pushe.co and add configure in your config file:

```yml
pushe_notification:
    token: "7fb1***********29b464c"
```

## Usage

Wherever you have access to the service container :

```php
$pushNotification = $this->container->get('pushe_notification');
$pushNotification->send();
```

## More
You can find more help in https://github.com/Borsaco/PusheNotification
