<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Cats</title>

    <!-- Favicon -->
    <link rel="icon" href="cat.png">

    <!-- Bulma -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css" integrity="sha256-aPeK/N8IHpHsvPBCf49iVKMdusfobKo2oxF8lRruWJg=" crossorigin="anonymous" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- Background -->
    <div class="background"></div>

    <!-- Button -->
    <div class="pt-4">
        <button id="newCatButton" class="button is-primary is-rounded is-medium mb-4 center is-unselectable" onclick="getRandomCatPicture()">New Cat</button>
    </div>

    <!-- Picture -->
    <img id="catPicture" alt="Picture of a cat" class="center shadow is-unselectable mb-4" src="">

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- Custom JavaScript -->
    <script src="script.js"></script>
</body>
</html>