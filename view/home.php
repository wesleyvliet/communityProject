<?php
require_once "view/header.php";
?>
<body class="bg-gray-800 font-sans leading-normal tracking-normal">
    <nav class="bg-gray-900">
        <div class="flex items-center justify-between flex-wrap fixed w-11/12 z-0 relative top-0 m-auto mb-10 py-5">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <img src="view/assets/img/g2-logo.png" alt="" class="h-16">
                <a class="text-white no-underline hover:text-white hover:no-underline" href="#">
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


    <!-- Big lean more -->
    <div class="bg-cover bg-center mb-6 flex justify-between m-auto mb-3 w-11/12  md:h-auto text-white py-16 px-6 object-fill"
        style="background-image: url(view/assets/img/g2.jpg)">
        <div class="md:w-1/2">
            <p class=" hidden md:block font-bold">We are G69</p>
            <p class=" hidden md:block mb-10 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat officia
                aliquam repellendus, saepe quae possimus amet incidunt necessitatibus esse quas. </p>
            <a href="#"
                class="bg-red-600 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Learn
                more</a>
        </div>
    </div>

    <!-- article -->
    <div
        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 w-11/12 m-auto mb-6 justify-around">
        <!-- article 1 -->
        <div class=" bg-top bg-cover text-center bg-green-400 px-10 py-32 lg:py-48 mb-6 lg:mr-4   h-64 text-xl text-white hover:"
            style="background-image: url(view/assets/img/rl.jpg)">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, labore quod!
        </div>
        <!-- article 2 -->
        <div class=" bg-top bg-cover text-center bg-green-400 px-10 py-32 lg:py-48 mb-6 lg:mr-4  lg:ml-2    h-64 text-xl text-white hover:"
            style="background-image: url(view/assets/img/reaper.jpg)">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, labore quod!
        </div>
        <!-- article 3 -->
        <div class=" bg-top bg-cover text-center bg-green-400 px-10 py-32 lg:py-48 mb-6 lg:mr-2 lg:ml-2    h-64 text-xl text-white hover:"
            style="background-image: url(view/assets/img/spelers.jpg)">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, labore quod!
        </div>
        <!-- article 4 -->
        <div class=" bg-top bg-cover text-center bg-green-400 px-10 py-32 lg:py-48 mb-6 lg:ml-4  h-64 text-xl text-white hover:"
            style="background-image: url(view/assets/img/bmw.jpg)">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, labore quod!
        </div>
    </div>
    <!-- Article end -->

    <!-- Comp -->
    <div
        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 w-11/12 m-auto mb-40 flex ">
        <!-- Comp 1  -->
        <div class=" mb-16 h-32 text-xl text-white sm:pr-2  ">
            <div class=" bg-green-100 text-blue-200">
                <div class=" flex justify-between px-1 bg-gray-900 h-3 text-sm text-gray-500"><span
                        class="">02-05-20</span><span class="">9 pm</span></div>
                <div class="flex justify-between bg-gray-900 text-white px-1  "><span>02-05-20</span><span>CS-GO</span>
                </div>
            </div>
            <div class="flex justify-center items-center content-center bg-gray-700 h-full  ">

                <div class=" inline-block  align-baseline mr-2"><img src="view/assets/img/logo.png" alt="" class="h-16"></div>
                <div class="mr-2">vs</div>
                <div class=" inline-block  align-baseline mr-2"><img src="view/assets/img/moscow.png" alt="" class="h-16"></div>
            </div>
        </div>

        <div class=" mb-16 h-32 text-xl text-white sm:pl-2 ">
            <div class=" bg-green-100 text-blue-200">
                <div class=" flex justify-between px-1 bg-gray-900 h-3 text-sm text-gray-500"><span
                        class="">02-05-20</span><span class="">9 pm</span></div>
                <div class="flex justify-between bg-gray-900 text-white px-1  "><span>02-05-20</span><span>CS-GO</span>
                </div>
            </div>
            <div class="flex justify-center items-center content-center bg-gray-700 h-full">

                <div class=" inline-block  align-baseline mr-2"><img src="view/assets/img/logo.png" alt="" class="h-16"></div>
                <div class="mr-2">vs</div>
                <div class=" inline-block  align-baseline mr-2"><img src="view/assets/img/rouge.png" alt="" class="h-16"></div>
            </div>
        </div>

        <div class=" mb-16 h-32 text-xl text-white sm:pr-2  ">
            <div class=" bg-green-100 text-blue-200">
                <div class=" flex justify-between px-1 bg-gray-900 h-3 text-sm text-gray-500"><span
                        class="">02-05-20</span><span class="">9 pm</span></div>
                <div class="flex justify-between bg-gray-900 text-white px-1  "><span>02-05-20</span><span>CS-GO</span>
                </div>
            </div>
            <div class="flex justify-center items-center content-center bg-gray-700 h-full  ">

                <div class=" inline-block  align-baseline mr-2"><img src="view/assets/img/logo.png" alt="" class="h-16"></div>
                <div class="mr-2">vs</div>
                <div class=" inline-block  align-baseline mr-2"><img src="view/assets/img/excel.png" alt="" class="h-16"></div>
            </div>
        </div>

        <div class=" mb-16 h-32 text-xl text-white sm:pl-2 ">
            <div class=" bg-green-100 text-blue-200">
                <div class=" flex justify-between px-1 bg-gray-900 h-3 text-sm text-gray-500"><span
                        class="">02-05-20</span><span class="">9 pm</span></div>
                <div class="flex justify-between bg-gray-900 text-white px-1  "><span>02-05-20</span><span>CS-GO</span>
                </div>
            </div>
            <div class="flex justify-center items-center content-center bg-gray-700 h-full">

                <div class=" inline-block  align-baseline mr-2"><img src="view/assets/img/logo.png" alt="" class="h-16"></div>
                <div class="mr-2">vs</div>
                <div class=" inline-block  align-baseline mr-2"><img src="view/assets/img/misfits.png" alt="" class="h-16"></div>
            </div>
        </div>
    </div>
    <!-- Article end -->

<?php
require_once "view/footer.php";
?>