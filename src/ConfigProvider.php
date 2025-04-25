<?php

declare(strict_types=1);

namespace Laminas\Navigation\View;

use Laminas\ServiceManager\ServiceManager;

/** @psalm-import-type ServiceManagerConfiguration from ServiceManager */
final class ConfigProvider
{
    /** @return array{dependencies: ServiceManagerConfiguration} */
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencyConfig(),
        ];
    }

    /** @return ServiceManagerConfiguration */
    public function getDependencyConfig(): array
    {
        return [
            'delegators' => [
                'ViewHelperManager' => [
                    ViewHelperManagerDelegatorFactory::class,
                ],
            ],
        ];
    }
}
