Growl Flash Messages
====================
Widget to output flash messages as growls.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist derekisbusy/yii2-flash-growl "1.*"
```

or add

```
"derekisbusy/yii2-flash-growl": "1.*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php

// add flash messages under category growl...
Yii::$app->getSession()->addFlash('growl', [
    'type' => 'success',
    'duration' => 1500,
    'icon' => 'fa fa-success',
    'title' => 'Success!',
    'message' => 'Action has been performed.',
]);

// Display growls in your view...
echo  \derekisbusy\growl\FlashGrowlWidget::widget();

// Or render the _growl view in the controller if you only need to render the growls...
return $this->renderAjax('@derekisbusy/growl/_growl');

```