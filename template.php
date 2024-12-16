<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url(<?php echo $background; ?>) no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 20px;
            color: white;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .back-button {
            position: fixed;
            top: 20px;
            left: 20px;
            padding: 10px 20px;
            background-color: rgba(255, 255, 255, 0.7);
            color: black;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .back-button:hover {
            background-color: rgba(255, 255, 255, 0.9);
        }
        .content {
            max-width: 800px;
            margin: 50px auto;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
            flex-grow: 1;
        }
        h1 {
            text-align: center;
            color: #FFD700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        p {
            line-height: 1.6;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <a href="index.php" class="back-button">Back</a>
    <div class="content">
        <?php echo $content; ?>
    </div>
</body>
</html>