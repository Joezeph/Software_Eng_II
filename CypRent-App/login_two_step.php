<?php
session_start();

$message = '';
$full_key = '';

if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3']) && isset($_POST['num4']) && isset($_POST['num5'])
  && isset($_POST['num6'])) 
{
  $full_key = $_POST['num1'] . $_POST['num2'] . $_POST['num3'] . $_POST['num4'] . $_POST['num5'] . $_POST['num6'];
  // var_dump($full_key);
  // exit;
} 
if(isset($_POST['submit'])){
if($full_key == $_SESSION['user']['key']){
  header('Location: main.php');
  exit;
}else {
  $message = "Access denied";
}
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Two-Step Verification - Car Rental System</title>

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome for Icons -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    rel="stylesheet" />

  <style>
    .login-bg {
      background-image: url("https://images.unsplash.com/photo-1503376780353-7e6692767b70");
      background-size: cover;
      background-position: center;
      background-color: grey;
    }

    .code-input {
      width: 3rem;
      height: 3rem;
      text-align: center;
      font-size: 1.5rem;
    }
  </style>
</head>

<body class="min-h-screen flex items-center justify-center login-bg">
  <div class="bg-white rounded-2xl shadow-lg w-full max-w-md p-8 space-y-6">
    <div class="text-center">
      <h1 class="text-3xl font-bold text-gray-800">Two-Step Verification</h1>
      <p class="text-gray-500 mt-1">
        Enter the 6-digit code sent to your email
      </p>
    </div>

    <form id="twoStep" class="space-y-6" action="./login_two_step.php" method="post">
      <div class="flex justify-center gap-2">
        <input
          type="text"
          maxlength="1"
          name="num1"
          class="code-input border border-gray-300 rounded focus:ring-2 focus:ring-blue-500"
          required />
        <input
          type="text"
          maxlength="1"
          name="num2"
          class="code-input border border-gray-300 rounded focus:ring-2 focus:ring-blue-500"
          required />
        <input
          type="text"
          maxlength="1"
          name="num3"
          class="code-input border border-gray-300 rounded focus:ring-2 focus:ring-blue-500"
          required />
        <input
          type="text"
          maxlength="1"
          name="num4"
          class="code-input border border-gray-300 rounded focus:ring-2 focus:ring-blue-500"
          required />
        <input
          type="text"
          maxlength="1"
          name="num5"
          class="code-input border border-gray-300 rounded focus:ring-2 focus:ring-blue-500"
          required />
        <input
          type="text"
          maxlength="1"
          name="num6"
          class="code-input border border-gray-300 rounded focus:ring-2 focus:ring-blue-500"
          required />
      </div>

      <!-- Submit -->
      <div>
        <button
          type="submit"
          class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
          Verify Code
        </button>
      </div>
      <div>
        <?php if (isset($_POST['submit'])): ?>
          <p style="color: black;"> <?php echo $message; ?></p>
        <?php endif ?>
      </div>
    </form>
    <!-- <script>
      document
        .getElementById("twoStep")
        .addEventListener("submit", function(e) {
          e.preventDefault();
          window.location.href = "main.html"; // redirect
        });
    </script> -->

    <div class="text-center text-sm text-gray-600 mt-4">
      Didn’t receive the code?
      <a href="#" class="text-blue-600 hover:underline">Resend</a>
    </div>

    <div class="text-center text-xs text-gray-400 mt-2">
      &copy; 2025 Car Rental Management System
    </div>
  </div>

  <script>
    // Auto-focus next input
    const inputs = document.querySelectorAll(".code-input");
    inputs.forEach((input, index) => {
      input.addEventListener("input", () => {
        if (input.value && index < inputs.length - 1) {
          inputs[index + 1].focus();
        }
      });
    });
  </script>
</body>

</html>