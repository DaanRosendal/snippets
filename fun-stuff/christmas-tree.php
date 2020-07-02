<link rel="icon" href="https://image.flaticon.com/icons/svg/658/658404.svg"/>
<title>Christmas Tree</title>

<?php

/*
 * @author Daan Rosendal
 *
 * A script to display a christmas tree in the browser
 */

generateChristmasTree(25);

function generateChristmasTree($rows){
    $whitespaces = $rows - 4;
    $totalWhitespaces = $whitespaces;
    $stars = 1;

    for($i = 0; $i < $rows; $i++){

        // The last 3 rows are the branch
        if ($i <= $rows - 4){
            // Tree

            // Whitespace
            for($j = $whitespaces; $j > 0; $j--){
                echo "&nbsp;";
            }

            // The tree
            if($i == 0){
                echo "<span style='color: yellow'>*</span>";
            } else {
                for($x = $stars; $x > 0; $x--){
                    // Randomly generate ornaments
                    $randomNumber = rand(1, 100);

                    if ($randomNumber < 80){
                        echo "<span style='color: green'>*</span>";
                    } elseif ($randomNumber >= 80 && $randomNumber < 90){
                        echo "<span style='color: yellow'>*</span>";
                    } else {
                        echo "<span style='color: red'>*</span>";
                    }
                }
            }

            echo "<br>";
            $whitespaces--;
            $stars+=2;
        } else {
            // Branch

            // Whitespace
            for ($y = 0; $y < $totalWhitespaces - 1; $y++){
                echo "&nbsp;";
            }

            // The branch
            for ($z = 0; $z < 3; $z++){
                echo "<span style='color: brown'>*</span>";
            }

            echo "<br>";
        }
    }
}
?>

<!-- Styling -->
<style>
    html, body {
        height: 100%;
    }

    html {
        display: table;
        margin: auto;
    }

    body{
        font-family: "Lucida Console", Monaco, monospace;
        background: black;
        display: table-cell;
        vertical-align: middle;
    }
</style>
