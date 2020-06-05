<?php
require_once "view/header.php";
?>

<body class="bg-gray-800 font-sans leading-normal tracking-normal">
    <nav class="bg-gray-900">
        <div class="flex items-center justify-between flex-wrap fixed w-11/12 z-0 relative top-0 m-auto mb-10 py-5">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <a class="text-white no-underline hover:text-white hover:no-underline" href="./">
                    <img src="view/assets/img/g2-logo.png " alt="" class="h-16 inline">

                    <span class="text-2xl pl-2"><i class="em em-grinning"></i>G69</span>
                </a>
            </div>
            <!-- Nav burger menu  (hidden on bigger screens)-->
            <div class="block lg:hidden">
                <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <!-- Nav normal menu -->
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="Home">Home</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="Merch">Merch</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="About-G69">About-G69</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Main -->
    <div class="w-10/12 m-auto mb-3 h-auto py-12">
        <!-- Article img -->
        <div class=" bg-cover bg-top mb-10 h-64" id="article_img" style="background-image: url(view/assets/img/<?php echo $article["preview_image"]; ?>)">
            <div class="flex items-center h-full bg-gray-900 bg-opacity-25">
                <div class="flex-1 lg:px-64 text-center ">
                    <span class=" block text-white text-4xl px-16"><?php echo $article["title"]; ?></span>
                    <span class="text-white"><?php echo $article["date"] ?></span>
                </div>
            </div>
        </div>
        <!-- Article img End -->


        <div class=" w-2/3 text-white m-auto">
            <div id="categorie-container " class="m-auto text-center mb-10 ">
                <p class=" text-xl">CATEGORIE</p>
                <div class="flex justify-center gap-5">
                    <span class=" bg-red-600 px-2 py-1 "><?php echo $article["categorie"]; ?></span>
                </div>

            </div>

            <p>
                <?php echo $article["content"]; ?>
            </p>
            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button   " data-text="Look at this awsome article about G69" data-show-count="false">Tweet</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <!-- comment section -->
            <div class="  w-full  mt-10 flex-row mb-10 ">
                <?php echo $article["comments"]; ?>
                <!-- Comment END -->


                <div class="w-full mr-auto ml-auto mt-10  lg:w-2/3  mb-2 mt-2 ">
                    <form action="?op=commented" method="POST">
                        <input type="text" hidden name="article_id" value="<?php echo $article["id"]; ?>">
                        <input type="text" class="bg-gray-700 mb-5 text-white rounded border border-gray-800 leading-normal resize-none w-full h-10 py-2 px-3  placeholder-gray-900 focus:outline-none focus:bg-gray-600 " name="name" placeholder='Your name' required>
                        <textarea class="bg-gray-700 mb-5 text-white rounded border border-gray-800 leading-normal resize-y w-full h-20 py-2 px-3 font-medium placeholder-gray-900 focus:outline-none focus:bg-gray-600" name="message" placeholder='Type Your Comment' required></textarea>
                        <input type='submit' class="bg-gray-700 text-white font-medium py-1 px-4 border border-gray-800 rounded-lg  mr-1 hover:bg-gray-600 cursor-pointer" value='Post Comment'>
                    </form>
                </div>
            </div>


            <!-- Commment section END -->


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
                        <span class="my-2"><a href="Home" class="text-blue-700  text-md hover:text-blue-50">Home</a></span>
                        <span class="my-2"><a href="Merch" class="text-blue-700  text-md hover:text-blue-500">Merch</a></span>
                        <span class="my-2"><a href="About-G69" class="text-blue-700  text-md hover:text-blue-500">About-G69</a></span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-bold text-gray-100 uppercase mt-4 md:mt-0 mb-2"></span>
                        <span class="my-2"><a href="Privacy" class="text-blue-700 text-md hover:text-blue-500">Privacy</a></span>
                        <span class="my-2"><a href="Disclaimer" class="text-blue-700  text-md hover:text-blue-500">Disclaimer</a></span>
                        <span class="my-2"><a href="article" class="text-white-700  text-md hover:text-blue-500 text-white">Nieuws</a></span>
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
        document.getElementById('nav-toggle').onclick = function() {
            document.getElementById("nav-content").classList.toggle("hidden");
        }
    </script>

    <?php
    require_once "view/footer.php";
    ?>