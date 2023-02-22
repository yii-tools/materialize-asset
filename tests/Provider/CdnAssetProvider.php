<?php

declare(strict_types=1);

namespace Yii\Materialize\Asset\Tests\Provider;

use Yii\Materialize\Asset\Cdn\MaterializeAsset;

final class CdnAssetProvider
{
    /**
     * @return array array of asset bundles.
     */
    public static function assetBundles(): array
    {
        return [
            [
                'Css',
                MaterializeAsset::class,
            ],
            [
                'Js',
                MaterializeAsset::class,
            ],
        ];
    }
}
