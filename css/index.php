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
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--======== fav icon ========-->
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />

        <!--======== bootstrap icons ========-->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        />

        <!--======== tailwind css ========-->
        <script src="https://cdn.tailwindcss.com"></script>

        <!--======== animate css ========-->
        <link rel="stylesheet" href="css/animate.css" />

        <!--======== custom css ========-->
        <link rel="stylesheet" href="css/style.css" />
        <title>BABYFROG ON TON</title>
    </head>
    <body>
        <!--======== header ========-->
        <header>
            <div
                class="xl:container flex justify-between items-center px-5 xl:mx-auto py-2 lg:py-3"
            >
                <div class="flex items-center gap-4">
                    <!--=== logo ===-->
                    <a href="" class="nav__logo w-16">
                        <img src="images/logo.png" alt="" class="w-full" />
                    </a>

                    <!--=== menu ===-->
                    <div
                        class="nav__manu flex flex-col lg:flex-row justify-start items-start lg:justify-between lg:items-center gap-6 lg:gap-8 text-upper text-lg"
                        id="nav-menu"
                    >
                        <i
                            class="bi bi-x-circle-fill nav__close text-white lg:hidden"
                            id="nav-close"
                        ></i>

                        <a href="#home" class="nav__item text-white">Home</a>
                        <a href="#about" class="nav__item text-white"
                            >About us</a
                        >
                        <a href="#how-to-buy" class="nav__item text-white"
                            >How to buy</a
                        >
                        <a href="#tokenomics" class="nav__item text-white"
                            >Tokenomics</a
                        >
                    </div>
                </div>

                <!--=== social ===-->
                <div class="nav__socials flex items-center gap-1 text-white">
                    <div
                        class="nav__toggle px-2 py-1 rounded block lg:hidden"
                        id="nav-toggle"
                    >
                        <i class="bi bi-list"></i>
                    </div>
                </div>
            </div>
        </header>

        <!--======== main ========-->
        <main>
            <!--======== forbidden ========-->
            <section
                class="banner__section text-white pt-12 pb-4 lg:pt-16 lg:pb-8"
                id="home"
            >
                <div class="xl:container text-center px-5 xl:mx-auto">
                    <h4 class="text-6xl">403! Forbidden</h4>
                    <p class="text-2xl">No access allowed</p>
                </div>
            </section>
        </main>

        <footer>
            <div
                class="xl:container mx-4 xl:mx-auto pt-8 pb-5 text-left md:text-center text-sm md:text-base text-upper text-white"
            >
                dev@babyfrogonton <br />&copy; 2024 $babyfrogonton project all
                right reserved
            </div>
        </footer>

        <!--======== jquery lib ========-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--======== jquery anchorScroll script ========-->
        <script src="js/jquery-anchorScroll.js"></script>

        <!--======== wow script ========-->
        <script src="js/wow.min.js"></script>

        <!--======== main script ========-->
        <script src="js/main.js"></script>
    </body>
</html>
