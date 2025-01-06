<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Symfony\Set\SymfonySetList;
use Rector\ValueObject\PhpVersion;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src',
        // Add other directories as needed
    ]);

    $rectorConfig->phpVersion(PhpVersion::PHP_80);

    // Optionally, include specific sets or rules
    $rectorConfig->sets([
        // Add desired sets here
    ]);
};