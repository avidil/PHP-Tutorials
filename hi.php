<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hi.php" method="get">
        <label>Username:</label>
        <input type="text" name="un">
        <label>Password:</label>
        <input type="password" name="pd">
        <br>
        <input type="submit" value="Sign up">
    </form>
</body>
</html>-->
<?php
   /* echo $_GET["un"];
    echo $_GET["pd"];*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hi.php" method="post">
        <label>Username</label>
        <input type="text" name="n">
        <label>Password</label>
        <input type="password" name="p">
        <input type="submit" value="waren yako">
    </form>
</body>
</html>
<?php
    echo $_POST["n"];
    echo $_POST["p"];

?>