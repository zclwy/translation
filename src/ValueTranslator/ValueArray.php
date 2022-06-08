<?php

namespace Zclwy\Translation\ValueTranslator;

use Zclwy\Translation\Translation;
use Zclwy\Translation\ValueTranslator;

class ValueArray extends ValueTranslator
{
    public function translate(Translation $translation, $config, string $field)
    {
        $value = $this->getValue($field, $translation->getData());
        $oldValue = $this->getValue($field, $translation->getOldData());
        isset($value) && $translation->setDataTranslates($field, $config['value'][$value] ?? $value);
        isset($oldValue) && $translation->setOldDataTranslates($field, $config['value'][$oldValue] ?? $oldValue);
    }
}
