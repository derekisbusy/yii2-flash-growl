<?php

/**
 * @copyright Copyright &copy; Derek Gifford, 2016 - 2017
 * @package derekisbusy/yii2-flash-growl
 * @version 1.0.0
 *
 * @author derekisbusy https://github.com/derekisbusy
 */

namespace derekisbusy\growl;

use Yii;
use yii\helpers\Html;

class FlashGrowlWidget extends \yii\base\Widget
{
    public function run()
    {
        foreach (Yii::$app->session->getAllFlashes(true)['growl'] as $message):
            echo \kartik\widgets\Growl::widget([
                'type' => (!empty($message['type'])) ? $message['type'] : 'danger',
                'title' => (!empty($message['title'])) ? Html::encode($message['title']) : 'Title Not Set!',
                'icon' => (!empty($message['icon'])) ? $message['icon'] : 'fa fa-info',
                'body' => (!empty($message['message'])) ? Html::encode($message['message']) : 'Message Not Set!',
                'options' => (!empty($message['options'])) ? $message['options'] : [],
                'showSeparator' => true,
                'delay' => 1,
                'pluginOptions' => [
                    'showProgressbar' => false,
                    'delay' => (!empty($message['duration'])) ? $message['duration'] : 3000, //This delay is how long the message shows for
                    'placement' => [
                        'from' => (!empty($message['positonY'])) ? $message['positonY'] : 'top',
                        'align' => (!empty($message['positonX'])) ? $message['positonX'] : 'right',
                    ]
                ]
            ]);
        endforeach;
    }
}
