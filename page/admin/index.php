<?php
session_start();
if (!isset($_SESSION['user'])) {
    // If the user is not logged in, redirect them to the login page
    header('Location: ../../loginpage.php');
    exit(); // Ensure no further code execution after the redirect
}

require '../../include/landing/connect.php';

try {
    // for the total registered account
    $stmt = $pdo->query('SELECT COUNT(*) from user_registration');
    $totalRegisteredAccount = $stmt->fetchColumn();

    // for the total approved pwd card
    $stmt = $pdo->query("SELECT COUNT(*) from pwdcard_applications where status = 'approved'");
    $totalApprovedPwdCard = $stmt->fetchColumn();

    // for the total pending pwd card
    $stmt = $pdo->query("SELECT COUNT(*) from pwdcard_applications where status = 'pending'");
    $totalPendingCard = $stmt->fetchColumn();

    // for the total pwd card renewals
    $stmt = $pdo->query("SELECT COUNT(*) from pwdcard_applications where application_type = 'renewal'");
    $totalRenewalCard = $stmt->fetchColumn();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" href="../../img/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="../../node_modules/chart.js/dist/chart.umd.js"></script>
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

<body class="bg-gray-100">


    <?php
    $page = 'dashboard';
    include '../../include/admin/sidebar.php';
    ?>
    <!-- end of side bar -->

    <!-- dashboard section  -->
    <div class="ml-64 p-6">
        <!-- for the search/notif/profile -->
        <div class="flex items-center justify-end space-x-6">
            <form class="flex items-center gap-1 relative">
                <input type="text" placeholder="Search"
                    class="border-2 border-blue-900 bg-white h-10 pl-10 pr-16 rounded-md text-sm focus:outline-none">

                <!-- Search icon -->
                <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-6 h-6 text-gray-700" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                        d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                </svg>
                <!-- end of search icon -->
            </form>


            <div class="flex items-center gap-2">
                <!-- notification icon -->
                <div class="relative">
                    <svg class="w-6 h-6 text-gray-800 cursor-pointer" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"
                        onclick="toggleNotificationDropdown()">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5.365V3m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175 0 .593 0 1.292-.538 1.292H5.538C5 18 5 17.301 5 16.708c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 12 5.365ZM8.733 18c.094.852.306 1.54.944 2.112a3.48 3.48 0 0 0 4.646 0c.638-.572 1.236-1.26 1.33-2.112h-6.92Z" />
                    </svg>
                    <span id="notification-count"
                        class="absolute -top-2 -right-2 bg-red-600 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center hidden">
                        0
                    </span>
                </div>

                <!-- Notification Dropdown Table -->
                <div id="notification-dropdown"
                    class="hidden absolute right-0 top-[80px] bg-white shadow-lg rounded-lg w-80 max-h-64 overflow-auto z-50">
                    <table class="min-w-full table-auto mx-auto text-sm text-left">
                        <thead>
                            <tr class="bg-gray-100 border-b py-10">
                                <th class="px-4 py-2 text-gray-700">Name</th>
                                <th class="px-4 py-2 text-gray-700">Disability</th>
                                <th class="px-4 py-2 text-gray-700">Submitted At</th>
                            </tr>
                        </thead>
                        <tbody id="notification-table-body">
                            <!-- Table rows will be appended here -->
                        </tbody>
                    </table>
                </div>
                <!-- end of notification icon -->

                <!-- profile icon -->
                <div class="group cursor-pointer relative">
                    <img class="h-8 w-8 rounded-full" id="profileIcon"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="Profile picture">

                    <div class="hidden dropdown absolute w-[300px] bg-white rounded-lg shadow-lg top-16 right-0"
                        id="dropdownProfile">
                        <ul class="p-3 space-y-3">
                            <li><a href="page/user/index.php"
                                    class="block hover:bg-gray-400 hover:text-white p-2 rounded">Profile</a></li>
                            <li><a href="../../include/user/logut.php"
                                    class="block hover:bg-gray-400 hover:text-white p-2 rounded">Sign out</a></li>
                        </ul>
                    </div>
                </div>
                <!-- end of profile icon -->
            </div>
        </div>

        <!-- stats -->
        <div class="text-gray-700 py-10 grid grid-cols-4 gap-6">
            <!-- first div total -->
            <div class="border border-blue-700 py-3 px-4 rounded-lg shadow-md">
                <!-- for the text and icon -->
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="">Total Registered Account</h1>
                        <span class="text-3xl font-semibold text-gray-800"><?php
                        echo $totalRegisteredAccount;
                        ?></span>
                    </div>

                    <div
                        class="w-12 h-12 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 rounded-md flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                        </svg>
                    </div>

                </div>
                <!-- horizontal line -->
                <hr class="w-3/5 mx-auto mt-2 border-t border-gray-200">

                <p class="mt-2"><span class="text-green-500 font-semibold">+10%</span> than last month</p>
            </div>

            <!-- second div(total approved pwd card) -->
            <div class="border border-blue-700 py-3 px-4 rounded-lg shadow-md">
                <!-- for the text and icon -->
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="">Total Approved PWD Card</h1>
                        <span class="text-3xl font-semibold text-gray-800"><?php
                        echo $totalApprovedPwdCard;
                        ?></span>
                    </div>

                    <div
                        class="w-12 h-12 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 rounded-md flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M12 2L3 7v10l9 5 9-5V7l-9-5z" />
                        </svg>
                    </div>

                </div>
                <!-- horizontal line -->
                <hr class="w-3/5 mx-auto mt-2 border-t border-gray-200">

                <p class="mt-2"><span class="text-green-500 font-semibold">+10%</span> than last month</p>
            </div>

            <!-- third div(total pending) -->
            <div class="border border-blue-700 py-3 px-4 rounded-lg shadow-md">
                <!-- for the text and icon -->
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="">Total Pending PWD Card</h1>
                        <span class="text-3xl font-semibold text-gray-800"><?php
                        echo $totalPendingCard;
                        ?></span>
                    </div>


                    <div
                        class="w-12 h-12 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 rounded-md flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M3 10h18m-9 4h5m-5 4h5m-5-4h-5m0 4H7m1-9h6m-3 5v4m6 0v4" />
                        </svg>
                    </div>

                </div>
                <!-- horizontal line -->
                <hr class="w-3/5 mx-auto mt-2 border-t border-gray-200">

                <p class="mt-2"><span class="text-green-500 font-semibold">+10%</span> than last month</p>
            </div>


            <!-- fourth div (total) -->
            <div class="border border-blue-700 py-3 px-4 rounded-lg shadow-md">
                <!-- for the text and icon -->
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="">Total PWD Card Renewals</h1>
                        <span class="text-3xl font-semibold text-gray-800"><?php
                        echo $totalRenewalCard;
                        ?></span>
                    </div>

                    <div
                        class="w-12 h-12 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 rounded-md flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M19 11l-3 3-3-3m3-3v6m-3-3h-6m6-6L9 7l3 3m3 3H9m6 6H9m3-6V4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-7" />
                        </svg>
                    </div>

                </div>
                <!-- horizontal line -->
                <hr class="w-3/5 mx-auto mt-2 border-t border-gray-200">

                <p class="mt-2"><span class="text-green-500 font-semibold">+10%</span> than last month</p>
            </div>

            <div class="flex items-center justify-between gap-10">
                <div
                    class="w-[400px] bg-gradient-to-r from-blue-50 via-blue-100 to-blue-200 shadow-xl rounded-2xl p-6 transform transition-transform hover:scale-105">
                    <canvas class="" id="myschart" width="450" height="500"></canvas>
                    <script src="src/js/mySchart.js"></script>
                </div>

                <div
                    class="w-[380px] h-[50vh] bg-gradient-to-r from-indigo-100 via-indigo-200 to-indigo-300 shadow-xl rounded-2xl p-6 transform transition-transform hover:scale-105">
                    <canvas id="mytchart" width="400" height="500"></canvas>
                    <script src="src/js/myTchart.js"></script>
                </div>

                <div
                    class="w-[350px] bg-gradient-to-r from-blue-200 via-blue-100 to-blue-100 shadow-xl rounded-2xl p-6 transform transition-transform hover:scale-105">
                    <canvas id="myfchart" width="400" height="500"></canvas>
                    <script src="src/js/myFchart.js"></script>
                </div>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="src/js/notification.js"></script>
    <script>
        const tableDropdown = document.getElementById('tableDropdown');
        const tablesLink = document.getElementById('tablesLink');
        const upIcon = document.getElementById('upIcon');
        const downIcon = document.getElementById('downIcon');

        tablesLink.addEventListener('click', () => {
            tableDropdown.classList.toggle('hidden');
            upIcon.classList.toggle('hidden');
            downIcon.classList.toggle('hidden');
        });

        const profileIcon = document.getElementById('profileIcon');
        const dropdownProfile = document.getElementById('dropdownProfile');

        profileIcon.addEventListener('click', () => {
            dropdownProfile.classList.toggle('hidden');
        });
    </script>
</body>

</html>