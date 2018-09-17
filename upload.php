<?php
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["UPFile"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if (move_uploaded_file($_FILES["UPFile"]["tmp_name"], $target_file)) {
        echo "File : ". basename( $_FILES["UPFile"]["name"]). " berhasil di upload.";
        $file = basename( $_FILES["UPFile"]["name"]);
    } else {
        echo "Maaf terjadi error ketika melakukan upload.";
    }
?>
<br><br>
<img src="upload/<?php echo ($file)?>"> 