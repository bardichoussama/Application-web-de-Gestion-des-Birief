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
                    <p class="text-4xl font-semibold">Hello, <span class=" font-medium"><?php echo $cardInfo["PRENOM"] ?></span></p>
                </div>
                <div class="flex  gap-x-7 my-11">
                    <div>
                        <form action="" method="post">
                            <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow ">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                                            <h3 class="text-lg font-semibold text-gray-900 ">
                                                Brief Duration
                                            </h3>
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div date-rangepicker class="flex items-center mt-7">
                                            <div class="relative">
                                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                    </svg>
                                                </div>
                                                <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5   dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                                            </div>
                                            <span class="mx-4 text-gray-500 text-lg">to</span>
                                            <div class="relative">
                                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                    </svg>
                                                </div>
                                                <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5    dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                                            </div>
                                        </div>
                                        <div class="w-full relative  flex justify-end">
                                            <button name="done" class="bg-primary border-2  text-white  rounded-xl  h-10 w-20  text-xs mt-3 ">Donne</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <?php if( !$inProgres): ?>
                        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-primary hover:bg-hoverprimary blue-800 focus:ring-4 focus:outline-none focus:ring-primary font-medium rounded-lg text-lg px-5 py-2.5 text-center ">
                            Assign now
                        </button>
                        <?php endif; ?>
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
           <div class="flex flex-col mx-11">
           <div class="my-4">
                <a href="./briefs_list.php">
                    <button class=" flex justify-center items-center px-6 bg-secondary rounded-lg w-38 h-14 text-lg text-primary  "><ion-icon name="arrow-back-outline"></ion-icon>Back</button>
                </a>
            </div>
            <div class="flex  justify-center   m-0 p-0">
           

           <div class="flex flex-col item-center mx-20  rounded-3xl  k" style=" width: 900px; ">

               <img class="object-cover rounded-3xl   bg-black" style="max-height: 550px; width: 900px;" src="../../public/assets/img/bp-cover.jpg" alt="Cover Image">
               <div class="flex flex-wrap ">
                   <div class="f min-w-0  mt-2">
                       <h2 class="text-2xl font-medium mr-auto cursor-pointer text-gray-800 hover:text-primary truncate "><?= $briefDetail['TITRE'] ?></h2>
                   </div>

               </div>
               <div class="flex gap-x-32  mt-2 items-center w-full ">
                   <div class=" flex gap-x-4 items-center w-full">
                       <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src='https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200'>


                       <div class="font-medium text-xs w-full  ">
                           <p class="text-xl"><?= $briefDetail['NOM'] . ' ' . $briefDetail['PRENOM'] ?></p>
                           <p class="text-xs">created : <?= $briefDetail['DATE_AJOUTE'] ?></p>
                       </div>


                   </div>

               </div>
               <div class="flex items-center mt-4">
                   <div class="flex-1">
                       <h5 class="w-full break-words">Réaliser une application web en PHP pour gérer les réservations des événements de l’association FARHA.
                       </h5>
                   </div>
                   <a  href="../../BP-PDF/<?= $briefDetail['PIECE_JOINTE'] ?>" download class="bg-secondary text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded "> <svg class="w-6 h-6 text-gray-800  inline-block align-middle p-x-11" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"  download >

                                <path fill-rule="evenodd" d="M4 4a2 2 0 1 0 0 4h16a2 2 0 1 0 0-4H4Zm0 6h16v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-8Zm10.707 5.707a1 1 0 0 0-1.414-1.414l-.293.293V12a1 1 0 1 0-2 0v2.586l-.293-.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l2-2Z" clip-rule="evenodd" />
                            </svg>
                            
                            Attachment
                           
                    </a>
               </div>
              

           </div>
           <div class="flex flex-col border w-96  shadow rounded-3xl p-4 gap-y-7">
               <p class="text-2xl font-semibold">Targeted skill</p>
               <?php foreach ($briefCompetence as $competence) : ?>
                   <div class=" mx-4  flex gap-x-3">
                       <p class="text-lg text-primary font-semibold"><?= $competence['CODE'] ?></p>
                       <span class="text-gray-500"><?= $competence['COMPETENCE_NOM'] ?></span>
                   </div>
               <?php endforeach; ?>



            </div>
        </div>
        <!-- <span class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">
          <label for="fileInput" class="cursor-pointer">
            Upload
            <input id="fileInput" class="hidden" type="file">
          </label>
        </span> -->

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
