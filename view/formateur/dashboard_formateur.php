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



<body class=" flex h-screen text-gray-900 bg-bodybackground md:text-lg lg:text-xl xl:text-2xl ">
    <?php
    include_once '../../view/templates/formateur_sidebar.php';
    ?>
    <div class=" flex flex-col gap-4 h-screen w-3/4 ml-80   bg-white overflow-auto">

        <div class="flex  justify-between mx-4 ">
            <div class="my-11">
                <p class="text-4xl font-semibold">Hello, <span class=" font-medium"><?php echo $cardInfo['PRENOM'] ?></span></p>
            </div>
            <div class="flex  gap-x-7 my-11">


                <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" class="relative inline-flex items-center text-xl  p-4 rounded-lg font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none " type="button">
                    <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                        <path d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z" />
                    </svg>

                    <div class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-2.5 "></div>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownNotification" class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow  border" aria-labelledby="dropdownNotificationButton">
                    <div class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 ">
                        Notifications
                    </div>
                    <div class="divide-y divide-gray-100 ">
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-100 ">
                            <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11" src="../../public/assets/img/testprofile.jpg" alt="">
                                <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-primary border border-white rounded-full ">
                                    <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                        <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                        <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="w-full ps-3">
                                <div class="text-gray-500 text-sm mb-1.5 ">New message from <span class="font-semibold text-gray-900 ">Jese Leos</span>: "Hey, what's up? All set for the presentation?"</div>
                                <div class="text-xs text-primary ">a few moments ago</div>
                            </div>
                        </a>

                    </div>

                </div>

                <div>
                    <button class="px-6 bg-primary rounded-lg w-38 h-14 text-lg text-white">Create brief</button>
                </div>

            </div>
        </div>

        <div class="p-4  border border-gray-200 rounded-xl shadow-sm  my-4 mx-4  bg-white h-80">
            <!-- Card header -->
            <div class="items-center justify-between lg:flex">
                <div class="mb-4 lg:mb-0">
                    <h3 class="mb-2 text-2xl font-semibold text-gray-800 ">Current Brief</h3>
                    <span class="text-base font-normal text-gray-500 dark:text-gray-400">This a brief that you assigned to your group</span>
                </div>

                <div class=" w-96 h-16 rounded-xl mt-9 ml-8 px-4 flex justify-center items-center gap-11">
                    <div>
                        <p class="text-lg">Progress</p>
                    </div>
                    <div class="w-full bg-white rounded-full h-2.5 ">
                        <div class="w-full bg-secondary rounded-full h-2.5 dark:bg-white-700">
                            <div class="bg-primary h-2.5 rounded-full" style="width: 50%"></div>
                        </div>
                    </div>
                    <div class="flex justify-between mb-1">

                        <span class="text-xl font-medium text-gray-800 "><?php echo $briefProgress["progres"] ?>/<?php echo $briefProgress["total"] ?></span>

                    </div>
                </div>
            </div>
            <!-- Table -->
            <div class="flex flex-col mt-6">
                <div class="overflow-x-auto rounded-lg">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden shadow sm:rounded-lg">
                            <table class="min-w-full divide-y ">
                                <thead class="bg-white ">

                                    <tr>

                                        <th scope="col" class="p-4 text-lg font-medium tracking-wider text-left text-gray-700 uppercase ">
                                            Image
                                        </th>
                                        <th scope="col" class="p-4 text-lg font-medium tracking-wider text-left text-gray-800 uppercase ">
                                            BRIEF OWNER
                                        </th>
                                        <th scope="col" class="p-4 text-lg font-medium tracking-wider text-left text-gray-700 uppercase ">
                                            BRIEF TITLE
                                        </th>
                                        <th scope="col" class="p-4 text-lg font-medium tracking-wider text-left text-gray-700 uppercase ">
                                            STAT
                                        </th>
                                        <th scope="col" class="p-4 text-lg font-medium tracking-wider text-left text-gray-700 uppercase ">
                                            DURATION
                                        </th>
                                        <th scope="col" class="p-4 text-lg font-medium tracking-wider text-left text-gray-700 uppercase ">
                                            SKILLS
                                        </th>
                                        <th scope="col" class="p-4 text-lg font-medium tracking-wider text-left text-gray-700 uppercase ">
                                            Action
                                        </th>
                                    </tr>

                                </thead>
                                <tbody class="bg-bodybackground">
                                    <?php if ($inProgres) : ?>
                                        <tr>


                                            <td class="flex items-center p-4  space-x-3 whitespace-nowrap">
                                                <img class=" w-24 h-16 rounded-lg" src="../../public/assets/img/bp-cover.jpg" alt="">

                                            </td>
                                            <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap ">
                                                <div class="text-sm font-normal text-gray-500 ">
                                                    <div class="text-lg font-semibold text-gray-800 ">Created By</div>
                                                    <div class="text-lg font-normal text-gray-800  flex items-center">
                                                        <?php echo $inProgres["PRENOM"] ?>
                                                        <img class="w-8 h-8 rounded-full ml-1" src="../../public/assets/img/testprofile.jpg" alt="">
                                                        <?php echo $inProgres["NOM"] ?>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="p-4 text-lg font-semibold text-gray-800 whitespace-nowrap ">
                                                <?php echo $inProgres["TITRE"]; ?>
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                                <span class="bg-yellow-100 text-yellow-500 text-lg font-medium mr-2 px-2.5 py-0.5 rounded-md ">INPROGRESS</span>
                                            </td>
                                            <td class="p-4 text-lg font-medium text-gray-800 whitespace-nowrap ">
                                                <?php echo $inProgres["DUREE"] ?> DAYS
                                            </td>
                                            <td class=" p-4 space-x-2 text-lg font-medium text-gray-800 whitespace-nowrap ">

                                                <?php echo $inProgres["SKILLS"] ?>
                                            </td>
                                            <td class="p-4 space-x-2 whitespace-nowrap">

                                                <div class=mt-4">
                                                    <a href="../../BP-PDF/<?php echo $inProgres["PIECE_JOINTE"] ?>" download>
                                                        <span class="bg-secondary  text-gray-800 text-xs font-semibold me-2 px-3 py-2 rounded-md">
                                                            <label for="fileInput" class="cursor-pointer text-gray-800">
                                                                Attachment
                                                                <svg class="w-6 h-6 text-gray-800  inline-block align-middle p-x-11" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                                    <path fill-rule="evenodd" d="M4 4a2 2 0 1 0 0 4h16a2 2 0 1 0 0-4H4Zm0 6h16v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-8Zm10.707 5.707a1 1 0 0 0-1.414-1.414l-.293.293V12a1 1 0 1 0-2 0v2.586l-.293-.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l2-2Z" clip-rule="evenodd" />
                                                                </svg>
                                                                <input id="fileInput" class="hidden" type="input">
                                                            </label>
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>

                                        </tr>
                                    <?php endif; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card Footer -->
        </div>
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm  my-2 mx-4">
            <!-- Card header -->
            <div class="items-center justify-between lg:flex">
                <div class="mb-4 lg:mb-0">
                    <h3 class="mb-2 text-2xl font-semibold text-gray-800 ">Assigned Brief</h3>
                    <span class="text-base font-normal text-gray-500 dark:text-gray-400">This a brief that you assigned to your group</span>
                </div>
                <div class="items-center sm:flex">
                    <div class="flex items-center">
                        <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="mb-4 sm:mb-0 mr-4 inline-flex items-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-4 py-2.5 " type="button">
                            Filter by year
                            <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden w-56 p-3 bg-white rounded-lg shadow ">
                            <h6 class="mb-3 text-sm font-medium text-gray-900">
                                Category
                            </h6>
                            <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
                                <li class="flex items-center">
                                    <input id="apple" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 " />

                                    <label for="apple" class="ml-2 text-sm font-medium text-gray-900 ">
                                        2020
                                    </label>
                                </li>

                                <li class="flex items-center">
                                    <input id="fitbit" type="checkbox" value="" checked class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 " />

                                    <label for="fitbit" class="ml-2 text-sm font-medium text-gray-900 ">
                                        2021
                                    </label>
                                </li>

                                <li class="flex items-center">
                                    <input id="dell" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500  " />

                                    <label for="dell" class="ml-2 text-sm font-medium text-gray-900 ">
                                        2022
                                    </label>
                                </li>

                                <li class="flex items-center">
                                    <input id="asus" type="checkbox" value="" checked class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 " />

                                    <label for="asus" class="ml-2 text-sm font-medium text-gray-900 ">
                                        2023
                                    </label>
                                </li>
                                <li class="flex items-center">
                                    <input id="asus" type="checkbox" value="" checked class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 " />

                                    <label for="asus" class="ml-2 text-sm font-medium text-gray-900 ">
                                        2024
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Table -->
            <div class="flex flex-col mt-6">
                <div class="overflow-x-auto rounded-lg">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden shadow sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 ">
                                <thead class="bg-white ">
                                    <tr>

                                        <th scope="col" class="p-4 text-lg font-medium tracking-wider text-left text-gray-700 uppercase ">
                                            Image
                                        </th>
                                        <th scope="col" class="p-4 text-lg font-medium tracking-wider text-left text-gray-800 uppercase ">
                                            BRIEF OWNER
                                        </th>
                                        <th scope="col" class="p-4 text-lg font-medium tracking-wider text-left text-gray-700 uppercase ">
                                            BRIEF TITLE
                                        </th>
                                        <th scope="col" class="p-4 text-lg font-medium tracking-wider text-left text-gray-700 uppercase ">
                                            STAT
                                        </th>
                                        <th scope="col" class="p-4 text-lg font-medium tracking-wider text-left text-gray-700 uppercase ">
                                            DURATION
                                        </th>
                                        <th scope="col" class="p-4 text-lg font-medium tracking-wider text-left text-gray-700 uppercase ">
                                            SKILLS
                                        </th>
                                        <th scope="col" class="p-4 text-lg font-medium tracking-wider text-left text-gray-700 uppercase ">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-bodybackground">
                                    <?php if ($assignedBP) : ?>
                                        <?php foreach ($assignedBP as $brief) : ?>
                                            <tr>


                                                <td class="flex items-center p-4  space-x-3 whitespace-nowrap">
                                                    <img class=" w-24 h-16 rounded-lg" src="../../public/assets/img/bp-cover.jpg" alt="">

                                                </td>
                                                <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap ">
                                                    <div class="text-sm font-normal text-gray-500 ">
                                                        <div class="text-lg font-semibold text-gray-800 ">Created By</div>
                                                        <div class="text-lg font-normal text-gray-800  flex items-center">
                                                        <?php echo $inProgres["PRENOM"] ?>
                                                            <img class="w-8 h-8 rounded-full ml-1" src="../../public/assets/img/testprofile.jpg" alt="">
                                                            <?php echo $inProgres["NOM"] ?>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="p-4 text-lg font-semibold text-gray-800 whitespace-nowrap ">
                                                <?php echo $brief["TITRE"]; ?>
                                                </td>
                                                <td class="p-4 whitespace-nowrap">
                                                    <span class="bg-secondary text-gray-800 text-lg font-medium mr-2 px-2.5 py-0.5 rounded-md ">FINISHED</span>
                                                </td>
                                                <td class="p-4 text-lg font-medium text-gray-800 whitespace-nowrap ">
                                                <?php echo $inProgres["DUREE"] ?> DAYS
                                                </td>
                                                <td class=" p-4 space-x-2 text-lg font-medium text-gray-800 whitespace-nowrap ">
                                                <?php echo $inProgres["SKILLS"] ?>
                                                </td>
                                                <td class="p-4 space-x-2 whitespace-nowrap">

                                                    <div class="mt-4 flex gap-x-2 items-center">
                                                        <a class=" bg-primary rounded-lg p-3  flex" href="#">
                                                            <p class="text-base text-center font-medium  text-white">Brief statics </p>
                                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd" d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm-1 9a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0v-2Zm2-5a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1Zm4 4a1 1 0 1 0-2 0v3a1 1 0 1 0 2 0v-3Z" clip-rule="evenodd" />
                                                            </svg>
                                                        </a>

                                                    </div>


                                                </td>



                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card Footer -->
        </div>
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm  my-2 mx-4">
            <!-- Card header -->
            <div class="items-center justify-between lg:flex">
                <div class="mb-4 lg:mb-0">
                    <h3 class="mb-2 text-2xl font-semibold text-gray-800 ">The statics of the promotion</h3>
                    <span class="text-base font-normal text-gray-500 dark:text-gray-400">This a brief that you assigned to your group</span>
                </div>
                <div class="items-center sm:flex">
                    <div class="flex items-center">


                    </div>

                </div>
            </div>
            <!-- Table -->
            <div class="flex flex-col  my-10">
                <div class="overflow-x-auto rounded-lg">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden shadow sm:rounded-lg mx-48 flex justify-evenly">
                            <div class="flex flex-col  items-center gap-y-4">
                                <p class="text-gray-800">My prime avencment</p>
                                <div class="relative h-40 w-40">


                                    <svg class="absolute inset-0 w-full h-full" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Background Circle -->
                                        <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-gray-200 " stroke-width="2"></circle>
                                        <!-- Progress Circle inside a group with rotation -->
                                        <g class="origin-center -rotate-90 transform">
                                            <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-primary" stroke-width="2" stroke-dasharray="100" stroke-dashoffset="10"></circle>

                                        </g>
                                    </svg>
                                    <!-- Percentage Text -->
                                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                        <span class="text-center text-2xl font-bold text-gray-600">90%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col  items-center gap-y-4">
                                <p class="text-gray-800">My prime avencment</p>
                                <div class="relative h-40 w-40">


                                    <svg class="absolute inset-0 w-full h-full" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Background Circle -->
                                        <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-gray-200 " stroke-width="2"></circle>
                                        <!-- Progress Circle inside a group with rotation -->
                                        <g class="origin-center -rotate-90 transform">
                                            <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-primary" stroke-width="2" stroke-dasharray="100" stroke-dashoffset="10"></circle>

                                        </g>
                                    </svg>
                                    <!-- Percentage Text -->
                                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                        <span class="text-center text-2xl font-bold text-gray-600">90%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col  items-center gap-y-4">
                                <p class="text-gray-800">My prime avencment</p>
                                <div class="relative h-40 w-40">


                                    <svg class="absolute inset-0 w-full h-full" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                                        <!-- Background Circle -->
                                        <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-gray-200 " stroke-width="2"></circle>
                                        <!-- Progress Circle inside a group with rotation -->
                                        <g class="origin-center -rotate-90 transform">
                                            <circle cx="18" cy="18" r="16" fill="none" class="stroke-current text-primary" stroke-width="2" stroke-dasharray="100" stroke-dashoffset="10"></circle>

                                        </g>
                                    </svg>
                                    <!-- Percentage Text -->
                                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                        <span class="text-center text-2xl font-bold text-gray-600">90%</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- Card Footer -->
        </div>

       

    </div>

    <div class=" w-96 flex justify-center mx-2 bg-bodybackground   ">
        <?php
        include_once '../../view/templates/formateur_info_card.php';
        ?>

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