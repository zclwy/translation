<?php

namespace Zclwy\Translation\FieldTranslator;

use Zclwy\Translation\FieldTranslator;
use Zclwy\Translation\Translation;

class FieldText extends FieldTranslator
{
    public function translate(Translation $translation, $config, string $field)
    {
        if (is_array($config) && isset($config['text'])) {
            $config = $config['text'];
        }
        $config === '' && $config = $field;
        $translation->setFieldTranslates($field, $config);
        $translation->setOldFieldTranslates($field, $config);
    }
}
