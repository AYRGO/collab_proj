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

    $sql = "SELECT fname, lname, usertype, email, contact, dob, last_login from user_registration WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $user_id]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($_SERVER["REQUEST_METHOD"] === 'POST'){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $dob = $_POST['dob'];

        $sql = "UPDATE user_registration set fname = :fname, lname = :lname, email = :email, contact = :contact, dob = :dob, last_login = NOW() WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt -> execute([
            ':fname' => $_POST['fname'],
            ':lname' => $_POST['lname'],
            ':email' => $_POST['email'],
            ':contact' => $_POST['contact'],
            ':dob' => $_POST['dob'],
            ":id" => $user_id
        ]);
        header('Location: usersetting.php');
   
    }

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div id="settingsBody">
        <?php
        include '../../include/landing/header.php';
        ?>

        <?php
        include '../../include/user/navbar.php';
        ?>
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
                            echo $user['fname'] . ' ' . $user['lname'];
                        } else {
                            echo 'User not found!';
                        }
                        ?>
                    </h1>
                    <p class="text-gray-700 text-sm">
                        <?php
                        if ($user) {
                            echo $user['usertype'];
                        } else {
                            echo 'User not found!';
                        }
                        ?>
                    </p>

                    <div
                        class="text-gray-700 flex flex-col justify-between text-left bg-blue-50 my-2 py-2 px-4 rounded-lg">
                        <div class="flex items-center justify-between">
                            <span>Status</span>
                            <button class="py-1 px-4 bg-emerald-400 text-white text-md rounded-md">
                                Active
                            </button>
                        </div>

                        <hr class="my-2">

                        <div class="flex items-center justify-between">
                            <span>Member Since</span>
                            <p>
                                <?php
                                if ($user) {
                                    echo date('F d, Y', strtotime($user['dob']));
                                } else {
                                    echo 'User not found!';
                                }
                                ?>
                            </p>
                        </div>

                        <div class="flex items-center justify-between mt-2">
                            <span class="font-bold">PWD Card</span>
                            <p class="text-emerald-900 font-semibold">Pending</p>
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
                    <p class="text-gray-700 mt-2">The PWD card provides various benefits and privileges. This section
                        covers
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
                    <p class="mt-4 text-gray-700">If you have questions or need support, please contact us directly at
                        <a href="contact_link" class="text-blue-500 hover:underline">pwdproject@gmail.com</a>, and our
                        team
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
                            <p>
                                <?php
                                if ($user) {
                                    echo $user['fname'];
                                } else {
                                    echo 'User not found!';
                                }
                                ?>
                            </p>
                            <strong class="font-semibold">Last Name</strong>
                            <p>
                                <?php
                                if ($user) {
                                    echo $user['lname'];
                                } else {
                                    echo 'User not found!';
                                }
                                ?>
                            </p>
                        </div>

                        <div class="grid grid-cols-4">
                            <strong class="font-semibold">Email Address</strong>
                            <p>
                                <?php
                                if ($user) {
                                    echo $user['email'];
                                } else {
                                    echo 'User not found!';
                                }
                                ?>
                            </p>
                            <strong class="font-semibold">Contact Number</strong>
                            <p>
                                <?php
                                if ($user) {
                                    echo $user['contact'];
                                } else {
                                    echo 'User not found!';
                                }
                                ?>
                            </p>
                        </div>

                        <div class="grid grid-cols-4">
                            <strong class="font-semibold">Birth Date</strong>
                            <p>
                                <?php
                                if ($user) {
                                    echo date('F d, Y', strtotime($user['dob']));
                                } else {
                                    echo 'User not found!';
                                }
                                ?>
                            </p>
                            <strong class="font-semibold">Last Login</strong>
                            <p>
                                <?php
                                if ($user) {
                                    echo date('F d, Y h:i A', strtotime($user['last_login']));
                                } else {
                                    echo 'User not found!';
                                }
                                ?>
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-end mt-4" id="updateBtn">
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
    </div>


    <!-- for the update modal -->
    <div class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50 overflow-hidden"
        id="updateModal">
        <!-- Modal Content -->
        <div class="max-w-2xl bg-white rounded-xl p-8">
            <div class="text-gray-800 relative">
                <h1 class="text-2xl font-bold">Update Profile</h1>

                <!-- close button -->
                <i class="absolute -right-2 -top-2 fa-solid fa-circle-xmark text-3xl md:text-4xl text-blue-900 cursor-pointer hover:text-blue-700 active:text-blue-600"
                    id="closeBtn"></i>
                <form action="" method="POST" class="my-4">
                    <!-- for full name -->
                    <div class="lg:flex lg:justify-between gap-12">
                        <div class="w-full">
                            <label for="fname" class="font-semibold text-lg">First Name</label>
                            <input type="text"
                                class="w-full border border-gray-400 p-3 rounded-md outline-blue-800 bg-white mb-5 placeholder:text-lg"
                                name="fname" value="<?php
                                echo htmlspecialchars($user['fname']);
                                ?>" required>
                        </div>

                        <div class="w-full">
                            <label for="lname" class="font-semibold text-lg">Last Name</label>
                            <input type="text"
                                class="w-full border border-gray-400 p-3 rounded-md outline-blue-800 bg-white mb-5 placeholder:text-lg"
                                name="lname" value="<?php echo htmlspecialchars($user['lname']); 
                                ?>" required>
                        </div>
                    </div>

                    <!-- for email -->
                    <label for="email" class="font-semibold text-lg">Email</label>
                    <input type="email"
                        class="block w-full border border-gray-400 p-3 rounded-md outline-blue-800 bg-white mb-5 placeholder:text-lg"
                        name="email" value="<?php
                        echo htmlspecialchars($user['email']);
                        ?>" required>

                    <label for="contact" class="font-semibold text-lg">Contact Number (optional)</label>
                    <input type="text"
                        class="block w-full border border-gray-400 p-3 rounded-md outline-blue-800 bg-white mb-5 placeholder:text-lg"
                        name="contact" value="<?php
                        echo htmlspecialchars($user['contact']);
                        ?>">

                    <label for="dob" class="font-semibold text-lg">Date of Birth</label>
                    <input type="date"
                        class="block w-full border border-gray-400 p-3 rounded-md outline-blue-800 bg-white mb-5 placeholder:text-lg"
                        name="dob" value="<?php
                        echo htmlspecialchars($user['dob'])
                            ?>" required>

                    <div class="flex items-center justify-center gap-4 pt-3">
                        <button type="submit" id="cancelBtn"
                            class="w-1/3 py-3 px-6 rounded-lg bg-gray-200 hover:bg-gray-300 shadow-md text-lg font-semibold">
                            Cancel
                        </button>

                        <button type="submit" id="saveBtn"
                            class="w-1/3 py-3 px-6 rounded-lg bg-red-600 hover:bg-red-700 shadow-md  text-lg font-semibold text-white">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const profileIcon = document.getElementById('profileIcon');
        const dropdownProfile = document.getElementById('dropdownProfile');

        profileIcon.addEventListener('click', () => {
            dropdownProfile.classList.toggle('hidden');
        });

        const settingsBody = document.getElementById('settingsBody');
        const updateBtn = document.getElementById('updateBtn');
        const updateModal = document.getElementById('updateModal');
        const closeBtn = document.getElementById('closeBtn');
        const cancelBtn = document.getElementById('cancelBtn');
        const saveBtn = document.getElementById('saveBtn');

        updateBtn.addEventListener('click', () => {
            updateModal.classList.remove('hidden');
            settingsBody.classList.add('hidden');
        });

        closeBtn.addEventListener('click', () => {
            updateModal.classList.add('hidden');
            settingsBody.classList.remove('hidden');
        });

        cancelBtn.addEventListener('click', () => {
            updateModal.classList.add('hidden');
            settingsBody.classList.remove('hidden');
        });

        saveBtn.addEventListener('click', () => {
            updateModal.classList.add('hidden');
            settingsBody.classList.remove('hidden');
        });
    </script>
</body>

</html>