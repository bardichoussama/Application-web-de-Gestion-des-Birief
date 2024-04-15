<?php
require_once "../../controller/formateur/formateurDashboard.php";
require_once '../../controller/formateur/brief_details_controller.php';
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
                    <p class="text-4xl font-semibold">Hello, <span class=" font-medium">Imane</span></p>
                </div>
                <div class="flex  gap-x-7 my-11">
                    <div>
                        <button class="px-6 bg-primary rounded-lg w-38 h-14 text-lg text-white">Assaign now</button>
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
            <div class="flex ">

                <div class="flex flex-col item-center mx-20 mt-11 rounded-3xl  " style=" width: 900px;">
                    <div class="my-4">
                        <a href="./briefs_list.php" />
                        <button class=" flex justify-center items-center px-6 bg-secondary rounded-lg w-38 h-14 text-lg text-primary  "><ion-icon name="arrow-back-outline"></ion-icon>Back</button>
                    </div>
                    <img class="object-cover rounded-3xl  " style="max-height: 550px; width: 900px;" src="../../public/assets/img/bp-cover.jpg" alt="Cover Image">
                    <div class="flex flex-wrap ">
                        <div class="f min-w-0  mt-2">
                            <h2 class="text-2xl font-medium mr-auto cursor-pointer text-gray-800 hover:text-primary truncate "><?= $briefDetail['TITRE']?></h2>
                        </div>

                    </div>
                    <div class="flex gap-x-32  mt-2 items-center w-full ">
                        <div class=" flex gap-x-4 items-center w-full">
                            <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src='https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200'>


                            <div class="font-medium text-xs w-full  ">
                            <p class="text-xl"><?= $briefDetail['NOM'] .' '. $briefDetail['PRENOM'] ?></p>
                                <p class="text-xs">created : <?= $briefDetail['DATE_AJOUTE']?></p>
                            </div>
                           

                        </div>
                        <div class="flex justify-end w-full ">
                            <div class="flex items-center   bg-green-400 text-white text-xs px-2  rounded-lg h-7 ">
                                assigned
                            </div>
                        </div>

                    </div>
                    <div class="flex items-center mt-4">
                        <div class="flex-1">
                            <h5 class="w-full break-words">Réaliser une application web en PHP pour gérer les réservations des événements de l’association FARHA. 
</h5>
                        </div>
                      
                    </div>

                </div>
                <div class="flex flex-col border w-96  shadow rounded-3xl p-4 gap-y-7">
                    <p class="text-2xl font-semibold">Targeted skill</p>
                    <?php foreach ($briefCompetence as $competence ): ?>
                    <div class=" mx-4  flex gap-x-3">
                        <p class="text-lg text-primary font-semibold"><?= $competence ['CODE']?></p>
                        <span class="text-gray-500"><?= $competence ['NOM']?></span>
                    </div>
                    <?php endforeach; ?>
                   


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