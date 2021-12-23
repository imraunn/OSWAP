<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSWAP 0x9</title>
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
            Level 0x9
        </div>
    </header>
    <main>
        <div class="container">
            <div class="container__title">
                Welcome to Level 0x9
            </div>
            <div class="wrapper">
                <div class="wrapper__title">
                    I hate DBMS
                </div>
                <div class="wrapper__description">
                    You know the username and password. Login!
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
                        <input type="text" name="password" id="name" placeholder="Password">
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
                    if(!empty($_POST["username"])){
                        $user=$_POST["username"];
                        $pass=$_POST["password"];

                        $con=mysqli_connect("db_level_9","cyber","cyberishere","cyberlabs") or die(mysql_error());

                        $query=mysqli_query($con, "SELECT * FROM user WHERE username='".$user."' AND password='".$pass."'");

                        if(mysqli_num_rows($query)!=0){
                            echo $flag;
                        }
                        else{
                            echo "Invalid username or password";
                        }
                    }
                ?>
                </div>

            </div>
        </div>
    </main>
</body>
</html>