<?php
/*
 * sql_injection.php
 * 输入的字符为  ';DROP TABLE forum_topics;
 * [Source]
 * [PHP Security: SQL Injection](https://www.youtube.com/watch?v=cgwWpd4SqIM)
 * [PHP Security | SQL Injection | Codecourse](https://www.codecourse.com/lessons/php-security)
 */
?>

<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=website', 'root', 'root123');

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    $user = $db->query("SELECT * FROM users WHERE email = '{$email}'");

    if ($user->rowCount()) {
        die('Send email');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Reset password</title>
    </head>
    <body>
        <form action="sql_injection.php" method="post" autocomplete="off">
            <label for="email">
                Email address
                <input type="text" name="email" id="email">
            </label>
            <input type="submit" value="Recover">
        </form>
    </body>
</html>