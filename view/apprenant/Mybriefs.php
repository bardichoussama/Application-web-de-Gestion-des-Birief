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
        <main class="bg-white h-screen w-8/12 ">
            <div class="flex  justify-between mx-4">
                <div class="my-11">
                    <p class="text-4xl font-semibold">Hello, <span class=" font-medium">Oussama</span></p>
                </div>
                <div class="flex  gap-x-7 my-11">

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
            <div class=" text-2xl font-semibold mx-7">
                <p>Current brief</p>
            </div>
            <form id="myForm" action="" method="">
                <div class="mx-11 mt-11">

                    <div class="flex border rounded-xl mx-4 h-24 p-4 mt-7">

                        <img src="../../public/assets/img/bp-cover.jpg" alt="" class="w-24 h-16 rounded-xl">
                        <div class="ml-4 w-4/12">
                            <?php
                            $briefID = $briefArealiser['ID_BRIEF'];
                            
                            ?>
                            <a href="./briefDetails.php?id=<?php echo $briefID; ?>">
                                <p class="text-xl font-medium"><?php echo $briefArealiser["TITRE"]; ?></p>
                            </a>

                            <span class="text-gray-400 text-lg">By <?php echo $briefArealiser["NOM"] . " " . $briefArealiser["PRENOM"] ?></span>
                        </div>
                        <div class="ml-48 mt-4">
                            <span class="bg-yellobadge text-gray-800 rounded-xl text-lg font-medium me-2 p-1.5"><?php echo $briefArealiser["ETAT"] ?></span>
                        </div>
                        <div class="ml-24">
                            <p class="text-gray-400 text-lg font-medium">Duration</p>
                            <span class="text-lg font-medium text-gray-800"><?php echo $briefArealiser["DUREE"] ?>Days </span>
                        </div>
                        <div class="ml-16">
                            <p class="text-lg font-medium text-gray-400">Skills</p>
                            <span class="text-lg font-medium text-gray-800"><?php echo $briefArealiser["SKILLS"] ?></span>
                        </div>
                        <div class="ml-24 mt-4">
                            <button name="<?php echo $buttonName; ?>" class="bg-primary w-40 text-white text-lg font-medium me-2 px-3 py-2 rounded-xl">
                                <?php echo $buttonLabel; ?>
                            </button>
                        </div>
                    </div>
                    <div class=" text-lg font-regular mx-7">
                        <p>Time left : 9j 4h 33 min</p>
                    </div>
                </div>
            </form>
            <div class=" text-2xl font-semibold mx-7 mt-11">
                <p>My promo briefs</p>
            </div>


            <form class=" mx-20 ">




                <div class="flex gap-x-11 mt-7">
                    <div class="relative w-96">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50     " placeholder="Search " required />
                        <!-- <button class="bg-primary text-white absolute end-2.5 bottom-2.5  font-regular  outline-none  rounded-lg text-sm px-4 py-2 ">Search</button> -->
                    </div>
                    <div>
                        <button class="px-6 bg-primary rounded-lg w-56 h-14 text-base text-white">View My submissions</button>
                    </div>

                </div>


            </form>

            <div class="flex  w-full mx-28 flex-wrap">
                <?php if ($affecedBP !== null) : ?>
                    <?php foreach ($affecedBP as $brief) : ?>
                        <div class="flex justify-end ml-5 mt-20 flex-wrap flex-row-reverse ">
                            <div class="max-w-md w-96   rounded-xl p-6">
                                <div class="flex flex-col ">
                                    <div class="">
                                        <div class="relative h-62 w-full mb-3">

                                            <img src="../../public/assets/img/bp-cover.jpg" alt="Just a flower" class=" w-full   h-52  object-cover  rounded-xl">
                                        </div>

                                        <div class="flex gap-x-32  mt-2 items-center">
                                            <div class=" flex gap-x-4 items-center">
                                                <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src='https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200'>


                                                <div class="font-medium text-xs w-28 ">
                                                    <?= $brief['NOM'] . ' ' . $brief['PRENOM'] ?>
                                                </div>

                                            </div>

                                            <div class="flex items-center  bg-secondary text-gray-800 text-xs font-semibold px-2  rounded-lg h-7">
                                                Individual
                                            </div>
                                        </div>
                                        <div class="flex-auto justify-evenly">
                                            <div class="flex flex-wrap ">

                                                <div class="f min-w-0  mt-2">
                                                <a href="./briefDetails.php?id=<?php echo $brief['ID_BRIEF']; ?>">

                                                    <h2 class="text-lg mr-auto cursor-pointer text-gray-800 hover:text-primary truncate "> <?= $brief['TITRE']  ?></h2>

                                                </div>
                                            </div>
                                            <!-- <div class="flex space-x-2 text-sm font-medium justify-end w-full mt-3">
                                        <button class="transition ease-in duration-300 inline-flex items-center text-sm font-medium  md:mb-0 bg-primary px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-xl hover:bg-hoverprimary ">
                                            <span>Details</span>
                                        </button>

                                    </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php endforeach; ?>
                <?php endif; ?>

            </div>


        </main>
        <div class=" w-96 flex justify-center  bg-bodybackground">
            <?php
            include_once '../../view/templates/apprenant_card_info.php';
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