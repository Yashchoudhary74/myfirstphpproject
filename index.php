<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="script" href="script.js">
    <title>my first page </title>
    <style>
        .heading {
            display: flex;
            color: red;
        }
    </style>
</head>

<body>
    <div class="heading">

        <h1 class="hc">yash choudhary</h1>
    </div>
    <button onclick="CC()">Change</button> <br>


    <script>
        function CC(){

            document.getElementsByClassName("hc").style.color = "Blue";
            document.querySelector('.hc').style.color = "Blue";

        }

    </script>
</body>

</html>

<?php
echo "yash"
    ?>