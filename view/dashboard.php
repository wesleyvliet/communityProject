<?php
session_name("admin");
session_start();
if ($_SESSION['sesionId'] !== '83523489765735412414') {
    header('Location: admin');
}

require_once 'view/header.php';
?>

<body>
    <div class="wrapper">

        <!-- Nav menu CMS START-->
        <nav class="flex items-center justify-between flex-wrap bg-indigo-800 p-6">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
            <a href="home">
                <span class="font-semibold text-xl tracking-tight">G69</span>
                </a>
            </div>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
        </nav>
        <!-- Nav menu CMS END -->

        <!-- Grid layout START-->
        <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-5 m-5 mb-10 gap-4">
            <!-- Grid 1 -->
            <div class="bg-white overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
                <div class="m-2 text-justify text-sm">
                    <h2 class="text-center font-bold text-lg h-2 mb-8">Wedstrijden</h2>
                </div>
                <a href="overview-wedstrijden">
                    <svg class="object-none object-center h-50 w-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path class="heroicon-ui" d="M11 20v-2.08a6 6 0 0 1-4.24-3A4.02 4.02 0 0 1 2 
                        11V6c0-1.1.9-2 2-2h2c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2h2a2 2 0 0 1 2 2v5a4 4 0 0 1-4.76 3.93A6 6 0 0 1 13 17.92V20h4a1 1 0 0 1 0 2H7a1 1 0 0 1 
                        0-2h4zm6.92-7H18a2 2 0 0 0 2-2V6h-2v6c0 .34-.03.67-.08 1zM6.08 13A6.04 6.04 0 0 1 6 12V6H4v5a2 2 0 0 0 2.08 2zM8 4v8a4 4 0 1 0 8 0V4H8z" />
                    </svg>
                </a>
                <div class="w-full text-right mt-4">
                    <a class="text-green-400 uppercase font-bold text-sm" href="#"></a>
                </div>
            </div>
            <!-- Grid 1 -->

            <!-- Grid 2 -->
            <!-- <div class="bg-white overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
                <div class="m-2 text-justify text-sm">
                    <h2 class="text-center font-bold text-lg h-2 mb-8">Webshop</h2>
                </div>
                <a href="#">
                    <svg class="object-none object-center h-50 w-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path class="heroicon-ui" d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 
                        12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 
                        2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                </a>
                <div class="w-full text-right mt-4">
                    <a class="text-green-400 uppercase font-bold text-sm" href="#"></a>
                </div>
            </div> -->
            <!-- Grid 2 -->

            <!-- Grid 3 -->
            <div class="bg-white overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
                <div class="m-2 text-justify text-sm">
                    <h2 class="text-center font-bold text-lg h-2 mb-8">Artikelen</h2>
                </div>
                <a href="overview-artiekelen">
                    <svg class="object-none object-center h-50 w-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path class="heroicon-ui" d="M18 21H7a4 4 0 0 1-4-4V5c0-1.1.9-2 2-2h10a2 2 0 0 1 2 2h2a2 2 0 0 1 2 
                        2v11a3 3 0 0 1-3 3zm-3-3V5H5v12c0 1.1.9 2 2 2h8.17a3 3 0 0 1-.17-1zm-7-3h4a1 1 0 0 1 0 2H8a1 1 0 0 1 0-2zm0-4h4a1 1 0 0 1 0 2H8a1 1 0 0 1 0-2zm0-4h4a1 1 0 0 1 0 2H8a1 
                        1 0 1 1 0-2zm9 11a1 1 0 0 0 2 0V7h-2v11z" />
                    </svg>
                </a>
                <div class="w-full text-right mt-4">
                    <a class="text-green-400 uppercase font-bold text-sm" href="#"></a>
                </div>
            </div>
            <!-- Grid 3 -->

            <!-- Grid 4 -->
            <div class="bg-white overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
                <div class="m-2 text-justify text-sm">
                    <h2 class="text-center font-bold text-lg h-2 mb-8">Teams</h2>
                </div>
                <a href="overview-teams">
                    <svg class="object-none object-center h-50 w-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path class="heroicon-ui" d="M9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 
                        10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v2zm1-5a1 1 0 0 1 0-2 5 5 0 0 1 5 5v2a1 
                        1 0 0 1-2 0v-2a3 3 0 0 0-3-3zm-2-4a1 1 0 0 1 0-2 3 3 0 0 0 0-6 1 1 0 0 1 0-2 5 5 0 0 1 0 10z" />
                    </svg>
                </a>
                <div class="w-full text-right mt-4">
                    <a class="text-green-400 uppercase font-bold text-sm" href="#"></a>
                </div>
            </div>
            <!-- Grid 4 -->

        </div>
        <!-- Grid layout END-->
    </div>
<?php
require_once 'view/footer.php';
?>