<?php
SESSION_START();
$nama = $_SESSION['nama'];
//$nama = "thoriq";
if(!file_exists('file/$nama/')){
	mkdir("file/$nama/");
}

$target_dir = "file/$nama/";

$tempKtp = explode(".", $_FILES["ktp"]["name"]);
$tempFoto = explode(".", $_FILES["foto"]["name"]);

$ktp = $target_dir . 'ktp.'. end($tempKtp);
$foto = $target_dir . 'foto.'. end($tempFoto);

$uploadOk = 1;
$imageFileTypeKtp = pathinfo($ktp,PATHINFO_EXTENSION);
$imageFileTypeFoto = pathinfo($foto,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $checkKtp = getimagesize($_FILES["ktp"]["tmp_name"]);
	$checkFoto = getimagesize($_FILES["foto"]["tmp_name"]);
	
	if($checkKtp !== false And $checkFoto !== false) {
        $uploadOk = 1;
    }	
	else {
		header("Location: ../upload.php?error=1");
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
if (file_exists($ktp) or file_exists($foto)) {
    header("Location: ../upload.php?error=2");
    $uploadOk = 0;
}

if ($_FILES["ktp"]["size"] > 2500000 or $_FILES["foto"]["size"] > 2500000) {
    header("Location: ../upload.php?error=3");
    $uploadOk = 0;
}

//header("Location: ../../index.html");
if ($uploadOk == 0) {
    header("Location: ../upload.php?error=4");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["ktp"]["tmp_name"], $ktp) and move_uploaded_file($_FILES["foto"]["tmp_name"], $foto)) {
		header("Location: ../../sukses.php");
   		SESSION_UNSET();
		SESSION_DESTROY();
    } else {
        header("Location: ../upload.php?error=4");
    }
}
exit;
?>