<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>New Rental</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
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

    /* Form Styling */
    .form-container {
      padding: 30px;
      max-width: 900px;
      margin: auto;
    }

    .form-container h2 {
      margin-bottom: 20px;
    }

    form {
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.07);
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: 600;
      margin-bottom: 6px;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 15px;
    }

    .form-group textarea {
      resize: vertical;
    }

    .form-row {
      display: flex;
      gap: 20px;
    }

    .form-row .form-group {
      flex: 1;
    }

    .submit-btn {
      background-color: #1d4ed8;
      color: white;
      border: none;
      padding: 12px 24px;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .submit-btn:hover {
      background-color: #2563eb;
    }
  </style>
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
      </ul>
    </nav>
  </aside>

  <!-- Main -->
  <div class="ml-64 flex-1">
    <!-- Navbar -->
    <div class="flex items-center justify-between px-8 py-4 bg-white shadow">
      <div class="flex items-center space-x-3">
        <i class="fas fa-file-contract text-blue-600 text-2xl"></i>
        <h1 class="text-xl font-semibold text-gray-700">Rentals</h1>
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

    <!-- Rental Form -->
    <main class="p-8 max-w-5xl mx-auto">
      <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="text-2xl font-semibold mb-6">
          <i class="fas fa-file-contract mr-2 text-blue-500"></i>Rental
          Form
        </h3>
        <form id="rentalContract">
          <!-- Customer Info -->
          <div class="form-group">
            <label for="customer">Customer</label>
            <select id="customer">
              <option>-- Select Customer --</option>
              <option value="1">John Doe - john@example.com</option>
              <option value="2">Jane Smith - jane@example.com</option>
            </select>
          </div>

          <!-- Vehicle Info -->
          <div class="form-group">
            <label for="vehicle">Vehicle</label>
            <select id="vehicle">
              <option>-- Select Vehicle --</option>
              <option value="1">Toyota Camry - ABC-123</option>
              <option value="2">BMW 5 Series - GHI-789</option>
            </select>
          </div>

          <!-- Rental Period -->
          <div class="form-row">
            <div class="form-group">
              <label for="start_date">Rental Start Date</label>
              <input type="date" id="start_date" />
            </div>
            <div class="form-group">
              <label for="end_date">Rental End Date</label>
              <input type="date" id="end_date" />
            </div>
          </div>

          <!-- Payment Info -->
          <div class="form-row">
            <div class="form-group">
              <label for="payment_method">Payment Method</label>
              <select id="payment_method">
                <option>-- Select Method --</option>
                <option value="credit">Credit Card</option>
                <option value="cash">Cash</option>
                <option value="paypal">PayPal</option>
              </select>
            </div>
            <div class="form-group">
              <label for="deposit">Deposit Amount</label>
              <input type="number" id="deposit" placeholder="e.g. 100.00" />
            </div>
          </div>

          <!-- Totals and Notes -->
          <div class="form-row">
            <div class="form-group">
              <label for="total_cost">Total Cost</label>
              <input type="number" id="total_cost" placeholder="e.g. 250.00" />
            </div>
            <div class="form-group">
              <label for="notes">Notes</label>
              <textarea
                id="notes"
                rows="3"
                placeholder="Any special notes..."></textarea>
            </div>
          </div>

          <button class="submit-btn" type="submit">
            <i class="fas fa-save"></i> Save Rental
          </button>
        </form>
        <script>
          document
            .getElementById("rentalContract")
            .addEventListener("submit", function(e) {
              e.preventDefault();
              window.location.href = "rental_contract.php"; // redirect
            });
        </script>
      </div>
    </main>
  </div>
</body>

</html>