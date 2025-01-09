<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withSets([
        'vendor/symplify/easy-coding-standard/config/set/psr12.php',
    ])
    ->withPaths([
        'src',
        'tests',
    ])
;
