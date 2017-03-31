<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Calculate {
    
    public $fname;
    public $lname;
    public $cal;
    
    public function __construct($fname, $lname, $cal) {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->cal = $cal;
    }
    
    public function calculate() {
        
        if (strtolower($this->cal) === "add") {
            
            $fnum = $this->fname;
            $snum = $this->lname;
            $result = $fnum + $snum;
            echo $result;
            
        }
        elseif (strtolower($this->cal) === "sub") {
            
            $fnum = $this->fname;
            $snum = $this->lname;
            $result = $fnum - $snum;
            echo $result;
        }
        
    }
    
}