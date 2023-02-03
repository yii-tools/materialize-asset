<?php

declare(strict_types=1);

namespace Yii\Materialize\Asset\Cdn;

use Yiisoft\Assets\AssetBundle;

final class MaterializeAsset extends AssetBundle
{
    public bool $cdn = true;
    public array $css = ['https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css'];
    public array $cssOptions = [
        'integrity' => 'sha512-koDUjGvRZrcni2jJFT9I3VRYY0PWNKtr1Wj9U36eLhcFgBm36KV11yTi4p2H3HwUMirxZ+dMpKeUuRjYOFjeDQ==',
        'crossorigin' => 'anonymous',
        'referrerpolicy' => 'no-referrer',
    ];
    public array $js = ['https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js'];
    public array $jsOptions = [
        'integrity' => 'sha512-zCHGovd9kHtyOdCLYmXApVFPtXQjZNyjHGU6DKPKR1HnhiSnVc71r1x7bpahdGw7mOKbz6oZ1k7/gbfRNp50ag==',
        'crossorigin' => 'anonymous',
        'referrerpolicy' => 'no-referrer',
    ];
}
