<?php

include 'Person.php';
include_once 'Author.php';

$newAuthor = new Author("Daniel", "Sewad", 1899);

echo $newAuthor->getCompleteName();


?>
