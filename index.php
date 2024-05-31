<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .result {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .result h3 {
            margin: 0;
        }
        .back-link {
            margin-top: 10px;
            display: block;
        }
    </style>
</head>
<body>

<h2>PHP Calculator Result</h2>

<div class="result">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = '';

        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Division by zero error!";
                }
                break;
            default:
                $result = "Invalid operation selected";
                break;
        }

        echo "<h3>Result: $result</h3>";
    } else {
        echo "<h3>No data submitted</h3>";
    }
    ?>
</div>

<a href="index.html" class="back-link">Back to Calculator</a>

</body>
</html>
