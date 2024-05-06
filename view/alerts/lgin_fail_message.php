<link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
 
 <!-- Modal toggle -->
 <div class="flex justify-center m-5">
     <button id="successButton" data-modal-target="successModal" data-modal-toggle="successModal" class="block text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
         Show success message
     </button>
 </div>

 <!-- Main modal -->
 <div id="successModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
     <div class="relative w-full h-full max-w-md p-4 md:h-auto">
         <!-- Modal content -->
         <div class="relative p-4 text-center bg-gray-100 rounded-lg shadow sm:p-5">
             <button type="button" class="text-purple-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-purple-500 hover:text-xhite rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="successModal">
                 <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                 </svg>
                 <span class="sr-only">Close modal</span>
             </button>
             <div class="w-12 h-12 rounded-full bg-red-100 dark:bg-red-900 p-2 flex items-center justify-center mx-auto mb-3.5">
                 <svg aria-hidden="true" class="w-8 h-8 text-red-500 dark:text-red-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm0-9a1 1 0 011 1v3a1 1 0 01-2 0v-3a1 1 0 011-1zm0 6a1 1 0 011 1V12a1 1 0 11-2 0v3a1 1 0 011 1z" clip-rule="evenodd"></path>
                 </svg>

                 <span class="sr-only">Faild</span>
             </div>
             <p class="mb-4 text-lg font-semibold text-gray-900 ">Eamil or password not match.</p>

         </div>
     </div>
 </div>';