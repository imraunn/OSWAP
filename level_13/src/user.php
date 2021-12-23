<?php
    session_start();
    if(!isset($_SESSION['login_user'])){
        header("Location: index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peter - OSWAP</title>
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
            Level 0xd
        </div>
    </header>
    <main>
        <div class="container">
            <div class="container__title">
                Welcome to Level 0xd
            </div>
            <div class="wrapper">
                <div class="wrapper__title">
                    Welcome Back
                </div>
                <div class="wrapper__description">
                    <?php
                        include "flag.php";
                        if(!empty($_GET["usernote"])){
                            echo "<strong>Note for ".$_GET["usernote"]." :</strong><br><br>";
                            $user=$_GET["usernote"];
                            switch($user){
                                case "peter":
                                    echo "I know I shouldn't have given my glasses to Quentin Beck.<br><br>";
                                    echo "<img src='images/peternote.png' width=100%>";
                                    break;
                                case "quentin":
                                    echo "If you were good enough, maybe Tony would still be alive.<br><br>";
                                    echo "<img src='images/quentinnote.png' width=100%>";
                                    break;
                                case "tony":
                                    echo "I am Iron Man, and ILY 3000. Here's your flag: ".$flag."<br><br>";
                                    echo "<img src='images/tonynote.png' width=100%>";
                                    break;
                                default:
                                    echo "In memory of Stan Lee.<br><br>";
                                    echo "<img src='images/defaultnote.png' width=100%>";
                            }
                        }
                        else{
                            echo "<strong>Note for anonymous :</strong><br><br>";
                            echo "In memory of Stan Lee.<br><br>";
                            echo "<img src='images/defaultnote.png' width=100%>";
                        }
                        
                    ?>
                </div>
                </form>

                <div class="onclick">
                </div>

            </div>
        </div>
    </main>
</body>
</html>