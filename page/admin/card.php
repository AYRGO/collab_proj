<?php
    require '../../include/landing/connect.php';

    try {
        $sql = "SELECT id, fname, lname, email, contact, usertype, last_login FROM user_registration";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
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

        <h6>Applicants</h6>
        <div class="overflow-x-auto bg-white shadow-lg rounded-lg border border-gray-200">
            <table class=" table-auto border-collapse">
                <!-- table header -->
                <thead class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white text-lg">
                    <tr>
                        <th class="p-2 text-left font-semibold border-r border-gray-300">ID</th>
                        <th class="p-2 text-left font-semibold border-r border-gray-300">Ref. ID</th>
                        <th class="p-2 text-left font-semibold border-r border-gray-300">Type</th>
                        <th class="p-2 text-left font-semibold border-r border-gray-300">First Name</th>
                        <th class="p-2 text-left font-semibold border-r border-gray-300">Middle Name</th>
                        <th class="p-2 text-left font-semibold border-r border-gray-300">Last Name</th>
                        <th class="p-2 text-left font-semibold border-r border-gray-300">Date of Birth</th>
                        <th class="p-2 text-left font-semibold border-r border-gray-300">Sex</th>
                        <th class="p-2 text-left font-semibold border-r border-gray-300">Civil Status</th>
                        <th class="p-2 text-left font-semibold border-r border-gray-300">Sex</th>
                        <th class="p-2 text-left font-semibold border-r border-gray-300">Address</th>
                        <th class="p-2 text-left font-semibold border-r border-gray-300">Contact</th>
                        <th class="p-2 text-left font-semibold border-r border-gray-300">Disability</th>
                        <th class="p-2 text-left font-semibold border-r border-gray-300">Cause</th>
                        <th class="p-2 text-left font-semibold border-r border-gray-300">Medical Certificate</th>
                        <th class="p-2 text-left font-semibold border-r border-gray-300">Valid ID</th>
                        <th class="p-2 text-left font-semibold border-r border-gray-300">Photo</th>
                        <th class="p-2 text-left font-semibold border-r border-gray-300">Submitted At</th>
                        <th class="p-2 text-left font-semibold border-r border-gray-300">Disability</th>
                        <th class="p-2 text-left font-semibold border-r border-gray-300">Status</th>
                    </tr>
                </thead>

                <!-- table body -->
                <!-- <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr class="hover:bg-gray-100 transition duration-300 ease-in-out">
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['id']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['fname']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['lname']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['email']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['contact']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['usertype']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300 border-r border-gray-300"><?php echo htmlspecialchars($user['last_login']); ?></td>
                        <td class="flex justify-center items-center gap-3 py-3">
                            <a href="edit.php?id=<?php echo $user['id']; ?>" class="text-blue-500 hover:text-blue-700 text-lg">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a href="delete.php?id=<?php echo $user['id']; ?>" class="text-red-500 hover:text-red-700 text-lg">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody> -->
            </table>
        </div>
    </div>

</body>
</html>
