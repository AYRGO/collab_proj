<!doctype html>
<html>

<head>
    <style>
        .jobScroll::-webkit-scrollbar {
            display: none;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWD Project</title>
    <link rel="icon" href="img/logo.png" type="image/png">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    },

                    backgroundPosition: {
                        'custom-center': 'center calc(25% - 20px);',
                        'custom-top': 'center calc(10% - 20px);',
                        'custom-bottom': 'center calc(50% - 100px);'
                    },
                    backgroundImage: {
                        'jobs-hero': "url('img/jobs/jobs-hero.jpg')",
                    }
                }
            }
        }
    </script>
</head>

<body class="relative">
    <?php
    include 'include/landing/header.php';
    ?>

    <?php
    $page = 'announcement';
    include 'include/landing/navbar.php';
    ?>

    <!-- hero section -->
    <section class="w-[85%] mx-auto">
        <!-- jobs hero for pwd section -->
        <div
            class="bg-jobs-hero bg-cover bg-custom-top w-full rounded-3xl h-[60vh] my-4 flex flex-col justify-center text-white px-14">
            <h1 class="text-4xl font-semibold tracking-wide">Exciting Opportunities Await!</h1>
            <span class="py-4 text-xl w-1/2 leading-relaxed tracking-normal">Stay updated on upcoming job openings,
                career fairs, and events that promote diversity and inclusion in the workplace.</span>

            <div class="mt-2 cursor-pointer text-gray-200 group w-[23%]">
                <div class="flex items-center gap-2 group-hover:text-blue-400 group-hover:font-bold">
                    <h1 class="text-lg font-semibold">View Upcoming Events</h1>
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 19V5m0 14-4-4m4 4 4-4" />
                    </svg>
                </div>

                <div class="px-3 mt-2">
                    <hr class="w-48 border-1 border-white group-hover:border-blue-400">
                </div>
            </div>
        </div>
        <!-- end of hero section -->

        <!-- Search and Filter Section -->
        <!-- <div class="flex items-center space-x-4 py-4">
            <input type="text" class="border px-4 py-2 rounded-lg" placeholder="Search jobs...">
            <select class="border px-4 py-2 rounded-lg">
                <option value="all">All Locations</option>
                <option value="remote">Remote</option>
                <option value="onsite">On-site</option>
            </select>
            <select class="border px-4 py-2 rounded-lg">
                <option value="all">All Job Types</option>
                <option value="full-time">Full-time</option>
                <option value="part-time">Part-time</option>
            </select>
        </div> -->
        <!-- link for the announcement -->
        <div class="pt-4 pb-4 text-gray-600">
            <ul class="flex gap-8 text-lg font-medium">
                <!-- Job Opportunities Link -->
                <div>
                    <li><a href="#" class="hover:text-gray-700 text-blue-700" id="jobLink">Job Opportunities</a></li>
                    <div class="w-full h-2 bg-blue-700 mt-2 rounded-full" id="underlineJob"></div>
                </div>

                <!-- Events Link -->
                <div>
                    <li><a href="#" class="hover:text-gray-700 active:text-blue-700" id="eventsLink">Events</a></li>
                    <div class="hidden w-full h-2 bg-blue-700 mt-2 rounded-xl" id="underlineEvents"></div>
                </div>
            </ul>
            <hr class="border border-gray-200">
        </div>

        <!-- Job Opportunities Content -->
        <div id="jobSection">
            <div class="pb-12 text-gray-800">
                <h1 class="font-medium text-2xl text-gray-900 tracking-wide">Explore Jobs</h1>
                <p class="py-2 text-lg">Learn about new jobs, reviews, company culture, perks and benefits.</p>



                <div id="controls-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out py-4" data-carousel-item="active">
                <div class="flex gap-8 px-16">
                    <!-- first job -->
                    <div class="flex items-start gap-2 border-2 border-blue-900 p-6 rounded-2xl shadow-md w-full cursor-pointer hover:shadow-xl transition duration-300 transform ease-in-out hover:scale-105"
                        id="ttecBox">
                        <!-- company icon -->
                        <div class="w-[100px]">
                            <img src="img/jobs/ttec.png" class="w-full h-20 object-contain" alt="TTEC Icon Logo">
                        </div>
                        <!-- job details -->
                        <div>
                            <h1 class="font-semibold text-lg">Chat Customer Service Representative</h1>
                            <span class="text-gray-700">TTEC Company</span>
                            <p class="text-gray-600">San Fernando, Pampanga</p>

                            <!-- full time -->
                            <div class="flex items-center text-gray-600 py-1">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M10 2a3 3 0 0 0-3 3v1H5a3 3 0 0 0-3 3v2.382l1.447.723.005.003.027.013.12.056c.108.05.272.123.486.212.429.177 1.056.416 1.834.655C7.481 13.524 9.63 14 12 14c2.372 0 4.52-.475 6.08-.956.78-.24 1.406-.478 1.835-.655a14.028 14.028 0 0 0 .606-.268l.027-.013.005-.002L22 11.381V9a3 3 0 0 0-3-3h-2V5a3 3 0 0 0-3-3h-4Zm5 4V5a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1h6Zm6.447 7.894.553-.276V19a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-5.382l.553.276.002.002.004.002.013.006.041.02.151.07c.13.06.318.144.557.242.478.198 1.163.46 2.01.72C7.019 15.476 9.37 16 12 16c2.628 0 4.98-.525 6.67-1.044a22.95 22.95 0 0 0 2.01-.72 15.994 15.994 0 0 0 .707-.312l.041-.02.013-.006.004-.002.001-.001-.431-.866.432.865ZM12 10a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Full Time</span>
                            </div>
                            <!-- active -->
                            <p class="text-gray-500 text-sm">Active 2 days ago</p>
                        </div>
                    </div>

                    <!-- second job -->
                    <div class="flex items-start gap-2 border-2 border-blue-900 p-6 rounded-2xl shadow-md w-full cursor-pointer hover:shadow-xl transition duration-300 transform ease-in-out hover:scale-105"
                        id="projectTimber">
                        <!-- company icon -->
                        <div class="w-[100px]">
                            <a href="">

                                <img src="img/jobs/project-timber.jpg" class="w-full h-20 object-contain"
                                    alt="Project Timber Icon Logo">

                            </a>
                        </div>
                        <!-- job details -->
                        <div>
                            <h1 class="font-semibold text-lg">Sales Agent</h1>
                            <span class="text-gray-700">Project Timber</span>
                            <p class="text-gray-600">Angeles, Pampanga</p>

                            <!-- full time -->
                            <div class="flex items-center text-gray-600 py-1">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M10 2a3 3 0 0 0-3 3v1H5a3 3 0 0 0-3 3v2.382l1.447.723.005.003.027.013.12.056c.108.05.272.123.486.212.429.177 1.056.416 1.834.655C7.481 13.524 9.63 14 12 14c2.372 0 4.52-.475 6.08-.956.78-.24 1.406-.478 1.835-.655a14.028 14.028 0 0 0 .606-.268l.027-.013.005-.002L22 11.381V9a3 3 0 0 0-3-3h-2V5a3 3 0 0 0-3-3h-4Zm5 4V5a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1h6Zm6.447 7.894.553-.276V19a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-5.382l.553.276.002.002.004.002.013.006.041.02.151.07c.13.06.318.144.557.242.478.198 1.163.46 2.01.72C7.019 15.476 9.37 16 12 16c2.628 0 4.98-.525 6.67-1.044a22.95 22.95 0 0 0 2.01-.72 15.994 15.994 0 0 0 .707-.312l.041-.02.013-.006.004-.002.001-.001-.431-.866.432.865ZM12 10a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Full Time</span>
                            </div>
                            <!-- active -->
                            <p class="text-gray-500 text-sm">Active 3 days ago</p>
                        </div>
                    </div>

                    <!-- third job -->
                    <div
                        class="flex items-start gap-2 border-2 border-blue-900 p-6 rounded-2xl shadow-md w-full cursor-pointer hover:shadow-xl transition duration-300 transform ease-in-out hover:scale-105">
                        <!-- company icon -->
                        <div class="w-[100px]">
                            <a href="">

                                <img src="img/jobs/boomering.jpg" class="w-full h-20 object-contain"
                                    alt="Boomering Icon Logo">

                            </a>
                        </div>
                        <!-- job details -->
                        <div>
                            <h1 class="font-semibold text-lg">Guest Reservation Concierge (Onsite- Clark +
                                Night
                                Shift + Weekends off)</h1>
                            <span class="text-gray-700">Boomering, Inc</span>
                            <p class="text-gray-600">Angeles, Pampanga</p>

                            <!-- full time -->
                            <div class="flex items-center text-gray-600 py-1">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M10 2a3 3 0 0 0-3 3v1H5a3 3 0 0 0-3 3v2.382l1.447.723.005.003.027.013.12.056c.108.05.272.123.486.212.429.177 1.056.416 1.834.655C7.481 13.524 9.63 14 12 14c2.372 0 4.52-.475 6.08-.956.78-.24 1.406-.478 1.835-.655a14.028 14.028 0 0 0 .606-.268l.027-.013.005-.002L22 11.381V9a3 3 0 0 0-3-3h-2V5a3 3 0 0 0-3-3h-4Zm5 4V5a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1h6Zm6.447 7.894.553-.276V19a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-5.382l.553.276.002.002.004.002.013.006.041.02.151.07c.13.06.318.144.557.242.478.198 1.163.46 2.01.72C7.019 15.476 9.37 16 12 16c2.628 0 4.98-.525 6.67-1.044a22.95 22.95 0 0 0 2.01-.72 15.994 15.994 0 0 0 .707-.312l.041-.02.013-.006.004-.002.001-.001-.431-.866.432.865ZM12 10a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Full Time</span>
                            </div>
                            <!-- active -->
                            <p class="text-gray-500 text-sm">Active 3 days ago</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out py-4" data-carousel-item>
                <div class="flex gap-8 px-16">
                    <!-- first job -->
                    <div class="flex items-start gap-2 border-2 border-blue-900 p-6 rounded-2xl shadow-md w-full cursor-pointer hover:shadow-xl transition duration-300 transform ease-in-out hover:scale-105"
                        id="ttecBox">
                        <!-- company icon -->
                        <div class="w-[100px]">
                            <img src="img/jobs/ttec.png" class="w-full h-20 object-contain" alt="TTEC Icon Logo">
                        </div>
                        <!-- job details -->
                        <div>
                            <h1 class="font-semibold text-lg">Chat Customer Service Representative</h1>
                            <span class="text-gray-700">TTEC Company</span>
                            <p class="text-gray-600">San Fernando, Pampanga</p>

                            <!-- full time -->
                            <div class="flex items-center text-gray-600 py-1">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M10 2a3 3 0 0 0-3 3v1H5a3 3 0 0 0-3 3v2.382l1.447.723.005.003.027.013.12.056c.108.05.272.123.486.212.429.177 1.056.416 1.834.655C7.481 13.524 9.63 14 12 14c2.372 0 4.52-.475 6.08-.956.78-.24 1.406-.478 1.835-.655a14.028 14.028 0 0 0 .606-.268l.027-.013.005-.002L22 11.381V9a3 3 0 0 0-3-3h-2V5a3 3 0 0 0-3-3h-4Zm5 4V5a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1h6Zm6.447 7.894.553-.276V19a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-5.382l.553.276.002.002.004.002.013.006.041.02.151.07c.13.06.318.144.557.242.478.198 1.163.46 2.01.72C7.019 15.476 9.37 16 12 16c2.628 0 4.98-.525 6.67-1.044a22.95 22.95 0 0 0 2.01-.72 15.994 15.994 0 0 0 .707-.312l.041-.02.013-.006.004-.002.001-.001-.431-.866.432.865ZM12 10a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Full Time</span>
                            </div>
                            <!-- active -->
                            <p class="text-gray-500 text-sm">Active 2 days ago</p>
                        </div>
                    </div>

                    <!-- second job -->
                    <div class="flex items-start gap-2 border-2 border-blue-900 p-6 rounded-2xl shadow-md w-full cursor-pointer hover:shadow-xl transition duration-300 transform ease-in-out hover:scale-105"
                        id="projectTimber">
                        <!-- company icon -->
                        <div class="w-[100px]">
                            <a href="">

                                <img src="img/jobs/project-timber.jpg" class="w-full h-20 object-contain"
                                    alt="Project Timber Icon Logo">

                            </a>
                        </div>
                        <!-- job details -->
                        <div>
                            <h1 class="font-semibold text-lg">Sales Agent</h1>
                            <span class="text-gray-700">Project Timber</span>
                            <p class="text-gray-600">Angeles, Pampanga</p>

                            <!-- full time -->
                            <div class="flex items-center text-gray-600 py-1">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M10 2a3 3 0 0 0-3 3v1H5a3 3 0 0 0-3 3v2.382l1.447.723.005.003.027.013.12.056c.108.05.272.123.486.212.429.177 1.056.416 1.834.655C7.481 13.524 9.63 14 12 14c2.372 0 4.52-.475 6.08-.956.78-.24 1.406-.478 1.835-.655a14.028 14.028 0 0 0 .606-.268l.027-.013.005-.002L22 11.381V9a3 3 0 0 0-3-3h-2V5a3 3 0 0 0-3-3h-4Zm5 4V5a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1h6Zm6.447 7.894.553-.276V19a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-5.382l.553.276.002.002.004.002.013.006.041.02.151.07c.13.06.318.144.557.242.478.198 1.163.46 2.01.72C7.019 15.476 9.37 16 12 16c2.628 0 4.98-.525 6.67-1.044a22.95 22.95 0 0 0 2.01-.72 15.994 15.994 0 0 0 .707-.312l.041-.02.013-.006.004-.002.001-.001-.431-.866.432.865ZM12 10a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Full Time</span>
                            </div>
                            <!-- active -->
                            <p class="text-gray-500 text-sm">Active 3 days ago</p>
                        </div>
                    </div>

                    <!-- third job -->
                    <div
                        class="flex items-start gap-2 border-2 border-blue-900 p-6 rounded-2xl shadow-md w-full cursor-pointer hover:shadow-xl transition duration-300 transform ease-in-out hover:scale-105">
                        <!-- company icon -->
                        <div class="w-[100px]">
                            <a href="">

                                <img src="img/jobs/boomering.jpg" class="w-full h-20 object-contain"
                                    alt="Boomering Icon Logo">

                            </a>
                        </div>
                        <!-- job details -->
                        <div>
                            <h1 class="font-semibold text-lg">Guest Reservation Concierge (Onsite- Clark +
                                Night
                                Shift + Weekends off)</h1>
                            <span class="text-gray-700">Boomering, Inc</span>
                            <p class="text-gray-600">Angeles, Pampanga</p>

                            <!-- full time -->
                            <div class="flex items-center text-gray-600 py-1">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M10 2a3 3 0 0 0-3 3v1H5a3 3 0 0 0-3 3v2.382l1.447.723.005.003.027.013.12.056c.108.05.272.123.486.212.429.177 1.056.416 1.834.655C7.481 13.524 9.63 14 12 14c2.372 0 4.52-.475 6.08-.956.78-.24 1.406-.478 1.835-.655a14.028 14.028 0 0 0 .606-.268l.027-.013.005-.002L22 11.381V9a3 3 0 0 0-3-3h-2V5a3 3 0 0 0-3-3h-4Zm5 4V5a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1h6Zm6.447 7.894.553-.276V19a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-5.382l.553.276.002.002.004.002.013.006.041.02.151.07c.13.06.318.144.557.242.478.198 1.163.46 2.01.72C7.019 15.476 9.37 16 12 16c2.628 0 4.98-.525 6.67-1.044a22.95 22.95 0 0 0 2.01-.72 15.994 15.994 0 0 0 .707-.312l.041-.02.013-.006.004-.002.001-.001-.431-.866.432.865ZM12 10a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Full Time</span>
                            </div>
                            <!-- active -->
                            <p class="text-gray-500 text-sm">Active 3 days ago</p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out py-4" data-carousel-item>
                <div class="flex gap-8 px-16">
                    <!-- first job -->
                    <div class="flex items-start gap-2 border-2 border-blue-900 p-6 rounded-2xl shadow-md w-full cursor-pointer hover:shadow-xl transition duration-300 transform ease-in-out hover:scale-105"
                        id="ttecBox">
                        <!-- company icon -->
                        <div class="w-[100px]">
                            <img src="img/jobs/ttec.png" class="w-full h-20 object-contain" alt="TTEC Icon Logo">
                        </div>
                        <!-- job details -->
                        <div>
                            <h1 class="font-semibold text-lg">Chat Customer Service Representative</h1>
                            <span class="text-gray-700">TTEC Company</span>
                            <p class="text-gray-600">San Fernando, Pampanga</p>

                            <!-- full time -->
                            <div class="flex items-center text-gray-600 py-1">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M10 2a3 3 0 0 0-3 3v1H5a3 3 0 0 0-3 3v2.382l1.447.723.005.003.027.013.12.056c.108.05.272.123.486.212.429.177 1.056.416 1.834.655C7.481 13.524 9.63 14 12 14c2.372 0 4.52-.475 6.08-.956.78-.24 1.406-.478 1.835-.655a14.028 14.028 0 0 0 .606-.268l.027-.013.005-.002L22 11.381V9a3 3 0 0 0-3-3h-2V5a3 3 0 0 0-3-3h-4Zm5 4V5a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1h6Zm6.447 7.894.553-.276V19a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-5.382l.553.276.002.002.004.002.013.006.041.02.151.07c.13.06.318.144.557.242.478.198 1.163.46 2.01.72C7.019 15.476 9.37 16 12 16c2.628 0 4.98-.525 6.67-1.044a22.95 22.95 0 0 0 2.01-.72 15.994 15.994 0 0 0 .707-.312l.041-.02.013-.006.004-.002.001-.001-.431-.866.432.865ZM12 10a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Full Time</span>
                            </div>
                            <!-- active -->
                            <p class="text-gray-500 text-sm">Active 2 days ago</p>
                        </div>
                    </div>

                    <!-- second job -->
                    <div class="flex items-start gap-2 border-2 border-blue-900 p-6 rounded-2xl shadow-md w-full cursor-pointer hover:shadow-xl transition duration-300 transform ease-in-out hover:scale-105"
                        id="projectTimber">
                        <!-- company icon -->
                        <div class="w-[100px]">
                            <a href="">

                                <img src="img/jobs/project-timber.jpg" class="w-full h-20 object-contain"
                                    alt="Project Timber Icon Logo">

                            </a>
                        </div>
                        <!-- job details -->
                        <div>
                            <h1 class="font-semibold text-lg">Sales Agent</h1>
                            <span class="text-gray-700">Project Timber</span>
                            <p class="text-gray-600">Angeles, Pampanga</p>

                            <!-- full time -->
                            <div class="flex items-center text-gray-600 py-1">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M10 2a3 3 0 0 0-3 3v1H5a3 3 0 0 0-3 3v2.382l1.447.723.005.003.027.013.12.056c.108.05.272.123.486.212.429.177 1.056.416 1.834.655C7.481 13.524 9.63 14 12 14c2.372 0 4.52-.475 6.08-.956.78-.24 1.406-.478 1.835-.655a14.028 14.028 0 0 0 .606-.268l.027-.013.005-.002L22 11.381V9a3 3 0 0 0-3-3h-2V5a3 3 0 0 0-3-3h-4Zm5 4V5a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1h6Zm6.447 7.894.553-.276V19a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-5.382l.553.276.002.002.004.002.013.006.041.02.151.07c.13.06.318.144.557.242.478.198 1.163.46 2.01.72C7.019 15.476 9.37 16 12 16c2.628 0 4.98-.525 6.67-1.044a22.95 22.95 0 0 0 2.01-.72 15.994 15.994 0 0 0 .707-.312l.041-.02.013-.006.004-.002.001-.001-.431-.866.432.865ZM12 10a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Full Time</span>
                            </div>
                            <!-- active -->
                            <p class="text-gray-500 text-sm">Active 3 days ago</p>
                        </div>
                    </div>

                    <!-- third job -->
                    <div
                        class="flex items-start gap-2 border-2 border-blue-900 p-6 rounded-2xl shadow-md w-full cursor-pointer hover:shadow-xl transition duration-300 transform ease-in-out hover:scale-105">
                        <!-- company icon -->
                        <div class="w-[100px]">
                            <a href="">

                                <img src="img/jobs/boomering.jpg" class="w-full h-20 object-contain"
                                    alt="Boomering Icon Logo">

                            </a>
                        </div>
                        <!-- job details -->
                        <div>
                            <h1 class="font-semibold text-lg">Guest Reservation Concierge (Onsite- Clark +
                                Night
                                Shift + Weekends off)</h1>
                            <span class="text-gray-700">Boomering, Inc</span>
                            <p class="text-gray-600">Angeles, Pampanga</p>

                            <!-- full time -->
                            <div class="flex items-center text-gray-600 py-1">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M10 2a3 3 0 0 0-3 3v1H5a3 3 0 0 0-3 3v2.382l1.447.723.005.003.027.013.12.056c.108.05.272.123.486.212.429.177 1.056.416 1.834.655C7.481 13.524 9.63 14 12 14c2.372 0 4.52-.475 6.08-.956.78-.24 1.406-.478 1.835-.655a14.028 14.028 0 0 0 .606-.268l.027-.013.005-.002L22 11.381V9a3 3 0 0 0-3-3h-2V5a3 3 0 0 0-3-3h-4Zm5 4V5a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1h6Zm6.447 7.894.553-.276V19a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-5.382l.553.276.002.002.004.002.013.006.041.02.151.07c.13.06.318.144.557.242.478.198 1.163.46 2.01.72C7.019 15.476 9.37 16 12 16c2.628 0 4.98-.525 6.67-1.044a22.95 22.95 0 0 0 2.01-.72 15.994 15.994 0 0 0 .707-.312l.041-.02.013-.006.004-.002.001-.001-.431-.866.432.865ZM12 10a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Full Time</span>
                            </div>
                            <!-- active -->
                            <p class="text-gray-500 text-sm">Active 3 days ago</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute -top-10 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute -top-10 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

                <!-- background of the modal -->
                <div id="ttecModalBackdrop"
                    class="hidden fixed inset-0 bg-blue-900 bg-opacity-50 backdrop-blur-lg z-50 ">
                    <!-- modal -->
                    <div id="ttecModal"
                        class="hidden absolute inset-0 w-[80%] h-[90vh] bg-white rounded-2xl m-auto pt-4 pb-12 z-50 overflow-y-scroll jobScroll">

                        <!-- modal content -->
                        <div class="w-11/12 mx-auto">
                            <div class=" h-[45vh]">
                                <img src="img/jobs/ttec-hero.jpg" alt="TTEC Hero Picture"
                                    class="w-full h-full bg-cover rounded-lg">
                            </div>
                            <!-- close icon -->
                            <div class="absolute top-2 right-2 w-8 h-8 rounded-full bg-blue-800 flex items-center justify-center cursor-pointer hover:bg-blue-900"
                                id="closebtn">
                                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                </svg>
                            </div>
                            <!-- job title -->
                            <div class="py-3">
                                <h1 class="font-bold text-2xl mb-2">Chat Customer Service Representative</h1>
                                <span class="text-gray-700">TTEC &#183; 3.4 <i
                                        class="fa-solid fa-star text-yellow-500"></i></span>
                                <p class="text-gray-600">San Fernando, Pampanga</p>
                                <p class="text-gray-800">PHP 21,000 - PHP 24,000 a month</p>
                                <!-- apply button -->
                                <a href="https://ph.indeed.com/cmp/Ttec/jobs">
                                    <button
                                        class="bg-blue-800 font-bold text-white px-6 py-2 rounded-lg mt-2 hover:bg-blue-900">Apply
                                        Now
                                    </button>
                                </a>

                            </div>
                            <hr class="w-3/4 h-2 my-4 border-t border-gray-400">

                            <!-- job description -->
                            <div>
                                <h1>Job details</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolores nostrum
                                    deleniti
                                    illum velit laboriosam.</p>

                                <div class="space-y-6 py-4">
                                    <!-- pay -->
                                    <div class="flex gap-2">
                                        <div class="w-8">
                                            <i class="fa-solid fa-money-bill text-lg text-gray-600"></i>
                                        </div>
                                        <div>
                                            <h6 class="font-semibold mb-1">Pay</h6>
                                            <p
                                                class="px-2 py-1 bg-gray-200 text-gray-800 text-sm rounded-md font-semibold">
                                                PHP
                                                21,000 - PHP 24,000 a month</p>
                                        </div>
                                    </div>

                                    <!-- job type -->
                                    <div class="flex gap-2">
                                        <div class="w-8">
                                            <svg class="w-6 h-6 text-gray-600" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M10 2a3 3 0 0 0-3 3v1H5a3 3 0 0 0-3 3v2.382l1.447.723.005.003.027.013.12.056c.108.05.272.123.486.212.429.177 1.056.416 1.834.655C7.481 13.524 9.63 14 12 14c2.372 0 4.52-.475 6.08-.956.78-.24 1.406-.478 1.835-.655a14.028 14.028 0 0 0 .606-.268l.027-.013.005-.002L22 11.381V9a3 3 0 0 0-3-3h-2V5a3 3 0 0 0-3-3h-4Zm5 4V5a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1h6Zm6.447 7.894.553-.276V19a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-5.382l.553.276.002.002.004.002.013.006.041.02.151.07c.13.06.318.144.557.242.478.198 1.163.46 2.01.72C7.019 15.476 9.37 16 12 16c2.628 0 4.98-.525 6.67-1.044a22.95 22.95 0 0 0 2.01-.72 15.994 15.994 0 0 0 .707-.312l.041-.02.013-.006.004-.002.001-.001-.431-.866.432.865ZM12 10a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h6 class="font-semibold mb-1">Job Type</h6>
                                            <p
                                                class="px-2 py-1 bg-gray-200 text-gray-800 text-sm rounded-md font-semibold">
                                                Full-time</p>
                                        </div>
                                    </div>

                                    <!-- shift and schedule -->
                                    <div class="flex gap-2">
                                        <div class="w-8">
                                            <svg class="w-6 h-6 text-gray-600" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>

                                        </div>
                                        <div>
                                            <h6 class="font-semibold mb-1">Shift and Schedule</h6>
                                            <div class="flex gap-2">
                                                <p
                                                    class="px-2 py-1 bg-gray-200 text-gray-800 text-sm rounded-md font-semibold">
                                                    Rotational shift</p>
                                                <p
                                                    class="px-2 py-1 bg-gray-200 text-gray-800 text-sm rounded-md font-semibold">
                                                    Shift system
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- location -->
                                    <div class="flex gap-2">
                                        <div class="w-8">
                                            <svg class="w-6 h-6 text-gray-600" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z" />
                                            </svg>


                                        </div>
                                        <div>
                                            <h6 class="font-semibold mb-1">Location</h6>
                                            <p
                                                class="px-2 py-1 bg-gray-200 text-gray-800 text-sm rounded-md font-semibold">
                                                San Fernando, Pampanga</p>



                                        </div>
                                    </div>
                                </div>

                            </div>
                            <hr class="w-3/4 h-2 my-4 border-t border-gray-400">

                            <!-- job description -->
                            <div class="space-y-4">
                                <div class="space-y-4">
                                    <h1 class="text-2xl font-bold">Job Full Description</h1>
                                    <p class="leading-relaxed text-lg text-gray-600">
                                        Be the spark that brightens days and ignite your career with TTEC’s
                                        award-winning
                                        employment experience. As a Chat Service Representative working onsite in
                                        Pampanga,
                                        you’ll be a part of bringing humanity to business. #experienceTTEC
                                    </p>
                                </div>

                                <!-- description 2 -->
                                <div class="space-y-4">
                                    <h1 class="text-lg font-bold">
                                        Our employees have spoken. Our purpose, team, and company culture are amazing
                                        and
                                        our Great Place to Work® certification in Philippines says it all!
                                    </h1>
                                    <p class="leading-relaxed text-lg text-gray-600">
                                        Our recruitment hub is open to accept walk-in applicants from Monday to Friday,
                                        10am- 3pm. You may visit TTEC Pampanga office at Bldg. 4 SM City San Fernando,
                                        Olongapo-Gapan Road, Lagundi, Mexico, Pampanga.
                                    </p>
                                </div>

                                <!-- description 3 -->
                                <div class="space-y-4">
                                    <h1 class="text-lg font-bold">
                                        What You’ll be Doing
                                    </h1>
                                    <p class="leading-relaxed text-lg text-gray-600">
                                        Do you have a passion for helping others and giving them peace of mind? In this
                                        role, you’ll work to resolve customer technical requests or issues via chat
                                        services
                                        including chat, text, email, social media, direct messaging as well as other
                                        nonverbal platforms. Whether it’s getting answers for customers quickly,
                                        consulting
                                        on products with compassion or resolving their issues with a smile, you’ll be
                                        the
                                        difference between their customer experience being just average or an
                                        exceptional
                                        one.
                                    </p>
                                </div>

                                <!-- description 4 -->
                                <div class="space-y-4">
                                    <h1 class="text-lg font-bold">
                                        During a Typical Day, You’ll
                                    </h1>

                                    <ul class="list-disc px-8 text-lg text-gray-600">
                                        <li>Answer incoming communications from customers</li>
                                        <li>Connect and resolve issues with customers using written communication only
                                        </li>
                                    </ul>
                                    </p>
                                </div>

                                <!-- description 5 -->
                                <div class="space-y-4">
                                    <h1 class="text-lg font-bold">
                                        What You Bring to the Role
                                    </h1>
                                    <p class="leading-relaxed text-lg text-gray-600">
                                    <ul class="list-disc px-8 text-lg text-gray-600">
                                        <li>Open to newbies or with customer service experience</li>
                                        <li>Completed 2 years in college or equivalent</li>
                                        <li>Recognize, apply and explain your product or service knowledge</li>
                                        <li>Computer experience</li>
                                        <li>Computer experience and can reach 30 words per minute typing speed</li>
                                        <li>Preferably within 50 KM radius from TTEC Pampanga site</li>
                                    </ul>
                                    </p>
                                </div>

                                <!-- description 6 -->
                                <div class="space-y-4">
                                    <h1 class="text-lg font-bold">
                                        What You Can Expect
                                    </h1>
                                    <ul class="list-disc px-8 text-lg text-gray-600">
                                        <li>Plus performance bonus opportunity <span class="font-bold">of up to Php
                                                30,000
                                                monthly</span> </li>
                                        <li>Supportive of your career and professional development</li>
                                        <li>An inclusive culture and community minded organization where giving back is
                                            encouraged</li>
                                        <li>A global team of curious lifelong learners guided by our company values</li>
                                        <li>And we have a healthy benefits package based on your position that could
                                            include
                                            PTO, tuition reimbursement, health and wellness incentives</li>

                                    </ul>
                                    </p>
                                </div>

                                <!-- description 7 -->
                                <div class="space-y-4">
                                    <h1 class="text-lg font-bold">
                                        A Bit More About Your Role
                                    </h1>
                                    <p class="leading-relaxed text-lg text-gray-600">
                                        We’re committed to ensuring you have the skills and support to be successful in
                                        your
                                        role throughout your career. From your first day in training, through
                                        individualized
                                        webcam-enabled, engagement and coaching, on into 1000s of free courses to
                                        support
                                        your career growth wherever that may take you. And we know that you bring with
                                        you
                                        the one necessary ingredient that can’t be taught – a caring and supportive
                                        nature
                                        that will shine through as you help customers. Our TTEC community is here for
                                        you as
                                        one dynamic, global family.
                                        <br><br>
                                        You’ll report to the team leader. You’ll contribute to the success of the
                                        customer
                                        experience as well as the overall success of the team.
                                    </p>
                                </div>

                                <!-- description 7 -->
                                <div class="space-y-4">
                                    <h1 class="text-lg font-bold">
                                        About TTEC
                                    </h1>
                                    <p class="leading-relaxed text-lg text-gray-600">
                                        Our business is about making customers happy. That's all we do. Since 1982,
                                        we've
                                        helped companies build engaged, pleased, profitable customer experiences powered
                                        by
                                        our combination of humanity and technology. On behalf of many of the world's
                                        leading
                                        iconic and hypergrowth brands, we talk, message, text, and video chat with
                                        millions
                                        of customers every day. These exceptional customer experiences start with you.
                                        <br><br>
                                        TTEC is proud to be an equal opportunity employer where all qualified applicants
                                        will receive consideration for employment without regard to race, color,
                                        religion,
                                        sex, sexual orientation, gender identity, national origin, disability, or status
                                        as
                                        a protected veteran. TTEC embraces and is committed to building a diverse and
                                        inclusive workforce that respects and empowers the cultures and perspectives
                                        within
                                        our global teams. We aim to reflect the communities we serve, by not only
                                        delivering
                                        amazing service and technology, but also humanity. We make it a point to make
                                        sure
                                        all our employees feel valued, belonging, and comfortable being their authentic
                                        selves at work. As a global company, we know diversity is our strength because
                                        it
                                        enables us to view things from different vantage points and for you to bring
                                        value
                                        to the table in your own unique way.
                                    </p>
                                </div>

                                <!-- description 8 -->
                                <div class="space-y-4">
                                    <h1 class="text-lg font-semibold">
                                        Ability to commute/relocate:
                                    </h1>
                                    <ul class="list-disc px-8 text-lg text-gray-600">
                                        <li>San Fernando, Pampanga: Reliably commute or planning to relocate before
                                            starting
                                            work (Required)</li>
                                </div>

                                <!-- description 9 -->
                                <div class="space-y-4">
                                    <h1 class="text-lg font-semibold">
                                        Education:
                                    </h1>
                                    <ul class="list-disc px-8 text-lg text-gray-600">
                                        <li>Bachelor's (Preferred)</li>
                                </div>

                                <!-- description 10 -->
                                <div class="space-y-4">
                                    <h1 class="text-lg font-semibold">
                                        Experience:
                                    </h1>
                                    <ul class="list-disc px-8 text-lg text-gray-600">
                                        <li>Customer Service Representative: 1 year (Preferred)</li>
                                </div>

                                <!-- description 11 -->
                                <div class="space-y-4">
                                    <h1 class="text-lg font-semibold">
                                        Language:
                                    </h1>
                                    <ul class="list-disc px-8 text-lg text-gray-600">
                                        <li>English (Preferred)</li>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>

                

                <!-- under the company -->
                <section class="text-gray-700 pb-6" class="underTheJob">
                    <h1 class="text-3xl font-semibold text-center text-gray-900">Get the full picture before you apply
                    </h1>
                    <p class="text-xl text-center leading-normal py-2 w-11/12">Before submitting your application, take
                        the
                        time
                        to learn more about the companies, the role, and what
                        to expect during the hiring process.</p>

                    <div class="grid grid-cols-3 py-12 gap-24">
                        <!-- company culture -->
                        <div class="text-center">
                            <i class="fa-solid fa-users text-blue-700 text-5xl mb-4"></i>
                            <h3 class="text-2xl font-semibold py-3">Company Culture</h3>
                            <p>Learn about what it's like to work at top companies. From team dynamics to workplace
                                flexibility,
                                we offer insights to help you decide if a company is right for you.</p>
                        </div>
                        <!-- employee benefits -->
                        <div class="text-center">
                            <i class="fa-solid fa-gift text-blue-700 text-5xl mb-4"></i>
                            <h3 class="text-2xl font-semibold py-3">Employee Benefits</h3>
                            <p>Discover the perks and benefits that come with your dream job. From health
                                insurance to work-from-home options, we provide details on what you can expect.</p>
                        </div>

                        <div class="text-center">
                            <i class="fa-solid fa-chart-line fa-solid fa-gift text-blue-700 text-5xl mb-4"></i>
                            <h3 class="text-2xl font-semibold py-3">Salary Insights</h3>
                            <p>Get an idea of what you can expect to earn in your desired role. We provide average
                                salary ranges for various positions to help you make informed decisions.</p>
                        </div>
                    </div>

                </section>

            </div>
    </section>

    <!-- Events Content -->
    <div id="eventsSection" class="hidden text-gray-800 mx-28">
        <h1 class="font-medium text-2xl text-gray-900 tracking-wide">Upcoming Events</h1>
        <p class="text-gray-700 text-lg mt-2">Stay updated with the latest events happening in our community. Join us for these exciting activities and be part of something special!</p>
        <!-- events container -->
        <div class="space-y-10 py-10">
        <!-- event 1 -->
        <div class="flex justify-between gap-2 cursor-pointer transition duration-300 ease-in-out transform hover:scale-105">
            <!-- img -->
            <div class="w-2/6 h-56 relative">
                <img src="img/events/event1.jpg" alt="Event 1" class="w-full h-full object-cover object-center">

                <!-- overlap date -->
                <div
                    class="absolute -right-16 bottom-0 font-semibold pt-6 pb-14 px-10 bg-gray-100 border-l border-text-gray-200 border-r border-gray-200 text-gray-800 uppercase text-center shadow-[4px_0_8px_0_rgba(0,0,0,0.1)]">
                    <p class="text-lg">June</p>
                    <p class="text-5xl">25</p>
                </div>

            </div>

            <!-- content -->
            <div class="w-10/12">
                <hr>
                <div class="ml-28 py-16">
                    <h1 class="text-3xl uppercase mb-3 font-bold">Painting Beyond Limits: A PWD Child's Expression</h1>

                    <div class="flex gap-1 items-center text-blue-500 text-sm">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Cabambangan, Bacolor</p>
                    </div>

                    <p>25 June 2024 ───── 27 June 2024</p>
                </div>

                <hr>
            </div>
        </div>

        <!-- event 2 -->

        <div class="flex justify-between gap-2 cursor-pointer transition duration-300 ease-in-out transform hover:scale-105">
            <!-- img -->
            <div class="w-2/6 h-56 relative">
                <img src="img/events/event2.jpg" alt="Event 2" class="w-full h-full object-cover object-center">

                <!-- overlap date -->
                <div
                    class="absolute -right-16 bottom-0 font-semibold pt-6 pb-14 px-10 bg-gray-100 border-l border-text-gray-200 border-r border-gray-200 text-gray-800 uppercase text-center shadow-[4px_0_8px_0_rgba(0,0,0,0.1)]">
                    <p class="text-lg">June</p>
                    <p class="text-5xl">25</p>
                </div>

            </div>

            <!-- content -->
            <div class="w-10/12">
                <hr>
                <div class="ml-28 py-16">
                    <h1 class="text-3xl uppercase mb-3 font-bold">Sports Without Barriers: The PWD Challenge</h1>

                    <div class="flex gap-1 items-center text-blue-500 text-sm">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Cabambangan, Bacolor</p>
                    </div>

                    <p>25 June 2024 ───── 27 June 2024</p>
                </div>

                <hr>
            </div>
        </div>

        <!-- event 3 -->

        <div class="flex justify-between gap-2 cursor-pointer transition duration-300 ease-in-out transform hover:scale-105">
            <!-- img -->
            <div class="w-2/6 h-56 relative">
                <img src="img/events/event3.jpg" alt="Event 1" class="w-full h-full object-cover object-center">

                <!-- overlap date -->
                <div
                    class="absolute -right-16 bottom-0 font-semibold pt-6 pb-14 px-10 bg-gray-100 border-l border-text-gray-200 border-r border-gray-200 text-gray-800 uppercase text-center shadow-[4px_0_8px_0_rgba(0,0,0,0.1)]">
                    <p class="text-lg">June</p>
                    <p class="text-5xl">25</p>
                </div>

            </div>

            <!-- content -->
            <div class="w-10/12">
                <hr>
                <div class="ml-28 py-16">
                    <h1 class="text-3xl uppercase mb-3 font-bold">Empowered to Lead: A PWD’s Story of Business Success</h1>

                    <div class="flex gap-1 items-center text-blue-500 text-sm">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Cabambangan, Bacolor</p>
                    </div>

                    <p>25 June 2024 ───── 27 June 2024</p>
                </div>

                <hr>
            </div>
        </div>

        <div class="flex justify-between gap-2 cursor-pointer transition duration-300 ease-in-out transform hover:scale-105">
            <!-- img -->
            <div class="w-2/6 h-56 relative">
                <img src="img/events/event4.jpg" alt="Event 4" class="w-full h-full object-cover object-center">

                <!-- overlap date -->
                <div
                    class="absolute -right-16 bottom-0 font-semibold pt-6 pb-14 px-10 bg-gray-100 border-l border-text-gray-200 border-r border-gray-200 text-gray-800 uppercase text-center shadow-[4px_0_8px_0_rgba(0,0,0,0.1)]">
                    <p class="text-lg">June</p>
                    <p class="text-5xl">25</p>
                </div>

            </div>

            <!-- content -->
            <div class="w-10/12">
                <hr>
                <div class="ml-28 py-16">
                    <h1 class="text-3xl uppercase mb-3 font-bold">Clay Creations: Unlocking Potential in Young Artists with Down Syndrome</h1>

                    <div class="flex gap-1 items-center text-blue-500 text-sm">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Cabambangan, Bacolor</p>
                    </div>

                    <p>25 June 2024 ───── 27 June 2024</p>
                </div>

                <hr>
            </div>
        </div>

        <!-- event 5 -->
        <div class="flex justify-between gap-2 cursor-pointer transition duration-300 ease-in-out transform hover:scale-105">
            <!-- img -->
            <div class="w-2/6 h-56 relative">
                <img src="img/events/event5.jpg" alt="Event 5" class="w-full h-full object-cover object-center">

                <!-- overlap date -->
                <div
                    class="absolute -right-16 bottom-0 font-semibold pt-6 pb-14 px-10 bg-gray-100 border-l border-text-gray-200 border-r border-gray-200 text-gray-800 uppercase text-center shadow-[4px_0_8px_0_rgba(0,0,0,0.1)]">
                    <p class="text-lg">June</p>
                    <p class="text-5xl">25</p>
                </div>

            </div>

            <!-- content -->
            <div class="w-10/12">
                <hr>
                <div class="ml-28 py-16">
                    <h1 class="text-3xl uppercase mb-3 font-bold">Bridging the Gap: Enhancing Workplace Collaboration with Assistive Technology</h1>

                    <div class="flex gap-1 items-center text-blue-500 text-sm">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Cabambangan, Bacolor</p>
                    </div>

                    <p>25 June 2024 ───── 27 June 2024</p>
                </div>

                <hr>
            </div>
        </div>
        </div>
       


    </div>

    <!-- footer -->
    <?php
    include 'include/landing/footer.php';
    ?>
 <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script>
        // for the job when clicked
        document.getElementById('ttecBox').addEventListener('click', function () {
            document.getElementById('ttecModal').classList.remove('hidden');
            document.getElementById('ttecModalBackdrop').classList.remove('hidden');
        });

        // for the close button for the modal
        document.getElementById('closebtn').addEventListener('click', function () {
            document.getElementById('ttecModal').classList.add('hidden');
            document.getElementById('ttecModalBackdrop').classList.add('hidden');
        })


        // Select elements
        const jobLink = document.getElementById('jobLink');
        const eventsLink = document.getElementById('eventsLink');

        const jobSection = document.getElementById('jobSection');
        const eventsSection = document.getElementById('eventsSection');

        const underlineJob = document.getElementById('underlineJob');
        const underlineEvents = document.getElementById('underlineEvents');

        // Function to reset links and hide sections
        const resetLinks = () => {
            jobLink.classList.remove('text-blue-700');
            eventsLink.classList.remove('text-blue-700');
            underlineJob.classList.add('hidden');
            underlineEvents.classList.add('hidden');
            jobSection.classList.add('hidden');
            eventsSection.classList.add('hidden');
        }

        // Event listener for "Job Opportunities"
        jobLink.addEventListener('click', function () {
            resetLinks();
            jobSection.classList.remove('hidden');
            underlineJob.classList.remove('hidden');
            jobLink.classList.add('text-blue-700');
        });

        // Event listener for "Events"
        eventsLink.addEventListener('click', function () {
            resetLinks();
            eventsSection.classList.remove('hidden');
            underlineEvents.classList.remove('hidden');
            eventsLink.classList.add('text-blue-700');
        });

    </script>
</body>

</html>