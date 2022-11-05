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

            $requested_books = $_GET['books-names'];
            foreach ($requested_books as $value) {
                $author = $books[$value];
                print "<tr><td style=\"border: 1px solid #000;\">$value</td>";
                print "<td style=\"border: 1px solid #000;\">$author</td></tr>";
            }
        ?>
    </table>
</body>
</html>