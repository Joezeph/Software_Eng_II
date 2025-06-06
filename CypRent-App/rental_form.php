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
        <h1 class="text-xl font-semibold text-gray-700">Rental
          Form</h1>
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

    <!-- Rental Form -->
    <main class="p-8 max-w-5xl mx-auto">
      <div class="bg-white p-6 rounded-xl shadow">

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