<?php

namespace vladbara705\statistics;

use yii\base\BootstrapInterface;

/**
 * Class Bootstrap
 * @package vladbara705\statistics
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritDoc
     */
    public function bootstrap($app)
    {
        $statisticsRoute = isset($app->params['statistics']['statisticsRoute']) ? $app->params['statistics']['statisticsRoute'] : 'statistics';

        $app->getUrlManager()->addRules([
            $statisticsRoute => 'statistics/statistics/index',
            'statistics/remove' => 'statistics/statistics/remove',
            'statistics/show' => 'statistics/statistics/show',
        ], false);

        $app->setModule('statistics', 'vladbara705\statistics\Module');
    }
}
