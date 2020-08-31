<?php

namespace App\Services\CollectionFields\Fields;

interface Field {
    public function setName(string $name): Field;
    public function getName();
    public function setValue($value): Field;
    public function getValue();
    public function getType();
}
