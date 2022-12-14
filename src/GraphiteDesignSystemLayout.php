<?php
namespace Apie\CmsLayoutGraphite;

use Apie\HtmlBuilders\Assets\AssetManager;

final class GraphiteDesignSystemLayout
{
    private function __construct()
    {
    }

    public static function createRenderer(?AssetManager $assetManager = null): TwigRenderer
    {
        $assetManager ??= new AssetManager();
        return new TwigRenderer(
            __DIR__ . '/../resources/templates',
            $assetManager->withAddedPath(__DIR__ . '/../resources/assets')
        );
    }
}
