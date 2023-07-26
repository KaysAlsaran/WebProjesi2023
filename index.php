
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="php">
    <style>
        p{
            margin-top:-8px;
            margin-bottom:-7px;
            width: 100%;
            height: 780px;
            background: url(images/web.jpg);
            text-align: center;
            color: #3a6cf4;
            font-weight: 700;
            font-size: 3.5em;
        }
    </style>
<?php 
    $email="g211210586@sakarya.edu.tr";
    $pass="g211210586";
    if($_POST["Email"]==$email && $_POST["Pass"]==$pass)
    {
        echo ("<p>hoşgeldin g211210586</p>");
        header("refresh: 50; url=index.html");
    }
    else
    {
        echo ("<p>hatalı giriş</p>");
        header("refresh: 5; url=index.html");
    }
?>
</body>
</html>