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




    <!-- article -->
    <div class="grid grid-cols-1 sm:grid-cols-2  lg:grid-cols-4 w-11/12 m-auto mb-6 gap-4 sm:gap-0 lg:gap-4 ">
        <!-- item1 -->
        <div class="max-w-xs bg-gray-800 shadow-lg rounded-lg overflow-hidden my-10">
            <div class="px-4 py-2">
                <h1 class="text-white font-bold text-3xl uppercase">G69 shirt</h1>
                <p class="text-gray-600 text-sm mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos
                    quidem sequi illum facere recusandae voluptatibus</p>
            </div>
            <img src="view/assets/img/shirt.png" alt="" class="h-56 w-full object-contain mt-2">
            <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                <h1 class="text-gray-200 font-bold text-xl">$129</h1>
                <button class="bg-red-600 py-1 px-3 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Add to card</button>
            </div>
        </div>
        <!-- end item1 -->
          <!-- item2 -->
          <div class="max-w-xs bg-gray-800 shadow-lg rounded-lg overflow-hidden my-10">
            <div class="px-4 py-2">
                <h1 class="text-white font-bold text-3xl uppercase">G69 cap</h1>
                <p class="text-gray-600 text-sm mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos
                    quidem sequi illum facere recusandae voluptatibus</p>
            </div>
            <img src="view/assets/img/cap.png" alt="" class="h-56 w-full object-contain mt-2">
            <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                <h1 class="text-gray-200 font-bold text-xl">$129</h1>
                <button class="bg-red-600 py-1 px-3 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Add to card</button>
            </div>
        </div>
        <!-- end item2 -->
          <!-- item3 -->
          <div class="max-w-xs bg-gray-800 shadow-lg rounded-lg overflow-hidden my-10">
            <div class="px-4 py-2">
                <h1 class="text-white font-bold text-3xl uppercase">G69 mug</h1>
                <p class="text-gray-600 text-sm mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos
                    quidem sequi illum facere recusandae voluptatibus</p>
            </div>
            <img src="view/assets/img/mug.png" alt="" class="h-56 w-full object-contain mt-2">
            <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                <h1 class="text-gray-200 font-bold text-xl">$129</h1>
                <button class="bg-red-600 py-1 px-3 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Add to card</button>
            </div>
        </div>
        <!-- end item3 -->
          <!-- item4 -->
          <div class="max-w-xs bg-gray-800 shadow-lg rounded-lg overflow-hidden my-10">
            <div class="px-4 py-2">
                <h1 class="text-white font-bold text-3xl uppercase">G69 chair</h1>
                <p class="text-gray-600 text-sm mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos
                    quidem sequi illum facere recusandae voluptatibus</p>
            </div>
            <img src="view/assets/img/chair.png" alt="" class="h-56 w-full object-contain mt-2">
            <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                <h1 class="text-gray-200 font-bold text-xl">$129</h1>
                <button class="bg-red-600 py-1 px-3 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Add to card</button>
            </div>
        </div>
        <!-- end item4 -->
          <!-- item5 -->
          <div class="max-w-xs bg-gray-800 shadow-lg rounded-lg overflow-hidden my-10">
            <div class="px-4 py-2">
                <h1 class="text-white font-bold text-3xl uppercase">G69 flag</h1>
                <p class="text-gray-600 text-sm mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos
                    quidem sequi illum facere recusandae voluptatibus</p>
            </div>
            <img src="view/assets/img/flag.png" alt="" class="h-56 w-full object-contain mt-2">
            <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                <h1 class="text-gray-200 font-bold text-xl">$129</h1>
                <button class="bg-red-600 py-1 px-3 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Add to card</button>
            </div>
        </div>
        <!-- end item1 -->
    </div>
    <!-- Article end -->







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

        $(function () {
            $(".comp-container").slice(0, 4).show(); // select the first ten
            $("#load").click(function (e) { // click event for load more
                e.preventDefault();
                $(".comp-container:hidden").slice(0, 2)
            .show(); // select next 10 hidden divs and show them
                if ($(".comp-container:hidden").length == 0) { // check if any hidden divs still exist
                    $("#load").css("background-color", "white");
                    $("#load").css("color", "black");
                    $('#load').css('cursor', 'default');
                }
            });
        });
    </script>

    <?php
require_once "view/footer.php";
?>