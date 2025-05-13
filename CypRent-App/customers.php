<?php

session_start();

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
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />

    <!-- Animate.css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
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
                class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600"
              >
                <i class="fas fa-tachometer-alt w-5"></i><span>Dashboard</span>
              </a>
            </li>
            <li>
              <a
                href="customers.php"
                class="block py-2.5 px-4 rounded-l-full bg-blue-100 text-blue-600 font-semibold flex items-center space-x-2"
                ><i class="fas fa-users mr-3"></i> Customers</a
              >
            </li>
            <li>
              <a
                href="fleet.php"
                class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600"
                ><i class="fas fa-car mr-3"></i> Fleet</a
              >
            </li>
            <li>
              <a
                href="rental_history.php"
                class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600"
                ><i class="fas fa-file-contract mr-3"></i> Rentals</a
              >
            </li>
            <li>
              <a
                href="reservations.php"
                class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600"
                ><i class="fas fa-calendar-check mr-3"></i> Reservations</a
              >
            </li>
            <li>
              <a
                href="maintenance.php"
                class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600"
              >
                <i class="fas fa-tools w-5"></i>&nbsp;Maintenance
              </a>
            </li>
            <li>
              <a
                href="feedback.php"
                class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600"
                ><i class="fas fa-comment-dots mr-3"></i>Feedback</a
              >
            </li>
            <li>
              <a
                href="financial.php"
                class="flex items-center p-3 hover:bg-blue-50 text-gray-700 hover:text-blue-600"
                ><i class="fas fa-chart-line mr-3"></i> Finance</a
              >
            </li>
          </ul>
        </nav>
      </aside>

      <!-- Main Content -->
      <div class="ml-64 flex-1">
        <!-- Navbar -->
        <div
          class="flex items-center justify-between px-8 py-4 bg-white shadow"
        >
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
                class="absolute top-0 right-0 inline-block w-2 h-2 bg-red-600 rounded-full"
              ></span>
            </button>
            <div class="flex items-center space-x-2">
              <img
                src="https://i.pravatar.cc/30"
                alt="User Avatar"
                class="w-8 h-8 rounded-full"
              />
              <span class="text-gray-700 font-medium"><?php echo $_SESSION['user']['name']?></span>
            </div>
          </div>
        </div>

        <!-- Customer Table -->
        <div class="p-6">
          <div
            class="overflow-x-auto bg-white shadow rounded-lg animate__animated animate__fadeIn"
          >
            <table class="min-w-full table-auto">
              <thead class="bg-blue-100 text-blue-700">
                <tr>
                  <th class="px-4 py-3 text-left text-sm font-semibold">ID</th>
                  <th class="px-4 py-3 text-left text-sm font-semibold">
                    Name
                  </th>
                  <th class="px-4 py-3 text-left text-sm font-semibold">
                    Email
                  </th>
                  <th class="px-4 py-3 text-left text-sm font-semibold">
                    Phone
                  </th>
                  <th class="px-4 py-3 text-left text-sm font-semibold">
                    License #
                  </th>
                  <th class="px-4 py-3 text-left text-sm font-semibold">
                    License Expiry
                  </th>
                  <th class="px-4 py-3 text-left text-sm font-semibold">
                    Loyalty Tier
                  </th>
                  <th class="px-4 py-3 text-left text-sm font-semibold">
                    Actions
                  </th>
                </tr>
              </thead>
              <tbody class="text-gray-700">
                <tr class="border-b hover:bg-gray-50">
                  <td class="px-4 py-3">#101</td>
                  <td class="px-4 py-3 font-medium">John Doe</td>
                  <td class="px-4 py-3">john@example.com</td>
                  <td class="px-4 py-3">+1 555-123-4567</td>
                  <td class="px-4 py-3">DLX12345678</td>
                  <td class="px-4 py-3 text-red-600 font-semibold">
                    2025-05-10
                  </td>
                  <td class="px-4 py-3">
                    <span
                      class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs"
                      >Gold</span
                    >
                  </td>
                  <td class="px-4 py-3 space-x-2">
                    <a href="maintenance.php">
                      <button class="text-blue-500 hover:text-blue-700">
                        <i class="fas fa-eye"></i>
                      </button>
                    </a>
                    <button class="text-yellow-500 hover:text-yellow-600">
                      <i class="fas fa-edit"></i>
                    </button>
                    <button class="text-red-500 hover:text-red-700">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr class="border-b hover:bg-gray-50">
                  <td class="px-4 py-3">#102</td>
                  <td class="px-4 py-3 font-medium">Jane Smith</td>
                  <td class="px-4 py-3">jane@demo.com</td>
                  <td class="px-4 py-3">+1 555-987-6543</td>
                  <td class="px-4 py-3">DLX56789012</td>
                  <td class="px-4 py-3 text-green-600 font-semibold">
                    2026-01-22
                  </td>
                  <td class="px-4 py-3">
                    <span
                      class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs"
                      >Platinum</span
                    >
                  </td>
                  <td class="px-4 py-3 space-x-2">
                    <button class="text-blue-500 hover:text-blue-700">
                      <i class="fas fa-eye"></i>
                    </button>
                    <button class="text-yellow-500 hover:text-yellow-600">
                      <i class="fas fa-edit"></i>
                    </button>
                    <button class="text-red-500 hover:text-red-700">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-4 py-3">#103</td>
                  <td class="px-4 py-3 font-medium">Carlos Rivera</td>
                  <td class="px-4 py-3">carlos@mail.com</td>
                  <td class="px-4 py-3">+1 555-321-9999</td>
                  <td class="px-4 py-3">DLX99887766</td>
                  <td class="px-4 py-3 text-orange-600 font-semibold">
                    2025-08-30
                  </td>
                  <td class="px-4 py-3">
                    <span
                      class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs"
                      >Silver</span
                    >
                  </td>
                  <td class="px-4 py-3 space-x-2">
                    <button class="text-blue-500 hover:text-blue-700">
                      <i class="fas fa-eye"></i>
                    </button>
                    <button class="text-yellow-500 hover:text-yellow-600">
                      <i class="fas fa-edit"></i>
                    </button>
                    <button class="text-red-500 hover:text-red-700">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-4 py-3">#104</td>
                  <td class="px-4 py-3 font-medium">Alicia Morgan</td>
                  <td class="px-4 py-3">alicia.morgan@mail.com</td>
                  <td class="px-4 py-3">+1 555-772-1122</td>
                  <td class="px-4 py-3">DLB44556622</td>
                  <td class="px-4 py-3 text-orange-600 font-semibold">
                    2025-07-22
                  </td>
                  <td class="px-4 py-3">
                    <span
                      class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs"
                      >Gold</span
                    >
                  </td>
                  <td class="px-4 py-3 space-x-2">
                    <button class="text-blue-500 hover:text-blue-700">
                      <i class="fas fa-eye"></i>
                    </button>
                    <button class="text-yellow-500 hover:text-yellow-600">
                      <i class="fas fa-edit"></i>
                    </button>
                    <button class="text-red-500 hover:text-red-700">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-4 py-3">#105</td>
                  <td class="px-4 py-3 font-medium">Jin Park</td>
                  <td class="px-4 py-3">jinpark@email.com</td>
                  <td class="px-4 py-3">+1 555-100-8899</td>
                  <td class="px-4 py-3">DLZ44332211</td>
                  <td class="px-4 py-3 text-orange-600 font-semibold">
                    2025-06-15
                  </td>
                  <td class="px-4 py-3">
                    <span
                      class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs"
                      >Silver</span
                    >
                  </td>
                  <td class="px-4 py-3 space-x-2">
                    <button class="text-blue-500 hover:text-blue-700">
                      <i class="fas fa-eye"></i>
                    </button>
                    <button class="text-yellow-500 hover:text-yellow-600">
                      <i class="fas fa-edit"></i>
                    </button>
                    <button class="text-red-500 hover:text-red-700">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-4 py-3">#106</td>
                  <td class="px-4 py-3 font-medium">Emily Zhang</td>
                  <td class="px-4 py-3">emily.zhang@mail.com</td>
                  <td class="px-4 py-3">+1 555-456-3322</td>
                  <td class="px-4 py-3">DLF77889900</td>
                  <td class="px-4 py-3 text-orange-600 font-semibold">
                    2025-03-09
                  </td>
                  <td class="px-4 py-3">
                    <span
                      class="bg-gray-100 text-gray-800 px-2 py-1 rounded-full text-xs"
                      >Bronze</span
                    >
                  </td>
                  <td class="px-4 py-3 space-x-2">
                    <button class="text-blue-500 hover:text-blue-700">
                      <i class="fas fa-eye"></i>
                    </button>
                    <button class="text-yellow-500 hover:text-yellow-600">
                      <i class="fas fa-edit"></i>
                    </button>
                    <button class="text-red-500 hover:text-red-700">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-4 py-3">#107</td>
                  <td class="px-4 py-3 font-medium">Mohammed Ali</td>
                  <td class="px-4 py-3">ali.mohammed@mail.com</td>
                  <td class="px-4 py-3">+1 555-654-3333</td>
                  <td class="px-4 py-3">DLQ00112233</td>
                  <td class="px-4 py-3 text-orange-600 font-semibold">
                    2025-05-04
                  </td>
                  <td class="px-4 py-3">
                    <span
                      class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs"
                      >Gold</span
                    >
                  </td>
                  <td class="px-4 py-3 space-x-2">
                    <button class="text-blue-500 hover:text-blue-700">
                      <i class="fas fa-eye"></i>
                    </button>
                    <button class="text-yellow-500 hover:text-yellow-600">
                      <i class="fas fa-edit"></i>
                    </button>
                    <button class="text-red-500 hover:text-red-700">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-4 py-3">#108</td>
                  <td class="px-4 py-3 font-medium">Sophie Laurent</td>
                  <td class="px-4 py-3">sophie.laurent@mail.com</td>
                  <td class="px-4 py-3">+1 555-765-1002</td>
                  <td class="px-4 py-3">DLM11223344</td>
                  <td class="px-4 py-3 text-orange-600 font-semibold">
                    2025-01-17
                  </td>
                  <td class="px-4 py-3">
                    <span
                      class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs"
                      >Silver</span
                    >
                  </td>
                  <td class="px-4 py-3 space-x-2">
                    <button class="text-blue-500 hover:text-blue-700">
                      <i class="fas fa-eye"></i>
                    </button>
                    <button class="text-yellow-500 hover:text-yellow-600">
                      <i class="fas fa-edit"></i>
                    </button>
                    <button class="text-red-500 hover:text-red-700">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-4 py-3">#109</td>
                  <td class="px-4 py-3 font-medium">Raj Patel</td>
                  <td class="px-4 py-3">raj.patel@mail.com</td>
                  <td class="px-4 py-3">+1 555-229-3344</td>
                  <td class="px-4 py-3">DLP99887766</td>
                  <td class="px-4 py-3 text-orange-600 font-semibold">
                    2025-09-10
                  </td>
                  <td class="px-4 py-3">
                    <span
                      class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs"
                      >Gold</span
                    >
                  </td>
                  <td class="px-4 py-3 space-x-2">
                    <button class="text-blue-500 hover:text-blue-700">
                      <i class="fas fa-eye"></i>
                    </button>
                    <button class="text-yellow-500 hover:text-yellow-600">
                      <i class="fas fa-edit"></i>
                    </button>
                    <button class="text-red-500 hover:text-red-700">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-4 py-3">#110</td>
                  <td class="px-4 py-3 font-medium">Lucia Fernandez</td>
                  <td class="px-4 py-3">luciaf@mail.com</td>
                  <td class="px-4 py-3">+1 555-881-1020</td>
                  <td class="px-4 py-3">DLK33445566</td>
                  <td class="px-4 py-3 text-orange-600 font-semibold">
                    2025-04-02
                  </td>
                  <td class="px-4 py-3">
                    <span
                      class="bg-gray-100 text-gray-800 px-2 py-1 rounded-full text-xs"
                      >Bronze</span
                    >
                  </td>
                  <td class="px-4 py-3 space-x-2">
                    <button class="text-blue-500 hover:text-blue-700">
                      <i class="fas fa-eye"></i>
                    </button>
                    <button class="text-yellow-500 hover:text-yellow-600">
                      <i class="fas fa-edit"></i>
                    </button>
                    <button class="text-red-500 hover:text-red-700">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-4 py-3">#111</td>
                  <td class="px-4 py-3 font-medium">Noah Johnson</td>
                  <td class="px-4 py-3">noah.johnson@mail.com</td>
                  <td class="px-4 py-3">+1 555-337-9911</td>
                  <td class="px-4 py-3">DLX12344321</td>
                  <td class="px-4 py-3 text-orange-600 font-semibold">
                    2025-02-12
                  </td>
                  <td class="px-4 py-3">
                    <span
                      class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs"
                      >Gold</span
                    >
                  </td>
                  <td class="px-4 py-3 space-x-2">
                    <button class="text-blue-500 hover:text-blue-700">
                      <i class="fas fa-eye"></i>
                    </button>
                    <button class="text-yellow-500 hover:text-yellow-600">
                      <i class="fas fa-edit"></i>
                    </button>
                    <button class="text-red-500 hover:text-red-700">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-4 py-3">#112</td>
                  <td class="px-4 py-3 font-medium">Yara Kim</td>
                  <td class="px-4 py-3">yara.kim@mail.com</td>
                  <td class="px-4 py-3">+1 555-234-5611</td>
                  <td class="px-4 py-3">DLR66554433</td>
                  <td class="px-4 py-3 text-orange-600 font-semibold">
                    2025-07-05
                  </td>
                  <td class="px-4 py-3">
                    <span
                      class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs"
                      >Silver</span
                    >
                  </td>
                  <td class="px-4 py-3 space-x-2">
                    <button class="text-blue-500 hover:text-blue-700">
                      <i class="fas fa-eye"></i>
                    </button>
                    <button class="text-yellow-500 hover:text-yellow-600">
                      <i class="fas fa-edit"></i>
                    </button>
                    <button class="text-red-500 hover:text-red-700">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-4 py-3">#113</td>
                  <td class="px-4 py-3 font-medium">George Wallace</td>
                  <td class="px-4 py-3">george.w@mail.com</td>
                  <td class="px-4 py-3">+1 555-988-2211</td>
                  <td class="px-4 py-3">DLT22334455</td>
                  <td class="px-4 py-3 text-orange-600 font-semibold">
                    2025-08-01
                  </td>
                  <td class="px-4 py-3">
                    <span
                      class="bg-gray-100 text-gray-800 px-2 py-1 rounded-full text-xs"
                      >Bronze</span
                    >
                  </td>
                  <td class="px-4 py-3 space-x-3">
                    <button class="text-blue-500 hover:text-blue-700">
                      <i class="fas fa-eye"></i>
                    </button>
                    <button class="text-yellow-500 hover:text-yellow-600">
                      <i class="fas fa-edit"></i>
                    </button>
                    <button class="text-red-500 hover:text-red-700">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>

                <!-- Add more customers dynamically -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
