<?php require_once("header.php") ?>
    <h1>Countries</h1>
    <form method="POST" action="countries.php" name="myform">
	    <label for='formCountry'> Виберіть країну: </label>
        <select  name="formCountry">
            <option value="US">США</option>
            <option value="UK">Великобританія</option>
            <option value="France">Франція</option>
            <option value="Mexico">Мексика</option>
            <option value="Japan">Японія</option>
        </select><br>
        <label for="stars">
            Choose stars
            <input type="number" name="stars" id="stars">
        </label><br>
        <label for="price">
            Choose price: 
            <input type="range" id="price" name="price" min="1000" max="10000">
        </label>
        <button name="formSubmit" type="submit">ОК</button>
    </form>
<?php require_once("footer.php") ?>