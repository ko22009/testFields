<?php

namespace CollectionFields;

use CollectionFields\Fields\Field;

class CollectionFields {

    const WITH_VALUE = 1;

    public static function make(string $field): Field {
        return new $field();
    }
}
