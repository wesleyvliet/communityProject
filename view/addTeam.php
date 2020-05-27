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
            <a href="overview-teams">
                <button class="bg-transparent hover:bg-indigo-800 text-blue-700 font-semibold hover:text-white py-3 px-5 border border-blue-500 hover:border-transparent rounded">
                    Terug
                </button>
            </a>
        </div>
    </div>
    <!-- Terug knop END -->

    <!-- Form START -->
    <div class="flex justify-center items-center py-8">
        <form action="?op=add-team" method="post" enctype='multipart/form-data' class="max-w-lg border border-gray-200 shadow-xs mx-auto rounded-lg p-10 bg-white text-center space-y-6 flex-grow">
            <div class="flex flex-col">
                <label for="titel" class="self-start mb-2 font-medium text-gray-800">
                    Naam
                </label>

                <input type="text" id="name" name="name" placeholder="Naam organisatie" class="outline-none px-2 py-2 border shadow-sm placeholder-gray-500 opacity-50 rounded" required>
            </div>

            <div class="flex items-center text-gray-800">
                <span class="block border border-gray-400 w-2/4 mr-2"></span>
                    Afbeelding preview
                <span class="block border border-gray-400 w-2/4 ml-2"></span>
            </div>
            <div class="flex justify-around text-center divide-x divide-gray-300 p-8">

                <img class="object-none object-center outline-none px-20 py-20 border shadow-sm rounded" id="output"/>
            </div>

            <div class="flex items-center text-gray-800">
                <span class="block border border-gray-400 w-1/2 mr-2"></span>
                    Afbeelding Upload
                <span class="block border border-gray-400 w-1/2 ml-2"></span>
            </div>

            <div class="flex justify-around items-center text-center divide-gray-300">
                <div class="flex w-full items-center justify-center bg-grey-lighter">
                    <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                        <span class="text-base leading-normal">Select a file</span>
                        <input type='file' name="logo" accept="image/*" onchange="loadFile(event)" class="hidden" required />
                        <script>
                            var loadFile = function(event) {
                              var output = document.getElementById('output');
                              output.src = URL.createObjectURL(event.target.files[0]);
                              output.onload = function() {
                                URL.revokeObjectURL(output.src)
                              }
                            };
                        </script>
                    </label>
                </div>
            </div>

            <div class="flex items-center text-gray-800 p-8">
                <span class="w-1/2"></span>
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-10 rounded float-right">
                        Team toevoegen
                    </button>
                <span class="w-1/2"></span>
            </div>
            
        </form>
    </div>

<?php require_once 'view/footer.php'; ?>