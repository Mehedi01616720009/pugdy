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
            <!--======== banner ========-->
            <section
                class="banner__section text-white pt-6 pb-4 lg:pt-5 lg:pb-8"
                id="home"
            >
                <div
                    class="xl:container flex flex-col justify-center items-center xl:grid xl:grid-cols-2 px-5 xl:mx-auto"
                >
                    <div>
                        <div
                            class="banner__data mb-6 md:mb-10 wow fadeInUp"
                            data-wow-duration="2s"
                            data-wow-delay="1s"
                        >
                            <p class="text-center text-4xl lg:text-7xl md:px-8">
                                Baby Frog <br />On Ton.
                            </p>
                        </div>

                        <div
                            class="banner__img w-full mb-2 wow fadeInUp xl:flex xl:justify-center mx-auto"
                            data-wow-duration="2s"
                            data-wow-delay="1s"
                        >
                            <img
                                src="images/banner-1.png"
                                alt=""
                                class="w-full"
                            />
                        </div>

                        <div class="flex justify-center items-center gap-3">
                            <a
                                href="https://x.com/bfrogonton"
                                class="size-12 flex justify-center items-center bg-[#4c9239] rounded-xl"
                            >
                                <i class="bi bi-twitter-x" class="size-8"></i>
                            </a>

                            <a
                                href="https://t.me/babyfrogonton"
                                class="size-12 flex justify-center items-center bg-[#4c9239] rounded-xl"
                            >
                                <i class="bi bi-telegram" class="size-8"></i>
                            </a>

                            <a
                                href=""
                                class="size-12 flex justify-center items-center bg-[#4c9239] rounded-xl"
                            >
                                <img
                                    src="images/dex.svg"
                                    alt=""
                                    class="size-8"
                                />
                            </a>
                        </div>
                    </div>

                    <div
                        class="banner__anime__content hidden xl:block wow fadeInUp"
                        data-wow-duration="2s"
                        data-wow-delay="1s"
                    >
                        <img
                            src="images/baneer-2.png"
                            alt=""
                            class="w-3/4 mx-auto"
                        />
                    </div>
                </div>
            </section>

            <!--======== about ========-->
            <section
                class="about__section text-white pt-12 pb-4 lg:py-20 text-upper"
                id="about"
            >
                <div
                    class="xl:container grid lg:grid-cols-2 lg:items-center px-5 xl:mx-auto gap-6"
                >
                    <!--=== about data ===-->
                    <div class="about__data">
                        <h2
                            class="text-4xl lg:text-5xl mb-4 wow fadeInRight"
                            data-wow-duration="2s"
                            data-wow-delay="1s"
                        >
                            BABYFROG ON TON
                        </h2>

                        <p
                            class="text-lg lg:text-xl tracking-widest leading-10 wow fadeInUp"
                            data-wow-duration="2s"
                            data-wow-delay="1s"
                        >
                            Baby Frog Coin around a cute, playful frog
                            character, tapping into the popularity of meme
                            culture. Purpose: Primarily for fun, community
                            engagement, and potentially as a collector's item.
                            Could include gamification aspects or integration
                            with social media challenges.
                        </p>
                    </div>

                    <!--=== about content ===-->
                    <div class="about__content flex relative">
                        <!--== about img ==-->
                        <div
                            class="about__content__img w-1/2 rounded-3xl overflow-hidden"
                        >
                            <img
                                src="images/about-1.jpg"
                                alt=""
                                class="w-full"
                            />
                        </div>

                        <div
                            class="about__content__img w-1/2 rounded-3xl overflow-hidden absolute top-32 left-32"
                        >
                            <img
                                src="images/about-2.jpg"
                                alt=""
                                class="w-full"
                            />
                        </div>
                    </div>
                </div>
            </section>

            <!--======== how to buy us ========-->
            <section
                class="howtobuy__section text-white pt-36 pb-4 lg:py-20 text-upper"
                id="how-to-buy"
            >
                <div class="xl:container px-5 xl:mx-auto">
                    <!--=== how to buy data ===-->
                    <div class="joinus__data">
                        <h2
                            class="text-4xl lg:text-6xl text-center mb-8 wow fadeInLeft"
                            data-wow-duration="2s"
                            data-wow-delay="1s"
                        >
                            How To Buy
                        </h2>

                        <div class="max-w-[1024px] px-5 lg:mx-auto">
                            <div
                                class="grid md:grid-cols-2 gap-4 lg:gap-6 mb-10"
                            >
                                <!-- stage card -->
                                <div class="bg-[#fdc1c3] rounded-xl p-5">
                                    <div
                                        class="size-16 rounded-full overflow-hidden mb-3"
                                    >
                                        <img
                                            src="images/tonton.png"
                                            alt=""
                                            class="w-16"
                                        />
                                    </div>
                                    <h3
                                        class="text-lg lg:text-xl underline mb-2"
                                    >
                                        Create your wallet
                                    </h3>
                                    <p class="text-base lg:text-lg mb-0.5">
                                        Start by downloading a wallet that
                                        supports the Ton Blockchain, such a
                                        Tonkeeper
                                    </p>
                                </div>

                                <!-- stage card -->
                                <div class="bg-[#fdc1c3] rounded-xl p-5">
                                    <div
                                        class="size-16 rounded-full overflow-hidden mb-3"
                                    >
                                        <img
                                            src="images/ton.jpg"
                                            alt=""
                                            class="w-16"
                                        />
                                    </div>
                                    <h3
                                        class="text-lg lg:text-2xl underline mb-2"
                                    >
                                        Purchase TON
                                    </h3>
                                    <p class="text-base lg:text-lg mb-0.5">
                                        Before purchasing $BFROG, make sure you
                                        TON wallet is funded. TON can be
                                        purchased on cryptocurrency exchanges
                                        such as Binance, Bybit and many other
                                        exchanges where Toncoin is present
                                    </p>
                                </div>

                                <!-- stage card -->
                                <div class="bg-[#fdc1c3] rounded-xl p-5">
                                    <div
                                        class="size-16 rounded-full overflow-hidden mb-3"
                                    >
                                        <img
                                            src="images/din.png"
                                            alt=""
                                            class="w-16"
                                        />
                                    </div>
                                    <h3
                                        class="text-lg lg:text-xl underline mb-2"
                                    >
                                        Visit DEDUST
                                    </h3>
                                    <p class="text-base lg:text-lg mb-0.5">
                                        Connect your wallet and enter the $BFROG
                                        token address. Select $BFROG from the
                                        list and follow the prompts to confirm
                                        and sign the transaction with your
                                        wallet
                                    </p>
                                </div>

                                <!-- stage card -->
                                <div class="bg-[#fdc1c3] rounded-xl p-5">
                                    <div
                                        class="size-16 rounded-full overflow-hidden mb-3"
                                    >
                                        <img
                                            src="images/banner.png"
                                            alt=""
                                            class="w-16"
                                        />
                                    </div>
                                    <h3
                                        class="text-lg lg:text-xl underline mb-2"
                                    >
                                        Switch $TON for $BFROG
                                    </h3>
                                    <p class="text-base lg:text-lg mb-0.5">
                                        Convert Ton to $BFROG with no extra
                                        effort or fees. Keep in mind that
                                        slippage setting may need to be adjusted
                                        during periods of merket volatility
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="grid md:grid-cols-2 lg:grid-cols-12 gap-4 lg:gap-6 mb-10"
                        >
                            <div class="hidden lg:block lg:col-span-2"></div>

                            <!-- stage card -->
                            <div
                                class="lg:col-span-4 bg-[#fdc1c3] rounded-xl p-5"
                            >
                                <h3 class="text-lg lg:text-xl underline mb-2">
                                    Stage 01
                                </h3>
                                <p class="text-base lg:text-lg mb-0.5">
                                    GAS PUMP LAUNCH $BFROG - BABYFROG ON GAS
                                    PUMP
                                </p>
                                <ul>
                                    <li>-> CREATE TELEGRAM STICKERS</li>
                                    <li>
                                        -> PAY DEX UPDATE ONCE WE REACH
                                        DeDust.io
                                    </li>
                                </ul>
                            </div>

                            <!-- stage card -->
                            <div
                                class="lg:col-span-4 bg-[#fdc1c3] rounded-xl p-5"
                            >
                                <h3 class="text-lg lg:text-xl underline mb-2">
                                    Stage 02
                                </h3>
                                <p class="text-base lg:text-lg mb-0.5">
                                    DEDUST.IO BUY TELEGRAM GROUP ADS AND START
                                    RAIDING ON TWITTER
                                </p>
                                <ul>
                                    <li>-> BUY ADS ON DEXSCREENER</li>
                                    <li>
                                        -> MOON AND BEYOND MORE AND MORE TWITTER
                                        RAIDS
                                    </li>
                                    <li>
                                        -> GIVEAWAYS OF $BFROG TOKENS AND TON
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div
                            class="grid md:grid-cols-2 lg:grid-cols-12 gap-4 lg:gap-6 mb-10"
                        >
                            <div class="hidden lg:block lg:col-span-2"></div>

                            <!-- stage card -->
                            <div
                                class="lg:col-span-4 bg-[#fdc1c3] rounded-xl p-5"
                            >
                                <h3 class="text-xl lg:text-3xl underline mb-2">
                                    Marketing and Community Branding:
                                </h3>
                                <p class="text-lg lg:text-xl mb-0.5">
                                    Develop a strong, recognizable brand with a
                                    catchy logo, engaging website, and
                                    consistent social media presence. Community
                                    Building: Engage on platforms like Twitter,
                                    Reddit, Telegram, and Discord. Create memes,
                                    videos, and interactive content to attract
                                    and entertain followers. Influencers:
                                    Partner with crypto influencers and meme
                                    creators to spread the word.
                                </p>
                            </div>

                            <!-- stage card -->
                            <div
                                class="lg:col-span-4 bg-[#fdc1c3] rounded-xl p-5"
                            >
                                <h3 class="text-xl lg:text-3xl underline mb-2">
                                    Community Engagement Transparency:
                                </h3>
                                <p class="text-lg lg:text-xl mb-0.5">
                                    Regularly update the community on progress,
                                    challenges, and future plans. Feedback
                                    Mechanism: Create channels for community
                                    feedback and actively involve them in
                                    decision-making processes. By focusing on
                                    these aspects and leveraging the power of
                                    meme culture, you can create a vibrant,
                                    engaged community around Baby Frog Coin.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--======== tokenomics ========-->
            <section
                class="tokenomics__section text-white pt-12 lg:pt-16 text-upper"
                id="tokenomics"
            >
                <div
                    class="tokenomics__container xl:container grid md:grid-cols-2 px-5 xl:mx-auto gap-6 pb-4 lg:pb-8 items-center"
                >
                    <!--=== tokenomic data ===-->
                    <div class="community__links text-center">
                        <h2 class="text-4xl lg:text-7xl mb-8">Tokenomics</h2>

                        <h4 class="text-3xl lg:text-5xl mb-5">total supply</h4>
                        <h4 class="text-3xl lg:text-5xl mb-5">1,000,000,000</h4>
                        <h4 class="text-3xl lg:text-5xl mb-5">no taxes</h4>
                    </div>

                    <!--=== tokenomic content ===-->
                    <div class="grid grid-cols-3 gap-4">
                        <div class="community__content col-span-2">
                            <!--== tokenomic img ==-->
                            <div
                                class="community__content__img h-max rounded-3xl overflow-hidden"
                            >
                                <img
                                    src="images/token-1.jpg"
                                    alt=""
                                    class="w-full"
                                />
                            </div>
                        </div>

                        <!--=== tokenomic content ===-->
                        <div class="community__content grid gap-3">
                            <!--== tokenomic img ==-->
                            <div
                                class="community__content__img h-max rounded-xl overflow-hidden"
                            >
                                <img
                                    src="images/token-2.jpg"
                                    alt=""
                                    class="w-full"
                                />
                            </div>

                            <!--== tokenomic img ==-->
                            <div
                                class="community__content__img h-max rounded-xl overflow-hidden"
                            >
                                <img
                                    src="images/token-3.jpg"
                                    alt=""
                                    class="w-full"
                                />
                            </div>

                            <!--== tokenomic img ==-->
                            <div
                                class="community__content__img h-max rounded-xl overflow-hidden"
                            >
                                <img
                                    src="images/community-4.jpg"
                                    alt=""
                                    class="w-full"
                                />
                            </div>

                            <!--== tokenomic img ==-->
                            <div
                                class="community__content__img h-max rounded-xl overflow-hidden"
                            >
                                <img
                                    src="images/community-5.jpg"
                                    alt=""
                                    class="w-full"
                                />
                            </div>
                        </div>
                    </div>
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
