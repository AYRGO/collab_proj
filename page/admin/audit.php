<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    // If the user is not logged in, redirect them to the login page
    header('Location: ../../loginpage.php');
    exit(); // Ensure no further code execution after the redirect
}

require '../../include/landing/connect.php';

try {
    // For the admin (from the administrator and admin_audit_trail tables)
    $sql_admin = "SELECT a.admin_id, a.username, a.last_login, b.action, b.timestamp
                  FROM administrator a
                  LEFT JOIN admin_audit_trail b ON a.admin_id = b.admin_id"; // Left join to get both admin details and actions
    $stmt_admin = $pdo->prepare($sql_admin);
    $stmt_admin->execute();
    $admins = $stmt_admin->fetchAll(PDO::FETCH_ASSOC);

    // For the user (from the user_audit_trail table)
    $sql_user = "SELECT u.id, u.fname, u.lname, a.action, a.timestamp
                 FROM user_audit_trail a
                 LEFT JOIN user_registration u ON a.user_id = u.id";  // Assuming `user_id` in the audit table refers to `id` in user_registration
    $stmt_user = $pdo->prepare($sql_user);
    $stmt_user->execute();
    $users = $stmt_user->fetchAll(PDO::FETCH_ASSOC);

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

    <!-- admin history -->
    <div class="ml-72 py-8 mr-10">
        <h1 class="text-3xl font-semibold mb-4 text-gray-800">Admin History</h1>

        <div class="overflow-x-auto bg-white shadow-lg rounded-lg border border-gray-200">
            <table class="min-w-full table-auto border-collapse">
                <!-- table header -->
                <thead class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white text-lg">
                    <tr>
                        <th class="p-4 text-left font-semibold border-r border-gray-300">ID</th>
                        <th class="p-4 text-left font-semibold border-r border-gray-300">Username</th>
                        <th class="p-4 text-left font-semibold border-r border-gray-300">Last Login</th>
                        <th class="p-4 text-left font-semibold border-r border-gray-300">Action</th>
                        <th class="p-4 text-left font-semibold border-r border-gray-300">Timestamp</th>
                    </tr>
                </thead>

                <!-- table body -->
                <tbody>
                    <?php foreach ($admins as $admin): ?>
                        <tr class="hover:bg-gray-100 transition duration-300 ease-in-out">
                            <td class="text-center py-3 border-t border-gray-300">
                                <?php echo htmlspecialchars($admin['admin_id']); ?>
                            </td>
                            <td class="text-center py-3 border-t border-gray-300">
                                <?php echo htmlspecialchars($admin['username']); ?>
                            </td>
                            <td class="text-center py-3 border-t border-gray-300">
                                <?php
                                $date = new DateTime($admin['last_login']);
                                echo htmlspecialchars($date->format('F j, Y, g:i a')); // Example format: January 1, 2023, 12:00 pm
                                ?>
                            </td>
                            <td class="text-center py-3 border-t border-gray-300">
                                <?php echo htmlspecialchars($admin['action']); ?>
                            </td>
                            <td class="text-center py-3 border-t border-gray-300">
                                <?php
                                $date = new DateTime($admin['timestamp']);
                                echo htmlspecialchars($date->format('F j, Y, g:i a')); // Example format: January 1, 2023, 12:00 pm
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- user history -->
    <div class="ml-72 py-8 mr-10">
        <h1 class="text-3xl font-semibold mb-4 text-gray-800">User History</h1>

        <div class="overflow-x-auto bg-white shadow-lg rounded-lg border border-gray-200">
            <table class="min-w-full table-auto border-collapse">
                <!-- table header -->
                <thead class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white text-lg">
                    <tr>
                        <th class="p-4 text-left font-semibold border-r border-gray-300">ID</th>
                        <th class="p-4 text-left font-semibold border-r border-gray-300">First Name</th>
                        <th class="p-4 text-left font-semibold border-r border-gray-300">Last Name</th>
                        <th class="p-4 text-left font-semibold border-r border-gray-300">Action</th>
                        <th class="p-4 text-left font-semibold border-r border-gray-300">Timestamp</th>
                    </tr>
                </thead>

                <!-- table body -->
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr class="hover:bg-gray-100 transition duration-300 ease-in-out">
                            <td class="text-center py-3 border-t border-gray-300">
                                <?php echo htmlspecialchars($user['id']); ?>
                            </td>
                            <td class="text-center py-3 border-t border-gray-300">
                                <?php echo htmlspecialchars($user['fname']); ?>
                            </td>
                            <td class="text-center py-3 border-t border-gray-300">
                                <?php echo htmlspecialchars($user['lname']); ?>
                            </td>
                            <td class="text-center py-3 border-t border-gray-300">
                                <?php echo htmlspecialchars($user['action']); ?>
                            </td>
                            <td class="text-center py-3 border-t border-gray-300">
                                <?php
                                $date = new DateTime($user['timestamp']);
                                echo htmlspecialchars($date->format('F j, Y, g:i a'));
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
