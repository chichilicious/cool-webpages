<?php
    $password = "open";
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (isset($_POST['pass']) && $_POST['pass'] === $password) {
            header('Location: ./?q='. hash('md4', date("l")));
            die();
        } else {
            header('Location: ./login.php');
            die();
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="login.css">

    <style>
        body {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            margin: 0;
            background: #181717;
        }

        input {
            border: 0;
            border-bottom: 5px solid white;
            padding: 10px;
            font-size: 1.2rem;
            outline: none;
            color: white;
            background-color: transparent;
        }
    </style>
</head>
<body>
    <form action="./login.php" method="post">
        <input type="password" name="pass" id="" placeholder="Enter Password">
    </form>
</body>
</html>