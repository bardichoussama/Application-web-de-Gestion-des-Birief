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
    <div class="flex h-screen bg-gray-100">
        <!-- Left: Image -->
        <div class="hidden w-2/5 my-4 ml-4 h-scren lg:block bg-primary rounded-xl">
            <a href="#" class="flex items-center mt-4 mb-6 text-2xl font-semibold text-white ml-7 dark:text-white">
                <svg class="h-20 text-white w-14 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z" clip-rule="evenodd" />
                </svg>
                <div>
                    <p class="text-xl">Briefed</p>
                    <span class="block text-xs font-thin text-gray-200">solicode</span>
                </div>



            </a>
            <div class="mt-32">
                <p class="ml-24 text-2xl font-medium text-white font-poppins"> Welcome to our briefed solicode <br>
                    platform!</p>
                <p class="ml-24 text-sm text-white mt-11 "> Tailored for efficiency and collaboration, our medium-sized
                    business solution <br>offers advanced tools to streamline your
                    brief management process.<br> Whether you're coordinating
                    projects or managing teams, our <br>platform ensures
                    seamless communication and organization.<br> Get started
                    today and elevate your brief management experience with us.</p>
            </div>

        </div>
        <div class="mt-16 ml-28 ">
            <div class="flex items-center justify-center w-16 h-16 rounded-full bg-secondary">
                <svg class="h-7 w-7 text-primary " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 8v8m0-8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 8a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V9a3 3 0 0 0-3-3h-3m1.5-2-2 2 2 2" />
                </svg>
            </div>
            <p class="mt-20 text-2xl font-semibold text-gray-800">Choose your account type to get started.</p>



            <a href="./view/formateur/formateurLogin.php" class="flex items-center w-full p-4 mt-16 font-semibold border-2 border-primary bg-secondary rounded-xl h-28 hover:text-gray-300 ">
                <div class="flex items-center justify-center w-16 h-16 ml-4 rounded-lg bg-primary ">
                    <ion-icon class="text-2xl text-white" name="ribbon"></ion-icon>
                </div>
                <div class="ml-4">
                    <p class="text-xl text-gray-800">Former</p>
                    <span class="block text-xs text-gray-400 ">Click here to login</span>
                </div>
            </a>
            <a href="./view/apprenant/apprenat_login.php" class="flex items-center w-full p-4 font-semibold text-gray-900 bg-white rounded-xl mt-9 h-28 ">
                <div class="flex items-center justify-center w-16 h-16 ml-4 bg-white border-2 border-teal-500 rounded-lg">
                    <ion-icon class="text-2xl text-primary" name="school"></ion-icon>

                </div>
                <div class="ml-4">
                    <p class="text-xl text-gray-800">Learner</p>
                    <span class="block text-xs text-gray-400 ">Click here to login</span>
                </div>
            </a>

        </div>

    </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>