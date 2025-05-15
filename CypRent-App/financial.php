<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Financial Dashboard</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- <script
      src="https://kit.fontawesome.com/a2e0f1f6ad.js"
      crossorigin="anonymous"
    ></script> -->
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
            class="block py-2.5 px-4 rounded-l-full bg-blue-100 text-blue-600 font-semibold flex items-center space-x-2"><i class="fas fa-chart-line mr-3"></i> Finance</a>
        </li>
      </ul>
    </nav>
  </aside>

  <!-- Main -->
  <div class="ml-64 flex-1">
    <!-- Top Navbar -->
    <header
      class="bg-white shadow flex items-center justify-between px-6 py-4">
      <div class="flex items-center space-x-2">
        <i class="fas fa-chart-line text-blue-700 text-2xl"></i>
        <h1 class="text-xl font-semibold text-gray-700">
          Financial Dashboard
        </h1>
      </div>
      <div class="flex items-center space-x-4">
        <i class="fas fa-bell text-gray-600 text-xl cursor-pointer"></i>
        <img
          src="https://randomuser.me/api/portraits/men/74.jpg"
          alt="avatar"
          class="w-9 h-9 rounded-full" />
        <span class="text-gray-700 font-medium"><?php echo $_SESSION['user']['name']?></span>
      </div>
    </header>

    <!-- Content -->
    <main class="p-6 space-y-6">
      <!-- Top Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div
          class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
          <h3 class="text-gray-700 font-bold">Vehicle Usage</h3>
          <p class="text-3xl font-semibold mt-2">78.5%</p>
          <p class="text-sm text-gray-500">Avg monthly utilization</p>
        </div>
        <div
          class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
          <h3 class="text-gray-700 font-bold">Fuel Consumption</h3>
          <p class="text-3xl font-semibold mt-2">9.2 L/100km</p>
          <p class="text-sm text-gray-500">Fleet-wide average</p>
        </div>
        <div
          class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
          <h3 class="text-gray-700 font-bold">Maintenance Frequency</h3>
          <p class="text-3xl font-semibold mt-2">Every 4,200 km</p>
          <p class="text-sm text-gray-500">Across entire fleet</p>
        </div>
      </div>

      <!-- Revenue Chart -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-bold text-gray-700 mb-4">Monthly Revenue</h3>
        <canvas id="revenueChart" height="80"></canvas>
      </div>

      <!-- Dual Graphs -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-lg shadow">
          <h3 class="text-lg font-bold text-gray-700 mb-4">
            Fleet Performance
          </h3>
          <canvas id="fleetChart" height="80"></canvas>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
          <h3 class="text-lg font-bold text-gray-700 mb-4">
            Outstanding Payments
          </h3>
          <ul class="space-y-3">
            <li class="flex justify-between border-b pb-2">
              <span>John Doe</span>
              <span class="text-red-600 font-semibold">$120.00</span>
            </li>
            <li class="flex justify-between border-b pb-2">
              <span>Jane Smith</span>
              <span class="text-red-600 font-semibold">$75.50</span>
            </li>
            <li class="flex justify-between">
              <span>Ahmed Khan</span>
              <span class="text-red-600 font-semibold">$220.30</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Customer Trend Table -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-lg font-bold text-gray-700 mb-4">Customer Trends</h3>
        <table class="w-full text-sm text-left text-gray-500">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
              <th class="px-4 py-3">Customer</th>
              <th class="px-4 py-3">Loyalty Tier</th>
              <th class="px-4 py-3">Rentals</th>
              <th class="px-4 py-3">Avg Spend</th>
              <th class="px-4 py-3">Rating</th>
            </tr>
          </thead>
          <tbody>
            <tr class="bg-white border-b hover:bg-gray-50">
              <td class="px-4 py-3 font-medium text-gray-900">Emily White</td>
              <td class="px-4 py-3">Gold</td>
              <td class="px-4 py-3">12</td>
              <td class="px-4 py-3">$680</td>
              <td class="px-4 py-3">4.8</td>
            </tr>
            <tr class="bg-white border-b hover:bg-gray-50">
              <td class="px-4 py-3 font-medium text-gray-900">Leo Parker</td>
              <td class="px-4 py-3">Silver</td>
              <td class="px-4 py-3">9</td>
              <td class="px-4 py-3">$470</td>
              <td class="px-4 py-3">4.3</td>
            </tr>
            <tr class="bg-white hover:bg-gray-50">
              <td class="px-4 py-3 font-medium text-gray-900">Ava Patel</td>
              <td class="px-4 py-3">Platinum</td>
              <td class="px-4 py-3">16</td>
              <td class="px-4 py-3">$1,150</td>
              <td class="px-4 py-3">4.9</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>

  <!-- ChartJS Scripts -->
  <script>
    const revenueCtx = document.getElementById("revenueChart");
    new Chart(revenueCtx, {
      type: "line",
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May"],
        datasets: [{
          label: "Revenue ($)",
          data: [1200, 1900, 1700, 2200, 2500],
          backgroundColor: "rgba(34, 197, 94, 0.2)",
          borderColor: "rgba(34, 197, 94, 1)",
          borderWidth: 2,
          tension: 0.4,
          fill: true,
        }, ],
      },
    });

    const fleetCtx = document.getElementById("fleetChart");
    new Chart(fleetCtx, {
      type: "bar",
      data: {
        labels: ["Active", "Rented", "Maintenance", "Available"],
        datasets: [{
          label: "Vehicles",
          data: [22, 18, 5, 30],
          backgroundColor: ["#3B82F6", "#F59E0B", "#EF4444", "#10B981"],
        }, ],
      },
    });
  </script>
</body>

</html>