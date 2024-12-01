<?php
require 'include/landing/connect.php';

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fullname = trim($_POST['fullname']);
        $email = trim($_POST['email']);
        $contact = trim($_POST['contact']);
        $message = trim($_POST['message']);


        if (!empty($fullname) && !empty($email) && !empty($contact) && !empty($message)) {
            $sql = "INSERT INTO guest_feedback (fullname, email, contact, message, timeSent) 
                VALUES (:fullname, :email, :contact, :message, NOW())";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':fullname' => $fullname,
                ':email' => $email,
                ':contact' => $contact,
                ':message' => $message
            ]);

            echo "<script>alert('Message sent successfully!');
             window.location.href = '" . $_SERVER['PHP_SELF'] . "';
            </script>";
        }

    }
} catch (PDOException $e) {
    echo "There is some problem in connection: " . $e->getMessage();
}
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png" type="image/png">
    <title>PWD Project</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
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

<body class="bg-gray-50">
    <!-- header section -->
    <?php
    include 'include/landing/header.php';
    ?>

    <!-- navbar section -->
    <?php
    $page = 'contact';
    include 'include/landing/navbar.php';
    ?>

    <section class="text-gray-700">
        <!-- hero section for contact us -->
        <div class="w-full h-[34vh]  bg-blue-950 py-12 px-24 flex flex-col items-start">
            <h1 class="font-manrope text-white text-4xl font-semibold leading-10">Contact Information</h1>
            <h3 class="font-manrope text-white text-md leading-1 py-3">This is your direct line to reach out to us with
                any
                question,<br>Concerns, feedback, inquiries you might have.</h3>
            <!-- social media -->
            <div class="text-white text-xl space-x-2 py-4">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-x-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
            </div>
        </div>
        <!-- end of hero section -->

        <div class="flex relative h-[50vh] items-center">
            <!-- left section -->
            <div class="w-1/2 lg:py-12 lg:px-24 p-5">
                <h1 class="font-bold text-3xl text-gray-800 w-11/12 leading-normal">
                    Get in Touch with Us Today – We’d Love to Hear from You!
                </h1>
                <div class="flex items-center text-blue-700 font-semibold gap-2 py-8">
                    <p class="text-xl">Send Us a Message</p>
                    <span class="text-4xl">&rarr;</span>
                </div>
            </div>

            <!-- contact us form -->
            <div
                class="absolute -top-60 right-20 ml-[60px] max-w-lg h-[72vh] mt-14 shadow-xl mx-auto bg-white p-3 lg:p-8 lg:rounded-r-2xl rounded-2xl">
                <h2 class=" text-black font-manrope text-3xl font-semibold leading-10 mb-6">Contact Us</h2>

                <form method="POST">
                    <input type="text"
                        class="w-full h-12 text-gray-600 placeholder-gray-400  shadow-sm bg-transparent text-lg font-normal leading-4 rounded-xl border border-gray-200 focus:outline-blue-700 pl-4 mb-5"
                        placeholder="Name" name="fullname" autofocus>
                    <input type="text"
                        class="w-full h-12 text-gray-600 placeholder-gray-400 shadow-sm bg-transparent text-lg font-normal leading-4 rounded-xl border border-gray-200 focus:outline-blue-700  pl-4 mb-5"
                        placeholder="Email" name="email">
                    <input type="text"
                        class="w-full h-12 text-gray-600 placeholder-gray-400 shadow-sm bg-transparent text-lg font-normal leading-4 rounded-xl border border-gray-200 focus:outline-blue-700  pl-4 mb-5"
                        placeholder="Contact Number" name="contact">
                    <div class="mb-10">
                        <textarea id="message" rows="4"
                            class="block p-2.5 w-full text-gray-600 rounded-xl border border-gray-400 focus:outline-blue-700 "
                            name="message" placeholder="Write your message here..."></textarea>
                    </div>

                    <button
                        class="w-full h-12 text-white text-base font-semibold leading-6 rounded-full transition-all duration-700 hover:bg-blue-600 bg-blue-700 shadow-sm">Submit</button>
                </form>


            </div>

            <!-- end of contact us form -->
        </div>

        <!-- message section -->
        <div class="px-24 py-16 rounded-tr-3xl rounded-tl-3xl bg-blue-900 text-white">
            <!-- Reach out container -->
            <h6
                class="border border-gray-200 rounded-full w-32 text-sm flex justify-center py-1 font-semibold uppercase ">
                Reach out to us</h6>
            <h1 class="py-6 text-3xl font-bold capitalized">We'd love to hear from you</h1>
            <span>Or just reach out manually to pwdproject@gmail.com</span>

            <div class="mt-10 grid grid-cols-3">
                <!-- email -->
                <div>
                    <i
                        class="fa-regular fa-envelope w-10 h-10 rounded-full bg-white opacity-80 text-gray-700 flex items-center justify-center mb-3 text-lg"></i>
                    <h1 class="text-xl tracking-wide font-bold mb-1">Email Support</h1>
                    <p class="mb-3">Our team can respond in real time.</p>
                    <span class="text-gray-300 font-semibold">pwdproject@gmail.com</span>
                </div>

                <!-- building -->
                <div>
                    <i
                        class="fa-solid fa-building w-10 h-10 rounded-full bg-white opacity-80 text-gray-700 flex items-center justify-center mb-3 text-lg"></i>
                    <h1 class="text-xl font-bold tracking-wide mb-1">Visit Our Office</h1>
                    <p class="mb-3">Visit our location in real time.</p>
                    <span class="text-gray-300 font-semibold">Bacolor, Pampanga</span>
                </div>

                <div>
                    <i
                        class="fa-solid fa-phone w-10 h-10 rounded-full bg-white opacity-80 text-gray-700 flex items-center justify-center mb-3 text-lg"></i>
                    <h1 class="text-xl font-bold tracking-wide mb-1">Call Us Directly</h1>
                    <p class="mb-3">Available during working hours.</p>
                    <span class="text-gray-300 font-semibold">0987654321</span>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section -->
    <?php
    include 'include/landing/footer.php';
    ?>
</body>

</html>