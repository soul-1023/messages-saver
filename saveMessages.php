<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $tmpFileName = $_FILES['img']['tmp_name'];
    $fileName = $_FILES['img']["name"];
    $typeOfImage = $_FILES['img']['type'];
    $types = [
        "image/jpeg" => ".jpg",
        "image/png" => ".png"
    ];

    function hashing($name, $salt) {
        return md5($name . rand(0, strlen($salt)));
    }

    $extension = ".txt";
    $nameOfFile = hashing($name, $message);
    $pathForMessages = "./savedMessages/" . $nameOfFile . $extension;
    $messageHandler = fopen($pathForMessages, 'w');

    fwrite($messageHandler, $message);

    if(!empty($_FILES['img'])) {
        $nameOfImage = hashing($fileName, $fileName);
        $pathForImages = "./savedImages/$nameOfImage" . $types[$typeOfImage];

        if(move_uploaded_file($tmpFileName, $pathForImages)) {
            fwrite($messageHandler, PHP_EOL . $pathForImages);
        }
    }

    fclose($messageHandler);
