<?php
// You need to create a folder named "upload_images" in your website directory
$upload_dir = 'upload_images';

// "myfile" is the key of the http payload
$name = basename($_FILES["myfile"]["name"]);
$target_file = "$upload_dir/$name";
if (!move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file))
    echo 'error: '.$_FILES["myfile"]["error"].' see /var/log/apache2/error.log for details.';
else
    echo "{$name} uploaded!";
?>
