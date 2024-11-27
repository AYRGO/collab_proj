<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWD Application Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    },
                    backgroundImage : {
                        'hero' : "url('img/logo/pwd-hero.png')",
                        'blob' : "url('img/logo/blob.png')",
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-4 text-center">PWD Application Form</h2>

        <form action="submit.php" method="POST" enctype="multipart/form-data">
            <!-- Personal Information -->
            <h3 class="text-xl font-semibold mb-2">Personal Information</h3>
            
            <div class="mb-4">
                <label for="fullname" class="block text-gray-700">Full Name</label>
                <input type="text" id="fullname" name="fullname" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="dob" class="block text-gray-700">Date of Birth</label>
                <input type="date" id="dob" name="dob" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="sex" class="block text-gray-700">Sex</label>
                <select id="sex" name="sex" class="w-full px-4 py-2 border rounded-lg" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="civil_status" class="block text-gray-700">Civil Status</label>
                <select id="civil_status" name="civil_status" class="w-full px-4 py-2 border rounded-lg" required>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Widowed">Widowed</option>
                    <option value="Separated">Separated</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="address" class="block text-gray-700">Current Address</label>
                <textarea id="address" name="address" class="w-full px-4 py-2 border rounded-lg" required></textarea>
            </div>

            <div class="mb-4">
                <label for="contact" class="block text-gray-700">Phone Number</label>
                <input type="text" id="contact" name="contact" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <!-- Disability Information -->
            <h3 class="text-xl font-semibold mb-2">Disability Information</h3>

            <div class="mb-4">
                <label for="disability_type" class="block text-gray-700">Type of Disability</label>
                <select id="disability_type" name="disability_type" class="w-full px-4 py-2 border rounded-lg" required>
                    <option value="Physical">Physical</option>
                    <option value="Hearing">Hearing</option>
                    <option value="Visual">Visual</option>
                    <option value="Intellectual">Intellectual</option>
                    <option value="Psychosocial">Psychosocial</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="disability_cause" class="block text-gray-700">Cause of Disability</label>
                <select id="disability_cause" name="disability_cause" class="w-full px-4 py-2 border rounded-lg" required>
                    <option value="Congenital">Congenital</option>
                    <option value="Accident">Accident</option>
                    <option value="Illness">Illness</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="medical_certificate" class="block text-gray-700">Medical Certificate</label>
                <input type="file" id="medical_certificate" name="medical_certificate" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <!-- Identification -->
            <h3 class="text-xl font-semibold mb-2">Identification</h3>

            <div class="mb-4">
                <label for="gov_id" class="block text-gray-700">Government-Issued ID Number</label>
                <input type="text" id="gov_id" name="gov_id" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="photo" class="block text-gray-700">Upload 1x1/2x2 Photo</label>
                <input type="file" id="photo" name="photo" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <!-- Application Type -->
            <h3 class="text-xl font-semibold mb-2">Application Type</h3>

            <div class="mb-4">
                <label for="application_type" class="block text-gray-700">Application Type</label>
                <select id="application_type" name="application_type" class="w-full px-4 py-2 border rounded-lg" required>
                    <option value="New">New Application</option>
                    <option value="Renewal">Renewal</option>
                </select>
            </div>

            <!-- Additional Details -->
            <h3 class="text-xl font-semibold mb-2">Additional Details</h3>

            <!-- Guardian/Caregiver Information -->
            <div class="mb-4">
                <label for="guardian_name" class="block text-gray-700">Guardian/Caregiver Full Name (if applicable)</label>
                <input type="text" id="guardian_name" name="guardian_name" class="w-full px-4 py-2 border rounded-lg">
            </div>

            <div class="mb-4">
                <label for="guardian_relationship" class="block text-gray-700">Relationship to PWD</label>
                <input type="text" id="guardian_relationship" name="guardian_relationship" class="w-full px-4 py-2 border rounded-lg">
            </div>

            <div class="mb-4">
                <label for="guardian_contact" class="block text-gray-700">Guardian/Caregiver Contact Number</label>
                <input type="text" id="guardian_contact" name="guardian_contact" class="w-full px-4 py-2 border rounded-lg">
            </div>

            <!-- Emergency Contact Information -->
            <div class="mb-4">
                <label for="emergency_name" class="block text-gray-700">Emergency Contact Name</label>
                <input type="text" id="emergency_name" name="emergency_name" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="emergency_relationship" class="block text-gray-700">Relationship to Emergency Contact</label>
                <input type="text" id="emergency_relationship" name="emergency_relationship" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="emergency_contact" class="block text-gray-700">Emergency Contact Number</label>
                <input type="text" id="emergency_contact" name="emergency_contact" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <!-- Government-Issued ID Upload Section -->
            <div class="mb-4">
                <label for="gov_id_upload" class="block text-gray-700">Upload Government-Issued ID</label>
                <input type="file" id="gov_id_upload" name="gov_id_upload" class="w-full px-4 py-2 border rounded-lg" accept=".jpg, .jpeg, .png, .pdf" required>
                <small class="text-gray-600">Accepted formats: JPG, PNG, PDF. Max file size: 5MB.</small>
            </div>

            <!-- Terms and Conditions -->
            <div class="mb-4">
                <label class="block text-gray-700">
                    <input type="checkbox" name="terms" required> I consent to the collection and use of my personal information as outlined in the <a href="#" class="text-blue-500">Data Privacy Notice</a>.
                </label>
            </div>

            <!-- Buttons for Submit and Back -->
            <div class="flex justify-between">
                <button type="button" class="px-6 py-2 bg-gray-300 text-black rounded-lg shadow hover:bg-gray-200" onclick="window.history.back();">Back</button>
                <button type="submit" class="px-6 py-2 bg-blue-700 text-white rounded-lg shadow hover:bg-blue-600">Submit Application</button>
            </div>
        </form>
    </div>
</body>
</html>

<section>
        <div class="flex gap-6 py-4 px-6 m-auto rounded-lg h-[82vh]">
            <!-- for the image section for the hero section -->
            <div class="w-[87%] relative shadow-xl bg-gray-100">
                <div class="relative overflow-hidden rounded-md">
                    <img src="img/hero.jpg" alt="PWD Hero Image"
                        class="w-full h-[78vh] object-cover object-center shadow-md clip-triangle-top-left">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-500 to-blue-600 opacity-30 clip-triangle-top-left">
                    </div>
                </div>

                <img src="img\bg\pwd-design.png" alt="" class="w-28 absolute top-40 right-6 mix-blend-multiply">

                <div class="absolute right-6 top-60 w-3/5 text-right">

                    <h1 class="font-bold text-gray-700 text-3xl uppercase leading-snug mt-6 ">Empowering Lives: <br>
                        Support
                        For Persons
                        with <br> Disabilities</h1>
                    <p class="text-md sm:text-xl text-gray-800 font-normal md:leading-relaxed py-0 sm:py-2">
                        We empower persons with disabilities by connecting them to essential <br>services and
                        opportunities in healthcare, education, and employment. Apply for <br>your PWD card today to
                        unlock exclusive benefits for a more inclusive community.
                    </p>
                </div>
            </div>

            <!-- for the side button for the hero section -->
            <div class="flex flex-col justify-center gap-4 w-[13%]">
                <div
                    class="bg-white py-8 px-4 rounded-lg shadow-md text-center cursor-pointer hover:bg-blue-50 transition duration-300 ease-in-out transform hover:scale-105">
                    <h6 class="font-semibold text-lg text-blue-800">Opening Hours</h6>
                    <span id="openingHours" class=" text-md mt-2 text-gray-600"></span>
                </div>

                <div
                    class="bg-white p-4 rounded-lg shadow-md text-center cursor-pointer hover:bg-blue-50 group transition duration-300 ease-in-out transform hover:scale-105">
                    <h6 class="font-semibold text-lg text-blue-800">Apply for PWD Card</h6>
                    <span class=" text-md mt-2 text-gray-600">Fill out the application form to get your card.</span>
                    <a href="#">
                        <button
                            class="py-2 px-5 mt-2 rounded-full bg-blue-800 text-white text-sm hover:bg-blue-700 transition duration-300 transform group-hover:scale-105">Apply
                            Now</button>
                    </a>
                    <!-- <a href="page/user/pwd_form.php"
                        class="block text-blue-700 underline hover:text-blue-900 transition-colors duration-200">Apply Now</a> -->
                </div>

                <div
                    class="bg-white p-4 rounded-lg shadow-md text-center cursor-pointer hover:bg-blue-50 group transition duration-300 ease-in-out transform hover:scale-105">
                    <h6 class="font-semibold text-lg text-blue-800">Join Our Community</h6>
                    <span class=" text-md mt-2 text-gray-600">Be a part of our support network.</span>
                    <a href="#">
                        <button
                            class="py-2 px-5 mt-2 rounded-full bg-blue-800 text-white text-sm hover:bg-blue-700 transition duration-300 transform group-hover:scale-105">Sign
                            Up Here</button>
                    </a>
                    <!-- <a href="page/user/pwd_form.php"
                        class="block text-blue-700 underline hover:text-blue-900 transition-colors duration-200">Apply Now</a> -->
                </div>

            </div>
        </div>

    </section>