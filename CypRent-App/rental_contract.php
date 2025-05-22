<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rental Contract Summary</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
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

  <!-- Main Content -->
  <main class="ml-64 flex-1">
    <!-- Navbar -->
    <div class="flex items-center justify-between px-8 py-4 bg-white shadow">
      <div class="flex items-center space-x-3">
        <i class="fas fa-receipt text-blue-600 text-2xl"></i>
        <h1 class="text-xl font-semibold text-gray-700">Rental Contract</h1>
      </div>
      <div class="flex items-center space-x-6">
        <i
          class="fas fa-print text-blue-600 cursor-pointer hover:text-blue-600"></i>
        <div class="flex items-center space-x-2">
          <img
            src="https://i.pravatar.cc/30"
            alt="User Avatar"
            class="w-8 h-8 rounded-full" />
          <span class="text-gray-700 font-medium"><?php echo $_SESSION['user']['name'] ?></span>
        </div>
      </div>
    </div>

    <!-- Contract Summary -->
    <div class="p-8">
      <div class="bg-white shadow rounded-lg max-w-4xl mx-auto p-8">
        <div class="text-center mb-6">
          <h2 class="text-2xl font-bold text-blue-700 mb-2">
            Rental Contract Summary
          </h2>
          <p class="text-gray-500">Reference #: RC-20250430-001</p>
        </div>

        <!-- Customer Info -->
        <div class="mb-6">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">
            <i class="fas fa-user mr-2 text-blue-600"></i> Customer
            Information
          </h3>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <p><strong>Name:</strong> John Doe</p>
            <p><strong>Email:</strong> john.doe@example.com</p>
            <p><strong>Phone:</strong> +357 98765432</p>
            <p><strong>License No.:</strong> ABC123456</p>
          </div>
        </div>

        <!-- Vehicle Info -->
        <div class="mb-6">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">
            <i class="fas fa-car mr-2 text-blue-600"></i> Vehicle Information
          </h3>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <p><strong>Make & Model:</strong> Toyota Corolla</p>
            <p><strong>Year:</strong> 2022</p>
            <p><strong>License Plate:</strong> XYZ-987</p>
            <p><strong>VIN:</strong> 1HGCM82633A004352</p>
          </div>
        </div>

        <!-- Rental Details -->
        <div class="mb-6">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">
            <i class="fas fa-calendar-alt mr-2 text-blue-600"></i> Rental
            Details
          </h3>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <p><strong>Start Date:</strong> 2025-05-01</p>
            <p><strong>End Date:</strong> 2025-05-05</p>
            <p><strong>Daily Rate:</strong> $40</p>
            <p><strong>Total Cost:</strong> $200</p>
            <p><strong>Payment Method:</strong> Credit Card</p>
            <p><strong>Deposit:</strong> $100</p>
          </div>
        </div>

        <!-- Notes -->
        <div class="mb-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">
            <i class="fas fa-sticky-note mr-2 text-blue-600"></i> Notes
          </h3>
          <p class="text-gray-600 italic">
            Customer requested child seat and full tank fuel upon pickup.
          </p>
        </div>

        <!-- Footer -->
        <div class="mt-8 border-t pt-4 text-sm text-gray-500 text-center">
          <p>
            This rental contract is legally binding. Please retain a copy for
            your records.
          </p>
          <p class="mt-2">
            Thank you for choosing
            <span class="font-semibold text-blue-600">CypRent Ltd.</span>
          </p>
        </div>
      </div>
    </div>
  </main>
</body>

</html>