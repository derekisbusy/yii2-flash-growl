Growl Flash Messages
====================
Widget to output all flash messages as growls.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist derekisbusy/yii2-flash-growl "*"
```

or add

```
"derekisbusy/yii2-flash-growl": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \derekisbusy\growl\AutoloadExample::widget(); ?>```