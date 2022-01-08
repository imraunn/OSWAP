<?php
    $defaultdata=array("flag"=>"no");

    function xor_encrypt($in){
        $key="qnby";
        $text=$in;
        $out='';
        for($i=0;$i<strlen($text);$i++){
            $out .=$text[$i]^$key[$i % strlen($key)];
        }
        return $out;
    }

    function load($data){
        global $_COOKIE;
        $mydata = $data;
        if(array_key_exists("getFlag", $_COOKIE)){
            $temp=json_decode(xor_encrypt(base64_decode($_COOKIE["getFlag"])), true);
            if(is_array($temp) && array_key_exists("flag", $temp)){
                $mydata['flag']=$temp['flag'];
            }
        }
        return $mydata;
    }

    function save($data){
        setcookie("getFlag", base64_encode(xor_encrypt(json_encode($data))));
    }
    
    $data=load($defaultdata);
    save($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSWAP 0x14</title>
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
            Level 0x14
        </div>
    </header>
    <main>
        <div class="container">
            <div class="container__title">
                Welcome to Level 0x14
            </div>
            <div class="wrapper">
                <div class="wrapper__title">
                    What do you eat with tea?
                </div>
                <div class="wrapper__description">
                    Can't solve this challenge if you're a n00b :)
                </div>
                <form action="" method="GET">
                    <div class="input-group">
                        <label for="name">
                            Are you a n00b?
                        </label>
                        <input type="text" name="n00b" id="name" placeholder="Noob status">
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
                        function giveflag(){
                            include "flag.php";
                            $data=json_decode(xor_encrypt(base64_decode($_COOKIE["getFlag"])), true);
                            if(strcmp($data["flag"],"yes")==0){
                                echo $flag;
                            }
                            else if(!empty($_GET["n00b"])){
                                if(strcmp($_GET["n00b"],"yes")==0){
                                    echo "As I said, don't be a n00b :)";
                                }
                                else if(strcmp($_GET["n00b"],"no")==0){
                                    echo "Are you sure?";
                                }
                            }
                        }
                        if(isset($_COOKIE["getFlag"])){
                            giveflag();
                        }
                    ?>

                </div>

            </div>
        </div>
    </main>
</body>
</html>