<?php require_once 'view/header.php'; ?>

<body>

    <!-- Nav menu CMS START-->
    <nav class="flex items-center justify-between flex-wrap bg-indigo-800 p-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
        <a href="home">
                <span class="font-semibold text-xl tracking-tight">G69</span>
                </a>
        </div>
        <div class="block lg:hidden">
          <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
          </button>
        </div>
      </nav>
    <!-- Nav menu CMS END -->

    <!-- Terug knop START -->
    <div class="flex justify-between">
		<div class="flex md:px-20 py-8 w-full mx-auto px-4 sm:px-8">
            <a href="overview-wedstrijden">
                <button class="bg-transparent hover:bg-indigo-800 text-blue-700 font-semibold hover:text-white py-3 px-5 border border-blue-500 hover:border-transparent rounded">
                    Terug
                </button>
            </a>
        </div>
    </div>
    <!-- Terug knop END -->

    <!-- Form START -->
    <div class="flex justify-center items-center py-8">
        <form action="?op=create-wedstrijd" method="POST" class="max-w-lg border border-gray-200 shadow-xs mx-auto rounded-lg p-10 bg-white text-center space-y-6 flex-grow">
            <div class="flex flex-col">
                <label for="event" class="self-start mb-2 font-medium text-gray-800">
                    Event
                </label>

                <input type="text" id="event" name="title" placeholder="Organisator event" class="border border-gray-400 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
            </div>

            <div class="flex flex-col">
                <label for="game" class="self-start mb-2 font-medium text-gray-800">
                    Game
                </label>
                <input type="text" name="game" placeholder="Games" required class="border border-gray-400 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
            </div>

            <div class="flex items-center text-gray-800">
                <span class="block border border-gray-400 w-2/4 mr-2"></span>
                    Showdown
                <span class="block border border-gray-400 w-2/4 ml-2"></span>
            </div>
            <div class="flex justify-around text-center divide-x divide-gray-300 p-8">

                <select name="competitorsA" required class="w-40 border border-gray-400 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                    <?php echo $comp["compA"]; ?>
                </select>

                <h1 class="text-red-500 font-bold border-none">Vs</h1>

                <select name="competitorsB" required class="w-40 border border-gray-400 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                    <?php echo $comp["compB"]; ?>
                </select>
            </div>

            <div class="flex items-center text-gray-800">
                <span class="block border border-gray-400 w-1/2 mr-2"></span>
                    Datum Tijd
                <span class="block border border-gray-400 w-1/2 ml-2"></span>
            </div>

            <div class="flex justify-around text-center divide-x divide-gray-300">
                <input type="date" id="date" name="date" class="outline-none w-1/3 px-2 py-2 border shadow-sm placeholder-gray-500 opacity-50 rounded">
                <input type="time" name="time" class="outline-none px-2 w-1/3 py-2 border shadow-sm placeholder-gray-500 opacity-50 rounded">
            </div>

            <div class="flex items-center text-gray-800 p-8">
                <span class="w-1/2"></span>
                <a href="#">
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-10 rounded float-right">
                        Wedstrijd toevoegen
                    </button>
                </a>
                <span class="w-1/2"></span>
            </div>
            
        </form>
    </div>
<?php require_once 'view/footer.php'; ?>