<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo "text from php"; ?>
<?php echo "<h3> this is h3 from php."; ?>


<?php
$someText = "some text";
echo $someText;
?>
<a href="/about.php">about</a>
    <h1>Formas</h1>

    <form action="/posts/1" method="post">
        <label for="content">content: </label>
        <textarea name="content" id="content" cols="30" rows="10">default text</textarea>
        <br>
        <input type="text" id="title" name="title" placeholder="Entertext..">
        
        <input type="submit" value="send">

    </form>
    <h1>what do you want to eat?</h1>
    <input
    type="radio"
    id="carrot"
    name="vegetables"
    value="carrot"
    checked
    >
    <label for ="carrot">Carrot</label>
    <input
    type ="radio" id=" lettuce"
    name="vegetables"
    value = "lettuce"
    >
    <label for = "lettuce">Lettuce</label>


        <label for="vegetables">choose a vegetable:</label>

        <select name="vegetables" id="vegetables">
          <option value="carrot">carrot</option>
          <option value="lettuce">lettuce</option>
          <option value="cucumber">cucumber</option>
          <option value="tomato">tomato</option>
        </select> 
</body>
</html>