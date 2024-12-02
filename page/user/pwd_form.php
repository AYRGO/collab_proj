<?php
    session_start();

    if (!isset($_SESSION['user'])) {
        // If the user is not logged in, redirect them to the login page
        header('Location: ../../loginpage.php');
        exit(); // Ensure no further code execution after the redirect
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        #signupSection::-webkit-scrollbar {
            display: none;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/logo.png" type="image/png">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>PWD Application Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    },
                }
            }
        }
    </script>
</head>

<body class="bg-gray-200 p-6 text-gray-800">
    <!-- pinaka form -->
    <div class=" relative max-w-3xl m-auto h-auto bg-white p-8 rounded-lg shadow-lg" id="signupSection">
        <!-- close button -->
        <svg class="absolute top-4 right-4 w-10 h-10 text-blue-800 cursor-pointer hover:text-blue-600"
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
            viewBox="0 0 24 24" id="closebtn">
            <path fill-rule="evenodd"
                d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                clip-rule="evenodd" />
        </svg>


        <!-- modal notifier -->
        <div class="hidden fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50"
            id="modalNotifier">
            <div class="w-2/6 bg-white border border-gray-300 shadow-lg rounded-lg shadow-lg p-4 relative">
                <svg class="absolute right-6 top-6 w-3 h-3 cursor-pointer" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" id="modalClose">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>

                <div class="flex flex-col items-center py-6">
                    <svg class="w-16 h-16 mb-4 text-red-600 w-12 h-12" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>

                    <h1 class="text-2xl font-bold mb-3">Are you sure you want to exit?</h1>

                    <span class="text-lg">You will lose any unsaved data.</span>

                    <div class="mt-6 space-x-4">
                        <button
                            class="py-3 px-6 bg-blue-800 text-white rounded-md text-lg shadow-md hover:bg-blue-900 transition duration-300"
                            id="yesOption">
                            Yes, Exit
                        </button>
                        <button
                            class="py-3 px-6 bg-gray-300 text-black rounded-md text-lg shadow-md hover:bg-gray-400 transition duration-300"
                            id="cancelOption">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of modal notifier -->


        <!-- logo and title -->
        <div class="mx-auto flex flex-col md:flex-row items-center justify-center p-4 space-y-1">
            <img class="h-20 md:h-32 w-auto rounded-lg mb-2 md:mb-0" src="../../img/logo/pwd-icon.png"
                alt="PWD logo in the Philippines">
            <div class="text-center md:mx-4">
                <h2 class="text-2xl md:text-3xl font-bold text-blue-800 mb-1">PWD Application Form</h2>
                <span class="text-lg md:text-2xl font-semibold">Online Registration</span>
            </div>
            <img class="h-20 md:h-32 w-auto rounded-lg mb-2 md:mb-0" src="../../img/logo.png" alt="PWD Logo">
        </div>
        <!-- end of logo and title -->


        <!-- for personal information form -->
        <div class="py-5">
            <h1 class="text-xl md:text-2xl mb-2 font-bold">Personal Information</h1>
            <form action="../../include/registration_code/pwd_card.php" METHOD="POST" enctype="multipart/form-data">
                <!-- for the full name -->
                <label for="application_type" class="block text-lg font-semibold mb-2">Application Type</label>
                <div class="flex items-center space-x-4 mb-4">
                    <div
                        class="flex items-center bg-blue-100 rounded-lg p-2 shadow-md transition duration-200 hover:bg-blue-200">
                        <input type="radio" id="new" name="application_type" value="new"
                            class="mr-2 text-blue-600 focus:ring-blue-500" required>
                        <label for="new" class="font-semibold">New</label>
                    </div>

                    <div
                        class="flex items-center bg-blue-100 rounded-lg p-2 shadow-md transition duration-200 hover:bg-blue-200">
                        <input type="radio" id="renewal" name="application_type" value="renewal"
                            class="mr-2 text-blue-600 focus:ring-blue-500" required>
                        <label for="renewal" class="font-semibold">Renewal</label>
                    </div>

                    <div
                        class="flex items-center bg-blue-100 rounded-lg p-2 shadow-md transition duration-200 hover:bg-blue-200">
                        <input type="radio" id="lost_id" name="application_type" value="lost_id"
                            class="mr-2 text-blue-600 focus:ring-blue-500" required>
                        <label for="lost_id" class="font-semibold">Lost ID</label>
                    </div>
                </div>


                <div class="flex flex-col md:flex-row items-center justify-between mt-5 gap-2">
                    <div class="w-full">
                        <label for="fname" class="block font-semibold mb-1">First Name</label>
                        <input type="text"
                            class="w-full border border-gray-400 p-3 rounded-lg outline-blue-800 bg-white mb-5 placeholder:text-lg"
                            placeholder="Ex: Juan" id="fname" name="fname" required autofocus>
                    </div>

                    <div class="w-full">
                        <label for="lname" class="block font-semibold mb-1">Middle Name</label>
                        <input type="text"
                            class="w-full border border-gray-400 p-3 rounded-lg outline-blue-800 bg-white mb-5 placeholder:text-lg"
                            placeholder="Ex: Dela" id="mname" name="mname" required>
                    </div>

                    <div class="w-full">
                        <label for="fname" class="block font-semibold mb-1">Last Name</label>
                        <input type="text"
                            class="w-full border border-gray-400 p-3 rounded-lg outline-blue-800 bg-white mb-5 placeholder:text-lg"
                            placeholder="Ex: Cruz" id="lname" name="lname" required>
                    </div>
                </div>

                <label for="dob" class="block font-semibold mb-1">Date of Birth</label>
                <input type="date" class="w-full border border-gray-400 p-3 rounded-lg outline-blue-800 bg-white mb-5"
                    id="dob" name="dob" required>

                <label for="sex" class="block font-semibold mb-1">Sex</label>
                <select class="w-full border border-gray-400 p-3 rounded-lg outline-blue-800 bg-white mb-5" name="sex">
                    <option value="" disabled selected>Select your Sex</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>

                <label for="civil_status" class="block font-semibold mb-1">Civil Satus</label>
                <select class="w-full border border-gray-400 p-3 rounded-lg outline-blue-800 bg-white mb-5"
                    name="civil_status">
                    <option value="" disabled selected>Select Civil Status </option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Separted">Separated</option>
                </select>

                <label for="address" class="block font-semibold mb-1">Full Adress</label>
                <textarea class="w-full border border-gray-400 p-3 rounded-lg outline-blue-800 bg-white mb-5"
                    name="address" id="address" placeholder="Current Address" required></textarea>

                <label for="contact" class="block font-semibold mb-1">Contact Number</label>
                <input type="text" class="w-full border border-gray-400 p-3 rounded-lg outline-blue-800 bg-white mb-5"
                    id="contact" name="contact" placeholder="ex: 0987654321" required>


                <!-- for the disability information -->
                <div class="pb-5">
                    <h1 class="text-xl md:text-2xl mb-2 font-bold">Disability Information</h1>
                    <label for="disability" class="block font-semibold mb-1">Type of Disability</label>
                    <select class="w-full border border-gray-400 p-3 rounded-lg outline-blue-800 bg-white mb-5"
                        name="disability">
                        <option value="" disabled selected>Select your Type of Disability </option>
                        <option value="Deaf">Deaf or Hard of Hearing</option>
                        <option value="Intellectual Disability">Intellectual Ability</option>
                        <option value="Learning Disability">Learning Disability</option>
                        <option value="Mental Disability">Mental Disability</option>
                        <option value="Physical Disability">Physical Disability</option>
                        <option value="Visual Disability">Visual Disability</option>
                        <option value="Psychosocial Disability">Psychosocial Disability</option>
                        <option value="Speech and Language Impairment">Speech and Language Impairment</option>
                        <option value="Cancer (RA11215)">Cancer (RA11215)</option>
                        <option value="Rare Disease (RA10747)">Rare Disease (RA10747)</option>
                    </select>

                    <label for="cause" class="block font-semibold mb-1">Cause of Disability</label>
                    <select class="w-full border border-gray-400 p-3 rounded-lg outline-blue-800 bg-white mb-5"
                        name="cause">
                        <option value="" disabled selected>Select your Cause of Disability </option>
                        <option value="Congenital">Congenital / Inborn</option>
                        <option value="Accident">Accident</option>
                        <option value="Disease">Disease</option>
                        <option value="Others">Others</option>
                    </select>

                    <label for="medicalcert" class="block font-semibold mb-1">Medical Certificate</label>
                    <input type="file"
                        class="w-full border border-gray-400 p-3 rounded-lg outline-blue-800 bg-white mb-5"
                        id="medicalcert" name="medicalcert" required>

                    <!-- identification -->
                    <h1 class="text-xl md:text-2xl mb-2 font-bold">Identification</h1>
                    <label for="valid_id" class="block font-semibold mb-1">Valid ID</label>
                    <input type="file"
                        class="w-full border border-gray-400 p-3 rounded-lg outline-blue-800 bg-white mb-5"
                        id="valid_id" name="valid_id" required>

                    <label for="photo" class="block font-semibold mb-1">Upload 1x1 or 2x2 Picture</label>
                    <input type="file" class="w-full border border-gray-400 p-3 rounded-lg outline-blue-800 bg-white"
                        id="photo" name="photo" required>
                    <small class="text-gray-600 mb-5">Accepted formats: JPG, PNG, PDF. Max file size: 5MB.</small>

                </div>

                <!-- Additional Details -->
                <h1 class="text-xl md:text-2xl font-bold mb-2">Additional Details</h1>

                <!-- Guardian/Caregiver Information -->
                <h4 class="text-lg font-semibold mb-1">Guardian/Caregiver Information</h4>
                <label for="guardian_name" class="block font-semibold mb-1">Full Name</label>
                <input type="text"
                    class="w-full border border-gray-400 p-3 rounded-lg outline-blue-800 bg-white mb-5 placeholder:text-lg"
                    placeholder="Ex: Maria Cruz" id="guardian_name" name="guardian_name" required>

                <label for="guardian_relationship" class="block font-semibold mb-1">Relationship to PWD</label>
                <select id="guardian_relationship" name="guardian_relationship"
                    class="w-full border border-gray-400 p-3 rounded-lg outline-blue-800 bg-white mb-5">
                    <option value="" selected disabled>Select Relationship</option>
                    <option value="Parent">Parent</option>
                    <option value="Sibling">Sibling</option>
                    <option value="Spouse">Spouse</option>
                    <option value="Other">Other</option>
                </select>

                <label for="guardian_contact" class="block font-semibold mb-1">Contact Number</label>
                <input type="text" id="guardian_contact" name="guardian_contact"
                    class="w-full border border-gray-400 p-3 rounded-lg outline-blue-800 bg-white mb-5 placeholder:text-lg"
                    placeholder="e.g. 09123456789">

                <span class="italic text-gray-600 ">
                    By submitting the required data for this PWD ID Online Application, you CONSENT to the collection
                    and processing of your personal and sensitive information by the PWD Project. Please ensure you have
                    read the Data Privacy Notice before submitting. You authorize the PWD Project to disclose your
                    information to accredited or non-accredited parties.
                </span>

                <div class="py-2 flex items-center space-x-1">
                    <input type="checkbox" name="termsAndConditions" id="termsAndConditions" id="termsNConditions">
                    <label for="termsAndConditions" class="text-lg font-semibold">I agree to the <a href=""
                            class="text-blue-800">Terms and Conditions</a></label>
                </div>

                <button type="submit"
                    class="w-1/2 block m-auto bg-blue-800 text-white font-bold text-lg p-4 rounded-lg hover:shadow-xl hover:bg-blue-700 active:bg-blue-600"
                    id="signupBtn">
                    Submit
                </button>

            </form>
        </div>
        <!-- end for personal information form  -->
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const closebtn = document.getElementById('closebtn');
            const modalNotifier = document.getElementById('modalNotifier');
            const yesOption = document.getElementById('yesOption');
            const cancelOption = document.getElementById('cancelOption');
            const modalClose = document.getElementById('modalClose');

            closebtn.addEventListener('click', function () {
                modalNotifier.classList.remove('hidden');
            })

            yesOption.addEventListener('click', function () {
                window.location.href = '../../index.php';
                modalNotifier.classList.add('hidden');
            })

            cancelOption.addEventListener('click', function () {
                modalNotifier.classList.add('hidden');
            })

            modalClose.addEventListener('click', function () {
                modalNotifier.classList.add('hidden');
            })

            // for the terms and conditions
            const termsAndConditions = document.getElementById('termsAndConditions');
            const signupBtn = document.getElementById('signupBtn');
            const form = document.querySelector('form');


            signupBtn.addEventListener('click', function () {

                if (!form.checkValidity()) {
                    event.preventDefault();
                    form.reportValidity(); //highlight the required fields
                } else if (!termsAndConditions.checked) {
                    event.preventDefault();
                    alert("You must agree to the Terms and Conditions before signing up.");

                }
            })
        })
    </script>

</body>

</html>