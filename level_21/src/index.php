<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSWAP 0x15</title>
    <link rel="shortcut icon" href="oswap.png" type="image/png">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="title">
            Level 0x15
        </div>
        <div class="level-title">
            Level 0x15
        </div>
    </header>
    <main>
        <div class="container">
            <div class="container__title">
                Welcome to Level 0x15
            </div>
            <div class="wrapper">
                <div class="wrapper__title">
                    Signin page
                </div>
                <div class="wrapper__description">
                    <img src="parse.jpg" height=40% width=100%>
                </div>

                We authenticate on the basis of XML files.
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="input-group">
                        <label for="name">
                            Upload the file
                        </label>
                        <input type="file" name="userfile">
                    </div>
                    <div style="width: 100%; display: table;">
                        <div style="display: table-row;">
                            <div style="width: 50%; display: table-cell;">
                                <button role="submit">Submit</button>
                            </div>
                            <div class="source" style="display: table-cell;"> 
                                <a href="sample.xml" download>View sample file</a>
                            </div>
                        </div>
                    </div>
                </form>
                <?php 
                    error_reporting(0);
                    if(isset($_FILES['userfile'])){
                        libxml_disable_entity_loader (false);
                        $xmlfile = file_get_contents($_FILES["userfile"]["tmp_name"]);
                        $dom = new DOMDocument();
                        $dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
                        $creds = simplexml_import_dom($dom);
                        $uname = $creds->uname;
                        if(!empty($uname)){
                            echo "<br><br> You have logged in as user $uname";
                        }
                        else{
                            echo "<br><br> Invalid authentication file";
                        }
                    }
                ?>
            </div>
        </div>
    </main>
</body>
</html>