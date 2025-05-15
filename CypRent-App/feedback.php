<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Customer Feedback</title>

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
            class="block py-2.5 px-4 rounded-l-full bg-blue-100 text-blue-600 font-semibold flex items-center space-x-2"><i class="fas fa-comment-dots mr-3"></i>Feedback</a>
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
        <i class="fas fa-comment-dots mr-3 text-blue-600 text-2xl"></i>
        <h1 class="text-xl font-semibold text-gray-700">Customer Feedback</h1>
      </div>
      <div class="flex items-center space-x-6">
        <i class="fas fa-bell text-gray-600 text-lg"></i>
        <div class="flex items-center space-x-2">
          <img
            src="https://i.pravatar.cc/30"
            alt="User Avatar"
            class="w-8 h-8 rounded-full" />
          <span class="text-gray-700 font-medium"><?php echo $_SESSION['user']['name']?></span>
        </div>
      </div>
    </div>

    <!-- Feedback Table -->
    <div class="p-8">
      <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">
          Feedback & Complaints
        </h2>
        <div class="overflow-x-auto">
          <table class="min-w-full text-sm text-gray-700">
            <thead class="bg-gray-100 text-xs text-gray-500 uppercase">
              <tr>
                <th class="px-4 py-3 text-left">Customer</th>
                <th class="px-4 py-3 text-left">Vehicle</th>
                <th class="px-4 py-3 text-left">Handled By</th>
                <th class="px-4 py-3 text-left">Type</th>
                <th class="px-4 py-3 text-left">Rating</th>
                <th class="px-4 py-3 text-left">Comments</th>
                <th class="px-4 py-3 text-left">Date</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-3 font-medium">Jane Doe</td>
                <td class="px-4 py-3">Toyota Corolla</td>
                <td class="px-4 py-3">Alex P.</td>
                <td class="px-4 py-3">
                  <span class="text-yellow-600 font-semibold">Complaint</span>
                </td>
                <td class="px-4 py-3">
                  <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                  <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                  <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                  <span class="text-gray-400"><i class="fas fa-star"></i></span>
                  <span class="text-gray-400"><i class="fas fa-star"></i></span>
                </td>
                <td class="px-4 py-3">
                  AC wasn't working properly. Staff helped resolve the issue
                  quickly.
                </td>
                <td class="px-4 py-3">2025-04-29</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-3 font-medium">David Smith</td>
                <td class="px-4 py-3">Honda Civic</td>
                <td class="px-4 py-3">Maria T.</td>
                <td class="px-4 py-3">
                  <span class="text-green-600 font-semibold">Feedback</span>
                </td>
                <td class="px-4 py-3">
                  <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                  <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                  <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                  <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                  <span class="text-gray-400"><i class="fas fa-star"></i></span>
                </td>
                <td class="px-4 py-3">
                  Smooth rental experience. Vehicle was in great condition.
                </td>
                <td class="px-4 py-3">2025-04-27</td>
              </tr>
              <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 font-medium">Sarah Connor</td>
                <td class="px-4 py-3">Ford Focus</td>
                <td class="px-4 py-3">Leo R.</td>
                <td class="px-4 py-3">
                  <span class="text-red-600 font-semibold">Complaint</span>
                </td>
                <td class="px-4 py-3">
                  <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                  <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                  <span class="text-gray-400"><i class="fas fa-star"></i></span>
                  <span class="text-gray-400"><i class="fas fa-star"></i></span>
                  <span class="text-gray-400"><i class="fas fa-star"></i></span>
                </td>
                <td class="px-4 py-3">
                  Pickup was delayed 1 hour. Staff apologized and offered
                  discount.
                </td>
                <td class="px-4 py-3">2025-04-24</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-3 font-medium">Jessica Lee</td>
                <td class="px-4 py-3">Toyota RAV4</td>
                <td class="px-4 py-3">Andrew B.</td>
                <td class="px-4 py-3">
                  <span class="text-red-600 font-semibold">Complaint</span>
                </td>
                <td class="px-4 py-3">
                  <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                  <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                  <span class="text-gray-400"><i class="fas fa-star"></i></span>
                  <span class="text-gray-400"><i class="fas fa-star"></i></span>
                  <span class="text-gray-400"><i class="fas fa-star"></i></span>
                </td>
                <td class="px-4 py-3">Vehicle had a strong odor and wasn't properly cleaned.</td>
                <td class="px-4 py-3">2025-04-25</td>
              </tr>

              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-3 font-medium">Michael Torres</td>
                <td class="px-4 py-3">Ford Escape</td>
                <td class="px-4 py-3">Nina W.</td>
                <td class="px-4 py-3">
                  <span class="text-green-600 font-semibold">Feedback</span>
                </td>
                <td class="px-4 py-3">
                  <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                  <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                  <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                  <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                  <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                </td>
                <td class="px-4 py-3">Excellent service! Staff was friendly and pickup was fast.</td>
                <td class="px-4 py-3">2025-04-26</td>
              </tr>

              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-3 font-medium">Amir Khan</td>
                <td class="px-4 py-3">Mazda CX-5</td>
                <td class="px-4 py-3">Liam H.</td>
                <td class="px-4 py-3">
                  <span class="text-green-600 font-semibold">Feedback</span>
                </td>
                <td class="px-4 py-3">
                  <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                  <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                  <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                  <span class="text-gray-400"><i class="fas fa-star"></i></span>
                  <span class="text-gray-400"><i class="fas fa-star"></i></span>
                </td>
                <td class="px-4 py-3">Good experience but the return process took too long.</td>
                <td class="px-4 py-3">2025-04-24</td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
</body>

</html>