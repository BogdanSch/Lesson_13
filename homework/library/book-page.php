<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
<body>
    <table style="width: 45%;border: 1px solid #000;">
        <tr>
            <td style="border: 1px solid #000;">Book name</td>
            <td style="border: 1px solid #000;">Book author</td>
        </tr>
        <?php 
            require_once("books-library.php");

            $books_names = $_GET['books-names'];
            $books_authors = $_GET['books-authors'];

            for ($i=0; $i < count($books_names); $i++) { 
                $current_book_name = $books_names[$i];
                $current_book_author = $books_authors[$i];
                print "<tr><td style=\"border: 1px solid #000;\">$current_book_name</td>";
                print "<td style=\"border: 1px solid #000;\">$current_book_author</td></tr>";
            }
        ?>
    </table>
</body>
</html>