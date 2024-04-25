<?php
require_once "../../controller/formateur/formateurDashboard.php";
require_once "../../controller/formateur/brief_list_controller.php";
$Brief_id = isset($_POST['ID_BRIEF']) ? $_POST['ID_BRIEF'] : null;
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



<body class=" flex h-screen text-gray-900 bg-bodybackground md:text-lg lg:text-xl xl:text-2xl">
    <?php
    include_once '../../view/templates/formateur_sidebar.php';
    ?>
    <div class=" flex flex-col  h-screen w-3/4 ml-60   bg-white ">

        <div class="flex  justify-between mx-4 ">
            <div class="my-11">
                <p class="text-2xl font-semibold">Hello, <span class=" font-medium"><?php echo $cardInfo['PRENOM'] ?></span></p>
            </div>
            <div class="flex  gap-x-7 my-11">


                <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" class="relative inline-flex items-center text-xl  p-4 rounded-lg font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none " type="button">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                        <path d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z" />
                    </svg>

                    <div class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-2.5 "></div>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownNotification" class="z-20 hidden w-full max-w-sm  divide-y divide-gray-100 rounded-lg shadow  border" aria-labelledby="dropdownNotificationButton">
                    <div class="block px-4 py-2 font-medium text-center text-lg text-gray-700 rounded-t-lg bg-gray-50 ">
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
                                <div class="text-gray-500 text-xs mb-1.5 ">New message from <span class="font-semibold text-gray-900 ">Jese Leos</span>: "Hey, what's up? All set for the presentation?"</div>
                                <div class="text-xs text-primary ">a few moments ago</div>
                            </div>
                        </a>

                    </div>

                </div>

                <div>
                    <a href="./create_brief.php"><button class="px-2 bg-primary rounded-lg w-28 h-11 text-xs text-white">Create brief</button></a>
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
                <input type="search" id="default-search" name="title" class="block w-full p-4 ps-10 text-xs text-gray-900 border border-gray-300 rounded-lg bg-gray-50 " placeholder="Search Mockups, Logos..." required />
                <button name="search" class="bg-primary text-white absolute end-2.5 bottom-2.5  font-regular  outline-none  rounded-lg text-sm px-4 py-2 ">Search</button>
            </div>
        </form>
        <form class="flex justify-end  mr-16" action="./briefs_list.php" method="post">
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-gray-800 bg-white border font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                Filter briefs
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <button name="allBriefs" class="block px-4 py-2 hover:bg-gray-100">All briefs</button>
                    </li>
                    <li>
                        <button name="myBriefs" class="block px-4 py-2 hover:bg-gray-100">My briefs</button>
                    </li>
                </ul>
            </div>
        </form>



        <div class="flex flex-wrap  gap-x-2 mx-24 overflow-auto ">
            <?php if ($allbriefs) : ?>
                <?php foreach ($allbriefs as $brief) : ?>
                    <div class="max-w-md rounded-xl p-6 mt-20" style="width: 250px;">
                        <div class="relative h-62 w-full mb-3">
                            <img src="../../public/assets/img/bp-cover.jpg" alt="Just a flower" class="w-full h-32 object-cover rounded-xl">
                        </div>
                        <a href="./brief_details.php?id=<?= $brief['ID_BRIEF'] ?>">
                            <div class="flex justify-around mt-2 items-center">
                                <div class="flex gap-x-2 items-center">
                                    <img class='w-6 h-6 object-cover rounded-full' alt='User avatar' src='https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200'>
                                    <div class="font-medium text-xs w-40">
                                        <?= $brief['NOM'] . ' ' . $brief['PRENOM'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-auto justify-evenly">
                                <div class="flex flex-wrap">
                                    <div class="f min-w-0 mt-2">
                                        <h2 class="text-xs mr-auto cursor-pointer text-gray-800 hover:text-primary truncate">
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

    <div class="  flex justify-cente bg-bodybackground ">
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