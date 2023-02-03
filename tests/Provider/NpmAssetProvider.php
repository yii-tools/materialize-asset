<?php

declare(strict_types=1);

namespace Yii\Materialize\Asset\Tests\Provider;

use Yii\Materialize\Asset\Npm;

final class NpmAssetProvider
{
    /**
     * @return array array of asset bundles.
     */
    public function assetBundles(): array
    {
        return [
            [
                'Css',
                Npm\Dev\MaterializeAsset::class,
            ],
            [
                'Css',
                Npm\Min\MaterializeAsset::class,
            ],
            [
                'Js',
                Npm\Dev\MaterializeAsset::class,
            ],
            [
                'Js',
                Npm\Min\MaterializeAsset::class,
            ],
        ];
    }
}
