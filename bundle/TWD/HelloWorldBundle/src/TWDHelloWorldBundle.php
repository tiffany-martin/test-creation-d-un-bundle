<?php

namespace TWD\HelloWorldBundle;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use TWD\HelloWorldBundle\DependencyInjection\TWDHelloWorldExtension;

class TWDHelloWorldBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

    public function getContainerExtension(): ?ExtensionInterface
    {
        return new TWDHelloWorldExtension();
    }
}