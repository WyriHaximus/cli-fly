<?php

namespace WyriHaximus\CliFly\Tests;

class FlysystemServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    public function testRegister()
    {
        $application = $this->getMock('Cilex\Application', [], [
            [],
        ]);
        $provider = $this->getMock('WyriHaximus\CliFly\FlysystemServiceProvider', [
            'registerFlysystems',
        ]);


        $provider
            ->expects($this->once())
            ->method('registerFlysystems')
            ->with($application)
        ;

        $provider->register($application);
        $this->assertInstanceOf('Cilex\ServiceProviderInterface', $provider);
    }
}
