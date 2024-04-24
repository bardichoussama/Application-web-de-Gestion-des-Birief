<?php
require_once "../../controller/apprenant/apprenant.php";

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
        include_once '../../view/templates/apprenant_slidbar.php';
        ?>
        <main class="  my-20 w-full ">
            <div class="mx-20 w-full">
                <div class=" flex gap-x-4 items-center w-full">
                    <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src='https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200'>


                    <div class="font-medium text-xs w-full  ">
                        <p class="text-xl"><?= $cardInfo['NOM'] .' '. $cardInfo['PRENOM']  ?></p>
                        <p class="text-xs">welcome to Biefed solicode</p>
                    </div>


                </div>
                <div class="w-6/6 h-3/5 rounded-xl bg-white  mt-5 p-7">
                    <div class="my-7">
                        <p class="text-3xl text-gray-800 font-semibold">My prime</p>
                    </div>
                    <div class="flex gap-x-4">
                        <div class="bg-black w-100 h-96 rounded-xl">
                            <img class="w-full h-full bg-cover rounded-xl" src="../../public//assets/img/group.jpg" alt="">
                        </div>
                        <div class="flex flex-col gap-y-6">
                            <p class="text-3xl font-medium">Logic Legends</p>
                            <p class="text-lg font-regular">Group <?= $cardInfo['NOM_GROUPE']  ?> | 2023</p>
                            <div class="flex  gap-x-20 w-full">
                                <div class="mt-20 flex gap-x-4 text-primary ">
                                    <ion-icon class="w-8 h-8" name="location-outline"></ion-icon>
                                    <p class="text-base font-regular text-gray-700">Tanger</p>
                                </div>
                                <div class="mt-20 flex gap-x-4 text-primary w-44 ">
                                    <ion-icon class="w-8 h-8" name="people-outline"></ion-icon>
                                    <p class="text-base font-regular text-gray-700"><?= $cardInfo['nbApprenants']  ?> learner</p>
                                </div>
                                <div class="mt-20 flex gap-x-4 text-primary">
                                    <ion-icon class="w-8 h-8" name="location-outline"></ion-icon>
                                    <p class="text-base font-regular text-gray-700">From 2/10/2023 to
                                        01/06/2024</p>
                                </div>
                            </div>
                        </div>


                    </div>



                </div>
            </div>
        </main>
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


