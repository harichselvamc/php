<?php

class Book {
    public $author;
    public $title;
    public $pages;
}


$myBook = new Book();


$myBook->author = "Hari";
$myBook->title = "Data";
$myBook->pages = 343;

// echo $myBook->author;
// echo $myBook->title;
// echo $myBook->pages;


echo "Author:  ".$myBook->author.  "\n";
echo "Title: " . $myBook->title . "\n";
echo "Pages: " . $myBook->pages . "\n";




?>
