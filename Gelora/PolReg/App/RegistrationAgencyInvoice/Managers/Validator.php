<?php

namespace Gelora\PolReg\App\RegistrationAgencyInvoice\Managers;

use Solumax\PhpHelper\App\ManagerBase as Manager;
use Gelora\PolReg\App\RegistrationAgencyInvoice\RegistrationAgencyInvoiceModel;

class Validator extends Manager {

    protected $registrationBatch;

    public function __construct(RegistrationAgencyInvoiceModel $registrationBatch) {
        $this->registrationBatch = $registrationBatch;
    }

    public function __call($name, $arguments) {
        return $this->managerCaller($name, $arguments, $this->registrationBatch, __NAMESPACE__, 'Validators', 'validate');
    }

}