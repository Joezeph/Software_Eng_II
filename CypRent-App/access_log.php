<?php

session_start();

if ($_SESSION['user']['role'] == 'clerk') {
  header('Location: access_denied.php');
  exit;
}

require_once('functions.php');

$db = connectToDB();

$activity_logs = call_acces_logs($db);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Employee Activity Logs</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body class="bg-gray-100 text-gray-900">
  <!-- Sidebar -->
  <aside class="w-64 bg-white shadow-md h-screen fixed">
    <div class="p-6 text-center border-b">
      <a href="main.php">
        <h1 class="text-xl font-bold text-blue-600">CypRent ltd.</h1>
      </a>
    </div>
    <nav class="mt-6">
      <ul class="space-y-2">
        <li>
          <a
            href="main.php"
            class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600">
            <i class="fas fa-tachometer-alt w-5"></i><span>Dashboard</span>
          </a>
        </li>
        <li>
          <a
            href="customers.php"
            class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600"><i class="fas fa-users mr-3"></i> Customers</a>
        </li>
        <li>
          <a
            href="fleet.php"
            class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600"><i class="fas fa-car mr-3"></i> Fleet</a>
        </li>
        <li>
          <a
            href="rental_history.php"
            class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600"><i class="fas fa-file-contract mr-3"></i> Rentals</a>
        </li>
        <li>
          <a
            href="reservations.php"
            class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600"><i class="fas fa-calendar-check mr-3"></i> Reservations</a>
        </li>
        <li>
          <a
            href="maintenance.php"
            class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600">
            <i class="fas fa-tools w-5"></i>&nbsp;Maintenance
          </a>
        </li>
        <li>
          <a
            href="feedback.php"
            class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600"><i class="fas fa-comment-dots mr-3"></i>Feedback</a>
        </li>
        <li>
          <a
            href="financial.php"
            class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600"><i class="fas fa-chart-line mr-3"></i> Finance</a>
        </li>
        <li>
          <a
            href="access_logs.php"
            class="block py-2.5 px-4 rounded-l-full bg-blue-100 text-blue-600 font-semibold flex items-center space-x-2"><i class="fas fa-lock mr-3"></i> Access Log</a>
        </li>
      </ul>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="ml-64 flex-1">
    <!-- Navbar -->
    <div class="flex items-center justify-between px-8 py-4 bg-white shadow">
      <div class="flex items-center space-x-3">
        <!-- <i class="fas fa-car text-blue-600 text-2xl"></i> -->
        <i class="fas fa-lock text-blue-600 text-2xl w-5"></i>
        <h1 class="text-xl font-semibold text-gray-700">Activity Overview</h1>
      </div>
      <div class="flex items-center space-x-6">
        <button class="relative">
          <i class="fas fa-bell text-gray-600 text-lg"></i>
          <span
            class="absolute top-0 right-0 inline-block w-2 h-2 bg-red-600 rounded-full"></span>
        </button>
        <div class="flex items-center space-x-2">
          <img
            src="https://i.pravatar.cc/30"
            alt="User Avatar"
            class="w-8 h-8 rounded-full" />
          <span class="text-gray-700 font-medium"><?php echo $_SESSION['user']['name'] ?></span>
        </div>
      </div>
    </div>

    <!-- Rental History Table -->
    <div class="bg-white shadow rounded-lg overflow-x-auto">
      <table class="min-w-full text-sm text-left text-gray-700">
        <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
          <tr>
            <th class="px-6 py-3">ID</th>
            <th class="px-6 py-3">Employee ID</th>
            <th class="px-6 py-3">Action</th>
            <th class="px-6 py-3">Description</th>
            <th class="px-6 py-3">IP Address</th>
            <th class="px-6 py-3">User Agent</th>
            <th class="px-6 py-3">Timestamp</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <?php foreach ($activity_logs as $log): ?>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4"><?= htmlspecialchars($log['id']) ?></td>
              <td class="px-6 py-4"><?= htmlspecialchars($log['employee_name']) ?></td>
              <td class="px-6 py-4"><?= htmlspecialchars($log['action']) ?></td>
              <td class="px-6 py-4"><?= htmlspecialchars($log['description']) ?></td>
              <td class="px-6 py-4"><?= htmlspecialchars($log['ip_address']) ?></td>
              <td class="px-6 py-4"><?= htmlspecialchars($log['user_agent']) ?></td>
              <td class="px-6 py-4"><?= htmlspecialchars($log['timestamp']) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
  </main>

  <!-- Footer -->
  <footer class="text-center text-gray-600 mt-8 p-4">
    &copy; 2025 CypRent ltd. | Employee Audit Logs
  </footer>
</body>

</html>