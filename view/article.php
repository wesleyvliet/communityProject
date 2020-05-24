<?php
require_once "view/header.php";
?>

<body class="bg-gray-800 font-sans leading-normal tracking-normal">
    <nav class="bg-gray-900">
        <div class="flex items-center justify-between flex-wrap fixed w-11/12 z-0 relative top-0 m-auto mb-10 py-5">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
            <a class="text-white no-underline hover:text-white hover:no-underline" href="home">
                <img src="view/assets/img/g2-logo.png " alt="" class="h-16 inline">
               
                    <span class="text-2xl pl-2"><i class="em em-grinning"></i>G69</span>
                </a>
            </div>
            <!-- Nav burger menu  (hidden on bigger screens)-->
            <div class="block lg:hidden">
                <button id="nav-toggle"
                    class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <!-- Nav normal menu -->
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0"
                id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-white no-underline" href="#">Active</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="#">link</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="#">link</a>
                    </li>
                    <li class="">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="#">link</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Main -->
    <div class="w-10/12 m-auto mb-3 h-auto py-12">
        <!-- Article img -->
        <div class=" bg-cover bg-top mb-10 h-64" id="article_img"
            style="background-image: url(view/assets/img/rl-players.jpg)">
            <div class="flex items-center h-full bg-gray-900 bg-opacity-25">
                <div class="flex-1 lg:px-64 text-center ">
                    <span class=" block text-white text-4xl px-16">G69 Is Your NA Rocket League Spring Series
                        Champions</span>
                    <span class="text-white">2 September 2019</span>
                </div>
            </div>
        </div>
        <!-- Article img End -->


        <div class=" w-2/3 text-white m-auto">
            <div id="categorie-container " class="m-auto text-center mb-10 ">
                <p class=" text-xl">CATEGORIE</p>
                <div class="flex justify-center gap-5">
                    <span class=" bg-red-600 px-2 py-1 ">g69</span>
                    <span class=" bg-red-600 px-2 py-1 ">rocket league</span>
                    <span class=" bg-red-600 px-2 py-1 ">NA</span>
                </div>

            </div>

            <p>
                Another tournament, another victory! Our Rocket League squad is unstoppable this year, taking another
                clean tournament win to become your Rocket League Spring Series – North America Champions!
                <br>
                <br>
                After winning the North American Rocket League Championship Season 9 and the Astronauts Star Circuit, we
                have re-established ourselves as the North American Powerhouse we are known as.
                <br>
                <br>
                Winning the RLCS9 meant that we secured our spot in Psyonix’s newest tournament, the Rocket League
                Spring Series. Going in as the favorites, we were eager to get the ball rolling and snag the lion’s
                share of the $125,000 prize pool.
                <br>
                <br>
                Dropping only one game in the opening matches, we breezed past Rogue and Team Envy to secure our spot in
                the winners’ bracket finals against rival NRG. Even NRG’s show stopping attack wasn’t enough to stop us
                as we took the series 4-2 to advance to the Grand Finals.
                <br>
                <br>
                What better way to end a tournament than with an epic rematch against NRG? This epic Grand Final turned
                out to be an epic stomp as we rolled, flicked and demoed our way through NRG to secure the clean 4-0
                sweep!
                <br>
                <br>
                After a couple months of grinding and hard work, the boys are shifting gears and taking a bit of well
                deserved R&R before we get back into the action in RLCS10.
                <br>
                <br>
                Be sure to keep up with these professional ball chasers on Twitter, Facebook, Instagram, YouTube and
                Twitch!
            </p>
        </div>
    </div>
    <!-- Main End -->


    <!-- footer -->
    <footer class="footer bg-gray-900 relative pt-1 ">
        <div class="container mx-auto px-6">
            <!-- Footer nav -->
            <div class="sm:flex sm:mt-8">
                <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-around">
                    <div class="flex flex-col">
                        <span class="font-bold text-gray-100 uppercase mb-2">Footer header 1</span>
                        <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link
                                1</a></span>
                        <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link
                                1</a></span>
                        <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link
                                1</a></span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-bold text-gray-100 uppercase mt-4 md:mt-0 mb-2">Footer header 2</span>
                        <span class="my-2"><a href="#" class="text-blue-700 text-md hover:text-blue-500">link
                                1</a></span>
                        <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">link
                                1</a></span>
                        <span class="my-2"><a href="#" class="text-blue-700 text-md hover:text-blue-500">link
                                1</a></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer border / copyright -->
        <div class="container mx-auto px-6">
            <div class="mt-16 flex flex-col items-center">
                <div class="sm:w-2/3 text-center py-2">
                    <p class="text-sm text-gray-100 font-bold mb-2">
                        © 2020 by Yeet inc
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        //Javascript to toggle the menu
        document.getElementById('nav-toggle').onclick = function () {
            document.getElementById("nav-content").classList.toggle("hidden");
        }
    </script>

    <?php
require_once "view/footer.php";
?>