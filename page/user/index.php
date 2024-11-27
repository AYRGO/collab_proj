<?php
    session_start();
    require '../../include/landing/connect.php';

    try {
        $id = $_SESSION['id'];
        $sql = "SELECT fname, lname, email, contact, dob, usertype, created_at FROM user_registration WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);

        $users = $stmt->fetch(PDO::FETCH_ASSOC); // Fetch a single row
    } catch(PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    }
?>
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
    <!-- Header -->
    <?php include '../../include/landing/header.php'; ?>

    <!-- Navigation Bar -->
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
                <div  class="group">
                <a href="../../loginpage.php">
                    <img class="h-8 w-8 rounded-full"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="Profile picture">
                </a>

                
                <div
                        class="hidden dropdown group-hover:block absolute w-[300px] bg-white rounded-lg shadow-lg top-16 right-8">
                        <ul class="p-3 space-y-3">
                            <li><a href="index.php" class="block hover:bg-gray-400 hover:text-white p-2 rounded">Profile</a>
                            </li>
                            <li><a href="usersetting.php" class="block hover:bg-gray-400 hover:text-white p-2 rounded">Settings</a>
                            </li>
                            <li><a href="../../loginpage.php" class="block hover:bg-gray-400 hover:text-white p-2 rounded">Logout</a>
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
                <h1 class="font-bold text-xl">
                    <?php
                        echo htmlspecialchars($users['fname']) . " " . htmlspecialchars($users['lname']);
                    ?>
                </h1>

                <p class="text-gray-700 text-sm">
                    <?php
                        echo htmlspecialchars($users['usertype']);
                    ?>
                </p>

                <div class="text-gray-700 flex flex-col justify-between text-left bg-blue-50 my-2 py-2 px-4 rounded-lg">
                    <div class="flex items-center justify-between">
                        <span>Status</span>
                        <button class="py-1 px-4 bg-emerald-400 text-white text-md rounded-md">Active</button>
                    </div>
                    <hr class="my-2">
                    <div class="flex items-center justify-between">
                        <span>Member Since</span>
                        <p>
                            <?php
                                echo htmlspecialchars($users['created_at']);
                            ?>
                        </p>
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <span class="font-bold">PWD Card</span>
                        <p class="text-emerald-900 font-semibold">Approved</p>
                    </div>
                </div>
            </div>

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
                                class="material-icons mr-2">cast_for_education</span> Advocacy Programs</button></a>
                    <a href="#"><button
                            class="bg-blue-100 text-gray-700 font-semibold py-2 px-3 rounded-lg flex items-center"><span
                                class="material-icons mr-2">event_available</span> Events</button></a>
                </div>
            </div>

            <!-- PWD Card Information and Support -->
<div class="bg-white p-4 rounded-lg text-left shadow-md">
    <h2 class="font-bold text-xl text-center">PWD Card Information & Support</h2>
    <p class="text-gray-700 mt-2">The PWD card provides various benefits and privileges. This section covers everything you need to know about applying, its benefits, and your rights.</p>

    <div class="py-2 space-y-2">
        <a href="benefits_of_pwd_card" class="block text-gray-700 bg-gray-200 px-4 py-2 rounded-xl hover:bg-blue-200 hover:text-black">Explore the Benefits of Having a PWD Card</a>
        <a href="pwd_card_laws" class="block text-gray-700 bg-gray-200 px-4 py-2 rounded-xl hover:bg-blue-200 hover:text-black">Get Familiar with the Laws and Regulations Around PWD Cards</a>
        <a href="how_to_apply_for_pwd_card" class="block text-gray-700 bg-gray-200 px-4 py-2 rounded-xl hover:bg-blue-200 hover:text-black">Step-by-Step Guide: How to Apply for a PWD Card</a>
        <a href="pwd_rights_and_privileges" class="block text-gray-700 bg-gray-200 px-4 py-2 rounded-xl hover:bg-blue-200 hover:text-black">Know Your Rights and Privileges as a PWD Cardholder</a>
    </div>
    <p class="mt-4 text-gray-700">If you have questions or need support, please contact us directly at <a href="contact_link" class="text-blue-500 hover:underline">pwdproject@gmail.com</a>, and our team will be happy to assist you.</p>
</div>

        </div>

        <!-- Right Column: Welcome, Featured Events, Announcements, and Resources -->
        <div class="bg-white p-6 rounded-lg shadow-lg w-3/5">
            <h1 class="font-bold text-3xl text-center text-blue-800">Welcome to the PWD Community!</h1>
            <p class="text-gray-800 text-center py-2">Access your personalized dashboard, connect with the community, and explore exclusive resources tailored for you.</p>


            <!-- featured events -->
            <div>
                <div class="w-1/3 border border-gray-100 shadow-lg rounded-md">

                    <img src="featured-pic.jpg" class="rounded-t-md" alt="Picture taken from PWD event">
                    <div class="py-8 px-6">
                        <h1 class="text-2xl font-bold text-gray-600">Featured Events</h1>
                        <span class="text-gray-600 leading-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit consequuntur beatae deleniti
                            eveniet itaque autem necessitatibus aut, laboriosam sint modi quod. </span>
                    </div>

                </div>
            </div>
            <!-- <h2 class="font-bold text-xl text-blue-600 border-b-2 pb-2">Featured Events</h2>
            <ul class="list-disc list-inside mt-2 text-gray-700 space-y-2">
                <li><strong>Annual PWD Awareness Day</strong> - Join us on March 15 for a day of workshops and
                    activities!</li>
                <li><strong>Scholarship Application Workshop</strong> - Learn how to apply effectively on April 20 at 2
                    PM.</li>
                <li><strong>Job Fair</strong> - Connect with employers on May 5 from 10 AM to 4 PM.</li>
            </ul>
            <p class="mt-2 text-center">For more details, visit our <a href="events_link"
                    class="text-blue-500 hover:underline">Events Page</a>.</p> -->

            <h2 class="font-bold text-xl text-blue-600 border-b-2 pb-2">Announcements</h2>
            <p class="text-gray-700">We are excited to announce the launch of our new online resources hub! Check it out
                for guides and tools tailored for PWD members.</p>
            <p class="text-gray-700">Remember to renew your PWD card before the expiration date to ensure continued
                access to services.</p>

            <h2 class="font-bold text-xl text-blue-600 border-b-2 pb-2">Helpful Resources</h2>
            <ul class="list-disc list-inside mt-2 text-gray-700 space-y-2">
                <li><a href="resource_link_1" class="text-blue-500 hover:underline">Access to Legal Assistance</a></li>
                <li><a href="resource_link_2" class="text-blue-500 hover:underline">Mental Health Support Services</a>
                </li>
                <li><a href="resource_link_3" class="text-blue-500 hover:underline">Transportation Assistance
                        Programs</a></li>
            </ul>

            <!-- User Feedback Section -->
            <div class="mt-6 p-4 bg-blue-50 rounded-lg shadow-md">
                <h2 class="font-bold text-xl text-blue-600">We Value Your Feedback!</h2>
                <p class="text-gray-700">Please take a moment to let us know your thoughts about our services and
                    events:</p>
                <textarea class="w-full mt-2 p-2 border border-gray-300 rounded-lg" rows="4"
                    placeholder="Your feedback..."></textarea>
                <button class="mt-2 bg-blue-600 text-white py-2 px-4 rounded-lg">Submit Feedback</button>
            </div>
        </div>
    </div>
</body>

</html>