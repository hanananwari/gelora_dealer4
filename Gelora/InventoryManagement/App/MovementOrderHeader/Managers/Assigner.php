<?php

namespace Gelora\InventoryManagement\App\MovementOrderHeader\Managers;

use Gelora\InventoryManagement\App\MovementOrderHeader\MovementOrderHeaderModel;
use Solumax\PhpHelper\App\ManagerBase as Manager;

class Assigner extends Manager {
    
    protected $movementOrderHeader;
    
    public function __construct(MovementOrderHeaderModel $movementOrderHeader) {
        $this->movementOrderHeader = $movementOrderHeader;
    }
    
    public function __call($name, $arguments) {
        return $this->managerCaller($name, $arguments, $this->movementOrderHeader,
                __NAMESPACE__, 'Assigners', 'assign');
    }
}