<?php

namespace core;

use app\classes\Uri;

class Parameters
{
    private $uri;

    public function __construct() {
        $this->uri = Uri::uri();
    }


    public function load(){

        return  $this->getParameters();
    }

    private function getParameters(){
        if(substr_count($this->uri,'/')>2){
            $parameter =  array_values(array_filter(explode('/', $this->uri)));
            

            return (object)[
                'parameter' => filter_var($parameter[2],FILTER_SANITIZE_SPECIAL_CHARS),

                'next'=> filter_var($this->getNextParameters(2),FILTER_SANITIZE_SPECIAL_CHARS)

            ];

        }

    }

    private function getNextParameters($actual){

        $parameter =  array_values(array_filter(explode('/', $this->uri)));

        return $parameter [$actual +1] ?? $parameter[$actual]; 
        
    }

}