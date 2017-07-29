<?php
/**
 * Created by PhpStorm.
 * User: RTG
 * Date: 29/7/2017
 * Time: 9:46 PM
 */

class Script {

    public $fname;
    public $lname;
    public $cal;

    public function __construct($fname, $lname, $cal) {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->cal = $cal;
    }

    public function calculate() {

        if (strtolower($this->cal) === "") {
            echo "<script> window.alert('Please select using the selector!')";
            header ("Location: index.php");
        }
        elseif (strtolower($this->cal) === "addition") {

            $fnum = $this->fname;
            $snum = $this->lname;
            $result = $fnum + $snum;
            echo $result;

        }
        elseif (strtolower($this->cal) === "subtract") {

            $fnum = $this->fname;
            $snum = $this->lname;
            $result = $fnum - $snum;
            echo $result;
        }

    }

}