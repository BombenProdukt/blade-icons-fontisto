<?php

declare(strict_types=1);

namespace BombenProdukt\BladeIcons\Fontisto;

use BombenProdukt\BladeIcons\Facades\IconFamilyRegistry;
use BombenProdukt\BladeIcons\IconFamily;
use BombenProdukt\PackagePowerPack\Package\AbstractServiceProvider;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        IconFamilyRegistry::push(
            IconFamily::fromDirectory('fontisto', __DIR__.'/../resources/svg'),
        );
    }
}
