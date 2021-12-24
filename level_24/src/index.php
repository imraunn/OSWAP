<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSWAP 0x18</title>
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
            Level 0x18
        </div>
    </header>
    <main>
        <div class="container">
            <div class="container__title">
                Welcome to Level 0x18
            </div>
            <div class="wrapper">
                <div class="wrapper__title">
                    OSWAP Zoo (or Wildlife Sanctuary)
                </div>
                <div class="wrapper__description">
                    How will blind people see my zoo?
                </div>
                <form action="" method="POST">
                    <div class="input-group">
                        <label for="name">
                            Check if your animal is in my wildlife sanctuary:
                        </label>
                        <input type="text" name="animal" id="name" placeholder="Human">
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
                        if(!empty($_POST["animal"])){
                            $animal=$_POST["animal"];
                                
                            $con=mysqli_connect("db_level_24","oswap_user","o5wap_u533333rr","zoo") or die(mysql_error());

                            $query=mysqli_query($con,"SELECT * FROM animals WHERE name='".$animal."'");
                            if($query && mysqli_num_rows($query)!=0){
                                echo "Yes, we have it in my sanctuary";
                            }
                            else{
                                echo "Nope, don't have the money for it";
                            }
                        }
                    ?>
                </div>

            </div>
        </div>
    </main>
</body>
</html>