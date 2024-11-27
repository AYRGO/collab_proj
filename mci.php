<!doctype html>
<html lang="en">

<head>
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

                    objectPosition: {
                        'custom-center': 'center calc(25% - 20px);',
                        'custom-bottom': 'center calc(50% - 100px);'
                    }
                }
            }
        }
    </script>
</head>

<body>
    <?php
    include 'include/landing/header.php';
    ?>

    <?php
    $page = 'announcement';
    include 'include/landing/navbar.php';
    ?>

    <section class="py-10 w-[80%] mx-auto text-gray-700">
        <!-- Hero Section -->
        <div>
            <img src="img/jobs/mci-bg.jpg" class="w-full h-[40vh] object-cover object-center rounded-2xl"
                alt="MCI Group Photo">
        </div>

        <!-- MCI Overview -->
        <div class="py-4 px-8">
            <img src="img/jobs/MCI.webp" class="w-16 h-16 object-contain" alt="MCI Careers Logo">
            <h6 class="font-semibold text-lg">MCI Careers</h6>

            <div class="flex items-center">
                <!-- Star Ratings -->
                <i class="fa-solid fa-star text-orange-600 mr-1 text-lg"></i>
                <i class="fa-solid fa-star text-orange-600 mr-1 text-lg"></i>
                <i class="fa-solid fa-star text-orange-600 mr-1 text-lg"></i>
                <i class="fa-regular fa-star-half-stroke text-orange-600  mr-1 text-lg"></i>
                <i class="fa-regular fa-star text-orange-600  mr-1 text-lg"></i>

                <div class="ml-2">
                    <p>3.6 total ratings from <span>450 reviews</span></p>
                </div>
            </div>

            <!-- MCI Content -->
            <div class="py-12 text-gray-600">
                <ul class="flex gap-8 text-lg font-medium">
                    <div>
                        <li><a href="#" class="hover:text-gray-700 text-blue-700" id="aboutSection">About</a></li>
                        <div class="w-full h-2 bg-blue-700 mt-2 rounded-full" id="lineDecorAbout"></div>
                    </div>

                    <div>
                        <li><a href="#" class="hover:text-gray-700" id="lifeAndCultureSection">Life and Culture</a></li>
                        <div class="hidden w-full h-2 bg-blue-700 mt-2 rounded-xl" id="lineDecorLifeandCulture"></div>
                    </div>

                    <div>
                        <li><a href="#" class="hover:text-gray-700" id="jobsSection">Jobs</a></li>
                        <div class="hidden w-full h-2 bg-blue-700 mt-2 rounded-xl" id="lineDecorJobs"></div>
                    </div>
                </ul>
                <hr class="border border-gray-200">
            </div>

            <!-- About Modal Section -->
            <div id="aboutModal">
                <div class="text-lg">
                    <h1 class="text-3xl font-semibold tracking-wide">Company Overview</h1>
                    <div class="space-y-2 py-4">
                        <div class="flex items-center">
                            <h6 class="w-1/4 font-medium">CEO</h6>
                            <span class="3/4">Anthony Marlowe</span>
                        </div>

                        <div class="flex items-center">
                            <h6 class="w-1/4 font-medium">Industry</h6>
                            <span class="3/4">Management & Consulting</span>
                        </div>

                        <div class="flex items-center">
                            <h6 class="w-1/4 font-medium">Company Size</h6>
                            <span class="3/4">5,001 - 10,000 employees</span>
                        </div>

                        <div class="flex items-center">
                            <h6 class="w-1/4 font-medium">Primary Location</h6>
                            <span class="3/4">MCI Corporate Headquarters 2937 Sierra Ct. SW Iowa City, IA 52240</span>
                        </div>
                    </div>
                </div>

                <!-- About MCI -->
                <div class="text-lg">
                    <h1 class="text-xl tracking-wide font-semibold py-3">About MCI</h1>
                    <div class="space-y-4">
                        <p class="leading-loose">MCI helps customers take on their CX and DX challenges differently,
                            creating industry-leading solutions that deliver exceptional experiences and drive optimal
                            performance. MCI assists companies with business process outsourcing, staff augmentation,
                            contact center customer services, and IT Services needs by providing general and specialized
                            hosting, software, staff, and services.</p>
                        <p class="leading-loose">In 2019, Marlowe Companies Inc. (MCI) was named by Inc. Magazine as
                            Iowa’s Fastest Growing Company in the State of Iowa and was named the 452nd Fastest Growing
                            Privately Company in the USA, making the coveted top 500 for the first time. MCI’s
                            subsidiaries had previously made Inc. Magazine's List of Fastest-Growing Companies 15 times,
                            respectively. MCI has ten business process outsourcing service delivery facilities in
                            Georgia, Florida, Texas, New Mexico, California, Kansas, Nova Scotia, South Africa, and the
                            Philippines.</p>
                    </div>
                </div>
            </div>

            <!-- Life and Culture Modal Section -->
            <div id="lifeAndCultureModal" class="hidden space-y-4">
                <div>
                    <h1 class="text-3xl font-semibold">Perks and Benefits</h1>
                    <div class="grid grid-cols-2 py-4 gap-10">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-notes-medical text-2xl text-blue-700"></i>
                            <span class="text-lg font-semibold">Health Insurance</span>
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-laptop-house text-2xl text-blue-700"></i>
                            <span class="text-lg font-semibold">Work From Home</span>
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-umbrella-beach text-2xl text-blue-700"></i>
                            <span class="text-lg font-semibold">Vacation and Paid Time Off</span>
                        </div>
                    </div>

                </div>


                <div class="py-12 bg-gray-100">
                    <div class="max-w-6xl mx-auto px-4">
                        <h1 class="text-3xl font-semibold text-gray-900 mb-8 text-center">Why Join Us?
                        </h1>
                        <div class="space-y-12">

                            <!-- Section 1: Fostering Diversity -->
                            <div
                                class="bg-blue-900 bg-opacity-90 rounded-3xl shadow-lg p-8 hover:shadow-xl transition duration-300 ease-in-out">
                                <h2 class="text-3xl font-semibold text-gray-900 dark:text-white mb-4">Fostering
                                    Diversity</h2>
                                <p class="text-lg text-gray-700 dark:text-gray-300 leading-loose">
                                    The company is dedicated to fostering a workplace where every employee feels
                                    respected, valued, and heard. It embraces diverse backgrounds, perspectives, and
                                    ideas, recognizing that these differences are essential to driving innovation and
                                    success.
                                </p>
                            </div>

                            <!-- Section 2: Empowering Careers -->
                            <div
                                class="bg-blue-900 bg-opacity-90 rounded-3xl shadow-lg p-8 hover:shadow-xl transition duration-300 ease-in-out">
                                <h2 class="text-3xl font-semibold text-gray-900 dark:text-white mb-4">Empowering Careers
                                </h2>
                                <p class="text-lg text-gray-700 dark:text-gray-300 leading-loose">
                                    MCI ensures that all employees have equal access to opportunities for growth and
                                    advancement. The company implements fair and transparent processes for recruitment,
                                    promotion, and compensation, promoting an environment where every individual has the
                                    chance to succeed.
                                </p>
                            </div>

                            <!-- Section 3: Fostering Diversity (Again) -->
                            <div
                                class="bg-blue-900 bg-opacity-90 rounded-3xl shadow-lg p-8 hover:shadow-xl transition duration-300 ease-in-out">
                                <h2 class="text-3xl font-semibold text-gray-900 dark:text-white mb-4">Fostering
                                    Diversity</h2>
                                <p class="text-lg text-gray-700 dark:text-gray-300 leading-loose">
                                    The company is dedicated to fostering a workplace where every employee feels
                                    respected, valued, and heard. It embraces diverse backgrounds, perspectives, and
                                    ideas, recognizing that these differences are essential to driving innovation and
                                    success.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- Jobs Modal Section -->
            <div id="jobsModal" class="hidden">
                <h1 class="text-3xl font-semibold">Available Jobs at MCI</h1>
                <p>Details about available jobs go here.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php
    include 'include/landing/footer.php';
    ?>

    <script>
        const aboutSection = document.getElementById('aboutSection');
        const lifeAndCultureSection = document.getElementById('lifeAndCultureSection');
        const jobsSection = document.getElementById('jobsSection');

        const aboutModal = document.getElementById('aboutModal');
        const lifeAndCultureModal = document.getElementById('lifeAndCultureModal');
        const jobsModal = document.getElementById('jobsModal');

        const lineDecorAbout = document.getElementById('lineDecorAbout');
        const lineDecorLifeandCulture = document.getElementById('lineDecorLifeandCulture');
        const lineDecorJobs = document.getElementById('lineDecorJobs');

        // Function to reset the links to default color
        const resetLinks = () => {
            aboutSection.classList.remove('text-blue-700');
            lifeAndCultureSection.classList.remove('text-blue-700');
            jobsSection.classList.remove('text-blue-700');
        }

        aboutSection.addEventListener('click', () => {
            resetLinks();
            aboutSection.classList.add('text-blue-700');
            aboutModal.classList.remove('hidden');
            lifeAndCultureModal.classList.add('hidden');
            jobsModal.classList.add('hidden');

            lineDecorAbout.classList.remove('hidden');
            lineDecorLifeandCulture.classList.add('hidden');
            lineDecorJobs.classList.add('hidden');
        });

        lifeAndCultureSection.addEventListener('click', () => {
            resetLinks();
            lifeAndCultureSection.classList.add('text-blue-700');
            aboutModal.classList.add('hidden');
            lifeAndCultureModal.classList.remove('hidden');
            jobsModal.classList.add('hidden');

            lineDecorAbout.classList.add('hidden');
            lineDecorLifeandCulture.classList.remove('hidden');
            lineDecorJobs.classList.add('hidden');
        });

        jobsSection.addEventListener('click', () => {
            resetLinks();
            jobsSection.classList.add('text-blue-700');
            aboutModal.classList.add('hidden');
            lifeAndCultureModal.classList.add('hidden');
            jobsModal.classList.remove('hidden');

            lineDecorAbout.classList.add('hidden');
            lineDecorLifeandCulture.classList.add('hidden');
            lineDecorJobs.classList.remove('hidden');
        });
    </script>
</body>

</html>