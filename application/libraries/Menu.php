<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Menu{
        private $arr_menu;
        public function __construct($arr){
            $this->arr_menu = $arr;
        }
        function construirmenu(){
            $ret_menu = "<nav><ul>";
            foreach($this->arr_menu as $option){
                $ret_menu .= "<li>".$option.="</li>";
            }
            $ret_menu .="</ul></nav>";
            return $ret_menu;
        }
        
    }

?>