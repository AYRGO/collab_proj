<?php
session_start();
?>
<nav class="bg-blue-900 sticky top-0 left-0 right-0 z-30 py-2 px-6">
    <div class="flex items-center justify-between">
        <!-- left section (logo with title) -->
        <div class="flex flex-shrink-0 items-center">
            <img class="h-20 w-auto mr-1" src="img/logo.png" alt="PWD Logo">
            <span class="text-white font-bold text-2xl">PWD Project</span>
        </div>

        <!-- second div nav section links -->
        <div class="hidden sm:ml-6 md:flex sm:items-center sm:justify-center flex-grow sm:hidden">
            <div class="flex items-center md:space-x-0 lg:space-x-1 xl:space-x-4">
                <div class="relative group">
                    <a href="index.php" class="rounded-md <?php
                    echo ($page == 'index') ? 'bg-gray-900 text-gray-200' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
                    ?> px-3 py-2 text-sm font-medium">
                        Home
                    </a>
                </div>

                <a href="announcement.php" class="rounded-md <?php
                echo ($page == 'announcement') ? 'bg-gray-900 text-gray-200' : 'text-gray-300 hover:bg-gray-700 hover:text-white'; ?> 
                        px-3 py-2 text-md font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                    Announcements
                </a>

                <a href="application.php" class="rounded-md <?php
                echo ($page == 'application') ? 'bg-gray-900 text-gray-200' : 'text-gray-300 hover:bg-gray-700 hover:text-white'; ?>
                        px-3 py-2 text-md font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                    Application
                </a>

                <a href="contact.php" class="rounded-md <?php
                echo ($page == 'contact') ? 'bg-gray-900 text-gray-200' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
                ?> px-3 py-2 text-md font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact
                    Us
                </a>
            </div>
        </div>

        <!-- right section (icons) -->
        <div class="flex items-center gap-2">
            <!-- when the user is not yet logged in -->
            <?php if (!isset($_SESSION['id'])): ?>
                <a href="loginpage.php">
                    <button class="px-6 py-3 text-gray-900 font-semibold bg-gray-200 rounded-md hover:bg-gray-400 hover:text-white">Get Started</button>
                </a>
            <?php else: ?>
                <!-- when the user already login -->
                <button class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                    </svg>
                </button>

                <!-- Profile dropdown -->
                <div class="group cursor-pointer relative">
                    <img class="h-8 w-8 rounded-full" id="profileIcon" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Profile picture">

                    <div class="hidden dropdown absolute w-[300px] bg-white rounded-lg shadow-lg top-16 right-0" id="dropdownProfile">
                        <ul class="p-3 space-y-3">
                            <li><a href="page/user/index.php" class="block hover:bg-gray-400 hover:text-white p-2 rounded">Profile</a></li>
                            <li><a href="page/user/usersetting.php" class="block hover:bg-gray-400 hover:text-white p-2 rounded">Settings</a></li>
                            <li><a href="logout.php" class="block hover:bg-gray-400 hover:text-white p-2 rounded">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</nav>

<script>
    const profileIcon = document.getElementById('profileIcon');
    const dropdownProfile = document.getElementById('dropdownProfile');

    profileIcon.addEventListener('click', () => {
        dropdownProfile.classList.toggle('hidden');
    });
</script>