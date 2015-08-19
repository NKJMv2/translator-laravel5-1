<?php

namespace Ngocnh\Translator\Contracts;

use Ngocnh\Translator\TranslatorException;

interface Translatable
{
    /**
     * Prepare a translator instance and fetch translations.
     *
     * @param null $locale
     *
     * @throws \Ngocnh\Translator\TranslatorException
     *
     * @return mixed
     */
    public function translate($locale = null);

    /**
     * Setup a one-to-many relation.
     *
     * @return mixed
     */
    public function translations();
}
