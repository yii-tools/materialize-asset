<?php

declare(strict_types=1);

namespace Yii\Assets;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Files\PathMatcher\PathMatcher;

final class MaterializeDev extends AssetBundle
{
    public string|null $basePath = '@assets';
    public string|null $baseUrl = '@assetsUrl';
    public string|null $sourcePath = '@npm/@materializecss/materialize';
    public array $css = ['dist/css/materialize.css'];
    public array $js = ['dist/js/materialize.js'];

    public function __construct()
    {
        $pathMatcher = new PathMatcher();

        $this->publishOptions = [
            'filter' => $pathMatcher->only(
                '**dist/css/materialize.css',
                '**dist/js/materialize.js',
            ),
        ];
    }
}
