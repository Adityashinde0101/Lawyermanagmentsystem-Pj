<?php
session_start();
include("db_con/dbCon.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome to Help Panel</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: url('law2.jpg') no-repeat center center fixed;
            background-size: cover; /* Set background-size to cover */
            color: #fff; /* Change the text color for better visibility on the background */
        }

        header {
            background-color: #007bff;
            text-align: center;
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
            color: #343a40;
        }

        h3 {
            color: #007bff;
        }

        p {
            color: #343a40;
        }

        a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Adding a semi-transparent white background for better readability */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Help Panel</h1>
    </header>
    <div class="container">
        <center>
            <h3>Here you can explore all Acts</h3>
            <p>Click on the link below to see all the Acts:</p>
            <a href="https://devgan.in/" target="_blank">Explore All Acts</a>
        </center>
    </div>
</body>
</html>