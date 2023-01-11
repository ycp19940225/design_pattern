<?php

namespace App\creative_mode\abstract_factory\Tests;


use App\creative_mode\abstract_factory\AbstractFactory;
use App\creative_mode\abstract_factory\HtmlFactory;
use App\creative_mode\abstract_factory\JsonFactory;
use PHPUnit\Framework\TestCase;

/**
 * AbstractFactoryTest 用于测试具体的工厂
 */
class AbstractFactoryTest extends TestCase
{
    public function getFactories()
    {
        return array(
            array(new JsonFactory()),
            array(new HtmlFactory())
        );
    }

    /**
     * 这里是工厂的客户端，我们无需关心传递过来的是什么工厂类，
     * 只需以我们想要的方式渲染任意想要的组件即可。
     *
     * @dataProvider getFactories
     */
    public function testComponentCreation(AbstractFactory $factory)
    {
        $article = array(
            $factory->createText('Laravel学院'),
            $factory->createPicture('/image.jpg', 'laravel-academy'),
            $factory->createText('LaravelAcademy.org')
        );

        $this->assertContainsOnly('App\creative_mode\abstract_factory\MediaInterface', $article);
    }
}