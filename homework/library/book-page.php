<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
<body>
    <!-- <form action="book-page.php" method="post">
        <h3>Sort by: </h3>
        <select name="sortOption">
            <option value="cmp_name">Book name</option>
            <option value="cmp_author">Book author</option>
            <option value="cmp_date">Book date</option>
        </select>
        <input type="submit" name="sort-submit" value="Sort">
    </form> -->
    <table style="width: 45%;border: 1px solid #000; margin-top: 30px;"><tr>
                <td style="border: 1px solid #000;">Book name</td>
                <td style="border: 1px solid #000;">Book author</td>
                <td style="border: 1px solid #000;">Book date</td> </tr>
        <?php
            $arr = [];
            require_once("books-library.php");

            $books_names = $_GET['books-names'];
            $books_authors = $_GET['books-authors'];
            $books_dates = $_GET['books-dates'];

            for ($i=0; $i < count($books_names); $i++){
                $current_book_name = $books_names[$i];
                $current_book_author = $books_authors[$i];
                $current_book_date = $books_dates[$i];
                array_push($arr, ["name" => $current_book_name, "author" => $current_book_author, "date" => $current_book_date]);
            }

            uasort($arr, $_GET['sortOption']);

            for ($i=0; $i < count($arr); $i++) { 
                $current_name = $arr[$i]["name"];
                $current_author = $arr[$i]["author"];
                $current_date = $arr[$i]["date"];
                print "<tr><td style=\"border: 1px solid #000;\">$current_name</td>";
                print "<td style=\"border: 1px solid #000;\">$current_author</td>";
                print "<td style=\"border: 1px solid #000;\">$current_date</td></tr>";
            }

            echo "</table>";
            function cmp_name($a, $b){
                return $a["name"] <=> $b["name"];
            }
            function cmp_author($a, $b){
                return $a["author"] <=> $b["author"];
            }
            function cmp_date($a, $b){
                return $a["date"] <=> $b["date"];
            }
        ?>
</body>
</html>