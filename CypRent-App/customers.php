<?php

session_start();
require_once('employees_db.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Customers | Dashboard</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- Animate.css -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body class="bg-gray-100 font-sans">
  <div class="flex">
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
              class="block py-2.5 px-4 rounded-l-full bg-blue-100 text-blue-600 font-semibold flex items-center space-x-2"><i class="fas fa-users mr-3"></i> Customers</a>
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
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <div class="ml-64 flex-1">
      <!-- Navbar -->
      <div
        class="flex items-center justify-between px-8 py-4 bg-white shadow">
        <div class="flex items-center space-x-3">
          <!-- <i class="fa-solid fa-user-large text-blue-600 text-2xl"></i> -->
          <i class="fas fa-users text-blue-600 text-2xl mr-3"></i>
          <h1 class="text-xl font-semibold text-gray-700">
            Customer Management
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

      <!-- Customer Table -->
      <div class="p-6">
        <div
          class="overflow-x-auto bg-white shadow rounded-lg animate__animated animate__fadeIn">
          <table class="min-w-full table-auto">
            <thead class="bg-blue-100 text-blue-700">
              <tr>
                <th class="px-4 py-3 text-left text-sm font-semibold">ID</th>
                <th class="px-4 py-3 text-left text-sm font-semibold">Name</th>
                <th class="px-4 py-3 text-left text-sm font-semibold">Email</th>
                <th class="px-4 py-3 text-left text-sm font-semibold">Phone</th>
                <th class="px-4 py-3 text-left text-sm font-semibold">License #</th>
                <th class="px-4 py-3 text-left text-sm font-semibold">License Expiry</th>
                <th class="px-4 py-3 text-left text-sm font-semibold">Loyalty Tier</th>
                <th class="px-4 py-3 text-left text-sm font-semibold">Actions</th>
              </tr>
            </thead>
            <tbody class="text-gray-700">
              <?php foreach ($customers as $customer): ?>
                <tr class="border-b hover:bg-gray-50">
                  <td class="px-4 py-3"><?php echo "#" . $customer['id']; ?></td>
                  <td class="px-4 py-3 font-medium"><?php echo $customer['name']; ?></td>
                  <td class="px-4 py-3"><?php echo $customer['email']; ?></td>
                  <td class="px-4 py-3"><?php echo $customer['phone']; ?></td>
                  <td class="px-4 py-3"><?php echo $customer['license']; ?></td>
                  <td class="px-4 py-3 <?php echo strtotime($customer['licenseExpiry']) < time() ? 'text-red-600 font-semibold' : ''; ?>">
                    <?php echo $customer['licenseExpiry']; ?>
                  </td>
                  <td class="px-4 py-3">
                    <span class="bg-<?php echo $customer['loyaltyLevel'] == 'Gold' ? 'yellow' : ($customer['loyaltyLevel'] == 'Silver' ? 'blue' : 'green'); ?>-100 text-<?php echo $customer['loyaltyLevel'] == 'Gold' ? 'yellow' : ($customer['loyaltyLevel'] == 'Silver' ? 'blue' : 'green'); ?>-800 px-2 py-1 rounded-full text-xs">
                      <?php echo $customer['loyaltyLevel']; ?>
                    </span>
                  </td>
                  <td class="px-4 py-3 space-x-2">
                    <button class="text-blue-500 hover:text-blue-700"><i class="fas fa-eye"></i></button>
                    <button class="text-yellow-500 hover:text-yellow-600"><i class="fas fa-edit"></i></button>
                    <button class="text-red-500 hover:text-red-700"><i class="fas fa-trash"></i></button>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</body>

</html>