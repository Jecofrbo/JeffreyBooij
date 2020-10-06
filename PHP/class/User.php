<?php

declare(strict_types=1);

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

    /*
     * Konstruktor bezi po instancovani
     */

    public function __construct() {
        
    }

    /*
     * nastavi $ryan
     * @param int $ryan
     */

    public function setRyanJeffreyBooij(int $ryan) {
        $this->ryan = $ryan;
    }

    /*
     * nastavi $gump
     * @param int $gump
     */

    public function setGumpJeffreyBooij(int $gump) {
        $this->gump = $gump;
    }

    /*
     * ziska hodnotu
     * @return string
     */

    public function getPpJeffreyBooij(): string {
        return $this->pp;
    }

    /*
     * ziska hodnotu
     * @return string
     */

    public function getBigppJeffreyBooij(): string {
        return $this->bigpp;
    }

    /*
     * ziska hodnotu
     * @return string
     */

    public function getSmallppJeffreyBooij(): string {
        return $this->smallpp;
    }

    /*
     * ziska hodnotu
     * @return string
     */

    public function getAverageppJeffreyBooij(): string {
        return $this->averagepp;
    }

    /*
     * ziska hodnotu
     * @return string
     */

    public function getMicroppJeffreyBooij(): string {
        return $this->micropp;
    }

}
