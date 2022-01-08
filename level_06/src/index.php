<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSWAP 0x6</title>
    <link rel="shortcut icon" href="oswap.png" type="image/png">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="title">
            OSWAP
        </div>
        <div class="level-title">
            Level 0x6
        </div>
    </header>
    <main>
        <div class="container">
            <div class="container__title">
                Welcome to Level 0x6
            </div>
            <div class="wrapper">
                <div class="wrapper__title">
                    My grandma makes the best cookies xD
                </div>
                <div class="wrapper__description">
                <center><img src="cookie.jpg"></center>
                <br>
                <?php
                include 'flag.php';
                if(!isset($_COOKIE['user'])) {
                    echo "Your user is not admin. P.S. <br> We use cookies for verification <br>";
                }
                else{
                    if($_COOKIE['user']!="admin"){
                        echo "Bruh! You aren't the admin <br>";
                    }
                    else{
                        echo "<h1>".$flag."</h1>";
                    }
                }
                ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
