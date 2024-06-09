<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['judul'];?></title>
    <link rel="stylesheet" href="<?php echo BASEURL;?>/public/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?php echo BASEURL;?>/public/css/templates/default.css">
    <link rel="stylesheet" href=<?php echo BASEURL ."/public/css/". $data['folder'] ."/". $data['style'] .".css"?>>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>