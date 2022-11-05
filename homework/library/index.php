<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Website</title>
  </head>
  <body>
      <form action="books.php" name="myform" method="GET">
        <label for="book">
            Enter the book name: 
            <input type="text" name="book" size="50">
        </label><br>
        <h3>Sort by: </h3>
        <select name="sortOption">
            <option value="cmp_name">Book name</option>
            <option value="cmp_author">Book author</option>
            <option value="cmp_date">Book date</option>
        </select>
        <input name="Submit" type=submit value="Search">
      </form>
  </body>
</html>