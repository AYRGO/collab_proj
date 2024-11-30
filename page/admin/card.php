<?php
    require '../../include/landing/connect.php';

    try {
        $sql = "SELECT * FROM pwdcard_applications";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $sql = "SELECT * FROM guardians";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $guardians = $stmt ->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" href="../../img/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
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

<body class="bg-gray-100">

    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'pwd_card_applications';
    include '../../include/admin/sidebar.php';
    ?>

<div class="ml-72 py-8 mr-10">
        <h1 class="text-3xl font-semibold mb-4 text-gray-800">PWD Card Applications</h1>

        <h6 class="text-2xl font-semibold mb-4 text-gray-800">Applicants</h6>
        <div class="overflow-x-auto bg-white shadow-lg rounded-lg border border-gray-200">
            <table class=" table-auto border-collapse">
                <!-- table header -->
                <thead class="bg-gradient-to-r from-blue-800 to-indigo-500 text-white text-lg">
                    <tr>
                        <th class="py-2 px-4 text-left font-semibold border-r border-gray-300">ID</th>
                        <th class="py-2 px-4  text-left font-semibold border-r border-gray-300">Ref. ID</th>
                        <th class="py-2 px-4  text-left font-semibold border-r border-gray-300">Type</th>
                        <th class="py-2 px-4  text-left font-semibold border-r border-gray-300">First Name</th>
                        <th class="py-2 px-4  text-left font-semibold border-r border-gray-300">Middle Name</th>
                        <th class="py-2 px-4  text-left font-semibold border-r border-gray-300">Last Name</th>
                        <th class="py-2 px-4  text-left font-semibold border-r border-gray-300">Date of Birth</th>
                        <th class="py-2 px-4  text-left font-semibold border-r border-gray-300">Sex</th>
                        <th class="py-2 px-4  text-left font-semibold border-r border-gray-300">Civil Status</th>
                        <th class="py-2 px-4  text-left font-semibold border-r border-gray-300">Address</th>
                        <th class="py-2 px-4  text-left font-semibold border-r border-gray-300">Contact</th>
                        <th class="py-2 px-4  text-left font-semibold border-r border-gray-300">Disability</th>
                        <th class="py-2 px-4  text-left font-semibold border-r border-gray-300">Cause</th>
                        <th class="py-2 px-4  text-left font-semibold border-r border-gray-300">Medical Certificate</th>
                        <th class="py-2 px-4  text-left font-semibold border-r border-gray-300">Valid ID</th>
                        <th class="py-2 px-4  text-left font-semibold border-r border-gray-300">Photo</th>
                        <th class="py-2 px-4  text-left font-semibold border-r border-gray-300">Submitted At</th>
                        <th class="py-2 px-4  text-left font-semibold border-r border-gray-300">Status</th>
                        <th class="py-2 px-4  text-left font-semibold border-r border-gray-300">User ID</th>
                    </tr>
                </thead>

                <!-- table body -->
               <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr class="hover:bg-gray-100 transition duration-300 ease-in-out">
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['id']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['reference_id']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['application_type']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['fname']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['mname']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['lname']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['dob']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['sex']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['civil_status']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['address']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['contact']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['disability']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['cause']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['medicalcert']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['valid_id']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['photo']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['submitted_at']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['status']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['user_id']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody> 
            </table>
        </div>

        <div class="py-12">
    <h1 class="text-2xl font-semibold mb-4 text-gray-800">Applicant's Guardian</h1>

    <div class="overflow-x-auto bg-white shadow-lg rounded-lg border border-gray-200">
        <table class="w-full table-auto border-collapse">
            <thead class="bg-gradient-to-r from-blue-800 to-indigo-500 text-white text-lg">
                <tr>
                    <th class="py-3 px-4 text-left font-semibold border-r border-gray-300">ID</th>
                    <th class="py-3 px-4 text-left font-semibold border-r border-gray-300">PWD Application ID</th>
                    <th class="py-3 px-4 text-left font-semibold border-r border-gray-300">Guardian</th>
                    <th class="py-3 px-4 text-left font-semibold border-r border-gray-300">Relationship</th>
                    <th class="py-3 px-4 text-left font-semibold border-r border-gray-300">Contact</th>
                </tr>
            </thead>

            <!-- table body -->
            <tbody>
                <?php foreach ($guardians as $guardian): ?>
                <tr class="hover:bg-gray-100 transition duration-300 ease-in-out">
                    <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($guardian['id']); ?></td>
                    <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($guardian['pwd_application_id']); ?></td>
                    <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($guardian['guardian_name']); ?></td>
                    <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($guardian['guardian_relationship']); ?></td>
                    <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($guardian['guardian_contact']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
    </div>

</body>
</html>
