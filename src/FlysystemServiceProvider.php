<?php

namespace WyriHaximus\CliFly;

use Cilex\Application;
use Cilex\ServiceProviderInterface;
use WyriHaximus\Pimple\FlysystemServiceProviderTrait;

class FlysystemServiceProvider implements ServiceProviderInterface
{
    use FlysystemServiceProviderTrait;

    /**
     * Register this service provider with the Application.
     *
     * @param Application $app Application.
     *
     * @return void
     */
    public function register(Application $app)
    {
        $this->registerFlysystem($app);
    }

    /**
     * Nothing to see here move along.
     *
     * @param Application $app Application.
     *
     * @return void
     */
    public function boot(Application $app)
    {
    }
}
