<!DOCTYPE html>
<html>
<head>
    
    <title>PHP String Functions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f3;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .box {
            background-color: pink;
            padding: 25px 40px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1 {
            color: #0066cc;
            margin-bottom: 20px;
        }
        p {
            font-size: 17px;
            margin: 8px 0;
        }
        span {
            color: #007700;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="box">
    <h1>PHP String Functions</h1>
    <?php
        $text = "Hello from PHP World";

        echo "<p>Original Text: <span>$text</span></p>";
        echo "<p>Length: <span>" . strlen($text) . "</span></p>";
        echo "<p>Word Count: <span>" . str_word_count($text) . "</span></p>";
        echo "<p>Uppercase: <span>" . strtoupper($text) . "</span></p>";
        echo "<p>Lowercase: <span>" . strtolower($text) . "</span></p>";
        echo "<p>Reversed: <span>" . strrev($text) . "</span></p>";
        echo "<p>Replace 'World' with 'Universe': <span>" . str_replace("World", "Universe", $text) . "</span></p>";
        echo "<p>Position of 'PHP': <span>" . strpos($text, "PHP") . "</span></p>";
        echo "<p>Trimmed Text: <span>" . trim("   $text   ") . "</span></p>";
        echo "<p>Substring (0–5): <span>" . substr($text, 0, 5) . "</span></p>";
        echo "<p>Capitalized Words: <span>" . ucwords($text) . "</span></p>";
    ?>
</div>

</body>
</html>
