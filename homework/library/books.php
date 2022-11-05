<?php

require_once("books-library.php");

ob_start();
if (isset($_GET['Submit'])) {
    $book_request = $_GET['book'];
    
    try {
        $book_author = $books[$book_request];
        $requested_books = array_intersect_key($books, [$book_request => $book_author]);
        $dir = "";

        foreach ($requested_books as $key => $value) {
            $dir .= "books-names[]=$key&";
        }
        if ($requested_books){
            header("Location: book-page.php?$dir");
        }
        else{
            echo "<h1>Sorry! We can't find any of requested books</h1>";
        }
    } catch (\Throwable $th) {
        echo "<h1>Sorry! We can't find any of requested books</h1>";
    }
}
ob_end_flush();