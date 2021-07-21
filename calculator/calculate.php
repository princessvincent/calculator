
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
body{
    color: whitesmoke;
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
}#head{
    color: whitesmoke;
    background-color: blue;
}
.divform{
    background-color: brown;
    height: 300px;
    width: 1400px;
}
.ca{
    color: whitesmoke;
    background-color: red;
    width: 70px;
    height: 35px;
}
    </style>
</head>

<body>
    <div class="divform">
        <h1 id="head">CALCULATOR</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="GET">
            <input type="text" name="num" placeholder="number 1" required><br><br>
            <input type="text" name="num1" placeholder="number 2" required><br><br>
            <select name="operator" required><br><br>
                <option> Addition</option>
                <option> Subtraction</option>
                <option> Multiplication</option>
                <option> Division</option>
                <option> Remender</option>
            </select><br><br>
            <button type="submit" name="cal" value="submit" class="ca">Calculate</button>
        </form>
        <?php
if (isset($_GET["cal"])) {
    $num = $_GET["num"];
    $num1 = $_GET["num1"];
    $operate = $_GET["operator"];

    switch ($operate) {
        case "Addition":
            $result= $num + $num1;
            echo "The answer is : $result";
            break;

        case "Subtraction":
            $result1= $num - $num1;
            echo "The answer is : $result1";
            break;

        case "Multiplication":
            $result2= $num * $num1;
            echo "The answer is : $result2";
            break;
        case "Division":
            $result3= $num / $num1;
            echo "The answer is : $result3";
            break;
        case "Remender":
            $result4= $num % $num1;
            echo " The answer is :  $result4";
            break;
    }
}
?>
    </div>

    
</body>

</html>