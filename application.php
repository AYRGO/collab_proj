<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="icon" href="img/logo.png" type="image/png">
    <title>PWD Project</title>
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
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50 text-gray-700">
    <!-- header section -->
    <?php
    include 'include/landing/header.php';
    ?>

    <!-- navbar section -->
    <?php
    $page = 'application';
    include 'include/landing/navbar.php';
    ?>

    <section class="text-gray-700 mb-52 ">
        <!-- hero section for PWD application -->
        <div class="relative w-full h-[34vh] bg-blue-950 py-12 px-24 flex flex-col items-start">
            <h1 class="font-manrope text-white text-4xl font-semibold leading-10">PWD Application</h1>
            <h3 class="font-manrope text-white text-md leading-1 py-3">Welcome to the PWD Application Portal.<br> Here,
                you can apply for support, services, and benefits designed for persons with disabilities. If you have
                any questions or need assistance, don't hesitate to reach out.</h3>
            <!-- social media -->
            <!-- <div class="text-white text-xl space-x-2 py-4">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-x-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
            </div> -->
        </div>
        <!-- end of hero section -->

        <div class="absolute top-1/2 left-60 right-60 transform  -translate-y-1/2 grid grid-cols-3 gap-6 px-10 mt-10">
            <!-- for the application box -->
            <a href="#application">
                <div class="bg-gray-100 rounded-lg py-3 px-6 shadow-md cursor-pointer hover:bg-blue-900 hover:text-white
                 transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center bg-white">
                        <i class="fa-solid fa-wheelchair text-blue-800 text-2xl"></i>
                    </div>

                    <div class="py-2">
                        <h1 class="text-xl font-semibold">Application Process</h1>
                        <p class="py-1 text-sm">Steps to apply for PWD services and support.</p>
                    </div>
                </div>
            </a>


            <!-- for the benefits box -->
            <a href="#benefits">
                <div class="bg-gray-100 rounded-lg py-3 px-6 shadow-md cursor-pointer hover:bg-blue-900 hover:text-white
                 transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center bg-white">
                        <i class="fa-solid fa-hands-helping text-blue-800 text-2xl"></i>
                    </div>

                    <div class="py-1">
                        <h1 class="text-xl font-semibold">Benefits</h1>
                        <p class="py-1 text-sm">Entitlements like financial aid and discounts for PWDs</p>
                    </div>
                </div>
            </a>


            <!-- for the law for them -->
            <div class="bg-gray-100 rounded-lg py-3 px-6 shadow-md cursor-pointer hover:bg-blue-900 hover:text-white
                 transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl">
                <div class="w-12 h-12 rounded-full flex items-center justify-center bg-white">
                    <i class="fa-solid fa-gavel text-blue-800 text-2xl"></i>
                </div>

                <div class="py-1">
                    <h1 class="text-xl font-semibold">PWD Laws</h1>
                    <p class="py-1 text-sm">Laws ensuring the rights and protection of PWDs.</p>
                </div>
            </div>

        </div>

    </section>

    <!-- steps on how to apply for pwd card -->
    <section class="px-24 py-20 bg-gray-200" id="application">
        <!-- Title -->
        <h1 class="text-3xl font-semibold text-blue-900 mb-4">PWD Online Application Process</h1>
        <!-- Description -->
        <p class="text-lg text-gray-700">
            Follow these simple steps to complete your application and gain access to the benefits and support available
            for persons with disabilities.
        </p>

        <!-- first step -->
        <div class="flex flex-col md:flex-row items-center justify-between py-4 md:py-10 gap-16">
            <div class="w-full md:w-[50%] gap-2 flex flex-start cursor-pointer">
                <!-- for the icon -->
                <div class="w-52 h-full">
                    <div
                        class="w-10 md:w-24 h-10 md:h-14 bg-blob bg-center bg-contain bg-no-repeat flex items-center justify-center">
                        <i
                            class="fa-solid fa-1 text-sm w-6 h-6 rounded-full bg-blue-800 text-white flex items-center justify-center"></i>
                    </div>

                </div>

                <div class="">
                    <h1 class="text-xl md:text-3xl font-bold text-gray-800 mb-2 md:mb-3">Sign In to Get Started
                    </h1>
                    <p class="leading-loose md:text-lg">
                        To begin your application process, sign in using your account. Hover over the profile icon on
                        the right side of the navigation bar and click "Sign In".
                    </p>
                </div>
            </div>

            <!-- img section for the third section for the pwd services -->
            <div class="flex flex-col md:flex-row items-center gap-4 w-full md:w-[50%] relative">
                <div class="w-full h-[300px] relative">
                    <img src="img/application/step1.png" alt="Screenshot - showing the sign up navigation"
                        class="w-full h-full object-cover object-left rounded-lg">
                </div>

                <div class="flex md:flex-col gap-2 md:gap-0 items-center">
                    <span class="text-6xl text-yellow-400 animate-bounce md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                </div>
            </div>
        </div>

        <!-- second step -->
        <div class="flex flex-col md:flex-row items-center justify-between py-4 md:py-10 gap-16">
            <div class="w-full md:w-[50%] gap-2 flex flex-start cursor-pointer">
                <!-- for the icon -->
                <div class="w-52 h-full">
                    <div
                        class="w-10 md:w-24 h-10 md:h-14 bg-blob bg-center bg-contain bg-no-repeat flex items-center justify-center">
                        <i
                            class="fa-solid fa-2 text-sm w-6 h-6 rounded-full bg-blue-800 text-white flex items-center justify-center"></i>
                    </div>

                </div>

                <div class="">
                    <h1 class="text-xl md:text-3xl font-bold text-gray-800 mb-2 md:mb-3">Create an Account</h1>
                    </h1>
                    <p class="leading-loose md:text-lg">
                        Create an account by clicking the "Sign Up" button in the navigation bar. Fill in the required
                        details and submit the form. If you already have an account, proceed to the next step.
                    </p>
                </div>
            </div>

            <!-- img section for the third section for the pwd services -->
            <div class="flex flex-col md:flex-row items-center gap-4 w-full md:w-[50%] relative">
                <div class="w-full h-[300px] relative">
                    <img src="img/application/step2.png" alt="Screenshot - showing the sign up form"
                        class="w-full h-full object-cover object-left rounded-lg">
                </div>

                <div class="flex md:flex-col gap-2 md:gap-0 items-center">

                    <span class="text-4xl text-gray-300">&#8226;</span>
                    <span class="text-6xl text-yellow-400 animate-bounce md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                </div>
            </div>
        </div>


        <!-- third step -->
        <div class="flex flex-col md:flex-row items-center justify-between py-4 md:py-10 gap-16">
            <div class="w-full md:w-[50%] gap-2 flex flex-start cursor-pointer">
                <!-- for the icon -->
                <div class="w-52 h-full">
                    <div
                        class="w-10 md:w-24 h-10 md:h-14 bg-blob bg-center bg-contain bg-no-repeat flex items-center justify-center">
                        <i
                            class="fa-solid fa-3 text-sm w-6 h-6 rounded-full bg-blue-800 text-white flex items-center justify-center"></i>
                    </div>

                </div>

                <div class="">
                    <h1 class="text-xl md:text-3xl font-bold text-gray-800 mb-2 md:mb-3">Log in to Your Account</h1>
                    </h1>
                    <p class="leading-loose md:text-lg">
                        If you already have an account, log in by entering your credentials and clicking the "Log In"
                        button.
                        Ensure that your information is accurate to avoid login issues. If you've forgotten your
                        password, use the "Forgot Password?" link to reset it.
                    </p>
                </div>
            </div>

            <!-- img section for the third section for the pwd services -->
            <div class="flex flex-col md:flex-row items-center gap-4 w-full md:w-[50%] relative">
                <div class="w-full h-[300px] relative">
                    <img src="img/application/step3.png" alt="Screenshot - showing the log in form"
                        class="w-full h-full object-cover object-left rounded-lg">
                </div>

                <div class="flex md:flex-col gap-2 md:gap-0 items-center">
                    <span class="text-4xl text-gray-300">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-6xl text-yellow-400 animate-bounce md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                </div>
            </div>
        </div>

        <!-- fourth step -->
        <div class="flex flex-col md:flex-row items-center justify-between py-4 md:py-10 gap-16">
            <div class="w-full md:w-[50%] gap-2 flex flex-start cursor-pointer">
                <!-- for the icon -->
                <div class="w-52 h-full">
                    <div
                        class="w-10 md:w-24 h-10 md:h-14 bg-blob bg-center bg-contain bg-no-repeat flex items-center justify-center">
                        <i
                            class="fa-solid fa-4 text-sm w-6 h-6 rounded-full bg-blue-800 text-white flex items-center justify-center"></i>
                    </div>

                </div>

                <div class="">
                    <h1 class="text-xl md:text-3xl font-bold text-gray-800 mb-2 md:mb-3">Start Your PWD Application
                    </h1>
                    <p class="leading-loose md:text-lg">
                        After you log in, navigate to the home page of the website. In the hero section, you'll find the
                        "Apply for PWD
                        Card" button. Click it to begin the application process.
                    </p>
                </div>
            </div>

            <!-- img section for the third section for the pwd services -->
            <div class="flex flex-col md:flex-row items-center gap-4 w-full md:w-[50%] relative">
                <div class="w-full h-[300px] relative">
                    <img src="img/application/step4.png"
                        alt="Screenshot - showing the first step for the PWD application"
                        class="w-full h-full object-cover object-left rounded-lg">
                </div>

                <div class="flex md:flex-col gap-2 md:gap-0 items-center">
                    <span class="text-4xl text-gray-300">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-6xl text-yellow-400 animate-bounce md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                </div>
            </div>
        </div>

        <!-- fifth step -->
        <div class="flex flex-col md:flex-row items-center justify-between py-4 md:py-10 gap-16">
            <div class="w-full md:w-[50%] gap-2 flex flex-start cursor-pointer">
                <!-- for the icon -->
                <div class="w-52 h-full">
                    <div
                        class="w-10 md:w-24 h-10 md:h-14 bg-blob bg-center bg-contain bg-no-repeat flex items-center justify-center">
                        <i
                            class="fa-solid fa-5 text-sm w-6 h-6 rounded-full bg-blue-800 text-white flex items-center justify-center"></i>
                    </div>

                </div>

                <div class="">
                    <h1 class="text-xl md:text-3xl font-bold text-gray-800 mb-2 md:mb-3">Fill Out the Application Form
                    </h1>
                    <p class="leading-loose md:text-lg">
                        Complete the application form by providing the necessary information. Make sure to double-check
                        your details before submitting the form.
                    </p>
                </div>
            </div>

            <!-- img section for the third section for the pwd services -->
            <div class="flex flex-col md:flex-row items-center gap-4 w-full md:w-[50%] relative">
                <div class="w-full h-[300px] relative">
                    <img src="img/application/step5.png"
                        alt="Screenshot - showing the first step for the PWD application"
                        class="w-full h-full object-cover object-left rounded-lg border-2 border-gray-700">
                </div>

                <div class="flex md:flex-col gap-2 md:gap-0 items-center">
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-6xl text-yellow-400 animate-bounce md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                </div>
            </div>
        </div>

        <!-- sixth step -->
        <div class="flex flex-col md:flex-row items-center justify-between py-4 md:py-10 gap-16">
            <div class="w-full md:w-[50%] gap-2 flex flex-start cursor-pointer">
                <!-- for the icon -->
                <div class="w-52 h-full">
                    <div
                        class="w-10 md:w-24 h-10 md:h-14 bg-blob bg-center bg-contain bg-no-repeat flex items-center justify-center">
                        <i
                            class="fa-solid fa-6 text-sm w-6 h-6 rounded-full bg-blue-800 text-white flex items-center justify-center"></i>
                    </div>

                </div>

                <div class="">
                    <h1 class="text-xl md:text-3xl font-bold text-gray-800 mb-2 md:mb-3">Submit Your Application</h1>
                    </h1>
                    <p class="leading-loose md:text-lg">
                        After completing the form, click the "Submit" button to send your application. A modal pop-up
                        will appear, confirming that your application has been submitted successfully.

                    </p>
                </div>
            </div>

            <!-- img section for the third section for the pwd services -->
            <div class="flex flex-col md:flex-row items-center gap-4 w-full md:w-[50%] relative">
                <div class="w-full h-[300px] relative">
                    <img src="img/application/step6.png"
                        alt="Screenshot - showing the first step for the PWD application"
                        class="w-full h-full object-cover object-left rounded-lg">
                </div>

                <div class="flex md:flex-col gap-2 md:gap-0 items-center">
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-4xl text-gray-300 md:mt-[-10px]">&#8226;</span>
                    <span class="text-6xl text-yellow-400 animate-bounce md:mt-[-10px]">&#8226;</span>
                </div>
            </div>
        </div>
    </section>

    <section class="px-24 py-20 text-gray-600" id="benefits">
        <h1 class="text-3xl font-semibold text-blue-900 mb-4">Benefits of the PWD ID Card</h1>
        <!-- Description -->
        <p class="text-lg text-gray-700 leading-normal">
            The PWD ID card in the Philippines offers a wide range of benefits to individuals with disabilities. These
            benefits are designed to help improve access to essential services, healthcare, transportation, and more,
            ensuring better opportunities for an independent and fulfilling life.
        </p>
        <!-- div for the content -->
        <div class="py-16 flex items-start gap-16">
            <!-- Left Side (Benefits) -->
            <div class="w-2/5 space-y-6 text-right">
                <!-- First Benefit -->
                <div class="flex items-start gap-4">
                    <div>
                        <h1 class="text-xl font-semibold text-gray-800 capitalize">Discount for Establishments</h1>
                        <p class="leading-relaxed py-2">20% off services at hotels, restaurants, and recreation centers.
                        </p>
                    </div>
                    <div class="w-1/4">
                        <i
                            class="fa-solid fa-building text-lg text-blue-800 w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center"></i>
                    </div>
                </div>

                <!-- Second Benefit -->
                <div class="flex items-start gap-4">
                    <div>
                        <h1 class="text-xl font-semibold text-gray-800 capitalize">Discount on Admission Fees</h1>
                        <p class="leading-relaxed py-2">20% off admission to theaters, cinemas, and cultural venues.</p>
                    </div>
                    <div class="w-1/4">
                        <i
                            class="fa-solid fa-film text-lg text-blue-800 w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center"></i>
                    </div>
                </div>

                <!-- Third Benefit -->
                <div class="flex items-start gap-4">
                    <div>
                        <h1 class="text-xl font-semibold text-gray-800 capitalize">Discount on Medicine Purchases</h1>
                        <p class="leading-relaxed py-2">20% off all medicines and prescriptions at authorized
                            drugstores.</p>

                    </div>
                    <div class="w-1/4">
                        <i
                            class="fa-solid fa-notes-medical text-lg text-blue-800 w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center"></i>
                    </div>
                </div>

                <!-- Fourth Benefit -->
                <div class="flex items-start gap-4">
                    <div>
                        <h1 class="text-xl font-semibold text-gray-800 capitalize">Medical & Dental Discounts</h1>
                        <p class="leading-relaxed py-2">20% off medical & dental services, including doctor and lab
                            fees.</p>
                    </div>
                    <div class="w-1/4">
                        <i
                            class="fa-solid fa-user-doctor text-lg text-blue-800 w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center"></i>
                    </div>
                </div>

                <!-- Fifth Benefit -->
                <div class="flex items-start gap-4">
                    <div>
                        <h1 class="text-xl font-semibold text-gray-800 capitalize">Fare Discounts</h1>
                        <p class="leading-relaxed py-2">20% off domestic air & sea travel, including promos and
                            discounts.</p>
                    </div>
                    <div class="w-1/4">
                        <i
                            class="fa-solid fa-ship text-lg text-blue-800 w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center"></i>
                    </div>
                </div>
            </div>

            <!-- Middle Part (Image) -->
            <div class="w-1/3 h-[80vh]">
                <img src="img/application/benefit.jpg" alt="PWD ID Card" class="w-full h-full object-cover rounded-lg">
            </div>

            <!-- Right Side (Benefits) -->
            <div class="w-2/5 space-y-6 text-right">
                <!-- Sixth Benefit -->
                <div class="flex items-start gap-4">
                    <div>
                        <h1 class="text-xl font-semibold text-gray-800 capitalize">Educational Assistance</h1>
                        <p class="leading-relaxed py-2">Scholarships, financial aid, and allowances for books and
                            uniforms (DEPED).</p>
                    </div>
                    <div class="w-1/4">
                        <i
                            class="fa-solid fa-school text-lg text-blue-800 w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center"></i>
                    </div>
                </div>

                <!-- Seventh Benefit -->
                <div class="flex items-start gap-4">
                    <div>
                        <h1 class="text-xl font-semibold text-gray-800 capitalize">Continuation of Benefits</h1>
                        <p class="leading-relaxed py-2">
                            Continuation of GSIS, SSS, and PAG-IBIG benefits (for previous employment) as needed.</p>
                    </div>
                    <div class="w-1/4">
                        <i
                            class="fa-solid fa-film text-lg text-blue-800 w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center"></i>
                    </div>
                </div>

                <!-- Eight Benefit -->
                <div class="flex items-start gap-4">
                    <div>
                        <h1 class="text-xl font-semibold text-gray-800 capitalize">Special Discount</h1>
                        <p class="leading-relaxed py-2">5% discount on basic commodities for Persons with Disabilities
                            (DTI & DA guidelines).</p>
                    </div>
                    <div class="w-1/4">
                        <i
                            class="fa-brands fa-accessible-icon text-lg text-blue-800 w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center"></i>
                    </div>
                </div>

                <!-- Ninth Benefit -->
                <div class="flex items-start gap-4">
                    <div>
                        <h1 class="text-xl font-semibold text-gray-800 capitalize">Disability Support Services</h1>
                        <p class="leading-relaxed py-2">Express lanes for Persons with Disabilities in all government
                            and commercial establishments nationwide.</p>

                    </div>
                    <div class="w-1/4">
                        <i
                            class="fa-solid fa-wheelchair text-lg text-blue-800 w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center"></i>
                    </div>
                </div>


            </div>
        </div>

        <p class="text-lg leading-normal text-gray-700">These are just some of the many benefits offered to Persons with
            Disabilities through the PWD ID card. For a more comprehensive guide, please visit the <a
                href="https://elibrary.judiciary.gov.ph/thebookshelf/showdocs/10/48955"
                class="text-blue-700 font-semibold">Supreme Court E-Library</a>. The website offers in-depth resources,
            detailed guidelines, and access to important documents, including updates and relevant information on PWD
            benefits.</p>
    </section>

    <section class="px-24 py-20 bg-gray-200" id="law">
        <h1 class="text-3xl font-semibold text-blue-900 mb-4">Laws Supporting Persons with Disabilities (PWD)</h1>
        <!-- Description -->
        <p class="text-lg text-gray-700 leading-normal mb-10">
            The Philippine government has enacted several laws to protect and promote the rights of persons with
            disabilities (PWDs).
            These laws provide significant benefits, including access to healthcare, education, employment,
            transportation, and essential services.
            Here are the key laws that support PWDs:
        </p>

        <div class="py-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            <!-- Republic Act No. 7277 -->
            <div class="bg-blue-200 bg-opacity-60 rounded-lg shadow-md py-4 px-6 hover:shadow-xl cursor-pointer transition duration-300">
                <div class="space-y-1">
                    <h1 class="text-xl font-semibold text-blue-900 capitalize">Republic Act No. 7277</h1>
                    <p class="leading-relaxed text-sm">Magna Carta for Disabled Persons</p>
                </div>
                <hr class="w-3/4 border-t border-blue-900 my-3">
                <p class="leading-relaxed">
                    Republic Act No. 7277, or the Magna Carta for Disabled Persons, protects the rights of persons with
                    disabilities (PWDs) by ensuring equal access to employment, education, healthcare, and public
                    services. It also mandates policies to support their social integration and independence.
                </p>
            </div>

            <!-- Republic Act No. 9442 -->
            <div class="bg-blue-200 bg-opacity-60 rounded-lg shadow-md py-4 px-6 hover:shadow-xl cursor-pointer transition duration-300">
                <div class="space-y-1">
                    <h1 class="text-xl font-semibold text-blue-900 capitalize">Republic Act No. 9442</h1>
                    <p class="leading-relaxed text-sm">Amendment to Magna Carta for Disabled Persons</p>
                </div>
                <hr class="w-3/4 border-t border-blue-900 my-3">
                <p class="leading-relaxed">
                    Republic Act No. 9442 amends RA 7277, enhancing the rights of PWDs by providing additional benefits
                    like tax exemptions and further integrating them into the workforce and public life.
                </p>
            </div>

            <!-- Republic Act No. 10754 -->
            <div class="bg-blue-200 bg-opacity-60 rounded-lg shadow-md py-4 px-6 hover:shadow-xl cursor-pointer transition duration-300">
                <div class="space-y-1">
                    <h1 class="text-xl font-semibold text-blue-900 capitalize">Republic Act No. 10754</h1>
                    <p class="leading-relaxed text-sm">Expanding the Benefits and Privileges of PWDs</p>
                </div>
                <hr class="w-3/4 border-t border-blue-900 my-3">
                <p class="leading-relaxed">
                    RA 10754 extends the benefits to PWDs, including increased discounts on services, tax exemptions,
                    and greater access to healthcare, education, and transportation.
                </p>
            </div>

            <!-- Republic Act No. 11228 -->
            <div class="bg-blue-200 bg-opacity-60 rounded-lg shadow-md py-4 px-6 hover:shadow-xl cursor-pointer transition duration-300">
                <div class="space-y-1">
                    <h1 class="text-xl font-semibold text-blue-900 capitalize">Republic Act No. 11228</h1>
                    <p class="leading-relaxed text-sm">Improving Early Detection of Disability</p>
                </div>
                <hr class="w-3/4 border-t border-blue-900 my-3">
                <p class="leading-relaxed">
                    Republic Act No. 11228 focuses on improving early diagnosis and intervention for PWDs, ensuring
                    better developmental outcomes through early intervention programs.
                </p>
            </div>

            <!-- Republic Act No. 10742 -->
            <div class="bg-blue-200 bg-opacity-60 rounded-lg shadow-md py-4 px-6 hover:shadow-xl cursor-pointer transition duration-300">
                <div class="space-y-1">
                    <h1 class="text-xl font-semibold text-blue-900 capitalize">Republic Act No. 10742</h1>
                    <p class="leading-relaxed text-sm">PWD's Welfare and Rights in the Youth</p>
                </div>
                <hr class="w-3/4 border-t border-blue-900 my-3">
                <p class="leading-relaxed">
                    RA 10742 mandates local government units to establish PWD-specific programs and services, ensuring
                    the inclusion and welfare of PWDs, particularly focusing on youth and their social development.
                </p>
            </div>

            <!-- Republic Act No. 10821 -->
            <div class="bg-blue-200 bg-opacity-60 rounded-lg shadow-md py-4 px-6 hover:shadow-xl cursor-pointer transition duration-300">
                <div class="space-y-1">
                    <h1 class="text-xl font-semibold text-blue-900 capitalize">Republic Act No. 10821</h1>
                    <p class="leading-relaxed text-sm">Anti-Discrimination Act</p>
                </div>
                <hr class="w-3/4 border-t border-blue-900 my-3">
                <p class="leading-relaxed">
                    RA 10821 aims to prevent discrimination against PWDs in all aspects of life, including employment,
                    education, and access to healthcare, ensuring a more inclusive and supportive society for
                    individuals with disabilities.
                </p>
            </div>

            <!-- Republic Act No. 10755 -->
            <div class="bg-blue-200 bg-opacity-60 rounded-lg shadow-md py-4 px-6 hover:shadow-xl cursor-pointer transition duration-300">
                <div class="space-y-1">
                    <h1 class="text-xl font-semibold text-blue-900 capitalize">Republic Act No. 10755</h1>
                    <p class="leading-relaxed text-sm">PWDs in Government Employment</p>
                </div>
                <hr class="w-3/4 border-t border-blue-900 my-3">
                <p class="leading-relaxed">
                    Republic Act No. 10755 provides additional provisions for the employment of PWDs in government
                    offices, ensuring equal opportunities and treatment for PWDs in the workforce.
                </p>
            </div>

            <!-- Republic Act No. 10175 -->
            <div class="bg-blue-200 bg-opacity-60 rounded-lg shadow-md py-4 px-6 hover:shadow-xl cursor-pointer transition duration-300">
                <div class="space-y-1">
                    <h1 class="text-xl font-semibold text-blue-900 capitalize">Republic Act No. 10175</h1>
                    <p class="leading-relaxed text-sm">Cybercrime Prevention Act</p>
                </div>
                <hr class="w-3/4 border-t border-blue-900 my-3">
                <p class="leading-relaxed">
                    Republic Act No. 10175, also known as the Cybercrime Prevention Act, includes provisions to protect
                    PWDs from exploitation and abuse in the online environment, ensuring equal digital access.
                </p>
            </div>

            <!-- Republic Act No. 10918 -->
            <div class="bg-blue-200 bg-opacity-60 rounded-lg shadow-md py-4 px-6 hover:shadow-xl cursor-pointer transition duration-300">
                <div class="space-y-1">
                    <h1 class="text-xl font-semibold text-blue-900 capitalize">Republic Act No. 10918</h1>
                    <p class="leading-relaxed text-sm">Pharmacy Law: PWDs and Discounts</p>
                </div>
                <hr class="w-3/4 border-t border-blue-900 my-3">
                <p class="leading-relaxed">
                    RA 10918 requires pharmacies to provide PWDs with discounts on medicines and other essential health
                    services, ensuring they have access to necessary treatment.
                </p>
            </div>

            <!-- Republic Act No. 10905 -->
            <div class="bg-blue-200 bg-opacity-60 rounded-lg shadow-md py-4 px-6 hover:shadow-xl cursor-pointer transition duration-300">
                <div class="space-y-1">
                    <h1 class="text-xl font-semibold text-blue-900 capitalize">Republic Act No. 10905</h1>
                    <p class="leading-relaxed text-sm">Free Medicine for PWDs</p>
                </div>
                <hr class="w-3/4 border-t border-blue-900 my-3">
                <p class="leading-relaxed">
                    Republic Act No. 10905 mandates the government to provide free medicines and medical services to
                    PWDs, ensuring they can access necessary healthcare without financial burden.
                </p>
            </div>

            <!-- Republic Act No. 10070 -->
            <div class="bg-blue-200 bg-opacity-60 rounded-lg shadow-md py-4 px-6 hover:shadow-xl cursor-pointer transition duration-300">
                <div class="space-y-1">
                    <h1 class="text-xl font-semibold text-blue-900 capitalize">Republic Act No. 10070</h1>
                    <p class="leading-relaxed text-sm">Establishing a National Council for PWDs</p>
                </div>
                <hr class="w-3/4 border-t border-blue-900 my-3">
                <p class="leading-relaxed">
                    RA 10070 created the National Council on Disability Affairs (NCDA), which oversees the
                    implementation of programs that promote the rights and welfare of PWDs across the country.
                </p>
            </div>

        </div>
    </section>


    <!-- footer section -->
    <?php
    include 'include/landing/footer.php';
    ?>
</body>

</html>