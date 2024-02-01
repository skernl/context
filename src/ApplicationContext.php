<?php
declare(strict_types=1);

namespace Skernl\Context;

use Psr\Container\ContainerInterface;
use Skernl\Context\Contract\ApplicationContextInterface;

/**
 * @ApplicationContext
 * @\Skernl\Context\ApplicationContext
 */
class ApplicationContext implements ApplicationContextInterface
{
    /**
     * @var ContainerInterface $container
     */
    static private ContainerInterface $container;

    /**
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        self::$container = $container;
    }

    /**
     * @return ContainerInterface
     */
    static public function getContainer(): ContainerInterface
    {
        return self::$container;
    }

    /**
     * @return bool
     */
    static public function hasContainer(): bool
    {
        return isset(self:: $container);
    }
}