<?php

namespace App\Services\CollectionFields\Fields;

use App\Services\CollectionFields\CollectionFields;
use Illuminate\Contracts\Support\Jsonable;

abstract class BaseField implements Field, Jsonable {

    private string $name;
    /**
     * @var mixed
     */
    protected $value;

    public function getName() {
        return $this->name;
    }

    public function getType() {
        return basename(static::class);
    }

    public function setName(string $name): Field {
        $this->name = $name;
        return $this;
    }

    public function setValue($value): Field {
        $this->value = $value;
        return $this;
    }

    public function getValue() {
        return $this->value;
    }

    public function toJson($options = 0) {
        $json = [
            'name' => $this->getName(),
            'type' => $this->getType(),
        ];

        return json_encode($json);
    }

}
