<?php
function addcss (){
    echo '<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" />';
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" />';
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />';
    echo '<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />';
    echo '<link rel="stylesheet" href="../assets/css/slick-theme.css" />';
    echo '<link href="../assets/css/font-awesome.min.css" rel="stylesheet" />';
    echo '<link href="../assets/css/style.css" rel="stylesheet" />';
    echo '<link href="../assets/css/responsive.css" rel="stylesheet" />';
}

function redirect(){
    header("Location:templates/index.php");
    die('ERROR');

}
function addfooter(){
    echo '<a href="https://html.design/">Free Html Templates</a>';
    echo '<script src="../assets/js/jquery-3.4.1.min.js"></script>';
    echo '<script src="../assets/js/bootstrap.js"></script>';
    echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>';
    echo '<script src="../assets/js/custom.js"></script>';
}
?>
