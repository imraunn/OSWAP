<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSWAP 0x10</title>
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
            Level 0x10
        </div>
    </header>
    <main>
        <div class="container">
            <div class="container__title">
                Welcome to Level 0x10
            </div>
            <div class="wrapper">
                <div class="wrapper__title">
                    There's a new variant of the virus on the rise!
                </div>
                <div class="wrapper__description">
                    The previous vaccine is ineffective against this new variant!
                </div>
                <form action="" method="GET">
                    <div class="input-group">
                        <label for="name">
                            Enter the file whose permissions you need to check:
                        </label>
                        <input type="text" name="pass" id="name" placeholder="File name">
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
                        if(!empty($_GET["pass"])){
                            $text=htmlentities($_GET["pass"]);
                            if (!preg_match("[;|&|`|\||\*]",$text)){
                                if(!preg_match("/flag/i",$text)){
                                    $output=htmlentities(shell_exec("ls -la $text 2>&1"));
                                    echo $output;
                                }
                                else{
                                    echo "Oops! I'm sorry to tell you. You can't read the flag :)";
                                }
                            }
                            else{
                                echo "Do not Hack Me!";
                            }
                        }
                    ?>
                </div>

            </div>
        </div>
    </main>
</body>
</html>