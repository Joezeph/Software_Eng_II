<?php

session_start();

require_once('employees_db.php');

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if (!isset($rentals[$id])) {
  echo "Rental not found.";
  exit;
}

$rental = $rentals[$id];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rental View</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="./rental_form.css">

</head>

<body>
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
            class="block py-2.5 px-4 rounded-l-full bg-blue-100 text-blue-600 font-semibold flex items-center space-x-2"><i class="fas fa-file-contract mr-3"></i> Rentals</a>
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

  <!-- Main -->
  <div class="ml-64 flex-1">
    <!-- Navbar -->
    <div class="flex items-center justify-between px-8 py-4 bg-white shadow">
      <div class="flex items-center space-x-3">
        <i class="fas fa-file-contract text-blue-600 text-2xl"></i>
        <h1 class="text-xl font-semibold text-gray-700">Rental Details</h1>
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

    <main class="p-8 max-w-3xl mx-auto">
      <div class="bg-white shadow rounded-xl p-6 space-y-6">
        <h1 class="text-2xl font-bold text-gray-800">Rental Contract #<?= $rental['id'] ?></h1>

        <div class="grid grid-cols-2 gap-4 text-sm text-gray-700">
          <div>
            <span class="font-semibold">Customer:</span> <?= htmlspecialchars($rental['customer']) ?>
          </div>
          <div>
            <span class="font-semibold">Vehicle:</span> <?= htmlspecialchars($rental['vehicle']) ?>
          </div>
          <div>
            <span class="font-semibold">Handled by:</span> <?= htmlspecialchars($employees['name']) ?>
          </div>
          <div>
            <span class="font-semibold">Rental Period:</span>
            <?= htmlspecialchars($rental['start']) ?> to <?= htmlspecialchars($rental['end']) ?>
          </div>
          <div>
            <span class="font-semibold">Actual Return Date:</span> <?= htmlspecialchars($rental['actual_return']) ?>
          </div>
          <div>
            <span class="font-semibold">Odometer Start:</span> <?= number_format($rental['odometer_start']) ?> km
          </div>
          <div>
            <span class="font-semibold">Odometer End:</span> <?= number_format($rental['odometer_end']) ?> km
          </div>
          <div>
            <span class="font-semibold">Deposit Amount:</span> $<?= number_format($rental['deposit_amount'], 2) ?>
          </div>
          <div>
            <span class="font-semibold">Deposit Status:</span> <?= htmlspecialchars($rental['deposit_status']) ?>
          </div>
          <div>
            <span class="font-semibold">Deposit Date:</span> <?= htmlspecialchars($rental['deposit_date']) ?>
          </div>
          <div>
            <span class="font-semibold">Payment Method:</span> <?= htmlspecialchars($rental['payment']) ?>
          </div>
          <div>
            <span class="font-semibold">Total Cost:</span> $<?= number_format($rental['cost'], 2) ?>
          </div>
          <div>
            <span class="font-semibold">Status:</span>
            <span class="inline-block px-2 py-1 text-xs font-semibold rounded <?= $rental['status_class'] ?>">
              <?= htmlspecialchars($rental['status']) ?>
            </span>
          </div>
        </div>

        <div class="pt-4">
          <a href="rental_history.php" class="text-blue-600 hover:underline text-sm">
            &larr; Back to Rental History
          </a>
        </div>
      </div>
    </main>

</body>

</html>