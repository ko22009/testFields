<?php

namespace App\Http\Controllers;

use App\Services\CollectionFields\CollectionFields;
use App\Services\CollectionFields\Fields\EmailField;
use App\Services\CollectionFields\Fields\TextField;

class MainController extends Controller {

    public function index() {
        return collect([
            CollectionFields::make(TextField::class)->setName('name')->setValue('Kos'),
            CollectionFields::make(TextField::class)->setName('lastName')->setValue('Mos'),
            CollectionFields::make(EmailField::class)->setName('email')->setValue('admin@mail.ru'),
        ])->toJson();
    }

}
