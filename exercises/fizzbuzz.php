<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fizz Buzz</title>
</head>

<body>
    <script>
        var i = 1
        for (i = 1; i <= 100; i++) {
            output = ""
            if (i % 3 == 0) {
                output += "Fizz"
            }
            if (i % 5 == 0) {
                output += "Buzz"
            }
            if (output == "") {
                output = i
            }
            document.write(output + "<br>")
        }
    </script>
</body>

</html>