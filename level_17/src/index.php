<?php 

function generatePathFromFileName($name) {
    $ext = pathinfo($name)['extension'];
    $randomName = md5(strval(time() * 1000 + random_int(10, 900)));

    $toFile = dirname(__FILE__) . DIRECTORY_SEPARATOR;
    $toFile .= 'images' . DIRECTORY_SEPARATOR;
    $toFile .= $randomName . '.' . $ext;
    return $toFile;
}

function generateUriPath($name) {
    $uri = 'images/';
    $uri .= basename($name);
    return $uri;
}

$message = '';
if ( array_key_exists("file", $_FILES) ) {    
    if(filesize($_FILES['file']['tmp_name']) > 1000) {  
        $message = "File size too big";
    } else {
        $path = generatePathFromFileName($_FILES['file']['name']);
        move_uploaded_file($_FILES['file']['tmp_name'], $path);
        $message = 'File uploaded <a href="' . generateUriPath($path) . '">here</a>';
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSWAP 0x11</title>
    <link rel="shortcut icon" href="/oswap.png" type="image/png">
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
            Level 0x11
        </div>
    </header>
    <main>
        <div class="container">
            <div class="container__title">
                Welcome to Level 0x11
            </div>
            <div class="wrapper">
                <div class="wrapper__title">
                    Secure Storage Drive
                </div>
                <div class="wrapper__description">
                    Hey, I built a secure storage drive!
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="input-group">
                        <label for="name">
                            Upload your file:
                        </label>
                        <input type="file" name="file">
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
                <div class="wrapper__description">
                    <?php echo $message; ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
