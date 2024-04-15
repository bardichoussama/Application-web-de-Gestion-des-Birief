<?php
require_once "../../controller/formateur/formateurDashboard.php";
require_once '../../controller/formateur/allBriefs.php';


?>
<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/output.css"> <!-- Custom CSS file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <!-- Alpine.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.7.1/dist/alpine.min.js" defer></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <title>Dashboard</title>
</head>

<body class="text-gray-900 bg-bodybackground font-Poppins md:text-lg lg:text-xl xl:text-2xl">
    <div class="flex">
        <?php
        include_once '../../view/templates/formateur_sidebar.php';
        ?>
        <main class="bg-white h-screen w-8/12 ">
            <div class="flex  justify-between mx-4">
                <div class="my-11">
                    <p class="text-4xl font-semibold">Hello, <span class=" font-medium"><?php echo $cardInfo["PRENOM"]?></span></p>
                </div>
                <div class="flex  gap-x-7 my-11">
                    <div>
                        <a href="create_brief.php"><button class="px-6 bg-primary rounded-lg w-38 h-14 text-lg text-white">Create brief</button></a>
                    </div>
                    <div class="">
                        <button id="theme-toggle" type="button" class="flex justify-center items-center text-gray-500 border   hover:bg-gray-100  focus:outline-none focus:ring-4 focus:ring-gray-200  rounded-lg text-sm p-2.5 w-14 h-14">
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                            </svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>



            <form class="max-w-md mx-20" method="post">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" name="input" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50     " placeholder="Search Mockups, Logos..." required />
                    <button name="search"   class="bg-primary text-white absolute end-2.5 bottom-2.5  font-regular  outline-none  rounded-lg text-sm px-4 py-2 ">  Search</button>
                </div>
            </form>
        <div class="flex ">
            <div class="ml-20 mt-16">
                <form action="filter.php" method="post">
                    <p class="text-gray-800 text-2xl font-medium">Filter my Briefs</p>
                    <ul class="pt-5 mt-5 space-y-8 ">
                        <li>
                            <button type="submit" name="category" value="all" class="flex items-center text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 border-3 border-gray-600 focus:border-gray-800 focus:outline-none w-48 p-2">
                                <ion-icon class="w-6 h-6" name="bookmarks-outline"></ion-icon>
                                <span class="ml-3 text-xl text-gray-900 ">All Briefs</span>
                            </button>
                        </li>
                        <li>
                            <button type="submit" name="category" value="all" class="flex items-center text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100  focus:border-gray-800 focus:outline-none W-48 P-2">
                                <ion-icon class="w-6 h-6" name="bookmark-outline"></ion-icon>
                                <span class="ml-3 text-xl text-gray-900 ">My Briefs</span>
                            </button>
                        </li>

                    </ul>
                </form>
            </div>
            <div class="flex justify-end ml-5 mt-20 flex-wrap flex-row-reverse">
                <?php foreach($allbriefs as $brief): ?>

                <div class="max-w-md w-96   rounded-xl p-6">
                    <div class="flex flex-col ">
                        <div class="">
                            <div class="relative h-62 w-full mb-3">
                                <div class="absolute flex flex-col top-0 right-0 p-3">
                                    <button id="toggleButton" class="transition ease-in duration-300 bg-secondary hover:bg-primary border  hover:text-primary hover:shadow-lg text-primary rounded-full w-9 h-9 text-center p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="eyeIcon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path id="eyeOpenIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path id="eyeClosedIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </button>


                                </div>
                                <img src="../../public/assets/img/bp-cover.jpg" alt="Just a flower" class=" w-full   h-52  object-cover  rounded-xl">
                            </div>
                            <div class="flex gap-x-32  mt-2 items-center">
                                <div class=" flex gap-x-4 items-center">
                                    <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src='https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200'>


                                    <div class="font-medium text-xs w-28 ">
                                       <?php echo $brief["NOM"]." ".$brief["PRENOM"] ?>
                                    </div>

                                </div>

                                <div class="flex items-center  bg-green-400 text-white text-xs px-2  rounded-lg h-7">
                                    assigned
                                </div>
                            </div>
                            <div class="flex-auto justify-evenly">
                                <div class="flex flex-wrap ">

                                    <div class="f min-w-0  mt-2">

                                        <h2 class="text-lg mr-auto cursor-pointer text-gray-800 hover:text-primary truncate "><?php echo $brief["TITRE"] ?></h2>

                                    </div>
                                </div>



                                <!-- <div class="flex space-x-2 text-sm font-medium justify-end">
                                <button class="transition ease-in duration-300 inline-flex items-center text-sm font-medium  md:mb-0 bg-primary px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-full hover:bg-purple-600 ">
                                    <span>Add Cart</span>
                                </button>

                            </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>

                

            </div>

           



        </div>





        </main>
        <div class=" w-96 flex justify-center  bg-bodybackground">
            <?php
            include_once '../../view/templates/formateur_info_card.php';
            ?>

        </div>


    </div>
    <script>
        document.getElementById('toggleButton').addEventListener('click', function() {
            var eyeOpenIcon = document.getElementById('eyeOpenIcon');
            var eyeClosedIcon = document.getElementById('eyeClosedIcon');

            eyeOpenIcon.classList.toggle('hidden');
            eyeClosedIcon.classList.toggle('hidden');
        });
    </script>



    <script src="../../public/js/dashboard.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>

<!-- <span class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">
  <label for="fileInput" class="cursor-pointer">
    Upload
    <input id="fileInput" class="hidden" type="file">
  </label>
</span> -->