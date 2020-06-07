<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daily Coding Problem</title>
</head>

<body>
    <p>"Given a list of numbers and a number k, return whether any two numbers from the list add up to k.
        For example, given [10, 15, 3, 7] and k of 17, return true since 10 + 7 is 17."</p>
    <p>Insert a number:</p>
    <form method="POST">
        <input required type="text" name="number" />
        <input type="submit" name="submit" />
    </form>
    <?php
    function checkArray($number)
    {
        $numbers = array(10, 15, 3, 7);
        $success = false;
        // Nested foreach to go through all the numbers, checking if any two numbers add up to the number submitted by the user
        foreach ($numbers as $num1) {
            foreach ($numbers as $num2) {
                if ($num1 + $num2 == $number) {
                    // Success message
                    echo "<p>Success!, " . $num1 . " + " . $num2 . " = " . $number . ".</p>";
                    $success = true;
                    return;
                }
            }
        }
        // Fail message
        if ($success == false) {
            echo "<p>Unfortunately, no 2 numbers of the list add up to " . $number . ".</p>";
        }
    }

    if (isset($_POST["submit"])) {
        $k = $_POST["number"];

        // Call function checkArray()
        checkArray($k);
    }

    ?>
</body>

</html>