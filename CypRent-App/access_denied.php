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
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body class="bg-gray-100 min-h-screen flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md h-screen fixed">
      <div class="p-6 text-center border-b">
        <a href="main.html">
          <h1 class="text-xl font-bold text-blue-600">CypRent ltd.</h1>
        </a>
      </div>
      <nav class="mt-6">
        <ul class="space-y-2">
          <li>
            <a
              href="main.html"
              class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600"
            >
              <i class="fas fa-tachometer-alt w-5"></i><span>Dashboard</span>
            </a>
          </li>
          <li>
            <a
              href="customers.html"
              class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600"
              ><i class="fas fa-users mr-3"></i> Customers</a
            >
          </li>
          <li>
            <a
              href="fleet.html"
              class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600"
              ><i class="fas fa-car mr-3"></i> Fleet</a
            >
          </li>
          <li>
            <a
              href="rental_history.html"
              class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600"
              ><i class="fas fa-file-contract mr-3"></i> Rentals</a
            >
          </li>
          <li>
            <a
              href="reservations.html"
              class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600"
              ><i class="fas fa-calendar-check mr-3"></i> Reservations</a
            >
          </li>
          <li>
            <a
              href="maintenance.html"
              class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600"
            >
              <i class="fas fa-tools w-5"></i>&nbsp;Maintenance
            </a>
          </li>
          <li>
            <a
              href="feedback.html"
              class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600"
              ><i class="fas fa-comment-dots mr-3"></i>Feedback</a
            >
          </li>
          <li>
            <a
              href="financial.html"
              class="block py-2.5 px-4 rounded-l-full bg-blue-100 text-blue-600 font-semibold flex items-center space-x-2"
              ><i class="fas fa-chart-line mr-3"></i> Finance</a
            >
          </li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="ml-64 flex-1">
      <!-- Navbar -->
      <div class="flex items-center justify-between px-8 py-4 bg-white shadow">
        <div class="flex items-center space-x-3">
          <i class="fas fa-chart-line text-blue-600 text-2xl"></i>
          <h1 class="text-xl font-semibold text-gray-700">
            Financial Overview
          </h1>
        </div>
        <div class="flex items-center space-x-6">
          <button class="relative">
            <i class="fas fa-bell text-gray-600 text-lg"></i>
            <span
              class="absolute top-0 right-0 inline-block w-2 h-2 bg-red-600 rounded-full"
            ></span>
          </button>
          <div class="flex items-center space-x-2">
            <img
              src="https://i.pravatar.cc/30"
              alt="User Avatar"
              class="w-8 h-8 rounded-full"
            />
            <span class="text-gray-700 font-medium">User</span>
          </div>
        </div>
      </div>

      <!-- Access Denied Message -->
      <div class="p-8 flex items-center justify-center h-[80vh]">
        <div
          class="bg-red-100 border border-red-400 text-red-700 px-6 py-5 rounded shadow text-center max-w-lg"
        >
          <i class="fas fa-exclamation-triangle text-3xl text-red-500 mb-4"></i>
          <h2 class="text-2xl font-bold mb-2">Access Denied</h2>
          <p class="text-md">
            Administrator privileges are required to access the Financial
            Dashboard.
          </p>
        </div>
      </div>
    </main>
  </body>
</html>
