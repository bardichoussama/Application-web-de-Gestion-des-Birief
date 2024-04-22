<?php
    session_start();
    if($_SESSION["user"] != ""){
        if($_SESSION["user"]=="formateur"){
            header("location:./view/formateur/dashboard_formateur.php");
        }elseif($_SESSION["user"]=="apprenant"){
            header("location:./view/apprenant/promo.php");
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/output.css"> <!-- Custom CSS file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <!-- Alpine.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.7.1/dist/alpine.min.js" defer></script>
    <title>Document</title>
</head>

<body class="font-poppin ">


    <!-- component -->
    <div class="bg-gray-100 flex  h-screen">
        <!-- Left: Image -->
        <div class=" w-2/5 h-scren hidden lg:block bg-primary my-4 ml-4 rounded-xl">
            <a href="#" class="text-white flex items-center ml-7 mt-4 mb-6 text-2xl font-semibold  dark:text-white">
                <svg class="w-14 h-20 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z" clip-rule="evenodd" />
                </svg>
                <div>
                    <p class="text-2xl">Briefed</p>
                    <span class="text-xs block font-thin text-gray-200">solicode</span>
                </div>



            </a>
            <div class="mt-32">
                <p class=" text-4xl text-white font-poppins  font-medium ml-24"> Welcome to our briefed solicode <br>
                    platform!</p>
                <p class="ml-24 text-lg text-white mt-11 "> Tailored for efficiency and collaboration, our medium-sized
                    business solution <br>offers advanced tools to streamline your
                    brief management process.<br> Whether you're coordinating
                    projects or managing teams, our <br>platform ensures
                    seamless communication and organization.<br> Get started
                    today and elevate your brief management experience with us.</p>
            </div>

        </div>
        <div class="mt-28 ml-28 ">
            <div class="w-20 h-20 flex justify-center items-center bg-secondary  rounded-full">
                <svg class="w-10 h-10  text-primary " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 8v8m0-8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 8a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V9a3 3 0 0 0-3-3h-3m1.5-2-2 2 2 2" />
                </svg>
            </div>
            <p class="text-3xl font-semibold mt-20 text-gray-800">Choose your account type to get started.</p>



            <a href="./view/formateur/formateurLogin.php" class="flex items-center font-semibold border-primary bg-secondary border-4  p-4 rounded-xl mt-16 w-full h-28  hover:text-gray-300 ">
                <div class="bg-primary w-16 h-16 ml-4 rounded-lg flex items-center justify-center ">
                    <ion-icon class="text-white text-2xl" name="ribbon"></ion-icon>
                </div>
                <div class="ml-4">
                    <p class="text-gray-800 text-2xl">Former</p>
                    <span class="text-gray-400 text-xs block ">Click here to login</span>
                </div>
            </a>
            <a href="./view/apprenant/apprenat_login.php" class="flex items-center font-semibold bg-white text-gray-900  p-4 rounded-xl mt-9 w-full h-28 hover:bg-secondary hover:text-gray-300 ">
                <div class="bg-white w-16 h-16 ml-4 rounded-lg flex items-center justify-center border-2 border-teal-500">
                    <ion-icon class=" text-primary text-2xl" name="school"></ion-icon>

                </div>
                <div class="ml-4">
                    <p class="text-gray-800 text-2xl">Learner</p>
                    <span class="text-gray-400 text-xs block ">Click here to login</span>
                </div>
            </a>

        </div>

    </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>