<?php
require_once "view/header.php";
?>

<body class="bg-gray-800 font-sans leading-normal tracking-normal">
    <nav class="bg-gray-900">
        <div class="flex items-center justify-between flex-wrap fixed w-11/12 z-0 relative top-0 m-auto mb-10 py-5">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <a class="text-white no-underline hover:text-white hover:no-underline" href="#">
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
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="Home">Home</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="Merch">Merch</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                            href="About-G69">About-G69</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Main -->
    <div class="w-10/12 m-auto mb-3 h-auto py-12">
        <!-- Article img -->
        <div class=" bg-cover bg-center mb-10 h-64" id="article_img"
            style="background-image: url(view/assets/img/flag.png)">
            <div class="flex items-center h-full bg-opacity-25">
                <div class="flex-1 lg:px-64 text-center">
                    <span class="text-white text-4xl px-16 bg-gray-800 w-auto">G69 Privacy</span>
                </div>
            </div>
        </div>
        <!-- Article img End -->


        <div class=" w-2/3 text-white m-auto">

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                Nam at diam viverra, auctor enim eget, eleifend sapien
                Fusce nulla arcu, molestie eget congue et, placerat in ex
                Integer imperdiet aliquet risus, non laoreet neque blandit et
                Etiam lacinia ultrices risus at dignissim
                Curabitur finibus in tellus feugiat semper
                Donec finibus tristique faucibus
                Nulla facilisi
                Aliquam nec risus augue
                Maecenas id ornare augue, ac convallis tortor
                Quisque ultricies suscipit est a molestie.
                <br>
                <br>
                Donec eget ornare est
                Duis rutrum egestas pellentesque
                Nam porttitor congue elit id laoreet
                In placerat fermentum neque eget imperdiet
                In hac habitasse platea dictumst
                Aliquam rhoncus magna ut massa rutrum, et dignissim magna sagittis
                Mauris ac fringilla dolor, non aliquam elit
                Curabitur sit amet urna tempus, vehicula orci vitae, dapibus nibh
                Quisque vitae elit eu est elementum eleifend
                Aliquam mattis odio sed lorem semper ornare.
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
                        <span class="font-bold text-gray-100 uppercase mb-2"></span>
                        <span class="my-2"><a href="Home" class="text-blue-700  text-md hover:text-blue-500">Home</a></span>
                        <span class="my-2"><a href="Merch" class="text-blue-700  text-md hover:text-blue-500">Merch</a></span>
                        <span class="my-2"><a href="About-G69" class="text-blue-700  text-md hover:text-blue-500">About-G69</a></span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-bold text-gray-100 uppercase mt-4 md:mt-0 mb-2"></span>
                        <span class="my-2"><a href="Privacy" class="text-white-700  text-md hover:text-blue-500 text-white">Privacy</a></span>
                        <span class="my-2"><a href="Disclaimer" class="text-blue-700  text-md hover:text-blue-500">Disclaimer</a></span>
                        <span class="my-2"><a href="article" class="text-blue-700 text-md hover:text-blue-500">Nieuws</a></span>
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
