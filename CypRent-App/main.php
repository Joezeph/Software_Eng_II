<?php

session_start();
require_once('functions.php');

$db = connectToDB();

$employees = call_employees($db);
$rentals = call_rentals($db);

$recent_rentals = recent_rentals($db);



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Car Rental Dashboard</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    .stats-cards {
      background-color: white;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      transition: 0.3s;
      box-shadow: 0px 0px 1px 0px;
      border-radius: 8px;
      padding: 20px;
    }

    .stats-cards:hover {
      transform: translateY(-5px);
    }
  </style>
</head>

<body class="bg-gray-100 min-h-screen flex">
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
            class="block py-2.5 px-4 rounded-l-full bg-blue-100 text-blue-600 font-semibold flex items-center space-x-2">
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
            href="access_log.php"
            class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600"><i class="fas fa-lock mr-3"></i> Access Log</a>
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
        <i class="fas fa-tachometer-alt text-blue-600 text-2xl w-5"></i>
        <h1 class="text-xl font-semibold text-gray-700">
          Dashboard Overview
        </h1>
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

    <!-- Dashboard Overview -->
    <div class="p-8">

      <!-- Stats Cards -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
        <div class="stats-cards">
          <i class="fas fa-car-side text-blue-500 text-3xl mb-2"></i>
          <h3 class="text-lg font-bold">Total Vehicles</h3>
          <p class="text-2xl text-gray-800 font-semibold mt-1">120</p>
        </div>
        <div class="stats-cards">
          <i class="fas fa-check-circle text-green-500 text-3xl mb-2"></i>
          <h3 class="text-lg font-bold">Available</h3>
          <p class="text-2xl text-gray-800 font-semibold mt-1">75</p>
        </div>
        <div class="stats-cards">
          <i class="fas fa-key text-yellow-500 text-3xl mb-2"></i>
          <h3 class="text-lg font-bold">Rented</h3>
          <p class="text-2xl text-gray-800 font-semibold mt-1">38</p>
        </div>
        <div class="stats-cards">
          <i class="fas fa-tools text-red-500 text-3xl mb-2"></i>
          <h3 class="text-lg font-bold">In Maintenance</h3>
          <p class="text-2xl text-gray-800 font-semibold mt-1">7</p>
        </div>
      </div>

      <!-- Recent Rentals Table -->
      <div class="bg-white shadow rounded-lg">
        <div class="p-4 border-b">
          <h3 class="text-xl font-semibold text-gray-700">Recent Rentals</h3>
        </div>
        <div class="overflow-x-auto">
          <table class="min-w-full table-auto">
            <thead class="bg-gray-50 text-gray-600 text-sm uppercase">
              <tr>
                <th class="px-6 py-3 text-left">Customer</th>
                <th class="px-6 py-3 text-left">Vehicle</th>
                <th class="px-6 py-3 text-left">Start</th>
                <th class="px-6 py-3 text-left">End</th>
                <th class="px-6 py-3 text-left">Status</th>
                <th class="px-6 py-3 text-left">Cost</th>
              </tr>
            </thead>
            <tbody class="text-gray-700">
              <?php foreach ($recent_rentals as $row): ?>
                <tr class="border-b cursor-pointer hover:bg-gray-100 transition" data-href="./rental_history.php">
                  <td class="px-6 py-4"><?= htmlspecialchars($row['customer_name']) ?></td>
                  <td class="px-6 py-4"><?= htmlspecialchars($row['vehicle_make']) ?></td>
                  <td class="px-6 py-4"><?= htmlspecialchars($row['rented_from']) ?></td>
                  <td class="px-6 py-4"><?= htmlspecialchars($row['rented_to']) ?></td>
                  <td class="px-6 py-4">
                    <span class="px-2 py-1 <?= $row['status'] ?> text-xs font-semibold rounded">
                      <?= htmlspecialchars($row['status']) ?>
                    </span>
                  </td>
                  <td class="px-6 py-4">$<?= number_format($row['total_cost']) ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
</body>

</html>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll("tr[data-href]").forEach(row => {
      row.addEventListener("click", () => {
        window.location.href = row.dataset.href;
      });
    });
  });
</script>