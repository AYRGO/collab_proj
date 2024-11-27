<?php
    session_start();
    $_SESSION['id'] = $id;
    header("Location: ../../page/user/index.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" href="img/logo.png" type="image/png">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    boxShadow: {
                        'blue': '0px 5px 15px rgba(16, 185, 129, 0.45)',
                    },
                }
            }
        }
    </script>
</head>

<body class="md:h-screen">
    <section class="md:flex items-start md:justify-between md:h-full" id="loginSection">
        <!-- sign up description -->
        <div
            class="w-full h-auto md:w-1/2 bg-blue-950 flex flex-col items-center md:h-full p-6 md:py-8 lg:py-10 md:px-10 text-white">
            <h6 class="font-thin text-xl">Hello,</h6>
            <span class="text-3xl text-center font-bold lg:text-4xl">We're Glad You're Here!</span>

            <div class="flex flex-col items-center my-4 md:my-8 lg:my-16">
                <img src="img/logo.png" class="w-40 md:w-60" alt="PWD Project Logo">
                <h5 class="text-4xl lg:text-5xl font-extrabold mb-4 lg:py-1">PWD Project</h5>
                <p class="font-thin text-lg text-center mb-3 md:mb-0">
                    Welcome to the PWD Project, where we strive to create inclusive spaces and provide access to
                    opportunities for persons with disabilities. Join us in making a difference!
                </p>
            </div>
            <h6 class="font-bold text-lg">Bacolor, Pampanga | Sta.Ines</h6>
        </div>

        <!-- sign up section -->
        <div class="w-full h-auto md:w-1/2 md:h-full flex flex-col items-center py-16 px-10">
            <h4 class="text-4xl font-bold">Hello!</h4>
            <h5 class="text-md">Log in to your account</h5>

            <form action="login.php" method="POST" class="my-8 md:my-16 w-full">
                <input type="email"
                    class="w-full border border-gray-400 p-5 rounded-lg outline-blue-800 bg-white mb-5 placeholder:text-lg"
                    name="email" id="email" placeholder="Email" required autofocus>
                <input type="password"
                    class="w-full border border-gray-400 p-5 rounded-lg outline-blue-800 bg-white mb-5 placeholder:text-lg"
                    name="password" id="password" placeholder="Password" required>
                <span></span>
                <div class="flex justify-center mt-7">
                    <button type="submit"
                        class="w-1/2 bg-blue-900 text-white font-bold text-xl p-5 rounded-lg hover:shadow-xl hover:bg-blue-700 active:bg-blue-600"
                        id="loginBtn">Login</button>
                </div>
            </form>

            <p class="text-gray-500 text-md">Don't have an account? <span id="signUpLink"
                    class="text-black font-semibold underline-transition transition duration-150 ease-out hover:text-red-800 cursor-pointer">Signup
                    Now</span></p>
        </div>
    </section>

    <!-- sign up container -->
    <section
        class="absolute flex justify-center top-0 m-auto left-0 w-full backdrop-blur-md shadow-xl h-screen backdrop-blur-md hidden"
        id="signUpContainer">
        <div class="relative w-full h-full md:w-1/2 md:h-[90%] md:m-auto bg-white border border-transparent rounded-lg shadow-lg p-10 overflow-y-scroll signupSection"
            data-aos="fade-up">
            <h5 class="text-2xl md:text-3xl font-bold mb-1">Create your account</h5>
            <i class="absolute right-4 top-8 fa-solid fa-circle-xmark text-3xl md:text-4xl text-blue-900 cursor-pointer hover:text-blue-700 active:text-blue-600"
                id="closeBtn"></i>

            <span class="font-md">Please fill out the form to create your account.</span>
            <hr class="my-4 border-blue-800">

            <form action="register.php" method="POST" id="signUpForm">
                <div class="lg:flex lg:justify-between gap-12">
                    <div class="w-full">
                        <label for="fname" class="font-semibold text-lg">First Name</label>
                        <input type="text"
                            class="w-full border border-gray-400 p-3 rounded-md outline-blue-800 bg-white mb-5 placeholder:text-lg"
                            name="fname" placeholder="ex: Juan" required autofocus>
                    </div>

                    <div class="w-full">
                        <label for="lname" class="font-semibold text-lg">Last Name</label>
                        <input type="text"
                            class="w-full border border-gray-400 p-3 rounded-md outline-blue-800 bg-white mb-5 placeholder:text-lg"
                            name="lname" placeholder="ex: Cruz" required>
                    </div>
                </div>

                <label for="email" class="font-semibold text-lg">Email</label>
                <input type="email"
                    class="block w-full border border-gray-400 p-3 rounded-md outline-blue-800 bg-white mb-5 placeholder:text-lg"
                    name="email" placeholder="ex: juandelacruz@gmail.com" required>

                <label for="password" class="font-semibold text-lg">Password</label>
                <input type="password"
                    class="block w-full border border-gray-400 p-3 rounded-md outline-blue-800 bg-white mb-5 placeholder:text-lg"
                    name="password" placeholder="**************" required
                    pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{10,}"
                    title="Password must contain at least one uppercase letter, one lowercase letter, one number, one special character, and be at least 10 characters long">

                <label for="contact" class="font-semibold text-lg">Contact Number (optional)</label>
                <input type="text"
                    class="block w-full border border-gray-400 p-3 rounded-md outline-blue-800 bg-white mb-5 placeholder:text-lg"
                    name="contact" placeholder="ex: 0987654321">

                <label for="dob" class="font-semibold text-lg">Date of Birth</label>
                <input type="date"
                    class="block w-full border border-gray-400 p-3 rounded-md outline-blue-800 bg-white mb-5 placeholder:text-lg"
                    name="dob" required>

                <label for="usertype" class="font-semibold text-lg">User Type</label>
                <select class="w-full border border-gray-400 p-3 rounded-md outline-blue-800 bg-white mb-5"
                    name="usertype">
                    <option value="" disabled selected>Select user type</option>
                    <option value="PWD">PWD</option>
                    <option value="Family Member">Family Member</option>
                    <option value="Advocate">Advocate</option>
                    <option value="General Public">General Public</option>
                </select>

                <div class="mb-3">
                    <input type="checkbox" class="transform scale-150 mr-1" id="termsCondition">
                    <label for="termsCondition" class="text-lg font-semibold">I agree to the <a href=""
                            class="text-blue-800">Terms and Conditions</a></label>
                </div>

                <button type="submit"
                    class="w-1/2 block m-auto bg-sky-900 text-white font-bold text-xl p-4 rounded-lg hover:shadow-xl hover:bg-sky-800 active:bg-sky-600"
                    id="signupBtn">Sign Up</button>
            </form>
        </div>
    </section>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="src/signup.js"></script>
</body>

</html>