
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
        src="<?php echo isset($_SESSION['user']['photo']) && !empty($_SESSION['user']['photo']) ? $_SESSION['user']['photo'] : 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80'; ?>"
        alt="Profile picture">

    <div class="hidden dropdown absolute w-[300px] bg-white rounded-lg shadow-lg top-16 right-8"
        id="dropdownProfile">
        <ul class="p-3 space-y-3">
            <li><a href="index.php"
                    class="block hover:bg-gray-400 hover:text-white p-2 rounded">Profile</a>
            </li>
            <li><a href="usersetting.php"
                    class="block hover:bg-gray-400 hover:text-white p-2 rounded">Settings</a>
            </li>
            <li><a href="../../include/user/logut.php" class="block hover:bg-gray-400 hover:text-white p-2 rounded">Sign out</a>
            </li>
        </ul>
    </div>
</div>

            </div>
        </div>
    </nav>