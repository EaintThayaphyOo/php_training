<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial7</title>
</head>
<body>
    <div id="wrapper">
        <form method="post" action="">
            <label>Name<input type="text" name="qr_text"><label><br><br><br>
            <label>Folder<input type="text" name="folder"><label><br><br><br>
            <input type="submit" name="generate_text" value="Generate">
        </form>
    </div>
    <?php
    include('phpqrcode/qrlib.php'); 
    if(isset($_POST['generate_text'])){
        $text=$_POST['qr_text'];
        $folder = $_POST['folder'];
        /*$dirPath = ''.$folder;
        if(!is_dir($dirPath)){
            mkdir($dirPath);
        }*/
        $file_name1="qr.png";
        $file_name= $dirPath. "/" .$file_name1;
        QRcode::png($text,$file_name);
        echo "<img alt='".$file_name."' src='".$file_name."'>";
        $text=$_POST['qr_text'];
    }
    ?>
</body>
</html>