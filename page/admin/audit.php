<?php
session_start();
if (!isset($_SESSION['user'])) {
    // If the user is not logged in, redirect them to the login page
    header('Location: ../../loginpage.php');
    exit(); // Ensure no further code execution after the redirect
}

require '../../include/landing/connect.php';

try {
    $sql = "SELECT * from administrator";
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
    $page = isset($_GET['page']) ? $_GET['page'] : 'audit_trail';
    include '../../include/admin/sidebar.php';
    ?>

<!-- admin -->
 <section>
 <div class="ml-72 py-8 mr-10">
        <h1 class="text-3xl font-semibold mb-4 text-gray-800">Admin History</h1>

        <div class="overflow-x-auto bg-white shadow-lg rounded-lg border border-gray-200">
            <table class="min-w-full table-auto border-collapse">
                <!-- table header -->
                <thead class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white text-lg">
                    <tr>
                        <th class="p-4 text-left font-semibold border-r border-gray-300">ID</th>
                        <th class="p-4 text-left font-semibold border-r border-gray-300">Username</th>
                        <th class="p-4 text-left font-semibold border-r border-gray-300">Action</th>
                        <th class="p-4 text-left font-semibold border-r border-gray-300">Last Login</th>
                    </tr>
                </thead>

                <!-- table body -->
                <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr class="hover:bg-gray-100 transition duration-300 ease-in-out">
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['admin_id']); ?></td>
                        <td class="text-center py-3 border-t border-gray-300"><?php echo htmlspecialchars($user['username']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
 </section>

</body>

</html>