<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSWAP 0x7</title>
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
            Level 0x7
        </div>
    </header>
    <main>
        <div class="container">
            <div class="container__title">
                Welcome to Level 0x7
            </div>
            <div class="wrapper">
                <div class="wrapper__title">
                    Where you HEADED at? 
                </div>
                <div class="wrapper__description">
                This is a very secure website, available only to those who have their college as IITISM
                <br>
                <br>
                <?php
                    include 'flag.php';
                    $headers=apache_request_headers();
                    $user=$headers["User-Agent"];
                    echo("I can't tell you much but......<br> Your User-Agent is set to ". $user."<br>");
                    
                    if(isset($headers["college"])){
                        $college=$headers["college"];
                    }
                    else{
                        $college=NULL;
                    }
                    echo("<br><br><br> The web application says: ");
                    if(!$college){
                        echo("Lmao! School going n00000b");
                    }
                    else{
                        if($college==="IITISM"){
                            echo($flag);
                        }
                        else{
                            echo("Huh? Never even heard of that college");
                        }
                    }
                ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
