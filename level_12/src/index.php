<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSWAP 0xc</title>
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
            Level 0xc
        </div>
    </header>
    <main>
        <div class="container">
            <div class="container__title">
                Welcome to Level 0xc
            </div>
            <div class="wrapper">
                <div class="wrapper__title">
                    Note keeping service
                </div>
                <div class="wrapper__description">
                    
                </div>
                <?php
                    if(!isset($_GET['file'])){
                        echo("Which note would you like to read? note1, note2, note3?  <br>");
                        echo("<br>");
                        echo("Send the note name as a GET request, parameter is file. <br>");
                    }
                    else{
                            $file = $_GET['file'];
                            echo("Contents: <br>");
                            echo file_get_contents("./notes/".$file);
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>