<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Operations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: gray;
            padding: 15px;
        }
        .box {
            background: black;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            margin: auto;
            box-shadow: 0 0 5px yellow;
        }
        h2 {
            text-align: center;
            color: blue;
        }
        p {
            margin: 8px 0;
            color: red;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Arithmetic Operations</h2>

        <?php
        $num1=10;
        $num2=20;

        $add=$num1+$num2;
        $diff=$num1-$num2;
        $mul=$num1*$num2;
        $div=$num1/$num2;

        echo "<p>Addition: $add</p>";
        echo "<p>Subtraction: $diff</p>";
        echo "<p>Multiplication: $mul</p>";
        echo "<p>Division: $div</p>";
        ?>
    </div>
</body>
</html>