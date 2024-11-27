<!doctype html>
<html>

<head>
    <style>
        #signupSection::-webkit-scrollbar {
            display: none;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWD Project</title>
    <link rel="icon" href="../../img/logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <?php
    include '../../include/landing/header.php';
    ?>
    <nav class="bg-blue-900 sticky top-0 left-0 right-0 z-30 py-2 px-6">
        <div class="flex items-center justify-between">
            <!-- Logo with title -->
            <div class="flex flex-shrink-0 items-center">
                <img class="h-20 w-auto mr-1" src="../../img/logo.png" alt="PWD Logo">
                <span class="text-white font-bold text-2xl">PWD Project</span>
            </div>

            <!-- Navigation Links -->
            <div class="flex items-center gap-2">
                <a href="../../index.php"
                    class="rounded-md <?php echo ($page == 'index') ? 'bg-gray-900 text-gray-200' : 'text-gray-300 hover:bg-gray-700 hover:text-white'; ?> px-3 py-2 text-md font-medium">Home</a>
                <button
                    class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                    </svg>
                </button>

                <!-- Profile picture -->
                <div class="group cursor-pointer">
                    <img class="h-8 w-8 rounded-full" id="profileIcon"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="Profile picture">

                    <!-- <a href="loginpage.php">
                    <img class="h-8 w-8 rounded-full"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="Profile picture">
                </a> -->


                    <div class="hidden dropdown absolute w-[300px] bg-white rounded-lg shadow-lg top-16 right-8"
                        id="dropdownProfile">
                        <ul class="p-3 space-y-3">
                            <li><a href="index.php"
                                    class="block hover:bg-gray-400 hover:text-white p-2 rounded">Profile</a>
                            </li>
                            <li><a href="usersetting.php"
                                    class="block hover:bg-gray-400 hover:text-white p-2 rounded">Settings</a>
                            </li>
                            <li><a href="../../loginpage.php"
                                    class="block hover:bg-gray-400 hover:text-white p-2 rounded">Sign out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main Container -->
    <div class="py-8 flex justify-center gap-6">
        <!-- Left Column: Profile Info, Services, Community Engagement -->
        <div class="w-1/4 space-y-4 flex flex-col">
            <!-- Profile Info -->
            <div class="bg-white p-4 rounded-lg text-center shadow-md">
                <div class="flex items-center justify-center">
                    <img class="h-20 w-20 rounded-full"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="Profile picture">
                </div>
                <h1 class="font-bold text-xl">Jane Doe</h1>
                <p class="text-gray-700 text-sm">PWD Member</p>

                <div class="text-gray-700 flex flex-col justify-between text-left bg-blue-50 my-2 py-2 px-4 rounded-lg">
                    <div class="flex items-center justify-between">
                        <span>Status</span>
                        <button class="py-1 px-4 bg-emerald-400 text-white text-md rounded-md">
                            Active
                        </button>
                    </div>

                    <hr class="my-2">

                    <div class="flex items-center justify-between">
                        <span>Member Since</span>
                        <p>January 1, 2021</p>
                    </div>

                    <div class="flex items-center justify-between mt-2">
                        <span class="font-bold">PWD Card</span>
                        <p class="text-emerald-900 font-semibold">Approved</p>
                    </div>
                </div>
            </div>
            <!--end of profile info  -->

            <!-- Services Available -->
            <div class="bg-white p-4 rounded-lg text-center shadow-md">
                <h1 class="font-bold text-xl">Services Available</h1>
                <p class="text-gray-600 mt-2">Explore the services available to enhance your experience:</p>
                <div class="flex flex-wrap items-center gap-3 py-3">
                    <!-- Service Buttons -->
                    <a href="#"><button
                            class="bg-blue-100 text-gray-700 font-semibold py-2 px-3 rounded-lg flex items-center"><span
                                class="material-icons mr-2">info</span> Information & Resources</button></a>
                    <a href="#"><button
                            class="bg-blue-100 text-gray-700 font-semibold py-2 px-3 rounded-lg flex items-center"><span
                                class="material-icons mr-2">credit_card</span> PWD Card</button></a>
                    <a href="#"><button
                            class="bg-blue-100 text-gray-700 font-semibold py-2 px-3 rounded-lg flex items-center"><span
                                class="material-icons mr-2">school</span> Scholarships</button></a>
                    <a href="#"><button
                            class="bg-blue-100 text-gray-700 font-semibold py-2 px-3 rounded-lg flex items-center"><span
                                class="material-icons mr-2">work</span> Job Opportunities</button></a>
                    <a href="#"><button
                            class="bg-blue-100 text-gray-700 font-semibold py-2 px-3 rounded-lg flex items-center"><span
                                class="material-icons mr-2">event_available</span> Events</button></a>
                    <a href="#"><button
                            class="bg-blue-100 text-gray-700 font-semibold py-2 px-3 rounded-lg flex items-center"><span
                                class="material-icons mr-2">cast_for_education</span> Advocacy Programs</button></a>

                </div>
            </div>
            <!-- end of services available -->

             <!-- PWD Card Information and Support -->
             <div class="bg-white p-4 rounded-lg text-left shadow-md">
                <h2 class="font-bold text-xl text-center">PWD Card Information & Support</h2>
                <p class="text-gray-700 mt-2">The PWD card provides various benefits and privileges. This section covers
                    everything you need to know about applying, its benefits, and your rights.</p>

                <div class="py-2 space-y-2">
                    <a href="benefits_of_pwd_card"
                        class="block text-gray-700 bg-gray-200 px-4 py-2 rounded-xl hover:bg-blue-200 hover:text-black">Explore
                        the Benefits of Having a PWD Card</a>
                    <a href="pwd_card_laws"
                        class="block text-gray-700 bg-gray-200 px-4 py-2 rounded-xl hover:bg-blue-200 hover:text-black">Get
                        Familiar with the Laws and Regulations Around PWD Cards</a>
                    <a href="how_to_apply_for_pwd_card"
                        class="block text-gray-700 bg-gray-200 px-4 py-2 rounded-xl hover:bg-blue-200 hover:text-black">Step-by-Step
                        Guide: How to Apply for a PWD Card</a>
                    <a href="pwd_rights_and_privileges"
                        class="block text-gray-700 bg-gray-200 px-4 py-2 rounded-xl hover:bg-blue-200 hover:text-black">Know
                        Your Rights and Privileges as a PWD Cardholder</a>
                </div>
                <p class="mt-4 text-gray-700">If you have questions or need support, please contact us directly at <a
                        href="contact_link" class="text-blue-500 hover:underline">pwdproject@gmail.com</a>, and our team
                    will be happy to assist you.</p>
            </div>
        </div>
        <!-- end of first section column -->

        <!-- Right Column: Profile Information and Activity Log -->
        <div class="w-3/5 space-y-4 flex flex-col">
            <!-- Profile Information -->
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h1 class="font-bold text-xl">Profile Information</h1>

                <div class="grid gap-4 py-3 px-4 text-gray-700">
                    <div class="grid grid-cols-4">
                        <strong class="font-semibold">First Name</strong>
                        <p>Jane</p>
                        <strong class="font-semibold">Last Name</strong>
                        <p>Doe</p>
                    </div>

                    <div class="grid grid-cols-4">
                        <strong class="font-semibold">Email Address</strong>
                        <p>janedoe@gmail.com</p>
                        <strong class="font-semibold">Contact Number</strong>
                        <p>0987654321</p>
                    </div>

                    <div class="grid grid-cols-4">
                        <strong class="font-semibold">Birth Date</strong>
                        <p>January 01, 2002</p>
                        <strong class="font-semibold">Sex</strong>
                        <p>Female</p>
                    </div>
                </div>

                <div class="flex justify-end mt-4">
                    <button class="py-2 px-4 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Update
                        Profile</button>
                </div>
            </div>
            <!-- end of profile information -->

            <!-- Activity Log -->
            <div class="h-auto bg-white p-4 rounded-lg shadow-md signupSection" id="signupSection">
                <h1 class="font-bold text-xl mb-4">Activity Log</h1>
                <div class="mb-2">
                    <h6 class="text-gray-600 font-semibold text-lg">October 24, 2024</h6>
                </div>

                <div class="bg-gray-50 p-3 rounded-lg flex flex-col gap-4">
                    <div class="flex items-start space-x-4 hover:bg-gray-200 py-2 px-4 rounded-md">
                        <div class="w-[100px]">
                            <img class="h-20 w-20 rounded-full border-2 border-gray-300 shadow-sm"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="Profile picture">
                        </div>

                        <div class="flex-1">
                            <div class="flex items-center mb-1">
                                <span class="font-medium text-gray-900">Jenielyn Ayson</span>
                                <span class="text-gray-600 mx-1">likes</span>
                                <span class="font-medium text-gray-900">Bonnie Green's</span>
                                <span class="text-gray-600 mx-1">post in</span>
                                <span class="font-medium text-gray-900">How to start with Flowbite library</span>
                            </div>

                            <p class="text-gray-800 italic my-1">"I wanted to share a webinar zeroheight."</p>
                            <p class="text-gray-500 text-sm">09:43 PM</p>
                        </div>



                    </div>

                    <div class="flex items-start space-x-4 hover:bg-gray-200 py-2 px-4 rounded-md">
                        <div class="w-[100px]">
                            <img class="h-20 w-20 rounded-full border-2 border-gray-300 shadow-sm"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="Profile picture">
                        </div>

                        <div class="flex-1">
                            <div class="flex items-center mb-1">
                                <span class="font-medium text-gray-900">Jenielyn Ayson</span>
                                <span class="text-gray-600 mx-1">likes</span>
                                <span class="font-medium text-gray-900">Bonnie Green's</span>
                                <span class="text-gray-600 mx-1">post in</span>
                                <span class="font-medium text-gray-900">How to start with Flowbite library</span>
                            </div>

                            <p class="text-gray-800 italic my-1">"I wanted to share a webinar zeroheight."</p>
                            <p class="text-gray-500 text-sm">09:43 PM</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 hover:bg-gray-200 py-2 px-4 rounded-md">
                        <div class="w-[100px]">
                            <img class="h-20 w-20 rounded-full border-2 border-gray-300 shadow-sm"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="Profile picture">
                        </div>

                        <div class="flex-1">
                            <div class="flex items-center mb-1">
                                <span class="font-medium text-gray-900">Jenielyn Ayson</span>
                                <span class="text-gray-600 mx-1">likes</span>
                                <span class="font-medium text-gray-900">Bonnie Green's</span>
                                <span class="text-gray-600 mx-1">post in</span>
                                <span class="font-medium text-gray-900">How to start with Flowbite library</span>
                            </div>

                            <p class="text-gray-800 italic my-1">"I wanted to share a webinar zeroheight."</p>
                            <p class="text-gray-500 text-sm">09:43 PM</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 hover:bg-gray-200 py-2 px-4 rounded-md">
                        <div class="w-[100px]">
                            <img class="h-20 w-20 rounded-full border-2 border-gray-300 shadow-sm"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="Profile picture">
                        </div>

                        <div class="flex-1">
                            <div class="flex items-center mb-1">
                                <span class="font-medium text-gray-900">Jenielyn Ayson</span>
                                <span class="text-gray-600 mx-1">likes</span>
                                <span class="font-medium text-gray-900">Bonnie Green's</span>
                                <span class="text-gray-600 mx-1">post in</span>
                                <span class="font-medium text-gray-900">How to start with Flowbite library</span>
                            </div>

                            <p class="text-gray-800 italic my-1">"I wanted to share a webinar zeroheight."</p>
                            <p class="text-gray-500 text-sm">09:43 PM</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 hover:bg-gray-200 py-2 px-4 rounded-md">
                        <div class="w-[100px]">
                            <img class="h-20 w-20 rounded-full border-2 border-gray-300 shadow-sm"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="Profile picture">
                        </div>

                        <div class="flex-1">
                            <div class="flex items-center mb-1">
                                <span class="font-medium text-gray-900">Jenielyn Ayson</span>
                                <span class="text-gray-600 mx-1">likes</span>
                                <span class="font-medium text-gray-900">Bonnie Green's</span>
                                <span class="text-gray-600 mx-1">post in</span>
                                <span class="font-medium text-gray-900">How to start with Flowbite library</span>
                            </div>

                            <p class="text-gray-800 italic my-1">"I wanted to share a webinar zeroheight."</p>
                            <p class="text-gray-500 text-sm">09:43 PM</p>
                        </div>
                    </div>
                </div>


                <!-- second activity log -->
                <div class="mb-2">
                    <h6 class="text-gray-600 font-semibold text-lg">October 23, 2024</h6>
                </div>

                <div class="bg-gray-50 p-3 rounded-lg flex flex-col gap-4">
                    <div class="flex items-start space-x-4 hover:bg-gray-200 py-2 px-4 rounded-md">
                        <div class="w-[100px]">
                            <img class="h-20 w-20 rounded-full border-2 border-gray-300 shadow-sm"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="Profile picture">
                        </div>

                        <div class="flex-1">
                            <div class="flex items-center mb-1">
                                <span class="font-medium text-gray-900">Jenielyn Ayson</span>
                                <span class="text-gray-600 mx-1">likes</span>
                                <span class="font-medium text-gray-900">Bonnie Green's</span>
                                <span class="text-gray-600 mx-1">post in</span>
                                <span class="font-medium text-gray-900">How to start with Flowbite library</span>
                            </div>

                            <p class="text-gray-800 italic my-1">"I wanted to share a webinar zeroheight."</p>
                            <p class="text-gray-500 text-sm">09:43 PM</p>
                        </div>



                    </div>

                    <div class="flex items-start space-x-4 hover:bg-gray-200 py-2 px-4 rounded-md">
                        <div class="w-[100px]">
                            <img class="h-20 w-20 rounded-full border-2 border-gray-300 shadow-sm"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="Profile picture">
                        </div>

                        <div class="flex-1">
                            <div class="flex items-center mb-1">
                                <span class="font-medium text-gray-900">Jenielyn Ayson</span>
                                <span class="text-gray-600 mx-1">likes</span>
                                <span class="font-medium text-gray-900">Bonnie Green's</span>
                                <span class="text-gray-600 mx-1">post in</span>
                                <span class="font-medium text-gray-900">How to start with Flowbite library</span>
                            </div>

                            <p class="text-gray-800 italic my-1">"I wanted to share a webinar zeroheight."</p>
                            <p class="text-gray-500 text-sm">09:43 PM</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 hover:bg-gray-200 py-2 px-4 rounded-md">
                        <div class="w-[100px]">
                            <img class="h-20 w-20 rounded-full border-2 border-gray-300 shadow-sm"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="Profile picture">
                        </div>

                        <div class="flex-1">
                            <div class="flex items-center mb-1">
                                <span class="font-medium text-gray-900">Jenielyn Ayson</span>
                                <span class="text-gray-600 mx-1">likes</span>
                                <span class="font-medium text-gray-900">Bonnie Green's</span>
                                <span class="text-gray-600 mx-1">post in</span>
                                <span class="font-medium text-gray-900">How to start with Flowbite library</span>
                            </div>

                            <p class="text-gray-800 italic my-1">"I wanted to share a webinar zeroheight."</p>
                            <p class="text-gray-500 text-sm">09:43 PM</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 hover:bg-gray-200 py-2 px-4 rounded-md">
                        <div class="w-[100px]">
                            <img class="h-20 w-20 rounded-full border-2 border-gray-300 shadow-sm"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="Profile picture">
                        </div>

                        <div class="flex-1">
                            <div class="flex items-center mb-1">
                                <span class="font-medium text-gray-900">Jenielyn Ayson</span>
                                <span class="text-gray-600 mx-1">likes</span>
                                <span class="font-medium text-gray-900">Bonnie Green's</span>
                                <span class="text-gray-600 mx-1">post in</span>
                                <span class="font-medium text-gray-900">How to start with Flowbite library</span>
                            </div>

                            <p class="text-gray-800 italic my-1">"I wanted to share a webinar zeroheight."</p>
                            <p class="text-gray-500 text-sm">09:43 PM</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 hover:bg-gray-200 py-2 px-4 rounded-md">
                        <div class="w-[100px]">
                            <img class="h-20 w-20 rounded-full border-2 border-gray-300 shadow-sm"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="Profile picture">
                        </div>

                        <div class="flex-1">
                            <div class="flex items-center mb-1">
                                <span class="font-medium text-gray-900">Jenielyn Ayson</span>
                                <span class="text-gray-600 mx-1">likes</span>
                                <span class="font-medium text-gray-900">Bonnie Green's</span>
                                <span class="text-gray-600 mx-1">post in</span>
                                <span class="font-medium text-gray-900">How to start with Flowbite library</span>
                            </div>

                            <p class="text-gray-800 italic my-1">"I wanted to share a webinar zeroheight."</p>
                            <p class="text-gray-500 text-sm">09:43 PM</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of activity log -->

        </div>
    </div>
    <script>
        const profileIcon = document.getElementById('profileIcon');
        const dropdownProfile = document.getElementById('dropdownProfile');

        profileIcon.addEventListener('click', () => {
            dropdownProfile.classList.toggle('hidden');
        });
    </script>
</body>

</html>