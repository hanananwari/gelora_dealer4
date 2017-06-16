<?php

namespace Gelora\Base\App\Price\Managers\Validators;

use Gelora\Base\App\Price\PriceModel;

class OnCreate {

    protected $price;

    public function __construct(PriceModel $price) {
        $this->price = $price;
    }

    public function validate() {

        $atributeValidation = $this->validateAtributes();
        if ($atributeValidation->fails()) {
            return $atributeValidation->errors()->all();
        }

        return true;
    }

    protected function validateAtributes() {

        return \Validator::make($this->price->toArray(), [
                    'model_id' => 'required|unique:mongodb.prices,model_id',
                    'model_name' => 'required',
                    'model_code' => 'required',
        ]);
    }

}
