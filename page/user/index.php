<?php
session_start();

// Check if the user is already logged in
if (!isset($_SESSION['user'])) {
    // If the user is not logged in, redirect them to the login page
    header('Location: ../../loginpage.php');
    exit(); // Ensure no further code execution after the redirect
}

// If the user is logged in, continue with fetching the data
require '../../include/landing/connect.php';

try {
    $user_id = $_SESSION['user']['id'];

    // Fetch data for the currently logged-in user using the user ID
    $sql = "SELECT fname, lname, email, contact, dob, usertype, created_at FROM user_registration WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $user_id]);

    // Fetch the user data (single record)
    $user = $stmt->fetch(PDO::FETCH_ASSOC);  // This returns a single row

} catch (PDOException $e) {
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

    <!-- navbar -->
    <?php include '../../include/user/navbar.php'; ?>

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
                    if ($user) {
                        echo htmlspecialchars($user['fname']) . " " . htmlspecialchars($user['lname']);
                    } else {
                        echo "User not found!";
                    }
                    ?>
                </h1>

                <p class="text-gray-700 text-sm">
                    <?php
                    if ($user) {
                        echo htmlspecialchars($user['usertype']);
                    } else {
                        echo "No user type available.";
                    }
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
                                if ($user){
                                    echo date('F d, Y', strtotime($user['dob']));
                                } else{
                                    echo 'User not found!';
                                }
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
                                class="material-icons mr-2">event_available</span> Events</button></a>
                    <a href="#"><button
                            class="bg-blue-100 text-gray-700 font-semibold py-2 px-3 rounded-lg flex items-center"><span
                                class="material-icons mr-2">cast_for_education</span> Advocacy Programs</button></a>

                </div>
            </div>

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

        <!-- Right Column: Welcome, Featured Events, Announcements, and Resources -->
        <div class="bg-white p-6 rounded-lg shadow-lg w-3/5">
            <h1 class="font-bold text-3xl text-center text-blue-800">Welcome to the PWD Community!</h1>
            <p class="text-gray-800 text-center py-2">Discover opportunities, connect with peers, and access valuable
                resources tailored just for you.</p>


            <!-- featured events -->

            <div class="mt-6">
                <h2 class="font-bold text-xl text-blue-600 border-b-2 pb-2">Featured Events</h2>

                <div class="grid grid-cols-3  gap-2 py-4">
                    <!-- event 1 -->
                    <div class="shadow-lg bg-white rounded-xl overflow-hidden w-full md:w-77 mx-auto">
                        <!-- Event Image -->
                        <img src="../../img/events/event1.jpg" alt="Event Image"
                            class="w-full h-48 rounded-t-xl object-cover object-center">

                        <!-- Event Details -->
                        <div class="p-4">
                            <!-- Event Title -->
                            <h1
                                class="text-xl font-semibold text-gray-800 hover:text-blue-600 transition-colors duration-300 cursor-pointer">
                                Painting Beyond Limits: A PWD Child's Expression
                            </h1>
                            <!-- Event Date -->
                            <p class="text-sm text-gray-600 mt-2">
                                25 June 2024 ───── 27 June 2024
                            </p>
                        </div>
                    </div>

                    <!-- event 1-2 -->
                    <div class="shadow-md bg-gray-100 rounded-xl overflow-hidden w-full md:w-77 mx-auto mt-6">
                        <!-- Event Image -->
                        <img src="../../img/events/event2.jpg" alt="Event Image"
                            class="w-full h-48 rounded-t-xl object-cover object-center">

                        <!-- Event Details -->
                        <div class="p-4">
                            <!-- Event Title -->
                            <h1
                                class="text-xl font-semibold text-gray-800 hover:text-blue-600 transition-colors duration-300 cursor-pointer">
                                Sports Without Barriers: The PWD Challenge
                            </h1>
                            <!-- Event Date -->
                            <p class="text-sm text-right text-gray-600 mt-2">
                                25 June 2024 ───── 27 June 2024
                            </p>
                        </div>
                    </div>

                    <!-- third event -->
                    <div class="shadow-lg bg-white rounded-xl overflow-hidden">
                        <!-- Event Image -->
                        <img src="../../img/events/event3.jpg" alt="Event Image"
                            class="w-full h-48 rounded-t-xl object-cover object-center">

                        <!-- Event Details -->
                        <div class="p-4">
                            <!-- Event Title -->
                            <h1
                                class="text-xl font-semibold text-gray-800 hover:text-blue-600 transition-colors duration-300 cursor-pointer">
                                Empowerment To Lead: A PWD's Story of Business Success
                            </h1>
                            <!-- Event Date -->
                            <p class="text-sm text-gray-600 mt-2">
                                5 August 2024 ───── 7 August 2024
                            </p>
                        </div>
                    </div>

                </div>
                <p class="mt-4 text-center text-gray-700">
                    Want to learn more? Visit our <a href="../../announcement.php"
                        class="text-blue-500 hover:underline font-semibold">Events Page</a> for full details and
                    upcoming activities.
                </p>

            </div>


            <div class="mt-8 p-6">
                <h2 class="font-bold text-xl text-blue-600 border-b-2 pb-2">Apply for Your PWD Card</h2>
                <p class="text-gray-700 mt-4">
                    The PWD (Persons with Disabilities) card offers various benefits including discounts, special
                    services, and more.
                    If you or someone you know is eligible, you can apply for the card today and gain access to these
                    resources.
                </p>
                <a href="../../page/user/pwd_form.php" class="mt-4 block text-blue-500 hover:underline font-semibold">
                    Apply Now
                </a>
            </div>


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
    <script>
        const profileIcon = document.getElementById('profileIcon');
        const dropdownProfile = document.getElementById('dropdownProfile');

        profileIcon.addEventListener('click', () => {
            dropdownProfile.classList.toggle('hidden');
        });
    </script>
</body>

</html>