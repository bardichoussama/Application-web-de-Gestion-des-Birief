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
                    <p class="text-4xl font-semibold">Hello, <span class=" font-medium">Imane</span></p>
                </div>
                <div class="flex  gap-x-7 my-11">
                    <div>
                        <button class="px-6 bg-primary rounded-lg w-38 h-14 text-lg text-white">Create brief</button>
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
            <h4 class="text-3xl text-gray-800 font-medium mt-9 ml-4">Create Brief</h4>
            <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm ">

                <div data-popover id="popover-description" role="tooltip" class="absolute z-10 invisible inline-block text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                    <div class="p-3 space-y-2">
                        <h3 class="font-semibold text-gray-900 dark:text-white">Statistics</h3>
                        <p>Statistics is a branch of applied mathematics that involves the collection, description, analysis, and inference of conclusions from quantitative data.</p>
                        <a href="#" class="flex items-center font-medium text-primary-600 dark:text-primary-500 dark:hover:text-primary-600 hover:text-primary-700">Read more <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg></a>
                    </div>
                    <div data-popper-arrow></div>
                </div>

                <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex " id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                    <li class="w-full">
                        <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="true" class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none text-xl text-primary">Create</button>
                    </li>
                    <li class="w-full">
                        <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false" class=" text-primaryinline-block w-full p-4 rounded-tr-lg bg-gray-50 hover:bg-gray-100 focus:outline-none text-xl ">Create and assigned</button>
                    </li>
                </ul>
                <div id="fullWidthTabContent" class="border-t border-gray-200 ">
                    <div class="hidden pt-4" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                        <div class="flex ">
                            <div class=" bg-white border border-gray-200 rounded-lg shadow-sm  sm:p-2 mt-11 mx-4 w-96 h-48">
                                <div class="flex flex-col ml-5 mt-7 gap-y-2 ">
                                    <p class="text-2xl font-semibold">Brief picture</p>
                                    <p class="text-lg font-regular text-gray-400">JPG, GIF or PNG. Max size of 800K</p>
                                    <span class=" flex justify-center items-center bg-primary w-40 h-11 text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded-xl ">
                                        <label for="fileInput" class="cursor-pointer text-center">
                                            Upload
                                            <input id="fileInput" class="hidden" type="file">
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class=" bg-white border border-gray-200 rounded-lg shadow-sm  sm:p-2 mt-11  w-9/12 h-auto">
                                <p class="text-2xl font-semibold mt-7 mx-4">General information</p>
                                <div class="ml-5 mt-4">
                                    <div class="flex items-center gap-x-11">
                                        <div class="w-7/12">
                                            <input type="text" id="Title of brief" class="rounded-xl border block w-full p-2.5 h-12 text-base" placeholder="Title of brief" name="nom">
                                        </div>
                                        <span class=" flex justify-center items-center bg-secondary w-40 h-11 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-lg gap-x-1">
                                            <ion-icon class="w-4 h-4" name="cloud-upload-outline"></ion-icon>
                                            <label for="fileInput" class="cursor-pointer text-center">
                                                Upload attachment
                                                <input id="fileInput" class="hidden" type="file">
                                            </label>
                                        </span>
                                    </div>



                                    <p class="text-gray-800 font-semibold text-xl mt-5">skills</p>
                                    <form action="">
                                        <div class="flex items-center mt-5">
                                            <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="link-checkbox" class="ms-2 text-lg font-medium text-primary ">C1 <a href="#" class="text-gray-400">Maquetter une application</a>.</label>
                                        </div>
                                        <div class="flex items-center mt-5">
                                            <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="link-checkbox" class="ms-2 text-lg font-medium text-primary ">C2 <a href="#" class="text-gray-400">Réaliser une interface utilisateur web statique et adaptable</a>.</label>
                                        </div>
                                        <div class="flex items-center mt-5">
                                            <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="link-checkbox" class="ms-2 text-lg font-medium text-primary ">C3 <a href="#" class="text-gray-400">Développer une interface utilisateur web dynamique</a>.</label>
                                        </div>
                                        <div class="flex items-center mt-5">
                                            <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="link-checkbox" class="ms-2 text-lg font-medium text-primary ">C4 <a href="#" class="text-gray-400">Réaliser une interface utilisateur avec une solution de gestion de contenu
                                                    ou e-commerce</a>.</label>
                                        </div>
                                        <div class="flex items-center mt-5">
                                            <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="link-checkbox" class="ms-2 text-lg font-medium text-primary ">C5 <a href="#" class="text-gray-400">Créer une base de données</a>.</label>
                                        </div>
                                        <div class="flex items-center mt-5">
                                            <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="link-checkbox" class="ms-2 text-lg font-medium text-primary ">C6 <a href="#" class="text-gray-400">Développer les composants d’accès aux données</a>.</label>
                                        </div>
                                        <div class="flex items-center mt-5">
                                            <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="link-checkbox" class="ms-2 text-lg font-medium text-primary ">C7 <a href="#" class="text-gray-400">Développer la partie back-end d’une application web ou web mobile</a>.</label>
                                        </div>
                                        <div class="flex items-center mt-5">
                                            <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="link-checkbox" class="ms-2 text-lg font-medium text-primary ">C8 <a href="#" class="text-gray-400"> Elaborer et mettre en œuvre des composants dans une application de gestion de
                                                    contenu ou e-commerce</a>.</label>
                                        </div>
                                        <div class="flex gap-x-7 my-7 relative">
                                          
                                            <button class="bg-primary text-xl text-white rounded-xl  h-12 w-48  ">Save</button>
                                        </div>


                                    </form>


                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="hidden pt-4" id="about" role="tabpanel" aria-labelledby="about-tab">
                        <div class="flex ">
                            <div class=" bg-white border border-gray-200 rounded-lg shadow-sm  sm:p-2 mt-11 mx-4 w-96 h-48">
                                <div class="flex flex-col ml-5 mt-7 gap-y-2 ">
                                    <p class="text-2xl font-semibold">Brief picture</p>
                                    <p class="text-lg font-regular text-gray-400">JPG, GIF or PNG. Max size of 800K</p>
                                    <span class=" flex justify-center items-center bg-primary w-40 h-11 text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded-xl ">
                                        <label for="fileInput" class="cursor-pointer text-center">
                                            Upload
                                            <input id="fileInput" class="hidden" type="file">
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class=" bg-white border border-gray-200 rounded-lg shadow-sm  sm:p-2 mt-11  w-9/12 h-auto">
                                <p class="text-2xl font-semibold mt-7 mx-4">General information</p>
                                <div class="ml-5">
                                    <div class="flex items-center gap-x-11">
                                        <div class="w-7/12">
                                            <input type="text" id="Title of brief" class="rounded-xl border block w-full p-2.5 h-12 text-base" placeholder="Title of brief" name="nom">
                                        </div>
                                        <span class=" flex justify-center items-center bg-secondary w-40 h-11 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-xl ">
                                            <label for="fileInput" class="cursor-pointer text-center">
                                                Upload attachment
                                                <input id="fileInput" class="hidden" type="file">
                                            </label>
                                        </span>
                                    </div>


                                    <div date-rangepicker class="flex items-center mt-7">
                                        <div class="relative">
                                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                </svg>
                                            </div>
                                            <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5   dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                                        </div>
                                        <span class="mx-4 text-gray-500">to</span>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                </svg>
                                            </div>
                                            <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5    dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                                        </div>
                                    </div>
                                    <p class="text-gray-800 font-semibold text-xl mt-5">skills</p>
                                    <form action="">
                                        <div class="flex items-center mt-5">
                                            <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="link-checkbox" class="ms-2 text-lg font-medium text-primary ">C1 <a href="#" class="text-gray-400">Maquetter une application</a>.</label>
                                        </div>
                                        <div class="flex items-center mt-5">
                                            <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="link-checkbox" class="ms-2 text-lg font-medium text-primary ">C2 <a href="#" class="text-gray-400">Réaliser une interface utilisateur web statique et adaptable</a>.</label>
                                        </div>
                                        <div class="flex items-center mt-5">
                                            <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="link-checkbox" class="ms-2 text-lg font-medium text-primary ">C3 <a href="#" class="text-gray-400">Développer une interface utilisateur web dynamique</a>.</label>
                                        </div>
                                        <div class="flex items-center mt-5">
                                            <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="link-checkbox" class="ms-2 text-lg font-medium text-primary ">C4 <a href="#" class="text-gray-400">Réaliser une interface utilisateur avec une solution de gestion de contenu
                                                    ou e-commerce</a>.</label>
                                        </div>
                                        <div class="flex items-center mt-5">
                                            <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="link-checkbox" class="ms-2 text-lg font-medium text-primary ">C5 <a href="#" class="text-gray-400">Créer une base de données</a>.</label>
                                        </div>
                                        <div class="flex items-center mt-5">
                                            <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="link-checkbox" class="ms-2 text-lg font-medium text-primary ">C6 <a href="#" class="text-gray-400">Développer les composants d’accès aux données</a>.</label>
                                        </div>
                                        <div class="flex items-center mt-5">
                                            <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="link-checkbox" class="ms-2 text-lg font-medium text-primary ">C7 <a href="#" class="text-gray-400">Développer la partie back-end d’une application web ou web mobile</a>.</label>
                                        </div>
                                        <div class="flex items-center mt-5">
                                            <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="link-checkbox" class="ms-2 text-lg font-medium text-primary ">C8 <a href="#" class="text-gray-400"> Elaborer et mettre en œuvre des composants dans une application de gestion de
                                                    contenu ou e-commerce</a>.</label>
                                        </div>
                                        <div class="flex gap-x-7 my-7">
                                        <button class="bg-primary text-xl text-white rounded-xl  h-12 w-48  ">Save</button>
                                        </div>


                                    </form>


                                </div>
                            </div>
                        </div>


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