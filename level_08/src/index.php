<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSWAP 0x8</title>
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
            Level 0x8
        </div>
    </header>
    <main>
        <div class="container">
            <div class="container__title">
                Welcome to Level 0x8
            </div>
            <div class="wrapper">
                <div class="wrapper__title">
                    PHP is the best programming language
                </div>
                <div class="wrapper__description">
                    Getting to the next level is easy. Just give me the password.
                </div>
                <form action="" method="POST">
                    <div class="input-group">
                        <label for="name">
                            Enter the password:
                        </label>
                        <input type="text" name="pass" id="name" placeholder="Password">
                    </div>
                    <div style="width: 100%; display: table;">
                        <div style="display: table-row;">
                            <div style="width: 50%; display: table-cell;">
                                <button role="submit">Submit</button>
                            </div>
                            <div class="source" style="display: table-cell;"> 
                                <a href="source.txt">View Source</a>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="onclick">
                    <?php
                        include "flag.php";
                        if(!empty($_POST["pass"])){
                            $password=htmlentities($_POST["pass"]);
                            $to_check="62444e6d58327777614639304d476466646d64665a585a306457636849513d3d";
                            $converted=bin2hex(base64_encode(str_rot13($password)));
                            if(strcmp($to_check,$converted)==0){
                                echo $flag;
                            }
                            else{
                                echo "Incorrect!";
                            }
                        }
                    ?>
                </div>

            </div>
            
        </div>
    </main>
</body>
</html>