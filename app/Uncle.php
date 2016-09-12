<?php

    namespace App;


    use App\Providers\Child;

    class Uncle
    {

        public $second;
        public function __construct(Child $child){
            $this->second = $child->first;
        }

    }
