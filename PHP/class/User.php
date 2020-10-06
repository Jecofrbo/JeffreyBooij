<?php


class User {
    
    public $pp = "7 inches";
    public $bigpp = "8 inches";
    public $smallpp = "4 inches";
    public $averagepp = "6 inches";
    public $micropp = "1 inches";
    protected $smallbanana;
    protected $bigbanana;
    protected $averagebanana;
    private $ryan;
    private $gump;
    
    public function __construct() {
    
    }
    
    public function setRyanJeffreyBooij ($ryan) {
    $this->ryan=$ryan;
    }
    public function setGumpJeffreyBooij ($gump) {
    $this->gump=$gump;
    }
    public function getPpJeffreyBooij () {
    return $this->pp;
    }
    public function getBigppJeffreyBooij () {
    return $this->bigpp;
    }
    public function getSmallppJeffreyBooij () {
    return $this->smallpp;
    }
    public function getAverageppJeffreyBooij () {
    return $this->averagepp;
    }
    public function getMicroppJeffreyBooij () {
    return $this->micropp;
    }
}
