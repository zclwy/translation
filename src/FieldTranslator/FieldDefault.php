<?php

namespace Zclwy\Translation\FieldTranslator;

use Zclwy\Translation\FieldTranslator;
use Zclwy\Translation\Translation;

class FieldDefault extends FieldTranslator
{
    public function translate(Translation $translation, $config, string $field)
    {
        $translation->setFieldTranslates($field, $field);
        $translation->setOldFieldTranslates($field, $field);
    }
}
