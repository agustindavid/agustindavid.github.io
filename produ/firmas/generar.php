<?php
    $nombre=$_POST['nombre']; 
    $mail=$_POST['mail']; 
    $cargo=$_POST['cargo'];
    $skype=$_POST['skype'];
    $tlf=$_POST['tlf'];
    $celular=$_POST['celular'];


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>

<table width='480px' cellpadding="0" cellspacing="0" style="font-family:arial;">
    <tr>
        <td bgcolor="#fcd600" style="background-color:#fcd600; width:5%"></td>
        <td style=" background-color: #2d2d2d;width: 35%;padding: 10px 25px;"><img src="images/logo.png"></td>
        <td style=" background-color: #2d2d2d;color: #fff;font-family: Arial;font-size: 20px;width: 60%;padding: 20px 0; "><img style="float:right; margin-right:15px;" src="images/lines.png"></td>
    </tr>
</table>
<table width='480px' cellpadding="0" cellspacing="0" style="font-family:arial;">
    <tr>
        <td style="padding:15px; text-align:center;"> <img src="uploads/<?php echo  basename( $_FILES["fileToUpload"]["name"]) ?>" </td>
        <td style="padding:15px;">
            <p style="font-weight:bold; font-size:19px; margin:0; text-transform:capitalize;"><?php echo $nombre; ?></p>
            <p style=" margin: 0; font-size: 14px; "><?php echo $cargo ?></p>
            <p style="margin-top: 10px;margin-bottom: 0; font-size: 14px;"><a href="mailto:<?php echo $mail ?>"><?php echo $mail ?></a></p>
            <p style="margin-top: 5px;margin-bottom: 0; font-size: 14px;"><b>Skype: </b><?php echo $skype ?></p>
            <p style="margin-top: 5px;margin-bottom: 0; font-size: 14px;"><b>T: </b><?php echo $tlf ?></p>
            <p style="margin-top: 5px;margin-bottom: 0; font-size: 14px;"><b>C: </b><?php echo $celular ?></p>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align:center">
            <img src="images/stripe.png">
            <p><a style="font-weight:bold;">produ.com</a><span style="margin:0px 5px;">|</span><a style="font-weight:bold; margin-right:15px">produ.com/who</a>
                <a style="margin-left:10px"><img src="images/facebook.png"></a>
                <a style="margin-left:10px"><img src="images/twitter.png"></a>
                <a style="margin-left:10px"><img src="images/youtube.png"></a>
                <a style="margin-left:10px"><img src="images/instagram.png"></a>
                <a style="margin-left:10px"><img src="images/linkdin.png"></a>
            </p>
        </td>
    </tr>
</table>