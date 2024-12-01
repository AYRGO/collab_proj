<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
</head>

<body>


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
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
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
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
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

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>

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