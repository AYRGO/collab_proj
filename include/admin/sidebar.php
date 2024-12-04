<aside id="sidebar-multi-level-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-blue-950">
        <div>
            <div class="flex items-center p-2">
                <img class="h-16 w-auto mr-1" src="../../img/logo.png" alt="PWD Logo">
                <span class="text-white font-bold text-lg">PWD Project</span>
            </div>

            <hr class="w-3/5 mx-auto mt-1 border-t border-gray-200">
        </div>
        <ul class="space-y-2 font-medium pt-4">
            <li id="dashboardLink">
                <a href="index.php" class="flex items-center p-2 rounded-lg <?php
                echo ($page == 'dashboard') ? 'text-white bg-gray-600' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
                ?> group">
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li id="tablesLink">
                <a href="#" class="flex items-center p-2 rounded-lg <?php
                echo ($page == 'tables') ? 'text-white bg-gray-600' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
                ?> group">

                    <div class="flex items-center justify-between w-full">
                        <span class="ms-3">Tables</span>
                        <!-- up icon -->
                        <i class="fa-solid fa-angle-up text-gray-200" id="upIcon"></i>
                        <i class="hidden fa-solid fa-angle-down text-gray-200" id="downIcon"></i>
                    </div>

                </a>
            </li>
            <ul class="ml-4 hidden" id="tableDropdown">
                <li>
                    <a href="table.php?page=user_management" class="flex items-center p-2 rounded-lg <?php
                    echo ($page == 'user_management') ? 'text-white bg-gray-600' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
                    ?> group">
                        <span class="ms-3">User Management</span>
                    </a>
                </li>
                <li>
                    <a href="card.php?page=pwd_card_applications" class="flex items-center p-2 rounded-lg <?php
                    echo ($page == 'pwd_card_applications') ? 'text-white bg-gray-600' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
                    ?> group">
                        <span class="ms-3">PWD Card Applications</span>
                    </a>
                </li>


                <li>
                    <a href="audit.php?page=audit_trail" class="flex items-center p-2 rounded-lg <?php
                    echo ($page == 'audit_trail') ? 'text-white bg-gray-600' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
                    ?> group">
                        <span class="ms-3">Audit Trail</span>
                    </a>
                </li>
            </ul>


            </li>

            <div class="">
                <h1 class="text-gray-100 pt-2 px-4 text-bold uppercase">Account Pages</h1>

                <ul class="space-y-2 font-medium pt-4">

                    <li>
                        <a href="../../include/user/logut.php"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>

        </ul>
    </div>
</aside>

<script>
    // Get the dropdown

    document.getElementById('tablesLink').addEventListener('click', function () {
        document.getElementById('dashboardLink').querySelector('a').classList.remove('text-white', 'bg-gray-600');
        document.getElementById('dashboardLink').querySelector('a').classList.add('text-gray-300', 'hover:bg-gray-700', 'hover:text-white');

        this.querySelector('a').classList.remove('text-gray-300', 'hover:bg-gray-700', 'hover:text-white');
        this.querySelector('a').classList.add('text-white', 'bg-gray-600');


        const tablesLink = document.getElementById('tablesLink');
        const tableDropdown = document.getElementById('tableDropdown');
        const dashboardLink = document.getElementById('dashboardLink');

        tablesLink.addEventListener('click', function () {
            // Toggle the dropdown visibility
            tableDropdown.classList.toggle('hidden');

            // Remove active state from Dashboard
            const dashboardAnchor = dashboardLink.querySelector('a');
            dashboardAnchor.classList.remove('text-white', 'bg-gray-600');
            dashboardAnchor.classList.add('text-gray-300', 'hover:bg-gray-700', 'hover:text-white');

            // Add active state to Tables
            const tablesAnchor = tablesLink.querySelector('a');
            tablesAnchor.classList.add('text-white', 'bg-gray-600');
            tablesAnchor.classList.remove('text-gray-300', 'hover:bg-gray-700', 'hover:text-white');
        });

        // Highlight the active submenu item based on $page
        const currentPage = "<?php echo $page; ?>";
        if (currentPage === "user_registration" || currentPage === "pwd_card_applications") {
            tableDropdown.classList.remove('hidden'); // Show the dropdown
            tablesLink.querySelector('a').classList.add('text-white', 'bg-gray-600');
            tablesLink.querySelector('a').classList.remove('text-gray-300', 'hover:bg-gray-700', 'hover:text-white');
        }

    });
</script>