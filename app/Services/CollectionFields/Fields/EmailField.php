<?php

namespace App\Services\CollectionFields\Fields;

class EmailField extends BaseField {

    public function setValue($value): Field {
        if(filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->value = $value;
        } else $this->value = 'No correct email';
        return $this;
    }

}
