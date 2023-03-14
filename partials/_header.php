<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <!-- css -->
    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <title>Goat | <?= $title ?></title>
</head>
<body>
    <!-- header -->
    <header class="<?= $bg ?> flex justify-between  text-white">
        
        <!-- logo -->
        <div class="uppercase text-5xl m-4 pl-9 font-bold pt-3">
          <h1><a href="$ index.html">Goat.</a></h1>  
        </div>
        <?php include("_nav.php") ?>
    </header>