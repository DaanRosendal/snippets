<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daily Coding Problem</title>
</head>

<body>
    <p>"Given an array of integers, return a new array such that each element at index i of the new array is the product of all the numbers in the original array except the one at i.
        For example, if our input was [1, 2, 3, 4, 5], the expected output would be [120, 60, 40, 30, 24]. If our input was [3, 2, 1], the expected output would be [2, 3, 6]."</p>
    <?php
    function transformArray($originalNumbers)
    {
        $newNumbers = array();
        // Loop over numbers in the given array
        foreach ($originalNumbers as $numberToBeIgnored) {
            $currentNewNum = 1; // Reset currentNewNum
            // Loop over numbers in the given array to multiply with each number, except the number in the $numberToBeIgnored
            foreach ($originalNumbers as $numberToBeUsed) {
                if ($numberToBeUsed != $numberToBeIgnored) {
                    $currentNewNum = $currentNewNum * $numberToBeUsed;
                }
            }
            // Add the number to the array
            array_push($newNumbers, $currentNewNum);
        }
        // Return the array with the new numbers
        return $newNumbers;
    }

    // Declaring first array to be transformed
    $ogNumbers1 = [1, 2, 3, 4, 5];
    $result1 = transformArray($ogNumbers1);

    // Declaring second array to be transformed
    $ogNumbers2 = [3, 2, 1];
    $result2 = transformArray($ogNumbers2);

    // Show result1
    echo "<p>Result for [1, 2, 3, 4, 5]: <b>[";
    for ($i = 0; $i < count($result1); $i++) {
        if ($i == count($result1) - 1) {
            echo $result1[$i];
        } else {
            echo $result1[$i] . ", ";
        }
    }
    echo "]</b></p>";

    // Show result2
    echo "<p>Result for [3, 2, 1]: <b>[";
    for ($i = 0; $i < count($result2); $i++) {
        if ($i == count($result2) - 1) {
            echo $result2[$i];
        } else {
            echo $result2[$i] . ", ";
        }
    }
    echo "]</b></p>";
    ?>
</body>

</html>