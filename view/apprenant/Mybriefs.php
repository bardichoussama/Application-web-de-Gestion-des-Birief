<?php

require_once '../../controller/apprenant/apprenant.php';
require_once '../../controller/apprenant/my_briefs.php';
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



<body class="flex h-screen text-gray-900 md:text-lg lg:text-xl xl:text-2xl">
    <?php
    include_once '../../view/templates/apprenant_sidebar.php';
    ?>
    <div class="flex flex-col w-3/4 h-screen gap-4 overflow-auto bg-white ml-60">
        <div class="flex justify-between mx-4">
            <div class="my-11">
                <p class="text-2xl font-semibold">Hello, <span class="font-medium "><?php echo $cardInfo["PRENOM"] ?></span></p>
            </div>
            <div class="flex gap-x-7 my-11">

                <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" class="relative inline-flex items-center p-4 text-xl font-medium text-center text-gray-500 rounded-lg hover:text-gray-900 focus:outline-none " type="button">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                        <path d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z" />
                    </svg>

                    <div class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-2.5 "></div>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownNotification" class="z-20 hidden w-full max-w-sm bg-white border divide-y divide-gray-100 rounded-lg shadow" aria-labelledby="dropdownNotificationButton">
                    <div class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 ">
                        Notifications
                    </div>
                    <div class="divide-y divide-gray-100 ">
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-100 ">
                            <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11" src="../../public/assets/img/testprofile.jpg" alt="">
                                <div class="absolute flex items-center justify-center w-5 h-5 -mt-5 border border-white rounded-full ms-6 bg-primary ">
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
            </div>
        </div>
        <div class="p-4 mx-4 bg-white border border-gray-200 shadow-sm h-72 rounded-xl">
            <!-- Card header -->
            <div class="items-center justify-between lg:flex">
                <div class="mb-4 lg:mb-0">
                    <h3 class="mb-2 text-lg font-semibold text-gray-800 ">Current Brief</h3>

                    <?php if (!$briefArealiser) : ?>
                        <span class="text-xs font-normal text-gray-500 dark:text-gray-400">NO BRIEF AFFECTED TO YOUR GROUP YET </span>
                    <?php else : ?>
                        <span class="text-xs font-normal text-gray-500 dark:text-gray-400">This a brief that you assigned to your group</span>
                    <?php endif; ?>
                </div>
            </div>
            <!-- Table -->
            <div class="flex flex-col mt-6">
                <div class="overflow-x-auto rounded-lg">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden shadow sm:rounded-lg">
                            <table class="min-w-full divide-y ">
                                <thead class="bg-white ">
                                    <?php if ($briefArealiser) : ?>
                                        <tr>

                                            <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-700 uppercase ">
                                                Image
                                            </th>
                                            <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-800 uppercase ">
                                                BRIEF OWNER
                                            </th>
                                            <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-700 uppercase ">
                                                BRIEF TITLE
                                            </th>
                                            <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-700 uppercase ">
                                                STAT
                                            </th>
                                            <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-700 uppercase ">
                                                DURATION
                                            </th>
                                            <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-700 uppercase ">
                                                SKILLS
                                            </th>
                                            <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-700 uppercase ">
                                                Action
                                            </th>
                                        </tr>
                                    <?php endif; ?>
                                </thead>
                                <tbody class="bg-bodybackground">
                                    <?php if ($briefArealiser) : ?>
                                        <tr>


                                            <td class="flex items-center p-4 space-x-3 whitespace-nowrap">
                                                <img class="w-16 h-12 rounded-lg " src="../../BP-IMAGE/<?= $briefArealiser["IMAGE"] ?> " alt="">

                                            </td>
                                            <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap ">
                                                <div class="text-sm font-normal text-gray-500 ">
                                                    <div class="text-xs font-semibold text-gray-800 ">Created By</div>
                                                    <div class="flex items-center text-xs font-normal text-gray-800">
                                                        <?php echo $briefArealiser["PRENOM"] . " " . $briefArealiser["NOM"] ?>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="p-4 text-xs font-semibold text-gray-800 whitespace-nowrap ">
                                                <?php echo $briefArealiser["TITRE"]; ?>
                                            </td>
                                            <td class="p-4 whitespace-nowrap">
                                                <span class="bg-yellobadge text-gray-800 rounded-xl text-xs font-medium me-2 p-1.5"><?php echo $briefArealiser["ETAT"] ?></span>

                                            </td>
                                            <td class="p-4 text-xs font-medium text-gray-800 whitespace-nowrap ">
                                                <?php echo $briefArealiser["DUREE"] ?> DAYS
                                            </td>
                                            <td class="p-4 space-x-2 text-xs font-medium text-gray-800 whitespace-nowrap">

                                                <?php echo $briefArealiser["SKILLS"] ?>
                                            </td>
                                            <td class="p-4 space-x-2 whitespace-nowrap">

                                                <div class=mt-4">
                                                    <button name="<?php echo $buttonName; ?>" class="w-32 px-2 py-2 text-xs font-medium text-white rounded-lg bg-primary me-2">
                                                        <?php echo $buttonLabel; ?>
                                                    </button>
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
        <div class="text-xl font-semibold mx-7 mt-11">
            <p>My promo briefs</p>
        </div>


   




            <div class="flex mx-20 mt-4 gap-x-11">
                <div class="relative w-80">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                        <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" name="title" id="search" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg h-11 ps-10 bg-gray-50" placeholder="Search" required />

                </div>

            </div>



 

        <div class="flex flex-wrap mx-24 gap-x-2 ">
            <?php if ($affecedBP) : ?>
                <?php foreach ($affecedBP as $brief) : ?>
                    <div class="max-w-md p-6 mt-20 rounded-xl" style="width: 239px;">
                        <div class="relative w-full mb-3 h-62">
                            <img src="../../public/assets/img/bp-cover.jpg" alt="Just a flower" class="object-cover w-full h-32 rounded-xl">
                        </div>
                        <a href="./briefDetails.php?= $brief['ID_BRIEF'] ?>">
                            <div class="flex items-center justify-around mt-2">
                                <div class="flex items-center gap-x-2">
                                    <img class='object-cover w-6 h-6 rounded-full' alt='User avatar' src='https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200'>
                                    <div class="w-40 text-xs font-medium">
                                        <?= $brief['NOM'] . ' ' . $brief['PRENOM'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-auto justify-evenly">
                                <div class="flex flex-wrap">
                                    <div class="min-w-0 mt-2 f">
                                        <h2 class="mr-auto text-xs text-gray-800 truncate cursor-pointer hover:text-primary">
                                            <?php echo $brief['TITRE']; ?>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="flex justify-center bg-bodybackground">
        <?php
        include_once '../../view/templates/apprenant_card_info.php';
        ?>

    </div>

    <script src="../../public/js/dashboard.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("search").addEventListener("input", function() {
                let search = this.value; // 'this' refers to the input element with id 'search'
                console.log(search)
                let titles = document.querySelectorAll(".titles");
                titles.forEach(title => {
                    if (!title.innerHTML.includes(search)) {
                        title.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.setAttribute("style", "display:none")
                    } else {
                        title.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.removeAttribute("style")
                    }
                });
            });
        });
    </script>

</body>

</html>




<!-- <span class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">
  <label for="fileInput" class="cursor-pointer">
    Upload
    <input id="fileInput" class="hidden" type="file">
  </label>
</span> -->