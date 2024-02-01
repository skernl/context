<?php
declare(strict_types=1);

namespace Skernl\Context\Contract;

use Psr\Container\ContainerInterface;

/**
 * @ApplicationContextInterface
 * @\Skernl\Contract\ApplicationContextInterface
 */
interface ApplicationContextInterface
{
    /**
     * @return ContainerInterface
     */
    static public function getContainer(): ContainerInterface;

    /**
     * @return bool
     */
    static public function hasContainer(): bool;
}