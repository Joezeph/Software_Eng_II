<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reservation Form</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

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
            class="block py-2.5 px-4 rounded-l-full bg-blue-100 text-blue-600 font-semibold flex items-center space-x-2"><i class="fas fa-calendar-check mr-3"></i> Reservations</a>
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
    <div class="flex items-center justify-between px-8 py-4 bg-white shadow">
      <div class="flex items-center space-x-3">
        <i class="fas fa-file-contract text-blue-600 text-2xl"></i>
        <h1 class="text-xl font-semibold text-gray-700">Reservations</h1>
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
          <span class="text-gray-700 font-medium"><?php echo $_SESSION['user']['name']?></span>
        </div>
      </div>
    </div>

    <!-- Reservation Form -->
    <main class="p-8 max-w-5xl mx-auto">
      <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="text-2xl font-semibold mb-6">
          <i class="fas fa-calendar-check mr-2 text-blue-500"></i>Reservation
          Form
        </h3>
        <form class="space-y-6">
          <!-- Customer & Vehicle -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Customer</label>
              <select class="w-full border rounded-lg px-4 py-2">
                <option>-- Select Customer --</option>
                <option>John Doe - john@example.com</option>
                <option>Jane Smith - jane@example.com</option>
              </select>
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Vehicle</label>
              <select class="w-full border rounded-lg px-4 py-2">
                <option>-- Select Vehicle --</option>
                <option>Toyota Camry - ABC123</option>
                <option>BMW 3 Series - XYZ789</option>
              </select>
            </div>
          </div>

          <!-- Branches -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Pickup Branch</label>
              <select class="w-full border rounded-lg px-4 py-2">
                <option>-- Select Branch --</option>
                <option>Main Downtown</option>
                <option>Airport</option>
              </select>
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Drop-off Branch</label>
              <select class="w-full border rounded-lg px-4 py-2">
                <option>-- Select Branch --</option>
                <option>Main Downtown</option>
                <option>Airport</option>
              </select>
            </div>
          </div>

          <!-- Reservation Dates -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Reserved From</label>
              <input
                type="datetime-local"
                class="w-full border rounded-lg px-4 py-2" />
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Reserved To</label>
              <input
                type="datetime-local"
                class="w-full border rounded-lg px-4 py-2" />
            </div>
          </div>

          <!-- Payment & Deposit -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Deposit Amount</label>
              <input
                type="number"
                placeholder="e.g. 100.00"
                class="w-full border rounded-lg px-4 py-2" />
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Payment Method</label>
              <select class="w-full border rounded-lg px-4 py-2">
                <option>-- Select Method --</option>
                <option>Credit Card</option>
                <option>Cash</option>
                <option>PayPal</option>
              </select>
            </div>
          </div>

          <div class="flex justify-end pt-4">
            <button
              type="submit"
              class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg transition">
              <i class="fas fa-save mr-2"></i>Submit Reservation
            </button>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>

</html>