<!doctype html>
<html>
<head>
  <title>PHP Variables</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #74ebd5, #ACB6E5);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
    }

    .box {
      background-color: #fff;
      border: 2px solid #007bff;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
      width: 450px;
      padding: 30px;
      text-align: center;
    }

    h1 {
      color: #007bff;
      margin-bottom: 15px;
    }

    h2, h3 {
      color: #333;
      margin: 10px 0;
    }

    .output {
      background: #e7f3ff;
      border-left: 4px solid #007bff;
      padding: 10px;
      border-radius: 5px;
      margin-top: 15px;
      text-align: left;
    }

    .sub-box {
      background: #ffe6e6;
      border-left: 4px solid #ff3333;
      padding: 10px;
      border-radius: 5px;
      margin-top: 10px;
      text-align: left;
    }
  </style>
</head>
<body>

  <div class="box">
    <h1>PHP Variables</h1>

    <div class="output">
      <?php
        $x = 15;  // integer variable
        $y = 20;
        $name = "Laravel with PHP"; // string variable

        var_dump($name);
        var_dump($x);

        echo "Welcome to $name PHP Framework Server <br>";
        echo "Welcome to " . $name . " PHP Framework<br>";
        echo $name . "<br>";

        // addition
        $add = $x + $y;
        echo "Addition Result: $x + $y = " . $add . "<br>";
      ?>
    </div>

    <div class="sub-box">
      <?php
        // subtraction
        $sub = $x - $y;
        echo "Subtraction Result: $x - $y = " . $sub . "<br>";
      ?>
    </div>

    <h2>Welcome to <?php echo $name; ?> Session</h2>
    <h3>Results: Addition = <?php echo $add; ?> | Subtraction = <?php echo $sub; ?></h3>
  </div>

</body>
</html>
