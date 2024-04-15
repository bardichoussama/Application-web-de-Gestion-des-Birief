<?php
require_once "../../controller/formateur/formateurDashboard.php";
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
                    <p class="text-4xl font-semibold">Hello, <span class=" font-medium"><?php echo $cardInfo['PRENOM'] ?></span></p>
                </div>
                <div class="flex  gap-x-7 my-11">
                    <div>
                        <button class="px-6 bg-primary rounded-lg w-38 h-14 text-lg text-white">Create brief</button>
                    </div>
                    <!-- <div class="">
                        <button id="theme-toggle" type="button" class="flex justify-center items-center text-gray-500 border   hover:bg-gray-100  focus:outline-none focus:ring-4 focus:ring-gray-200  rounded-lg text-sm p-2.5 w-14 h-14">
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                            </svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div> -->
                </div>
            </div>
            <?php  if($inProgres):?>
            <h4 class="text-xl font-medium mt-9 ml-4">Group progress</h4>
            <div class="bg-secondary w-6/12 h-20 rounded-xl mt-9 ml-8 px-4 flex justify-center items-center gap-11">
                <div class="w-16 h-12 bg-primary flex justify-center items-center rounded-lg">
                    <svg class="w-9 h-9 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M7.833 2c-.507 0-.98.216-1.318.576A1.92 1.92 0 0 0 6 3.89V21a1 1 0 0 0 1.625.78L12 18.28l4.375 3.5A1 1 0 0 0 18 21V3.889c0-.481-.178-.954-.515-1.313A1.808 1.808 0 0 0 16.167 2H7.833Z" />
                    </svg>
                </div>

                <div class="w-full bg-white rounded-full h-2.5 ">
                <div class="w-full bg-white-300 rounded-full h-2.5 dark:bg-white-700">
                        <div class="bg-green-400 h-2.5 rounded-full" style="width: <?php echo $briefProgress["progres"]/$briefProgress["total"] *100 ?>%"></div>
                </div>
                </div>
                <div class="flex justify-between mb-1">
               
                    <span class="text-xl font-medium text-gray-800 "><?php echo $briefProgress["progres"]?>/<?php echo $briefProgress["total"] ?></span>
                    
                </div>
            </div>
            <div class="flex   border rounded-xl mx-4 h-24 p-4 mt-7 ">
                <img src="../../public/assets/img/bp-cover.jpg" alt="" class="w-24 h-16 rounded-xl ">
                <div class="ml-4  w-4/12">
                <a href="./brief_details.php?id=<?= $inProgres['ID_BRIEF']?>">
                    <p class="text-xl font-medium "><?php echo $inProgres["TITRE"]; ?></p>
                    <span class="text-gray-400 text-lg">By <?php echo $inProgres["NOM"]." ".$inProgres["PRENOM"] ?></span>
                </a>  
                </div>
                <div class="ml-48 mt-4">
                    <span class="bg-yellobadge text-gray-800 rounded-xl text-lg font-medium me-2 p-1.5">To do</span>
                </div>
                <div class="ml-24">
                    <p class="text-gray-400 text-lg font-medium">Duration</p>
                    <span class="text-lg font-medium text-gray-800"><?php echo $inProgres["DUREE"] ?> DAYS</span>
                </div>
                <div class="ml-16">
                    <p class="text-lg font-medium text-gray-400">Skills</p>
                    <span class="text-lg font-medium text-gray-800"><?php echo $inProgres["SKILLS"] ?></span>
                </div>
                <div class="ml-24 mt-4">
                    <span class="bg-secondary  text-gray-800 text-xs font-semibold me-2 px-3 py-2 rounded-md">
                        <label for="fileInput" class="cursor-pointer text-gray-800">
                            Attachment
                            <svg class="w-6 h-6 text-gray-800  inline-block align-middle p-x-11" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 1 0 0 4h16a2 2 0 1 0 0-4H4Zm0 6h16v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-8Zm10.707 5.707a1 1 0 0 0-1.414-1.414l-.293.293V12a1 1 0 1 0-2 0v2.586l-.293-.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l2-2Z" clip-rule="evenodd" />
                            </svg>
                            <input id="fileInput" class="hidden" type="input">
                        </label>
                    </span>
                </div>
            </div>
            <?php endif;?>
            <div class=" bg-white border border-gray-200 rounded-lg shadow-sm  sm:p-2 mt-11 mx-4">
                <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist" style="list-style-type: none; margin: 0; padding: 0;">
                    <li class="w-full">
                        <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="true" class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 text-primary text-xl">Assigned briefs</button>
                    </li>
                </ul>


                <div id="fullWidthTabContent" class="border-t border-gray-200  ">
                <?php if($assignedBP): ?>
                <?php foreach($assignedBP as $brief):?>
                    <div class="flex bg-white  rounded-xl h-24 mt-16 overflow-y-auto">
                        <img src="../../public/assets/img/bp-cover.jpg" alt="" class="w-24 h-16 rounded-xl">
                        <div class="ml-4  w-4/12">
                        <a href="./brief_details.php?id=<?= $brief['ID_BRIEF']?>">
                            <p class="text-xl font-medium "><?php echo $brief["TITRE"]; ?></p>
                        </a>
                            <span class="text-gray-400 text-lg">By <?php echo $brief["NOM"]." ".$brief["PRENOM"]; ?></span>
                        </div>
                        <div class="ml-48 mt-4">
                            <span class="bg-secondary text-primary rounded-lg text-base font-medium me-2 px-2">FINISHED</span>
                        </div>
                        <div class="ml-32">
                            <p class="text-gray-400 text-xl font-medium">Duration</p>
                            <span class="text-xl font-medium text-gray-800"><?php echo $brief["DUREE"] ?>jr</span>
                        </div>
                        <div class="ml-16">
                            <p class="text-xl font-medium text-gray-400">Skills</p>
                            <span class="text-xl font-medium text-gray-800"><?php echo $brief["SKILLS"] ?></span>
                        </div>
                        <div class="ml-28 mt-4">
                            <span class="bg-secondary  text-gray-800 text-xs font-semibold me-2 px-3 py-2 rounded-md">
                                <label for="fileInput" class="cursor-pointer text-gray-800">
                                    Attachment
                                    <svg class="w-6 h-6 text-gray-800  inline-block align-middle p-x-11" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 1 0 0 4h16a2 2 0 1 0 0-4H4Zm0 6h16v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-8Zm10.707 5.707a1 1 0 0 0-1.414-1.414l-.293.293V12a1 1 0 1 0-2 0v2.586l-.293-.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l2-2Z" clip-rule="evenodd" />
                                    </svg>
                                    <input id="fileInput" class="hidden" type="input">
                                </label>
                            </span>
                        </div>
                        <div>
                            <button class="px-6 bg-primary rounded-lg w-38 h-14 text-lg text-white">Create brief</button>
                        </div>
                    </div>
                <?php endforeach;?>
                <?php endif; ?>
                </div>


            </div>
        </main>
        <div class=" w-96 flex justify-center  bg-bodybackground">
            <?php
            include_once '../../view/templates/formateur_info_card.php';
            ?>

        </div>


    </div>
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