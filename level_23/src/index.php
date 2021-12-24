<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSWAP 0x17</title>
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
            Level 0x17
        </div>
    </header>
    <main>
        <div class="container">
            <div class="container__title">
                Welcome to Level 0x17
            </div>
            <div class="wrapper">
                <div class="wrapper__title">
                    Presented to you by Infosec Cyberlabs
                </div>
                <div class="wrapper__description">
                    A team is formed by the Union of all its members
                </div>
                <form action="" method="GET">
                    <div class="input-group">
                        <label for="name">
                            Choose the number:
                        </label>
                        <input type="number" name="sl" min="1" max="9">
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
                        if(!empty($_GET["sl"])){
                            $sl=$_GET["sl"];

                            $con=mysqli_connect("db_level_23","oswap_user","o5wap_u533333rr","members") or die(mysql_error());

                            $query=mysqli_query($con,"SELECT * FROM member WHERE SlNo=".$sl);
                            if(mysqli_num_rows($query)!=0){
                                while($row = mysqli_fetch_array($query))
                                {
                                    echo "<tr>";
                                    echo "<td>" . $row['Name'] . "</td>";
                                    echo "</tr>";
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