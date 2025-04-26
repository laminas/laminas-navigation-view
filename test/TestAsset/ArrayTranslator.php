<?php

declare(strict_types=1);

namespace LaminasTest\Navigation\View\TestAsset;

use Laminas\I18n\Translator\Loader\FileLoaderInterface;
use Laminas\I18n\Translator\TextDomain;

final class ArrayTranslator implements FileLoaderInterface
{
    /** @var string[]|null */
    public array|null $translations = null;

    /**
     * @param string $locale
     * @param string $filename
     */
    public function load($locale, $filename): TextDomain
    {
        return new TextDomain($this->translations);
    }
}
