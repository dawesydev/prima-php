<?php

class Person
{
    const AVG_LIFE_SPAN = 85;

    private string $firstName;
    private string $lastName;
    private int $yearBorn;

    function __construct($tempFirst = "", $tempSecond = "", $tempYear = 1900)
    {
        echo "Person Constructor".'<br>';

        $this->firstName = $tempFirst;
        $this->lastName = $tempSecond;
        $this->yearBorn = $tempYear;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($tempName)
    {
        $this->firstName = $tempName;
    }

    protected function getFullName()
    {
        echo "Person->getFullName".'<br>';

        return $this->firstName." ".$this->lastName.'<br>';
    }
}



 ?>
