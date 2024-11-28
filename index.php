<!doctype html>
<html class="scroll-smooth">

<head>
    <style>
        .clip-triangle-top-left {
            clip-path: polygon(0 0, 115% 0, 0 115%);
        }

        .t1 {
            background-image: url('img/features/t1.jpg');
        }

        .t2 {
            background-image: url('img/features/t2.jpg');
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWD Project</title>
    <link rel="icon" href="img/logo.png" type="image/png">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    },
                    backgroundImage: {
                        'hero': "url('img/logo/pwd-hero.png')",
                        'overview': "url('img/logo/overview-pic.jpg')",
                        'blob': "url('img/logo/blob.png')",
                        'test1': "url('img/logo/features/t1.jpg')",

                    },
                    objectPosition: {
                        'custom-center': 'center calc(25% - 20px);',
                        'custom-bottom': 'center calc(50% - 100px);'
                    }
                }
            }
        }
    </script>
</head>

<body class="text-gray-700 text-md">
    <!-- header section -->
    <?php
    include 'include/landing/header.php';
    ?>

    <!-- navbar section -->
    <?php
    $page = 'index';
    include 'include/landing/navbar.php';
    ?>


    <div class="fixed bottom-6 right-8 z-20 flex items-center justify-center bg-blue-950 text-white w-10 h-10 rounded-full shadow-lg cursor-pointer hover:bg-blue-800 transition duration-300 group"
        id="infoTool">
        <i class="fa-solid fa-circle-info text-2xl"></i>
        <div
            class="absolute bottom-12 w-44 right-2 bg-gray-800 text-white text-sm py-2 px-4 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            Click to see more info
        </div>


    </div>
    <div class="hidden z-20 fixed right-8 bottom-6 bg-gray-800 bg-opacity-90 rounded-2xl  p-3 md:p-6 " id="infoContent">
        <div class="text-left">
            <h1 class="text-lg nd:text-2xl font-semibold text-gray-100 mb-2">Opening Hours:</h1>
            <span id="openingHours" class="text-md md:text-lg text-gray-200"></span>
        </div>
        <hr class="w-10/12 border-t-2 border-gray-300 mx-auto my-4">

        <div class="text-left">
            <h1 class="text-lg nd:text-2xl font-semibold text-gray-100 mb-2">Located At:</h1>
            <span class="text-md md:text-lg text-gray-200">Bacolor, Pampanga</span>
        </div>

        <hr class="w-10/12 border-t-2 border-gray-300 mx-auto my-4">
        <div class="text-left">
            <h1 class="text-lg nd:text-2xl font-semibold text-gray-100 mb-2">Get Directions:</h1>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123300.38624539529!2d120.55341713439601!3d15.040532873113833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f625d57350d9%3A0xc1bb51cbb60c9f50!2sBacolor%20Municipal%20Hall!5e0!3m2!1sen!2sph!4v1731505480965!5m2!1sen!2sph"
                width="170" height="150" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!--hero section  -->
    <section class="p-2 m-auto">
        <div class="h-[80vh]  relative ">
            <!-- Image -->
            <img src="img/bg/hero.jpg" alt=""
                class="h-full w-full object-cover object-left md:object-custom-bottom rounded-lg">

            <!-- Gradient Overlay (Fixed) -->
            <div
                class="absolute inset-0 bg-gradient-to-r md:h-full from-blue-950 via-transparent to-transparent rounded-lg flex items-center ">
                <div class="pl-8 flex flex-col w-10/12 md:w-1/2">
                    <h1 class="text-white text-xl md:text-4xl lg:text-5xl font-extrabold uppercase md:leading-snug">
                        Empowering Lives: Support For Persons with Disabilities
                    </h1>
                    <p class="mt-4 w-full sm:w-3/4 md:w-2/3 text-white">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi esse, cupiditate sit debitis
                        distinctio illum inventore molestias nesciunt.
                    </p>

                    <div class="py-3 md:py-8 flex flex-col md:flex-row gap-4 md:gap-8">
                        <div class="flex flex-col items-start md:items-center justify-center group">
                            <div>
                                <?php
                                // Check if the user is logged in and set the correct link
                                if (isset($_SESSION['user'])) {
                                    echo '<a href="page/user/pwd_form.php">';
                                } else {
                                    echo '<a href="#" onclick="alertLogin()">';
                                }
                                ?>
                                <div
                                    class="text-white flex items-center gap-3 cursor-pointer group-hover:text-blue-400 transition duration-300 transform group-hover:scale-105">
                                    <h1 class="font-semibold">Apply for PWD Card</h1>
                                    <span class="material-symbols-outlined text-sm">north_east</span>
                                </div>

                                </a>
                            </div>
                            <!-- horizontal line under the apply now -->
                            <div
                                class="border-t border-white w-[140px] mt-2 group-hover:border-blue-400 group-hover:border-t-2 transition duration-300 transform group-hover:scale-105">
                            </div>
                        </div>


                        <div class="flex flex-col items-start md:items-center justify-center group">
                            <div
                                class="text-white flex items-center gap-3 cursor-pointer group-hover:text-blue-400 transition duration-300 transform group-hover:scale-105">
                                <h1 class="font-semibold">Join Our Community</h1>
                                <span class="material-symbols-outlined text-sm">
                                    north_east
                                </span>
                            </div>
                            <div
                                class="border-t border-white w-[140px] block mt-2 group-hover:border-blue-400 group-hover:border-t-2 transition duration-300 transform group-hover:scale-105">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--end of gradient  -->




        </div>
    </section>

    <!-- stats section -->
    <section class="py-10 md:py-20 px-8 md:px-16">
        <div
            class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4 md:gap-16 mb-8 md:mb-16">
            <h1 class="w-full md:w-1/2 text-xl md:text-4xl font-semibold text-blue-700 leading-snug">
                Empowering People with Disabilities
                <span class="text-gray-700">through tailored solutions and inclusive support systems.</span>
            </h1>
            <p class="w-full md:w-1/2 text-md md:text-lg text-gray-700 leading-relaxed">
                Our goal is to create opportunities for independence, enhance personal well-being, and foster inclusive
                communities
                where everyone has the chance to thrive and contribute.
            </p>
        </div>

        <!-- Cards Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Card 1: Access to healthcare -->
            <div
                class="border border-blue-700 rounded-md p-3 md:p-6 text-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl hover:bg-blue-50">
                <span class="material-symbols-outlined text-blue-700 text-4xl md:text-5xl mb-2 md:mb-4">
                    accessibility_new
                </span>
                <p class="text-md md:text-lg text-gray-700 font-medium">Access to healthcare and rehabilitation services
                </p>
            </div>

            <!-- Card 2: Employment training -->
            <div
                class="border border-blue-700 rounded-md p-3 md:p-6 text-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl hover:bg-blue-50">
                <span class="material-symbols-outlined text-blue-700 text-4xl md:text-5xl mb-2 md:mb-4">
                    model_training
                </span>
                <p class="md:text-lg text-gray-700 font-medium">Employment training and job placement assistance</p>
            </div>

            <!-- Card 3: Educational resources -->
            <div
                class="border border-blue-700 rounded-md p-3 md:p-6 text-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl hover:bg-blue-50">
                <span class="material-symbols-outlined text-blue-700 text-4xl md:text-5xl mb-2 md:mb-4">
                    cast_for_education
                </span>
                <p class="md:text-lg text-gray-700 font-medium">Educational resources and support</p>
            </div>

            <!-- Card 4: Community engagement -->
            <div
                class="border border-blue-700 rounded-md p-3 md:p-6 text-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl hover:bg-blue-50">
                <span class="material-symbols-outlined text-blue-700 text-4xl md:text-5xl mb-2 md:mb-4">
                    communities
                </span>
                <p class="md:text-lg text-gray-700 font-medium">Community engagement initiatives</p>
            </div>
        </div>
    </section>


    <!-- services section -->
    <section class=" bg-opacity-80 rounded-3xl px-8 md:px-16 md:py-12">
        <div class="container mx-auto">
            <!-- title -->
            <div class="py-3 md:py-8">
                <h1 class="text-lg md:text-xl font-semibold text-center">Our Services for PWDs</h1>
                <p class="text-xl md:text-3xl font-extrabold leading-relaxed uppercase text-center text-blue-800">
                    Promoting inclusivity and equal opportunities for all.
                </p>
            </div>


            <!-- Information and Resources -->
            <div class="flex flex-col md:flex-row items-center justify-between py-4 md:py-10 gap-16">
                <div class="w-full md:w-[55%] gap-2 flex flex-start cursor-pointer">
                    <!-- for the icon -->
                    <div class="w-52 h-full">
                        <div
                            class="w-10 md:w-24 h-10 md:h-14 bg-blob bg-center bg-contain bg-no-repeat flex items-center justify-center">
                            <svg class="w-4 md:w-8 h-4 md:h-8 text-blue-800" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>

                    </div>

                    <div class="" id="informationResources">
                        <h1 class="text-xl md:text-3xl font-bold text-gray-800 mb-2 md:mb-3">Information and Resources
                        </h1>
                        <p class="leading-loose md:text-lg">
                            We provide essential information on PWD rights, entitlements, and services, ensuring
                            individuals and families are well-informed. Our resources cover legal protections,
                            assistance programs, and community support options, empowering individuals to make informed
                            decisions and navigate available systems effectively.
                        </p>
                    </div>
                </div>



                <!-- img section for the third section for the pwd services -->
                <div class="flex flex-col md:flex-row items-center gap-4 md:gap-12 w-full md:w-[40%] relative">
                    <div class="w-full h-[400px] relative">
                        <img src="img/features/f2.jpg" alt="Feature Image"
                            class="w-full h-full object-cover object-left md:object-center rounded-lg">

                        <!-- the overlap div -->
                        <div
                            class="absolute -right-12 top-[-40px] bg-gray-300 bg-opacity-80 h-56 w-64 rounded-2xl p-6 shadow-lg transition-transform duration-300 transform hover:scale-105">
                            <h1 class="text-2xl font-bold text-gray-800 mb-2">Job Opportunities</h1>
                            <p class="text-sm text-gray-700">
                                Explore various job openings tailored for PWDs, promoting inclusive employment.
                            </p>
                            <button
                                class="mt-4 bg-yellow-400 text-blue-900 rounded-full px-4 py-2 font-semibold shadow-md hover:bg-yellow-300 transition">
                                View Openings
                            </button>
                        </div>
                    </div>

                    <div class="flex md:flex-col gap-2 md:gap-0 items-center">
                        <span class="text-6xl text-yellow-400 animate-bounce md:mt-[-10px]">&#8226;</span>
                        <span class="text-4xl text-gray-300">&#8226;</span>
                        <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                        <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    </div>
                </div>
            </div>

            <!-- second div (Job opportunities) -->
            <div class="flex flex-col md:flex-row items-center justify-between py-4 md:py-10 gap-16">
                <div class="w-full md:w-[55%] gap-2 flex flex-start cursor-pointer">
                    <!-- for the icon -->
                    <div class="w-52 h-full">
                        <div
                            class="w-10 md:w-24 h-10 md:h-14 bg-blob bg-center bg-contain bg-no-repeat flex items-center justify-center">
                            <svg class="w-4 md:w-8 h-4 md:h-8 text-blue-700" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 2a10 10 0 110 20 10 10 0 010-20zm-1 10h2v6h-2v-6zm1-7a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" />
                            </svg>
                        </div>

                    </div>

                    <div class="" id="jobOpportunities">
                        <h1 class="text-xl md:text-3xl font-bold text-gray-800 mb-2 md:mb-3">Job Opportunities</h1>
                        <p class="leading-loose md:text-lg">
                            We connect people with disabilities (PWDs) to accessible job opportunities and promote
                            inclusive
                            workplaces. By partnering with employers and offering resources like resume workshops and
                            interview prep, we empower individuals to achieve their career goals.
                        </p>
                    </div>
                </div>



                <!-- img section for the third section for the pwd services -->
                <div class="flex flex-col md:flex-row items-center gap-4 md:gap-12 w-full md:w-[40%] relative">
                    <div class="w-full h-[400px] relative">
                        <img src="img/features/f1.jpg" alt="Feature Image"
                            class="w-full h-full object-cover object-center rounded-lg">

                        <!-- the overlap div -->
                        <div
                            class="absolute -left-12 bottom-[-30px] bg-gray-300 bg-opacity-80 h-56 w-64 rounded-2xl p-6 shadow-lg transition-transform duration-300 transform hover:scale-105">
                            <h1 class="text-2xl font-bold text-gray-800 mb-2">Job Opportunities</h1>
                            <p class="text-sm text-gray-700">
                                Explore various job openings tailored for PWDs, promoting inclusive employment.
                            </p>
                            <button
                                class="mt-4 bg-yellow-400 text-blue-900 rounded-full px-4 py-2 font-semibold shadow-md hover:bg-yellow-300 transition">
                                View Openings
                            </button>
                        </div>
                    </div>

                    <div class="flex md:flex-col gap-2 md:gap-0 items-center">
                        <span class="text-4xl text-gray-300">&#8226;</span>
                        <span class="text-6xl text-yellow-400 animate-bounce md:mt-[-10px]">&#8226;</span>
                        <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                        <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    </div>
                </div>
            </div>

            <!-- third div (empowering inclusion)-->
            <div class="flex flex-col md:flex-row items-center justify-between py-4 md:py-10 gap-16">
                <div class="w-full md:w-[55%] gap-2 flex flex-start cursor-pointer">
                    <!-- for the icon -->
                    <div class="w-52 h-full">
                        <div
                            class="w-10 md:w-24 h-10 md:h-14 bg-blob bg-center bg-contain bg-no-repeat flex items-center justify-center">
                            <svg class="w-4 md:w-8 h-4 md:h-8 text-blue-700" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 2a10 10 0 110 20 10 10 0 010-20zm-1 10h2v6h-2v-6zm1-7a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" />
                            </svg>
                        </div>

                    </div>

                    <div class="" id="empoweringInclusion">
                        <h1 class="text-xl md:text-3xl font-bold text-gray-800 mb-2 md:mb-3">Empowering Inclusion</h1>
                        <p class="leading-loose md:text-lg">
                            Our organization is dedicated to supporting people with disabilities (PWDs) by providing
                            essential resources and advocacy. We work with communities to raise awareness, promote
                            inclusive practices, and ensure that individuals have access to the services and support
                            they need to thrive.
                        </p>
                    </div>
                </div>

                <!-- img section for the third section for the pwd services -->
                <div class="flex flex-col md:flex-row items-center gap-4 md:gap-12 w-full md:w-[40%] relative">
                    <div class="w-full h-[400px] relative">
                        <img src="img/features/f3.jpg" alt="Feature Image"
                            class="w-full h-full object-cover object-center rounded-lg">

                        <!-- the overlap div -->
                        <div
                            class="absolute -right-12 bottom-[-30px] bg-gray-300 bg-opacity-80 h-56 w-64 rounded-2xl p-6 shadow-lg transition-transform duration-300 transform hover:scale-105">
                            <h1 class="text-2xl font-bold text-gray-800 mb-2">Job Opportunities</h1>
                            <p class="text-sm text-gray-700">
                                Explore various job openings tailored for PWDs, promoting inclusive employment.
                            </p>
                            <button
                                class="mt-4 bg-yellow-400 text-blue-900 rounded-full px-4 py-2 font-semibold shadow-md hover:bg-yellow-300 transition">
                                View Openings
                            </button>
                        </div>
                    </div>

                    <div class="flex md:flex-col gap-2 md:gap-0 items-center">
                        <span class="text-4xl text-gray-300">&#8226;</span>
                        <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                        <span class="text-6xl text-yellow-400 animate-bounce md:mt-[-10px]">&#8226;</span>
                        <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    </div>
                </div>
            </div>


            <!-- fourth div -->

            <div class="flex flex-col md:flex-row items-center justify-between py-4 md:py-10 gap-16">
                <div class="w-full md:w-[55%] gap-2 flex flex-start cursor-pointer">
                    <!-- for the icon -->
                    <div class="w-52 h-full">
                        <div
                            class="w-10 md:w-24 h-10 md:h-14 bg-blob bg-center bg-contain bg-no-repeat flex items-center justify-center">
                            <svg class="w-4 md:w-8 h-4 md:h-8 text-blue-700" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M17 9h-3v2h3v2h-3v2h3v2h-7V7h7v2zm-2 0h-3V7h3v2zM4 6v12h10V6H4zm1 10v-8h8v8H5z" />
                            </svg>
                        </div>

                    </div>

                    <div class="" id="pwdCardApplications">
                        <h1 class="text-xl md:text-3xl font-bold text-gray-800 mb-2 md:mb-3">PWD Card Application</h1>
                        <p class="leading-loose md:text-lg">
                            We facilitate the PWD card application process, ensuring individuals with disabilities can
                            access essential resources and support. By streamlining applications and providing guidance,
                            we help PWDs secure the benefits and opportunities they need to thrive.
                        </p>
                    </div>
                </div>

                <!-- img section for the third section for the pwd services -->
                <div class="flex flex-col md:flex-row items-center gap-4 md:gap-12 w-full md:w-[40%] relative">
                    <div class="w-full h-[400px] relative">
                        <img src="img/features/f4.jpg" alt="Feature Image"
                            class="w-full h-full object-cover object-center rounded-lg">

                        <!-- the overlap div -->
                        <div
                            class="absolute -right-12 bottom-[-30px] bg-gray-300 bg-opacity-80 h-56 w-64 rounded-2xl p-6 shadow-lg transition-transform duration-300 transform hover:scale-105">
                            <h1 class="text-2xl font-bold text-gray-800 mb-2">Job Opportunities</h1>
                            <p class="text-sm text-gray-700">
                                Explore various job openings tailored for PWDs, promoting inclusive employment.
                            </p>
                            <button
                                class="mt-4 bg-yellow-400 text-blue-900 rounded-full px-4 py-2 font-semibold shadow-md hover:bg-yellow-300 transition">
                                View Openings
                            </button>
                        </div>
                    </div>

                    <div class="flex md:flex-col gap-2 md:gap-0 items-center">
                        <span class="text-4xl text-gray-300">&#8226;</span>
                        <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                        <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                        <span class="text-6xl text-yellow-400 animate-bounce md:mt-[-10px]">&#8226;</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-96 relative">
        <!-- stats section with testimony -->
        <div class="bg-gray-200 py-64 rounded-tl-3xl rounded-tr-3xl">
            <!-- overlap div -->
            <div class="absolute -top-16 flex items-center justify-center w-full h-screen">
                <div class="t1 bg-cover bg-center w-[95%] md:w-[75%] h-[80vh] rounded-2xl relative">
                    <!-- overlay gradient -->
                    <div
                        class="absolute inset-0 bg-gradient-to-l from-blue-950 via-transparent to-transparent rounded-lg flex items-center">
                    </div>
                    <!-- end of overlay gradient -->

                    <!-- testimony div -->
                    <div class="bg-blue-900 opacity-80 w-10/12 md:w-1/3 text-white text-sm md:text-md mt-6 py-3 px-8">
                        <h6 class="font-extrabold text-xl uppercase tracking-wider">Real Stories, Real Impact</h6>
                    </div>
                    <!--end testimony div -->

                    <!-- flex -->
                    <div class="py-0 md:py-8 px-4 md:px-10 flex items-start md:items-end justify-between py-8 md:py-0">
                        <div class="w-3/4">
                            <svg class="w-14 md:w-14 h-10 md:h-16 text-white italic" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24" transform="scale(-1, 1)">
                                <path fill-rule="evenodd"
                                    d="M6 6a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a3 3 0 0 1-3 3H5a1 1 0 1 0 0 2h1a5 5 0 0 0 5-5V8a2 2 0 0 0-2-2H6Zm9 0a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a3 3 0 0 1-3 3h-1a1 1 0 1 0 0 2h1a5 5 0 0 0 5-5V8a2 2 0 0 0-2-2h-3Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <p id="testimonialMessage"
                                class="w-8/12 text-gray-100 text-lg md:text-2xl mb-2 md:mb-14 font-semibold">
                                Thanks to the PWD services offered here, I can now participate in community events and
                                activities that I used to miss out on. The support provided has been instrumental in
                                ensuring that I have the tools and resources I need to thrive.
                            </p>

                            <!-- dot -->
                            <div id="dotPattern">
                                <span class="text-4xl text-blue-700">&#8226;</span>
                                <span class="text-4xl text-gray-200">&#8226;</span>
                                <span class="text-4xl text-gray-200">&#8226;</span>
                                <span class="text-4xl text-gray-200">&#8226;</span>
                                <span class="text-4xl text-gray-200">&#8226;</span>
                            </div>
                            <!-- end of dot -->
                        </div>

                        <!-- right side absolute -->
                        <div class="text-white z-10 space-y-4 md:space-y-8">
                            <!-- right side total -->
                            <div class="w-full">
                                <div class="flex items-center">
                                    <h1 class="text-xl md:text-5xl font-extrabold uppercase mb-2">4.9/5</h1>
                                    <i class="fa-solid fa-star text-md md:text-xl ml-1"></i>
                                </div>
                                <span class="text-sm md:text-md text-gray-100">Satisfaction Rate from,<br>PWDs</span>
                            </div>

                            <div class="w-full">
                                <h1 class="text-xl md:text-5xl font-extrabold uppercase mb-2">1.03k</h1>
                                <span class="text-sm md:text-md text-gray-100">Total PWD Registered</span>
                            </div>

                            <div class="w-full">
                                <h1 class="text-xl md:text-5xl font-extrabold uppercase mb-2">2.01k</h1>
                                <span class="text-sm md:text-md text-gray-100">Total Community Members</span>
                            </div>

                            <div class="w-full">
                                <h1 class="text-xl md:text-5xl font-extrabold uppercase mb-2">50</h1>
                                <span class="text-sm md:text-md  text-gray-100">Total Services Offered</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end of overlap -->


            <!-- vision section -->
            <div class="py-6 md:py-12 px-10 overflow-hidden">
                <div class="flex flex-col md:flex-row items-center justify-between gap-10">

                    <!-- first div (description for the vision) -->
                    <div class="w-full md:w-1/2">
                        <h1 class="text-xl md:text-3xl font-bold">Empowering Lives Through Accessibility</h1>
                        <p class="text-md md:text-lg leading-relaxed py-3">
                            We strive to create an inclusive environment for persons with disabilities, providing
                            essential
                            services and support that enhance their quality of life. Our vision is rooted in the belief
                            that
                            everyone deserves equal access to opportunities and resources, enabling them to fully
                            participate in
                            society.
                        </p>

                        <hr class="py-3 text-gray-400">

                        <div class="space-y-3">
                            <div class="flex items-start md:items-center">
                                <svg class="w-6 h-6 text-blue-700 mr-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-md md:text-lg"><strong>Inclusive Community:</strong> A world where
                                    everyone is
                                    welcomed.</span>
                            </div>

                            <div class="flex items-start md:items-center">
                                <svg class="w-6 h-6 text-blue-700 mr-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-md md:text-lg"><strong>Access to Opportunities:</strong> Ensuring
                                    access to
                                    education and
                                    jobs.</span>
                            </div>

                            <div class="flex items-start md:items-center">
                                <svg class="w-6 h-6 text-blue-700 mr-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-md md:text-lg"><strong>Awareness and Advocacy:</strong> Promoting
                                    rights and
                                    inclusive
                                    policies.</span>
                            </div>
                            <div class="flex items-start md:items-center"">
                                <svg class=" w-6 h-6 text-blue-700 mr-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z"
                                    clip-rule="evenodd" />
                                </svg>
                                <span class="text-md md:text-lg"><strong>Empowerment Through Support:</strong> Helping
                                    individuals
                                    and
                                    families thrive.</span>
                            </div>
                        </div>

                        <p class="mt-3 text-md md:text-lg leading-relaxed">
                            Our vision is to foster an inclusive community where every person with a disability has
                            access to
                            the support and resources they need to thrive.
                        </p>
                    </div>

                    <!-- second div (img section for vision) -->
                    <div class="w-full md:w-1/2 h-[75vh]">
                        <img src="img/logo/vision.jpg" class="w-full h-full object-cover object-center rounded-lg"
                            alt="Image depicting a child with disabilities sharing a moment of friendship">
                    </div>
                </div>
            </div>

            <!-- mission section -->
            <div class="py-8 px-10 overflow-hidden">
                <div class="flex flex-col md:flex-row items-center justify-between gap-10">

                    <!-- first div (img section for vision) -->
                    <div class="w-full md:w-1/2 h-[75vh]">
                        <img src="img/logo/mission.jpg" class="w-full h-full object-cover object-center rounded-lg"
                            alt="Image depicting a child with disabilities sharing a moment of friendship">
                    </div>

                    <!-- second div (description for the mission) -->
                    <div class="w-full md:w-1/2">
                        <h1 class="text-xl md:text-3xl font-bold">Empowering Lives Through Accessibility</h1>
                        <p class="text-md md:text-lg leading-relaxed py-3">
                            Our mission is to enhance the lives of persons with disabilities by providing accessible
                            resources,
                            support, and services that promote independence and inclusion within the community. We
                            believe that
                            everyone deserves the right to thrive and participate fully in society.
                        </p>

                        <hr class="py-3 text-gray-400">

                        <div class="space-y-3">
                            <div class="flex items-start md:items-center">
                                <svg class="w-6 h-6 text-blue-700 mr-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-md md:text-lg"><strong>Empower Lives:</strong> Enhancing quality of
                                    life for
                                    persons with
                                    disabilities.</span>
                            </div>

                            <div class="flex items-start md:items-center">
                                <svg class="w-6 h-6 text-blue-700 mr-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-md md:text-lg"><strong>Promote Accessibility:</strong> Ensuring access
                                    to
                                    education and
                                    jobs.</span>
                            </div>

                            <div class="flex items-start md:items-center">
                                <svg class="w-6 h-6 text-blue-700 mr-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-md md:text-lg"><strong>Foster Inclusion:</strong> Building a welcoming
                                    community
                                    for
                                    all.</span>
                            </div>
                            <div class="flex items-start md:items-center">
                                <svg class="w-6 h-6 text-blue-700 mr-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-md md:text-lg"><strong>Advocate for Change:</strong> Championing
                                    disability
                                    rights and
                                    policies.</span>
                            </div>
                        </div>

                        <p class="mt-3 text-md md:text-lg leading-relaxed">
                            Our mission is to build an inclusive community where persons with disabilities have the
                            resources
                            and support to succeed and thrive.
                        </p>
                    </div>
                </div>
            </div>

            <div class="absolute -bottom-10 flex items-center justify-center w-full h-screen">
                <div
                    class="t2 bg-cover bg-center w-full md:w-[75%] h-[70vh] rounded-2xl relative flex flex-col items-start justify-center">


                    <div class="px-10 w-[66%] md:w-1/2">
                        <h1 class="text-xl md:text-3xl text-gray-800 font-bold uppercase leading-snug mb-3">Need
                            Assistance? We're
                            Here to Help!</h1>
                        <span class="text-lg md:text-xl text-gray-700 leading-normal"> If you need help or more
                            information about
                            our services, please don't hesitate to reach out. Our team is ready to assist you!</span>

                        <div class="mt-2 md:mt-6">
                            <p class="text-md md:text-lg text-gray-700">
                                Call us at: <a href="tel:+1234567890" class="text-blue-700 font-semibold">+1 (234)
                                    567-890</a>
                            </p>
                            <p class="text-md md:text-lg text-gray-700 mt-2">
                                Or email us at: <a href="mailto:help@organization.org"
                                    class="text-blue-700 font-semibold">help@organization.org</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

    </section>







    <!-- footer -->
    <?php include 'include/landing/footer.php'; ?>

    <!-- for the animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        // for the login alert
        function alertLogin() {
            alert('Please sign in first to apply for a PWD card.');
            window.location.href = 'loginpage.php';
        }

        // for the info icon
        document.getElementById('infotool').addEventListener('click', function () {
            document.getElementById('infoContent').classList.toggle('hidden');
        });
        // for changing text in testimonialMessage
        const messages = [
            "Thanks to the PWD services, I can now participate in community events and activities that I once missed. The support has provided me with the tools and resources I need to thrive.",
            "The job opportunities offered have been life-changing. I now have a stable job that supports me and my family. I am grateful for the resources that helped me achieve my goals.",
            "The resources and support from this organization have helped me navigate the challenges of living with a disability, allowing me to live a fulfilling and independent life.",
            "The community initiatives have connected me with others and built a strong support network, promoting inclusivity and equality.",
            "These services have made a difference in my life, enabling me to engage in everyday activities I once struggled with, and I now feel more supported and included."
        ];


        let currentIndex = 0;

        function changeMessage() {
            const testimonialMessage = document.getElementById('testimonialMessage');
            const dotElement = document.getElementById('dotPattern');

            // update the testimonial message
            testimonialMessage.textContent = messages[currentIndex];

            // update the dot pattern
            let dotPattern = '';
            for (let i = 0; i < messages.length; i++) {
                if (i === currentIndex) {
                    dotPattern += `<span class="text-4xl text-blue-700">&#8226;</span>`;
                } else {
                    dotPattern += `<span class="text-4xl text-gray-200">&#8226;</span>`;
                }
            }

            dotElement.innerHTML = dotPattern;

            currentIndex = (currentIndex + 1) % messages.length;
        }

        setInterval(changeMessage, 5000);

        changeMessage();

        // for the animation
        AOS.init();

        // for the date and time
        document.addEventListener('DOMContentLoaded', () => {
            const displayDate = document.getElementById('displayDate');
            const openingHours = document.getElementById('openingHours');

            const openHours = {
                'Sunday': '7:00am - 12:00pm',
                'Monday': '7:00am - 6:00pm',
                'Tuesday': '7:00am - 6:00pm',
                'Wednesday': '7:00am - 6:00pm',
                'Thursday': '7:00am - 6:00pm',
                'Friday': '7:00am - 6:00pm',
                'Saturday': '7:00am - 5:00pm'
            };


            function showDate() {
                const now = new Date();

                const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];


                const day = days[now.getDay()];
                const month = months[now.getMonth()];
                const date = String(now.getDate()).padStart(2, '0');
                const year = now.getFullYear();

                const hours = String(now.getHours()).padStart(2, '0');
                const minutes = String(now.getMinutes()).padStart(2, '0');
                const seconds = String(now.getSeconds()).padStart(2, '0');
                displayDate.textContent = `${day} | ${month} ${date}, ${year} | ${hours}:${minutes}:${seconds}`;

                openingHours.textContent = `${openHours[day]}`;
            }

            showDate();
            setInterval(showDate, 1000);
        })
    </script>
</body>

</html>