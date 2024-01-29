<?php
declare(strict_types=1);

namespace Skernl\Context;

use Skernl\Contract\ApplicationContextInterface;
use Skernl\Di\Annotation\Mount;

/**
 * @Mount
 * @\Skernl\Context\Mount
 */
#[Mount]
class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            ApplicationContextInterface::class => ApplicationContext::class,
        ];
    }
}