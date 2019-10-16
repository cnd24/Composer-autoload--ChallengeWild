<?php
namespace App\Wcs;

class Hello{

    private $talk;

    /**
     * @return mixed
     */
    public function getTalk()
    {
        return $this->talk;
    }

    /**
     * @param mixed $talk
     */
    public function setTalk($talk)
    {
        $this->talk = $talk;
    }


    public function talk(){
        return $this->talk = "Hello World !";
    }

}