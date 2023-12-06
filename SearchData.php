<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repair Shop Details</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
            padding: 20px 20px;
            margin: 90px auto;
            max-width: 800px;
            max-height: auto;
        }

        .container img {
            width: 500px;
            height: 350px;
            margin-bottom: 20px;
            border-radius: 50px;
        }

        .container .info {
            text-align: left;
            width: 100%;
        }

        .container p {
            color: #333;
            margin: 10px 0;
            max-width: 500px;
            overflow-wrap: break-word;
        }

        .container a {
            display: block;
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
        }

        .container a:hover {
            color: #0056b3;
        }
    </style>
</head>

<body>

    <header>
        <h2 class="logo"><img src="logo.png" alt="Logo">
            <p>Wheeled Auto</p>
        </h2>
        <nav class="navigation">
            <a href="main.html">Home</a>
            <a href="main.html#Category">Category</a>
            <a href="main.html#About">About Us</a>
            <a href="main.html#footer">Contact Us</a>
            <!--<a href="Login.html" class="btnLogin-popup"><img src="Profile.jpg"></a>-->
        </nav>
    </header>

    <?php
    include 'connect.php';

    $data = $_GET['data'];
    $sql = "SELECT * FROM repairshops WHERE id=$data";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo "<div class='container'>";
        echo "<img src='uploads/" . $row['Image'] . "' alt='Uploaded Image'>";
        echo "<div class='info'>";
        echo "<p>Name: " . $row['Name'] . "</p>";
        echo "<p>About: " . $row['About'] . "</p>";
        echo "<p>Address: " . $row['Address'] . "</p>";
        echo "<p>Contact No: " . $row['Contact_No'] . "</p>";
    }
    ?>

    <a href="RepairShop.php">Back</a>
</body>

</html>