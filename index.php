
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/calc.inc.php" method="POST">
        <input type="number" name="num1" placeholder="Number 1">
        <select name="oper" id="">
            <option value="add">Addition</option>
            <option value="sub">Substraction</option>
            <option value="mul">Multiplication</option>
            <option value="div">Division</option>
        </select>
        <input type="number" name="num2" placeholder="Number 2">
        <input type="submit" value="Result">
    </form>
</body>
</html>