<?php
    session_start();
    include "flag.php";
    $correct=0;
    if(!empty($_POST["username"]) && !empty($_POST["password"])){
        $user=$_POST["username"];
        $pass=$_POST["password"];

        if(strcmp($user,"peter")===0 && strcmp($pass,"1'm_s0m3th1ng_0f_a_sc13nt1st_mys3lf")===0){   
            $_SESSION['login_user']=$user;
            header("Location: user.php?usernote=peter");
            $correct=1;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSWAP 0xd</title>
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
                    Hello, Peter
                </div>
                <div class="wrapper__description">
                    Peter left his creds somewhere, but he seems to have forgotten where.
                    Can you help him find his creds?
                    <!-- peter:1'm_s0m3th1ng_0f_a_sc13nt1st_mys3lf -->
                </div>
                <form action="" method="POST">
                    <div class="input-group">
                        <label for="name">
                            Enter the username:
                        </label>
                        <input type="text" name="username" id="name" placeholder="Username">
                    </div>
                    <div class="input-group">
                        <label for="name">
                            Enter the password:
                        </label>
                        <input type="password" name="password" id="name" placeholder="Password">
                    </div>
                    <div style="width: 100%; display: table;">
                        <div style="display: table-row;">
                            <div style="width: 50%; display: table-cell;">
                                <button role="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="onclick">
                    <?php
                        if($correct!=1 && isset($_POST["username"]) && isset($_POST["password"])){
                            echo "Incorrect username or password!";
                        }
                    ?>
                </div>

            </div>
        </div>
    </main>
</body>
</html>