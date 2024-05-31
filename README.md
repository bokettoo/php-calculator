# PHP Calculator Code Explanation

## Overview

This PHP Calculator project consists of two main files:
1. `index.html` - The HTML form where users input numbers and select an arithmetic operation.
2. `index.php` - The PHP script that processes the form data and calculates the result.

Below, we focus on explaining the PHP code in `index.php`.

## PHP Code Breakdown

The PHP code in `index.php` handles the form submission, performs the arithmetic operation, and displays the result. Here’s a detailed explanation of how it works:

### HTML and CSS

The HTML and CSS part of `index.php` is for styling and structuring the result display. It includes:
- Basic styles for the body, result container, and back link.
- HTML structure with a heading and a result container.

### PHP Script

The core PHP logic is within the `<div class="result">` section. Here's the breakdown:

1. **Form Submission Check**:
    ```php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    ```
    - This line checks if the form was submitted using the POST method. If not, it skips the rest of the code inside this block.

2. **Retrieving Form Data**:
    ```php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = '';
    ```
    - These lines retrieve the input values (`num1` and `num2`) and the selected operation (`operation`) from the form. They are stored in variables for use in calculations.

3. **Performing the Operation**:
    ```php
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
    ```
    - This switch statement determines which arithmetic operation to perform based on the value of `$operation`.
        - **Add**: Adds `num1` and `num2`.
        - **Subtract**: Subtracts `num2` from `num1`.
        - **Multiply**: Multiplies `num1` by `num2`.
        - **Divide**: Divides `num1` by `num2` with a check to prevent division by zero.
    - The result of the operation is stored in the `$result` variable. If the operation is invalid or division by zero occurs, an appropriate error message is stored in `$result`.

4. **Displaying the Result**:
    ```php
    echo "<h3>Result: $result</h3>";
    ```
    - This line outputs the result inside an `<h3>` tag, displaying it prominently on the page.

5. **Handling No Data Submission**:
    ```php
    } else {
        echo "<h3>No data submitted</h3>";
    }
    ```
    - If the form was not submitted (i.e., the request method is not POST), this block displays a message indicating that no data was submitted.
