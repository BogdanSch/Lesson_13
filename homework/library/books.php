<?php

ob_start();
require_once("books-library.php");

function try_walk($book, $key_country, $data)
{
    static $i = 1; // Статична глобальна змінна-лічильник
    echo "<strong>".$data . $i . " </strong>";
    foreach ($book as $key => $value) {
        if (!is_array($value)) {
            echo "$key:$value\t";
        } else {
            echo "$key: ";
            foreach ($value as $k => $v) {
                echo "[{$k} рік. - $v] ";
            }
            echo "<br>Average population: ". (array_sum($value)/count($value));
        }
    }
    echo "<br>\n";
    $i++;
}

function search($books, $data) {
    $result = [];
    foreach ($books as $book_number => $book) {
        foreach ($book as $key => $value) {
            if (!is_array($value)) {
                if (stristr($value, $data)) {
                    $result[] = $book_number;
                }
            } else {
                foreach ($value as $k => $v) {
                    if (stristr($v, $data) || strstr($k, $data)) {
                        $result[] = $book_number;
                    }
                }
            }
        }
    }
    return array_intersect_key($books, array_flip(array_unique($result)));
}

if (isset($_GET['Submit'])) {
    $book_request = $_GET['book'];
    
    try {
        $sortOption = $_GET['sortOption'];
        $requested_books = search($books, $book_request);
        $dir = "";

        foreach ($requested_books as $key => $value) {
            $book_name = $value["name"];
            $book_author = $value["author"];
            $book_date = $value["date"];
            $dir .= "books-names[]=$book_name&books-authors[]=$book_author&books-dates[]=$book_date&";
        }
        if ($requested_books){
            header("Location: book-page.php?$dir"."sortOption=$sortOption");
        }
        else{
            echo "<h1>Sorry! We can't find any of requested books</h1>";
        }
    } catch (\Throwable $th) {
        echo "<h1>Sorry! We can't find any of requested books</h1>";
    }
}
ob_end_flush();