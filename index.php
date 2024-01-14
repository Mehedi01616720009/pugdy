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
    <!--======== banner ========-->
    <section class="banner__section text-white pt-12 pb-4 lg:pt-16 lg:pb-8" id="home">
        <div class="xl:container flex flex-col justify-center items-center mx-4 xl:mx-auto">
            <div class="banner__data mb-6 md:mb-10 wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">
                <p class="text-center text-sm lg:text-base md:px-8">
                    Poge Panda is built on a strong foundation of community support and transparency. The team behind the coin is dedicated to keeping investors informed and involved every step of the way. 
                </p>
            </div>

            <div class="banner__img w-full mb-2 wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">
                <img src="images/banner.png" alt="" class="w-full">
            </div>

            <div class="banner__buttons w-full grid grid-cols-3 lg:flex lg:justify-center items-center gap-6 lg:gap-14 text-upper text-sm md:text-base mb-2">
                <a href="https://t.me/Pogepanda" class="banner__button button px-4 py-3 rounded md:px-6 md:py-4 md:rounded-lg w-full text-center wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1s">Chart</a>

                <a href="https://t.me/Pogepanda" class="banner__button button px-4 py-3 rounded md:px-6 md:py-4 md:rounded-lg w-full text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">Solscan</a>

                <a href="https://t.me/Pogepanda" class="banner__button button px-4 py-3 rounded md:px-6 md:py-4 md:rounded-lg w-full text-center wow fadeInRight" data-wow-duration="2s" data-wow-delay="1s">Raydium</a>
            </div>

            <div class="banner__anime__content wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">
                <img src="images/logo.png" alt="" class="w-full">
            </div>
        </div>
    </section>

    <!--======== main feature ========-->
    <section class="main__feature__section text-white pt-12 pb-4 lg:py-20 text-upper" id="feature">
        <div class="xl:container grid lg:grid-cols-2 lg:items-center mx-4 xl:mx-auto gap-6">
            <!--=== main feature data ===-->
            <div class="main__feature__data">
                <h5 class="text-xl mb-8 wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">Main Feature <span>Points</span></h5>

                <h2 class="text-4xl mb-4 wow rotateIn" data-wow-duration="2s" data-wow-delay="1s">Community Driven & SOL based Ecosystem memecoin</h2>

                <p class="text-sm md:text-base wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">
                    They believe that the success of Poge Panda is dependent on the trust and loyalty of its supporters.
                </p>
            </div>

            <!--=== main feature widgets ===-->
            <div class="main__features__widgets grid md:grid-cols-2 gap-4">
                <!--== main feature widget ==-->
                <div class="main__features__widget">
                    <div class="main__features__widgets__content w-16">
                        <img src="images/1.png" alt="" class="w-full">
                    </div>

                    <div class="main__features__widgets__data">
                        <h5 class="text-xl lg:text-2xl mb-2">liquidity burned</h5>
                        <p class="text-xs lg:text-sm">liquidity burned</p>
                    </div>
                </div>

                <!--== main feature widget ==-->
                <div class="main__features__widget">
                    <div class="main__features__widgets__content w-16">
                        <img src="images/2.png" alt="" class="w-full">
                    </div>

                    <div class="main__features__widgets__data">
                        <h5 class="text-xl lg:text-2xl mb-2">Low Tax</h5>
                        <p class="text-xs lg:text-sm">0% Transaction fee</p>
                    </div>
                </div>

                <!--== main feature widget ==-->
                <div class="main__features__widget">
                    <div class="main__features__widgets__content w-16">
                        <img src="images/3.png" alt="" class="w-full">
                    </div>

                    <div class="main__features__widgets__data">
                        <h5 class="text-xl lg:text-2xl mb-2">Total Supply</h5>
                        <p class="text-xs lg:text-sm">100 Million</p>
                    </div>
                </div>

                <!--== main feature widget ==-->
                <div class="main__features__widget">
                    <div class="main__features__widgets__content w-16">
                        <img src="images/4.png" alt="" class="w-full">
                    </div>

                    <div class="main__features__widgets__data">
                        <h5 class="text-xl lg:text-2xl mb-2">Community Driven</h5>
                        <p class="text-xs lg:text-sm">Fully decentralised and community driven memecoin</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--======== about ========-->
    <section class="about__section text-white pt-12 pb-4 lg:py-20 text-upper" id="about">
        <div class="xl:container grid lg:grid-cols-2 lg:items-center mx-4 xl:mx-auto gap-6">
            <!--=== about data ===-->
            <div class="about__data">
                <h2 class="text-4xl mb-4 wow fadeInRight" data-wow-duration="2s" data-wow-delay="1s">About <span>$Pogepanda</span></h2>

                <p class="text-sm md:text-base wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">
                    Poge Panda is not just about the coin; it's about spreading joy and laughter. Our team is committed to creating a positive and entertaining experience for investors. Through engaging content, events, and collaborations, they strive to bring a smile to the faces of everyone involved. 🐼
                </p>
            </div>

            <!--=== about content ===-->
            <div class="about__content grid md:grid-cols-2 gap-4 items-center">
                <!--== about img ==-->
                <div class="about__content__img">
                    <img src="images/logo.png" alt="" class="w-full">
                </div>

                <div class="grid gap-4">
                    <!--== about widget ==-->
                    <div class="about__widget button text-center p-4 rounded-2xl wow fadeInRight" data-wow-duration="2s" data-wow-delay="1s">
                        <div class="about__widgets__content w-14 mx-auto mb-4">
                            <img src="images/3.png" alt="" class="w-full">
                        </div>

                        <div class="about__widgets__data">
                            <p class="text-sm lg:text-base">0% Trading fee</p>
                        </div>
                    </div>

                    <!--== about widget ==-->
                    <div class="about__widget button text-center p-4 rounded-2xl wow fadeInRight" data-wow-duration="2s" data-wow-delay="1s">
                        <div class="about__widgets__content w-14 mx-auto mb-4">
                            <img src="images/1.png" alt="" class="w-full">
                        </div>

                        <div class="about__widgets__data">
                            <p class="text-sm lg:text-base">1 Million</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--======== join us ========-->
    <section class="joinus__section text-white pt-12 pb-4 lg:py-20 text-upper" id="join-us">
        <div class="xl:container grid md:grid-cols-2 md:items-center mx-4 xl:mx-auto gap-6">
            <!--=== join us content ===-->
            <div class="joinus__content">
                <!--== join us img ==-->
                <div class="joinus__content__img h-max rounded-3xl overflow-hidden">
                    <img src="images/join-us.jpg" alt="" class="w-full">
                </div>
            </div>

            <!--=== join us data ===-->
            <div class="joinus__data">
                <h2 class="text-4xl mb-4 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1s">Join <span>us</span></h2>

                <p class="text-sm md:text-base mb-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">
                    Are you ready to be a part of something extraordinary? Join us and unleash the power of panda as we embark on an exciting adventure in the world of cryptocurrency. Together, we can achieve greatness and unlock the boundless potential that lies within us.
                </p>

                <div class="joinus__telegram w-max flex justify-between items-center gap-4 px-3 py-1 rounded wow fadeInRight" data-wow-duration="2s" data-wow-delay="1s" id="copy-telegram-btn">
                    <div class="px-3 py-1 rounded" id="copy-telegram-tooltip"></div>
                    <div id="copy-telegram-link">https://t.me/Pogepanda</div>
                    <i class="bi bi-clipboard-check-fill"></i>
                </div>
            </div>
        </div>
    </section>

    <!--======== join community ========-->
    <section class="community__section text-white pt-12 lg:pt-16 text-upper" id="community">
        <div class="community__container xl:container grid md:grid-cols-3 mx-4 xl:mx-auto gap-6 pb-4 lg:pb-8  items-center">
            <!--=== join community data ===-->
            <!-- <div class="community__data">
                <h5 class="text-xl mb-5 wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">Join our community</h5>

                <p class="text-sm lg: lg:text-base mb-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">
                    Are you ready to be a part of something extraordinary? Join us and unleash the power of Panda as we embark on an exciting adventure in the world of cryptocurrency. Together, we can achieve greatness and unlock the boundless potential that lies within us.
                </p>

                <div class="community__socials__buttons flex items-center gap-2">
                    <a href="https://twitter.com/PogePanda" class="community__socials__button button px-3 py-2 lg:px-4 lg:py-3 text-white rounded">
                        <i class="bi bi-twitter"></i>
                    </a>

                    <a href="https://t.me/Pogepanda" class="community__socials__button button px-3 py-2 lg:px-4 lg:py-3 text-white rounded">
                        <i class="bi bi-telegram"></i>
                    </a>
                </div>
            </div> -->

            <!--=== join community content ===-->
            <div class="community__content">
                <!--== join community img ==-->
                <div class="community__content__img h-max rounded-3xl overflow-hidden">
                    <img src="images/community-3.jpg" alt="" class="w-full">
                </div>
            </div>

            <!--=== join community links ===-->
            <div class="community__links text-center">
                <h5 class="text-xl mb-5">Links</h5>
                
                <ul class="flex flex-col items-center gap-4 text-sm lg: lg:text-base">
                    <a href="#home" class="text-white">Home</a>
                    <a href="#feature" class="text-white">Features</a>
                    <a href="#about" class="text-white">About</a>
                    <a href="#join-us" class="text-white">Join us</a>
                    <a href="#community" class="text-white">Community</a>
                </ul>
            </div>

            <!--=== join community content ===-->
            <div class="community__content grid grid-cols-2 gap-3">
                <!--== join community img ==-->
                <div class="community__content__img h-max rounded-xl overflow-hidden">
                    <img src="images/community-1.jpg" alt="" class="w-full">
                </div>

                <!--== join community img ==-->
                <div class="community__content__img h-max rounded-xl overflow-hidden">
                    <img src="images/community-2.jpg" alt="" class="w-full">
                </div>

                <!--== join community img ==-->
                <div class="community__content__img h-max rounded-xl overflow-hidden">
                    <img src="images/community-4.jpg" alt="" class="w-full">
                </div>

                <!--== join community img ==-->
                <div class="community__content__img h-max rounded-xl overflow-hidden">
                    <img src="images/community-5.jpg" alt="" class="w-full">
                </div>
            </div>

            <!--=== send mail ===-->
            <!-- <div class="send__mail">
                <h5 class="text-xl mb-5 wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">Send an email</h5>

                <p class="text-sm lg: lg:text-base mb-2 wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">
                    Don't mess out on all the latest updates on ordinal protocol & developments.
                </p>

                <form action="" class="grid gap-2">
                    <input type="email" name="" id="" placeholder="Enter your email" class="px-3 py-2 rounded-lg">

                    <textarea name="" id="" rows="4" placeholder="Message" class="px-3 py-2 rounded-lg"></textarea>

                    <button type="submit" class="button rounded-lg px-7 py-2 w-max">Send</button>
                </form>
            </div> -->
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