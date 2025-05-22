<?php

session_start();
require_once('employees_db.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fleet Overview</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="./fleet.css">
</head>

<body class="bg-gray-100 flex">
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
            class="block py-2.5 px-4 rounded-l-full bg-blue-100 text-blue-600 font-semibold flex items-center space-x-2"><i class="fas fa-car mr-3"></i> Fleet</a>
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

  <div class="main-content">
    <!-- Top Navbar -->
    <header
      class="bg-white shadow flex items-center justify-between px-6 py-4">
      <div class="flex items-center space-x-2">
        <!-- <i class="fas fa-chart-line text-blue-700 text-2xl"></i> -->
        <i class="fas fa-car mr-3 text-blue-700 text-2xl"></i>
        <h1 class="text-xl font-semibold text-gray-700">
          Fleet Overview
        </h1>
      </div>
      <div class="flex items-center space-x-4">
        <i class="fas fa-bell text-gray-600 text-xl cursor-pointer"></i>
        <img
          src="https://randomuser.me/api/portraits/men/74.jpg"
          alt="avatar"
          class="w-9 h-9 rounded-full" />
        <span class="text-gray-700 font-medium"><?php echo $_SESSION['user']['name'] ?></span>
      </div>
    </header>

    <div class="fleet-container">
      <div class="fleet-grid">
        <!-- Vehicle 1 -->
        <?php foreach ($cars as $car): ?>
          <div class="vehicle-card">
            <img src="<?= $car['image'] ?>" class="vehicle-img" />
            <div class="vehicle-info">
              <h3><?= $car['name'] ?></h3>
              <p><strong>Plate:</strong> <?= $car['plate'] ?></p>
              <p><strong>VIN:</strong> <?= $car['vin'] ?></p>
              <p><strong>Branch:</strong> <?= $car['branch'] ?></p>
              <p>
                <strong>Status:</strong>
                <span class="status <?= strtolower($car['status']) ?>">
                  <?= $car['status'] ?>
                </span>
              </p>
              <p><strong>Mileage:</strong> <?= number_format($car['mileage']) ?> km</p>
              <p><strong>Rate:</strong> $<?= $car['rate'] ?>/day</p>
              <p><strong>Last Maint.:</strong> <?= $car['last_maintenance'] ?></p>
              <p class="rating"><i class="fas fa-star"></i> <?= $car['rating'] ?></p>
              <div class="utilization">
                Utilization: <?= $car['utilization'] ?>%
                <div class="utilization-bar">
                  <div class="utilization-fill" style="width: <?= $car['utilization'] ?>%"></div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
</body>

</html>