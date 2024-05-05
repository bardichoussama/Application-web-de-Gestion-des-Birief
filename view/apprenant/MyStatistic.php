<?php

require_once '../../controller/apprenant/apprenant.php';
require_once "../../controller/formateur/learner_state_detail.php";
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

<body class="flex h-screen text-gray-900 bg-black md:text-lg lg:text-xl xl:text-2xl">
    <?php
    include_once '../../view/templates/apprenant_sidebar.php';
    ?>
    <div class="flex flex-col w-3/4 h-screen gap-4 overflow-auto bg-white ml-60">

        <div class="flex justify-between mx-4 ">
            <div class="my-11">
                <p class="text-2xl font-semibold">Hello, <span class="font-medium "><?php echo $cardInfo['PRENOM'] ?></span></p>
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

                <div>
                    <a href="./create_brief.php"><button class="px-2 text-xs text-white rounded-lg bg-primary w-28 h-11">Create brief</button></a>
                </div>

            </div>
        </div>

        <div class="flex flex-col mt-6 mx-9">
            <div class="overflow-x-auto rounded-lg">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden shadow sm:rounded-lg">
                        <table class="min-w-full text-gray-800 divide-y divide-gray-200 ">
                            <thead class="text-lg text-gray-800 bg-gray-50">
                                <tr>
                                    <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-800 uppercase ">
                                        ID_BRIEF
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-800 uppercase ">
                                        Title
                                    </th>

                                    <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-800 uppercase ">
                                        Status
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                        Brief link
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                        Start date
                                    </th>
                                    <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                        End date
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="bg-white ">
                                <?php if ($aprenant_states) : ?>
                                    <?php foreach ($aprenant_states as $state) : ?>
                                        <tr>
                                            <td class="p-4 text-xs font-normal text-gray-900 whitespace-nowrap ">
                                                <?php echo $state["ID_BRIEF"] ?>
                                            </td>
                                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap ">
                                                <?php echo $state["TITRE"] ?>
                                            </td>

                                            <td class="p-4 whitespace-nowrap">
                                                <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md  border-green-100 "><?php echo $state["ETAT"] ?></span>
                                            </td>
                                            <td class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">

                                                <span> Game_Recomondation_drive</span>
                                            </td>
                                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap ">
                                                2024-05-03
                                            </td>
                                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap ">
                                                2024-05-03
                                            </td>

                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-4 mx-12 border rounded-lg shadow my-11 bg-bodybackground">
            <div class="flex justify-between mb-3">
                <div class="flex items-center">
                    <div class="flex items-center justify-center">
                        <h5 class="text-base font-bold leading-none text-center text-gray-900 pe-1">Learner Progress</h5>
                        <svg data-popover-target="chart-info" data-popover-placement="bottom" class="w-3.5 h-3.5 text-gray-500  cursor-pointer ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm0 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm1-5.034V12a1 1 0 0 1-2 0v-1.418a1 1 0 0 1 1.038-.999 1.436 1.436 0 0 0 1.488-1.441 1.501 1.501 0 1 0-3-.116.986.986 0 0 1-1.037.961 1 1 0 0 1-.96-1.037A3.5 3.5 0 1 1 11 11.466Z" />
                        </svg>
                        <div data-popover id="chart-info" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 ">
                            <div class="p-3 space-y-2">
                                <h3 class="font-semibold text-gray-900 dark:text-white">Activity growth - Incremental</h3>
                                <p>Report helps navigate cumulative growth of community activities. Ideally, the chart should have a growing trend, as stagnating chart signifies a significant decrease of community activity.</p>
                                <h3 class="font-semibold text-gray-900 ">Calculation</h3>
                                <p>For each date bucket, the all-time volume of activities is calculated. This means that activities in period n contain all activities up to period n, plus the activities generated by your community in period.</p>
                                <a href="#" class="flex items-center font-medium text-blue-600 ">Read more <svg class="w-2 h-2 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg></a>
                            </div>
                            <div data-popper-arrow></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-3 rounded-lg bg-gray-50">
                <div class="grid grid-cols-3 gap-3 mb-2">
                    <dl class="bg-orange-50  rounded-lg flex flex-col items-center justify-center h-[78px]">
                        <dt class="flex items-center justify-center w-8 h-8 mb-1 text-sm font-medium text-orange-600 bg-orange-100 rounded-full"><?= $apprenant_static["NOT_DONE"] ?></dt>
                        <dd class="text-sm font-medium text-orange-600">Not done</dd>
                    </dl>
                    <dl class="bg-blue-50  rounded-lg flex flex-col items-center justify-center h-[78px]">
                        <dt class="flex items-center justify-center w-8 h-8 mb-1 text-sm font-medium text-blue-600 bg-blue-100 rounded-full"><?= $apprenant_static["TOTAL"] ?></dt>
                        <dd class="text-sm font-medium text-blue-600">Brief affected</dd>
                    </dl>
                    <dl class="bg-teal-50  rounded-lg flex flex-col items-center justify-center h-[78px]">
                        <dt class="flex items-center justify-center w-8 h-8 mb-1 text-sm font-medium text-teal-600 bg-teal-100 rounded-full"><?= $apprenant_static["DONE"] ?></dt>
                        <dd class="text-sm font-medium text-teal-600">Done</dd>
                    </dl>

                </div>


            </div>

            <!-- Radial Chart -->
            <div class="py-6" id="radial-chart"></div>


        </div>

    </div>

    <div class="flex justify-cente bg-bodybackground">
        <?php
        include_once '../../view/templates/formateur_info_card.php';
        ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="../../public/js/dashboard.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script>
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange  = function () {
              if (this.readyState == 4 && this.status == 200) {
                    static = this.responseText.split(",")
                    const getChartOptions = () => {
                        return {
                            series: static,
                            colors: ["#1C64F2", "#16BDCA", "#FDBA8C"],
                            chart: {
                                height: "380px",
                                width: "100%",
                                type: "radialBar",
                                sparkline: {
                                    enabled: true,
                                },
                            },
                            plotOptions: {
                                radialBar: {
                                    track: {
                                        background: '#E5E7EB',
                                    },
                                    dataLabels: {
                                        show: false,
                                    },
                                    hollow: {
                                        margin: 0,
                                        size: "32%",
                                    }
                                },
                            },
                            grid: {
                                show: false,
                                strokeDashArray: 4,
                                padding: {
                                    left: 2,
                                    right: 2,
                                    top: -23,
                                    bottom: -20,
                                },
                            },
                            labels: ["Briefs affected", "Done", "Not done"],
                            legend: {
                                show: true,
                                position: "bottom",
                                fontFamily: "Inter, sans-serif",
                            },
                            tooltip: {
                                enabled: true,
                                x: {
                                    show: false,
                                },
                            },
                            yaxis: {
                                show: false,
                                labels: {
                                    formatter: function (value) {
                                        return value + '%';
                                    }
                                }
                            }
                        }
                    }
                    
        
              
        
                if (document.getElementById("radial-chart") && typeof ApexCharts !== 'undefined') {
                    const chart = new ApexCharts(document.querySelector("#radial-chart"), getChartOptions());
                    chart.render();
                }
                }
            }
            xmlhttp.open("GET", "../../controller/apprenant/ajax_learner_static.php?", true);
            xmlhttp.send();
    </script>
</body>

</html>