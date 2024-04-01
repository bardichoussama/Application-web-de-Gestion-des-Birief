

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

<body class="text-gray-900 bg-white dark:bg-gray-800 dark:text-gray-200 font-Poppins">

  <main class="flex gap-5 relative">

    <div>
    <a href="#" class="flex justify-center items-center text-2xl font-semibold text-gray-900 bg-white dark:bg-gray-800 dark:text-gray-200 mt-7 rounded-xl"><svg class="w-16 h-16 text-primary  " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z" clip-rule="evenodd" />
        </svg>

        <p class="text-2xl">Briefed</p><br>
        <span class="text-xs">solicode</span>
      </a>
      <aside id="default-sidebar" class="bg-white dark:bg-gray-800 rounded-xl mt-4 ml-4 top-0 left-0 z-40 w-80 h-5/6 transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidenav">


      <div class="overflow-y-auto mt-5 py-5 px-3 h-full bg-white dark:bg-gray-800 rounded-xl border-r border-gray-200 dark:border-gray-700">
          <ul class="space-y-8">
            <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 dark:text-gray-200 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg style="color: #3AAFA9;" aria-hidden="true" class="w-6 h-6  transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                  <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                </svg>
                <span class="ml-3 text-xl text-gray-900  dark:text-gray-200">Dashboard</span>
              </a>
            </li>
            <ul class="space-y-8 ">
              <li>
                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 ">
                  <svg style="color: #3AAFA9;" class="w-6 h-6 text-yellow-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v6.41A7.5 7.5 0 1 0 10.5 22H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z" clip-rule="evenodd" />
                    <path fill-rule="evenodd" d="M9 16a6 6 0 1 1 12 0 6 6 0 0 1-12 0Zm6-3a1 1 0 0 1 1 1v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 1 1 0-2h1v-1a1 1 0 0 1 1-1Z" clip-rule="evenodd" />
                  </svg>

                  <span class="ml-3 text-xl text-gray-900  dark:text-gray-200">Create Brief</span>
                </a>
              </li>
              <ul class="space-y-8">
                <li>
                  <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg  hover:bg-gray-100">
                    <svg style="color: #3AAFA9;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd" />
                    </svg>

                    <span class="ml-3 text-xl text-gray-900  dark:text-gray-200">Learners</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 ">
                    <svg style="color: #3AAFA9;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M5.024 3.783A1 1 0 0 1 6 3h12a1 1 0 0 1 .976.783L20.802 12h-4.244a1.99 1.99 0 0 0-1.824 1.205 2.978 2.978 0 0 1-5.468 0A1.991 1.991 0 0 0 7.442 12H3.198l1.826-8.217ZM3 14v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5h-4.43a4.978 4.978 0 0 1-9.14 0H3Z" clip-rule="evenodd" />
                    </svg>

                    <span class="ml-3 text-xl text-gray-900  dark:text-gray-200">Inbox</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100">
                    <svg style="color: #3AAFA9;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M8 5a1 1 0 0 1 1-1h11a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-1a1 1 0 1 1 0-2h1V6H9a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                      <path fill-rule="evenodd" d="M4 7a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2H4Zm0 11v-5.5h11V18H4Z" clip-rule="evenodd" />
                    </svg>

<span class="ml-3 text-xl text-gray-900 dark:text-gray-200 hover:text-gray-700 dark:hover:text-gray-300">Pages</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100">
                    <svg style="color: #3AAFA9;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13v-2a1 1 0 0 0-1-1h-.757l-.707-1.707.535-.536a1 1 0 0 0 0-1.414l-1.414-1.414a1 1 0 0 0-1.414 0l-.536.535L14 4.757V4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v.757l-1.707.707-.536-.535a1 1 0 0 0-1.414 0L4.929 6.343a1 1 0 0 0 0 1.414l.536.536L4.757 10H4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.757l.707 1.707-.535.536a1 1 0 0 0 0 1.414l1.414 1.414a1 1 0 0 0 1.414 0l.536-.535 1.707.707V20a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.757l1.707-.708.536.536a1 1 0 0 0 1.414 0l1.414-1.414a1 1 0 0 0 0-1.414l-.535-.536.707-1.707H20a1 1 0 0 0 1-1Z" />
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    </svg>

                    <span class="ml-3 text-xl text-gray-900  dark:text-gray-200 ">Settings</span>
                  </a>
                </li>
                <ul class="pt-5 mt-5 space-y-8 border-t border-gray-200 dark:border-gray-700">
                  <li>
                    <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 ">
                      <svg style="color: #3AAFA9;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2" />
                      </svg>

                      <span class="ml-3 text-xl text-gray-900  dark:text-gray-200">Logout</span>
                    </a>
                  </li>

        </div>
      </aside>
    </div>
    <div class="flex justify-center">
      <div class="  mt-7 w-96 rounded-xl text-gray-900 bg-white dark:bg-gray-800 dark:text-gray-200 " style="width: 1480px; height: 1030px;  ">
        <h3 class="text-5xl font-semibold ml-7 mt-7">Hello,<span class="text-regular text-4xl ml-4">Imane</span></h3>
        <button id="theme-toggle" type="button" class="text-gray-500  hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
          <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
          </svg>
          <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
          </svg>
        </button>

        <div class="flex  dark:bg-gray-900 border rounded-xl mx-4 h-24 p-4 mt-16 dark:border-gray-700">
          <img src="../../public/assets/img/bp-cover.jpg" alt="" class="w-24 h-16 rounded-xl ">
          <div class="ml-4  w-4/12">
            <p class="text-base font-medium">Creer une site web worddpress</p>
            <span class="text-gray-400">By Imane bouziane</span>
          </div>
          <div class="ml-48 mt-4">
            <span class="bg-yellobadge text-gray-800 rounded-xl text-base font-medium me-2 p-1.5">in progress</span>
          </div>
          <div class="ml-24">
            <p class="text-gray-400 text-xl font-medium">Duration</p>
            <span class="text-xl font-medium text-gray-800">10jr</span>
          </div>
          <div class="ml-16">
            <p class="text-xl font-medium text-gray-400">Skills</p>
            <span class="text-xl font-medium text-gray-800">5</span>
          </div>
          <div class="ml-24 mt-4">
            <span class="bg-secondary  text-gray-800 text-xs font-semibold me-2 px-3 py-2 rounded-md">
              <label for="fileInput" class="cursor-pointer text-gray-800">
                Attachment
                <svg class="w-6 h-6 text-gray-800  inline-block align-middle p-x-11" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M4 4a2 2 0 1 0 0 4h16a2 2 0 1 0 0-4H4Zm0 6h16v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-8Zm10.707 5.707a1 1 0 0 0-1.414-1.414l-.293.293V12a1 1 0 1 0-2 0v2.586l-.293-.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l2-2Z" clip-rule="evenodd" />
                </svg>
                <input id="fileInput" class="hidden" type="input">
              </label>
            </span>
          </div>
        </div>
        <h4 class="text-xl font-medium mt-9 ml-4">Group progress</h4>
        <div class="bg-secondary w-6/12 h-20 rounded-xl mt-9 ml-8 px-4 flex justify-center items-center gap-11">
          <div class="w-16 h-12 bg-primary flex justify-center items-center rounded-lg">
            <svg class="w-9 h-9 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path d="M7.833 2c-.507 0-.98.216-1.318.576A1.92 1.92 0 0 0 6 3.89V21a1 1 0 0 0 1.625.78L12 18.28l4.375 3.5A1 1 0 0 0 18 21V3.889c0-.481-.178-.954-.515-1.313A1.808 1.808 0 0 0 16.167 2H7.833Z" />
            </svg>
          </div>

          <div class="w-full bg-white rounded-full h-2.5 ">
            <div class="bg-primary h-2.5 rounded-full" style="width: 45%"></div>
          </div>
          <div class="flex justify-between mb-1">
            <span class="text-xl font-medium text-gray-800 ">8/13</span>
          </div>
        </div>

        <div class=" bg-white border border-gray-200 rounded-lg shadow-sm  sm:p-2 mt-11 mx-4">
          <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist" style="list-style-type: none; margin: 0; padding: 0;">
            <li class="w-full">
              <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="true" class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 text-primary text-xl">My Briefs</button>
            </li>
          </ul>

          <div id="fullWidthTabContent" class="border-t border-gray-200 ">

            <div class="flex bg-white  rounded-xl h-24 mt-16 ">
              <img src="../../public/assets/img/bp-cover.jpg" alt="" class="w-24 h-16 rounded-xl">
              <div class="ml-4  w-4/12">
                <p class="text-base font-medium">Creer une site web worddpress</p>
                <span class="text-gray-400">By Imane bouziane</span>
              </div>
              <div class="ml-48 mt-4">
                <span class="bg-secondary text-primary rounded-lg text-base font-medium me-2 px-2">coming</span>
              </div>
              <div class="ml-32">
                <p class="text-gray-400 text-xl font-medium">Duration</p>
                <span class="text-xl font-medium text-gray-800">10jr</span>
              </div>
              <div class="ml-16">
                <p class="text-xl font-medium text-gray-400">Skills</p>
                <span class="text-xl font-medium text-gray-800">5</span>
              </div>
              <div class="ml-28 mt-4">
                <span class="bg-secondary  text-gray-800 text-xs font-semibold me-2 px-3 py-2 rounded-md">
                  <label for="fileInput" class="cursor-pointer text-gray-800">
                    Attachment
                    <svg class="w-6 h-6 text-gray-800  inline-block align-middle p-x-11" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M4 4a2 2 0 1 0 0 4h16a2 2 0 1 0 0-4H4Zm0 6h16v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-8Zm10.707 5.707a1 1 0 0 0-1.414-1.414l-.293.293V12a1 1 0 1 0-2 0v2.586l-.293-.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l2-2Z" clip-rule="evenodd" />
                    </svg>
                    <input id="fileInput" class="hidden" type="input">
                  </label>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-white w-80 h-64 mt-7 rounded-xl ml-5 ">

        <div class="flex gap-4">
          <img class="w-20 h-20 rounded-xl  ml-3 mt-[-10px] object-cover" src="../../public/assets/img/testprofile.jpg" alt="">
          <div class="mt-3">
            <p class="text-gray-800 text-xl font-medium">Imane Bouziane</p>
            <span class="text-">Formatrice</span>
          </div>
        </div>
        <div class="flex flex-wrap gap-x-14">
          <div class="group ">
            <span class="flex mt-6 ml-7 text-gray-400 text-lg"><svg class="w-6 h-6 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd" />
              </svg>
              Group </span>
            <span class="ml-14 text-gray-900 font-medium text-xl">104</span>
          </div>
          <div class="group ">
            <span class="flex mt-6 ml-7 text-gray-400 text-lg"><svg class="w-6 h-6 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd" />
              </svg>

              Briefs </span>
            <span class="ml-14 text-gray-900 font-medium text-xl">10</span>
          </div>
          <div class="group ">
            <span class="flex mt-6 ml-7 text-gray-400 text-lg"><svg class="w-6 h-6 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd" />
              </svg>
              Group </span>
            <span class="ml-14 text-gray-900 font-medium text-xl">104</span>
          </div>
        </div>


      </div>

  </main>

  <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {
            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }
            // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }
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