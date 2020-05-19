<?php
    require_once "view/header.php";
?>

<div class="container max-w-full mx-auto py-24 px-6">
  <div class="font-sans">
    <div class="max-w-sm mx-auto px-6">
        <div class="relative flex flex-wrap">
            <div class="w-full relative">
                <div class="mt-6">
                    <div class="mb-5 pb-1border-b-2 text-center font-base text-gray-700"></div>
                    
                    <form method='POST' action='?op=login' enctype='multipart/form-data' autocomplete='off'>
                        <div class="mx-auto max-w-lg">
                            <?php
                            if(!empty($error)) {
                                echo $error . '<br>';
                                echo '<div class="py-2">
                                    <span class="px-1 text-sm text-gray-600">Username</span>
                                    <input placeholder="" name="userName" type="text" value="' . $userName . '"
                                        class="text-md block px-3 py-2  rounded-lg w-full 
                                        bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                                </div>

                                <div class="py-2">
                                    <span class="px-1 text-sm text-gray-600">Password</span>
                                    <div class="relative">
                                        <input name="userPass" class="text-md block px-3 py-2 rounded w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                        focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" id="password" type="password">
                                    </div>
                                </div>';
                            } else {
                                echo '<div class="py-2">
                                    <span class="px-1 text-sm text-gray-600">Username</span>
                                    <input placeholder="" name="userName" type="text"
                                        class="text-md block px-3 py-2  rounded-lg w-full 
                                        bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                                </div>

                                <div class="py-2">
                                    <span class="px-1 text-sm text-gray-600">Password</span>
                                    <div class="relative">
                                        <input name="userPass" class="text-md block px-3 py-2 rounded w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                                        focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" id="password" type="password">
                                    </div>
                                </div>';
                            }
                            ?>
                            

                            <div class="flex justify-between">
                                <label class="block text-gray-500 font-bold my-4"></label> 
                                <label class="block text-gray-500 font-bold my-4"></label>
                            </div> 

                            <button class="mt-3 text-lg font-semibold bg-gray-800 w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:text-white hover:bg-black">
                                Login
                            </button>
                        
                        </div>
                    </form>
                        <p class="text-center text-gray-500 text-xs">
                            &copy;2020 G69 Corp. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require_once 'view/footer.php';
?>