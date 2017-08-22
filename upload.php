<?php

  if(isset($_FILES['image'])){

    $name = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    if(!file_exists("images")){
      mkdir("images");
    }

    move_uploaded_file($tmp, "images/" . $name);

    print_r("File $name was uploaded successfully.");

  }else{

    print_r("There was no file to upload.");

  }
