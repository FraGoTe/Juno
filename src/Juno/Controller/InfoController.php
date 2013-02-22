<?php

namespace Juno\Controller;

/**
 * @package Juno
 */
class InfoController extends \Flint\Controller\Controller
{
    /**
     * @return string
     */
    public function indexAction()
    {
        return $this->app['twig']->render('@Juno/Info/index.html.twig');
    }

    /**
     * @return string
     */
    public function connectionAction()
    {
        // The connection should properly expose this information.
        $redis = $this->app['predis']['raekke']->info();

        uasort($redis, function ($a, $b) {
            return count($b) - count($a);
        });

        return $this->app['twig']->render('@Juno/Info/connection.html.twig', array(
            'redis' => $redis,
        ));
    }
}
