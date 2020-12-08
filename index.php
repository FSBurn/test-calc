<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Калькулятор</title>
</head>
<body>
 <div class="wrapper">
    <label><form method="post" action="/">
                <input name="val1" required placeholder="введите значение">
                <select name="operation">
                    <option value="plus">+</option>
                    <option value="minus">-</option>
                    <option value="multiply">*</option>
                    <option value="divide">/</option>
                </select>
                <input name="val2" placeholder="введите значение" required>
            <input class="" type="submit" name="submit" value="Получить ответ">
            <form>
    </label>
     <?php
     require "calc.php";
     ?>
 </div>

</body>
</html>