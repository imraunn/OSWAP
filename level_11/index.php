<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSWAP 0xb</title>
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
            Level 0xb
        </div>
    </header>
    <main>
        <div class="container">
            <div class="container__title">
                Welcome to Level 0xb
            </div>
            <div class="wrapper">
                <div class="wrapper__title">
                    Is this even possible?
                </div>
                <div class="wrapper__description">
                    You can't send the password directly.<br>
                    But, if you dont send the password, md5 wont match.<br>
                    Paradoxical xD<br>
                </div>
                <form action="" method="POST">
                    <div class="input-group">
                        <label for="name">
                            Enter the top secret password:
                        </label>
                        <input type="password" name="password">
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
                    include 'flag.php';
                    if(isset($_POST["password"])){
                        $input=$_POST["password"];
                    }
                    $password="cyberlabs_9Wu4RUuK=))ZuH<fdT;*";
                    if(isset($input)){
                        if($input===$password){
                            echo("Lmao! n00b");
                        }
                        else{
                            if(md5($input)==md5($password)){
                                echo($flag);
                            }
                            else{
                                echo("Bruh!");
                            }
                        }
                    }
                ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>