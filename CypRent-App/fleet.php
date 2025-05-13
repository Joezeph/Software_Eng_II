<?php

session_start();

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

  <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    /> -->
  <style>
    body {
      font-family: "Segoe UI", sans-serif;
      margin: 0;
      display: flex;
      background: #f5f7fa;
    }

    /* Sidebar */
    .sidebar {
      width: 250px;
      background-color: #fff;
      color: #1f2937;
      height: 100vh;
      position: fixed;
      padding-top: 20px;
    }

    .sidebar h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .sidebar a {
      display: block;
      padding: 12px 20px;
      color: #1f2937;
      text-decoration: none;
      transition: background 0.3s;
    }

    .sidebar a:hover {
      background-color: #fff;
    }

    /* Main Content */
    .main-content {
      margin-left: 250px;
      width: 100%;
    }

    /* Top Navbar */
    .navbar {
      background-color: white;
      padding: 15px 30px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .navbar-left {
      display: flex;
      align-items: center;
    }

    .navbar-left img {
      width: 35px;
      margin-right: 10px;
    }

    .navbar-right {
      display: flex;
      align-items: center;
    }

    .navbar-right i {
      font-size: 20px;
      margin-right: 20px;
      cursor: pointer;
    }

    .navbar-right .avatar {
      width: 35px;
      height: 35px;
      border-radius: 50%;
    }

    /* Fleet Grid */
    .fleet-container {
      padding: 30px;
    }

    .fleet-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
      gap: 20px;
    }

    .vehicle-card {
      background: white;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      transition: 0.3s;
    }

    .vehicle-card:hover {
      transform: translateY(-5px);
    }

    .vehicle-img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .vehicle-info {
      padding: 15px;
    }

    .vehicle-info h3 {
      margin: 0 0 5px;
    }

    .vehicle-info p {
      margin: 4px 0;
      font-size: 14px;
    }

    .status {
      padding: 4px 10px;
      border-radius: 8px;
      font-size: 12px;
      font-weight: bold;
      color: white;
      display: inline-block;
    }

    .available {
      background-color: #28a745;
    }

    .rented {
      background-color: #ffc107;
      color: black;
    }

    .maintenance {
      background-color: #dc3545;
    }

    .rating i {
      color: #f39c12;
    }

    .utilization {
      margin-top: 10px;
      text-align: center;
      font-weight: bold;
      font-size: 14px;
    }

    .utilization-bar {
      height: 8px;
      background: #e9ecef;
      border-radius: 4px;
      overflow: hidden;
      margin-top: 5px;
    }

    .utilization-fill {
      height: 100%;
      background: #007bff;
      transition: width 1s ease-in-out;
    }
  </style>
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
        <span class="text-gray-700 font-medium"><?php echo $_SESSION['user']['name']?></span>
      </div>
    </header>

    <div class="fleet-container">
      <div class="fleet-grid">
        <!-- Vehicle 1 -->
        <div class="vehicle-card">
          <img src="images/camry-2022.png" class="vehicle-img" />
          <div class="vehicle-info">
            <h3>Toyota Camry 2022</h3>
            <p><strong>Plate:</strong> ABC-123</p>
            <p><strong>VIN:</strong> 1HGCM82633A004352</p>
            <p><strong>Branch:</strong> Larnaca</p>
            <p>
              <strong>Status:</strong>
              <span class="status available">Available</span>
            </p>
            <p><strong>Mileage:</strong> 35,000 km</p>
            <p><strong>Rate:</strong> $45/day</p>
            <p><strong>Last Maint.:</strong> 2025-03-15</p>
            <p class="rating"><i class="fas fa-star"></i> 4.3</p>
            <div class="utilization">
              Utilization: 76%
              <div class="utilization-bar">
                <div class="utilization-fill" style="width: 76%"></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Vehicle 2 -->
        <div class="vehicle-card">
          <img src="images/explorer-2021.jpg" class="vehicle-img" />
          <div class="vehicle-info">
            <h3>Ford Explorer 2021</h3>
            <p><strong>Plate:</strong> DEF-456</p>
            <p><strong>VIN:</strong> 1FAFP404X1F234567</p>
            <p><strong>Branch:</strong> Paphos</p>
            <p>
              <strong>Status:</strong>
              <span class="status rented">Rented</span>
            </p>
            <p><strong>Mileage:</strong> 62,000 km</p>
            <p><strong>Rate:</strong> $70/day</p>
            <p><strong>Last Maint.:</strong> 2025-04-01</p>
            <p class="rating"><i class="fas fa-star"></i> 4.7</p>
            <div class="utilization">
              Utilization: 89%
              <div class="utilization-bar">
                <div class="utilization-fill" style="width: 89%"></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Vehicle 3 -->
        <div class="vehicle-card">
          <img src="images/bmw-2023.png" class="vehicle-img" />
          <div class="vehicle-info">
            <h3>BMW 5 Series 2023</h3>
            <p><strong>Plate:</strong> GHI-789</p>
            <p><strong>VIN:</strong> WBA5A7C54GG123456</p>
            <p><strong>Branch:</strong> Limassol</p>
            <p>
              <strong>Status:</strong>
              <span class="status maintenance">Maintenance</span>
            </p>
            <p><strong>Mileage:</strong> 21,000 km</p>
            <p><strong>Rate:</strong> $110/day</p>
            <p><strong>Last Maint.:</strong> 2025-04-20</p>
            <p class="rating"><i class="fas fa-star"></i> 4.9</p>
            <div class="utilization">
              Utilization: 64%
              <div class="utilization-bar">
                <div class="utilization-fill" style="width: 64%"></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Vehicle 4 -->
        <div class="vehicle-card">
          <img src="images/camaro-2022.jpg" class="vehicle-img" />
          <div class="vehicle-info">
            <h3>Chevrolet Camaro 2022</h3>
            <p><strong>Plate:</strong> JKL-321</p>
            <p><strong>VIN:</strong> 2G1FB1E36F9138765</p>
            <p><strong>Branch:</strong> Agia Napa</p>
            <p>
              <strong>Status:</strong>
              <span class="status available">Available</span>
            </p>
            <p><strong>Mileage:</strong> 12,000 km</p>
            <p><strong>Rate:</strong> $95/day</p>
            <p><strong>Last Maint.:</strong> 2025-03-05</p>
            <p class="rating"><i class="fas fa-star"></i> 4.5</p>
            <div class="utilization">
              Utilization: 52%
              <div class="utilization-bar">
                <div class="utilization-fill" style="width: 52%"></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Vehicle 5 -->
        <div class="vehicle-card">
          <img src="images/ram-2020.jpg" class="vehicle-img" />
          <div class="vehicle-info">
            <h3>RAM 1500 2021</h3>
            <p><strong>Plate:</strong> MNO-654</p>
            <p><strong>VIN:</strong> 3C6JR7DT0DG123987</p>
            <p><strong>Branch:</strong> Nicosia</p>
            <p>
              <strong>Status:</strong>
              <span class="status rented">Rented</span>
            </p>
            <p><strong>Mileage:</strong> 78,000 km</p>
            <p><strong>Rate:</strong> $85/day</p>
            <p><strong>Last Maint.:</strong> 2025-02-28</p>
            <p class="rating"><i class="fas fa-star"></i> 4.0</p>
            <div class="utilization">
              Utilization: 91%
              <div class="utilization-bar">
                <div class="utilization-fill" style="width: 91%"></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Vehicle 6 -->
        <div class="vehicle-card">
          <img src="images/mercedes-2022.png" class="vehicle-img" />
          <div class="vehicle-info">
            <h3>Mercedes Benz E 220 2022</h3>
            <p><strong>Plate:</strong> EXP-538</p>
            <p><strong>VIN:</strong> 324JR7DF0DG1B3F89</p>
            <p><strong>Branch:</strong> Larnaca</p>
            <p>
              <strong>Status:</strong>
              <span class="status maintenance">Maintenance</span>
            </p>
            <p><strong>Mileage:</strong> 102,000 km</p>
            <p><strong>Rate:</strong> $95/day</p>
            <p><strong>Last Maint.:</strong> 2025-03-30</p>
            <p class="rating"><i class="fas fa-star"></i> 3.2</p>
            <div class="utilization">
              Utilization: 75%
              <div class="utilization-bar">
                <div class="utilization-fill" style="width: 91%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>