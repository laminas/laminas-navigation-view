<?php

declare(strict_types=1);

namespace Laminas\Navigation\View;

use Laminas\Navigation\ConfigProvider;
use Laminas\ServiceManager\ServiceManager;

/** @psalm-import-type ServiceManagerConfiguration from ServiceManager */
final class Module
{
    /** @return array{service_manager: ServiceManagerConfiguration} */
    public function getConfig(): array
    {
        $provider = new ConfigProvider();
        return [
            'service_manager' => $provider->getDependencyConfig(),
        ];
    }
}
