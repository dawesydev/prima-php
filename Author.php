<?php

class Author extends Person
{
    public static $centuryPopular = "19th";
    private $penName = "Romesh Rangan";

    public function getPenName()
    {
        return $this->penName.'<br>';
    }

    public function getCompleteName()
    {
        return $this->getFullName()." a.k.a. ".$this->penName.'<br>';
    }

    public static function getCenturyAuthorWasPopular()
    {
        return self::$centuryPopular;
    }
}

 ?>
