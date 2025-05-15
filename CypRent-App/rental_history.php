<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rental History</title>

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
      </ul>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="ml-64 flex-1">
    <!-- Navbar -->
    <div class="flex items-center justify-between px-8 py-4 bg-white shadow">
      <div class="flex items-center space-x-3">
        <i class="fas fa-file-contract text-blue-600 text-2xl"></i>
        <h1 class="text-xl font-semibold text-gray-700">Rental History</h1>
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

    <!-- Content Section -->
    <div class="p-8">
      <!-- Create Rental Button -->
      <div class="flex justify-end mb-4">
        <button
          onclick="window.location.href='rental_form.php'"
          class="bg-blue-600 text-white px-5 py-2 rounded shadow hover:bg-blue-700 transition-all flex items-center gap-2">
          <i class="fas fa-plus"></i> Create Rental
        </button>
      </div>

      <!-- Rental History Table -->
      <div class="bg-white shadow rounded-lg overflow-x-auto">
        <table class="min-w-full text-sm text-left text-gray-700">
          <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
            <tr>
              <th class="px-6 py-3">Customer</th>
              <th class="px-6 py-3">Vehicle</th>
              <th class="px-6 py-3">Start Date</th>
              <th class="px-6 py-3">End Date</th>
              <th class="px-6 py-3">Status</th>
              <th class="px-6 py-3">Cost</th>
              <th class="px-6 py-3">Payment</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4">John Doe</td>
              <td class="px-6 py-4">Toyota Corolla</td>
              <td class="px-6 py-4">2025-04-15</td>
              <td class="px-6 py-4">2025-04-20</td>
              <td class="px-6 py-4">
                <span
                  class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-semibold">Completed</span>
              </td>
              <td class="px-6 py-4">$160</td>
              <td class="px-6 py-4">Credit Card</td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4">Jane Smith</td>
              <td class="px-6 py-4">Honda Civic</td>
              <td class="px-6 py-4">2025-03-22</td>
              <td class="px-6 py-4">2025-03-25</td>
              <td class="px-6 py-4">
                <span
                  class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-semibold">Completed</span>
              </td>
              <td class="px-6 py-4">$135</td>
              <td class="px-6 py-4">Cash</td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4">Mark Allen</td>
              <td class="px-6 py-4">Ford Focus</td>
              <td class="px-6 py-4">2025-04-10</td>
              <td class="px-6 py-4">2025-04-12</td>
              <td class="px-6 py-4">
                <span
                  class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs font-semibold">Cancelled</span>
              </td>
              <td class="px-6 py-4">$0</td>
              <td class="px-6 py-4">—</td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4">Emily Stone</td>
              <td class="px-6 py-4">Honda Civic</td>
              <td class="px-6 py-4">2025-03-10</td>
              <td class="px-6 py-4">2025-03-14</td>
              <td class="px-6 py-4">
                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-semibold">Completed</span>
              </td>
              <td class="px-6 py-4">$145</td>
              <td class="px-6 py-4">Debit Card</td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4">Carlos Mendez</td>
              <td class="px-6 py-4">Chevrolet Malibu</td>
              <td class="px-6 py-4">2025-04-02</td>
              <td class="px-6 py-4">2025-04-06</td>
              <td class="px-6 py-4">
                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-semibold">Completed</span>
              </td>
              <td class="px-6 py-4">$175</td>
              <td class="px-6 py-4">Cash</td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4">Ava Peterson</td>
              <td class="px-6 py-4">Nissan Altima</td>
              <td class="px-6 py-4">2025-03-25</td>
              <td class="px-6 py-4">2025-03-30</td>
              <td class="px-6 py-4">
                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-semibold">Completed</span>
              </td>
              <td class="px-6 py-4">$200</td>
              <td class="px-6 py-4">Credit Card</td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4">James Liu</td>
              <td class="px-6 py-4">Ford Fusion</td>
              <td class="px-6 py-4">2025-04-10</td>
              <td class="px-6 py-4">2025-04-13</td>
              <td class="px-6 py-4">
                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-semibold">Completed</span>
              </td>
              <td class="px-6 py-4">$120</td>
              <td class="px-6 py-4">Bank Transfer</td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4">Sophia Zhang</td>
              <td class="px-6 py-4">Hyundai Elantra</td>
              <td class="px-6 py-4">2025-04-05</td>
              <td class="px-6 py-4">2025-04-09</td>
              <td class="px-6 py-4">
                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-semibold">Completed</span>
              </td>
              <td class="px-6 py-4">$135</td>
              <td class="px-6 py-4">Credit Card</td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4">Liam Carter</td>
              <td class="px-6 py-4">Volkswagen Jetta</td>
              <td class="px-6 py-4">2025-03-28</td>
              <td class="px-6 py-4">2025-04-01</td>
              <td class="px-6 py-4">
                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-semibold">Completed</span>
              </td>
              <td class="px-6 py-4">$155</td>
              <td class="px-6 py-4">Mobile Payment</td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </main>
</body>

</html>