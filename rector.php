<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromStrictConstructorRector;
use Rector\Php80\Rector\Class_\ClassPropertyAssignToConstructorPromotionRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src',
    ]);

    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_83,
    ]);

    $rectorConfig->rules([
        TypedPropertyFromStrictConstructorRector::class,
        ClassPropertyAssignToConstructorPromotionRector::class,
    ]);

    // For proper property type declarations
    //$rectorConfig->phpVersion(\Rector\ValueObject\PhpVersion::PHP_74);
};