<?php // php extension file redirecting to folder
function current_url()
{
    $url = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $valid_url = str_replace("&", "&amp;", $url);

    return $valid_url;
}

$current_url = current_url();

$array_url = explode('/', $current_url);
$extension_url = end($array_url);

if ($extension_url == 'index.php') {
    $redirect_url = substr($current_url, 0, -9); ?>
    <script type="text/javascript">
        window.location.href = '<?php echo $redirect_url; ?>';
    </script>
    <?php 
}

if ($current_url == 'http://pogepanda.com/') {
    ?>
    <script type="text/javascript">
        window.location.href = 'https://pogepanda.com/';
    </script>
    <?php 
}

// Set the character set for the output
header('Content-Type: text/html; charset=utf-8');

$base_url = 'https://pogepanda.com/'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--======== fav icon ========-->
    <link rel="shortcut icon" href="images/fav-icon.png" type="image/x-icon">

    <!--======== bootstrap icons ========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!--======== tailwind css ========-->
    <script src="https://cdn.tailwindcss.com"></script>

    <!--======== animate css ========-->
    <link rel="stylesheet" href="css/animate.css">

    <!--======== custom css ========-->
    <link rel="stylesheet" href="css/style.css">
    <title>Poge Panda</title>
</head>
<body>

<!--======== header ========-->
<header>
    <div class="xl:container flex justify-between items-center mx-4 xl:mx-auto py-2 lg:py-5">
        <!--=== logo ===-->
        <a href="" class="nav__logo w-16">
            <img src="images/logo.png" alt="" class="w-full">
        </a>

        <!--=== menu ===-->
        <div class="nav__manu flex flex-col lg:flex-row justify-start items-start lg:justify-between lg:items-center gap-6 lg:gap-8 text-upper" id="nav-menu">
            <i class="bi bi-x-circle-fill nav__close lg:hidden" id="nav-close"></i>

            <a href="#home" class="nav__item text-white">Home</a>
            <a href="#feature" class="nav__item text-white">Features</a>
            <a href="#about" class="nav__item text-white">About us</a>
            <a href="#join-us" class="nav__item text-white">Join us</a>
            <a href="#community" class="nav__item text-white">Community</a>
            <!-- <a href="" class="nav__button button text-white px-3 py-2 lg:px-5 lg:py-3 rounded-md text-xs lg:text-sm">White Paper</a> -->
        </div>

        <!--=== social ===-->
        <div class="nav__socials flex items-center gap-1 text-white">
            <div class="nav__toggle px-2 py-1 rounded block lg:hidden" id="nav-toggle">
                <i class="bi bi-list"></i>
            </div>

            <a href="https://twitter.com/PogePanda" class="nav__social__btn px-2 py-1 rounded">
                <i class="bi bi-telegram"></i>
            </a>

            <a href="https://t.me/Pogepanda" class="nav__social__btn px-2 py-1 rounded">
                <i class="bi bi-twitter"></i>
            </a>
        </div>
    </div>
</header>

<!--======== main ========-->
<main>
    <!--======== forbidden ========-->
    <section class="banner__section text-white pt-12 pb-4 lg:pt-16 lg:pb-8" id="home">
        <div class="xl:container text-center mx-4 xl:mx-auto">
            <h4 class="text-3xl">403! Forbidden</h4>
            <p>No access allowed</p>
        </div>
    </section>
</main>

<footer>
    <div class="xl:container mx-4 xl:mx-auto pt-8 pb-5 text-left md:text-center text-sm md:text-base text-upper text-white">
        dev@pogepanda <br>&copy; 2024 $pogepanda project all right reserved
    </div>
</footer>

<!--======== jquery lib ========-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!--======== dom script ========-->
<script src="js/jquery-anchorScroll.js"></script>

<!--======== dom script ========-->
<script src="js/wow.min.js"></script>

<!--======== dom script ========-->
<script src="js/main.js"></script>
</body>
</html>