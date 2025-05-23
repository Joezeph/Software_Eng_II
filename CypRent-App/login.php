<?php
include_once('functions.php');

$db = connectToDB();
$employees = call_employees($db);



// if(empty($_POST)){
//   $_SESSION['employees'] = $employees;
//   $user_input = $_POST['email'];
//   $password_input = $_POST['password'];
  
// }
// else {
  //here we need to validate the username and passwd and
  if($user_input != $_SESSION['employees'][0]['email'] && $password_input != $_SESSION['employees'][0]['password']){
    $error = true;
    $errormsg = 'Username or Password does not exist!';
    echo $password_input;
    // header('Location: login_two_step.php');
    // die;
  }else{
    $match = true;
    if($match && !empty($_POST)){
      header('Location: login_two_step.php');
      die;
    }
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Car Rental System</title>

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome for Icons -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    rel="stylesheet" />

  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
    .login-bg {
      background-image: url("https://images.unsplash.com/photo-1503376780353-7e6692767b70");
      background-size: cover;
      background-position: center;
      background-color: grey;
    }
  </style>
</head>

<body class="min-h-screen flex items-center justify-center login-bg">
  <div class="bg-white rounded-2xl shadow-lg w-full max-w-md p-8 space-y-6">
    <div class="text-center">
      <h1 class="text-3xl font-bold text-gray-800">CypRent Login</h1>
      <p class="text-gray-500 mt-1">Employee Access Only</p>
    </div>

    <form id="loginForm" class="space-y-4" action="login.php" method="POST">
      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <div class="relative mt-1">
          <input
            type="email"
            name="email"
            id="email"
            required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
            placeholder="employee@example.com" />
          <div
            class="absolute inset-y-0 right-3 flex items-center text-gray-400">
            <i class="fas fa-envelope"></i>
          </div>
        </div>
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <div class="relative mt-1">
          <input
            type="password"
            name="password"
            id="password"
            required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
            placeholder="••••••••" />
          <div
            class="absolute inset-y-0 right-3 flex items-center text-gray-400 cursor-pointer toggle-password">
            <i class="fas fa-eye-slash"></i>
          </div>
        </div>
      </div>

      <!-- Options -->
      <div class="flex items-center justify-between text-sm text-gray-600">
        <label class="inline-flex items-center">
          <input
            type="checkbox"
            class="form-checkbox rounded text-blue-600"
            name="remember" />
          <span class="ml-2">Remember Me</span>
        </label>
        <a href="/forgot-password" class="text-blue-600 hover:underline">Forgot Password?</a>
      </div>
      <div>
        <?php
        if ($error) {
          echo "<p>" . $errormsg . "</p>";
        }else{
          echo"<p></p>";
        }
        ?>
      </div>
      <!-- Submit -->
      <div>
        <button
          type="submit"
          class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
          Sign In
        </button>
      </div>
    </form>

    <div class="text-center text-sm text-gray-600 mt-4">
      Don't have an account?
      <a href="/contact-admin" class="text-blue-600 hover:underline">Contact administrator</a>
    </div>

    <div class="text-center text-xs text-gray-400 mt-2">
      &copy; 2025 Car Rental Management System
    </div>
  </div>

  <script>
    // Toggle password visibility
    $(".toggle-password").on("click", function() {
      const passwordInput = $("#password");
      const icon = $(this).find("i");
      const isPassword = passwordInput.attr("type") === "password";

      passwordInput.attr("type", isPassword ? "text" : "password");
      icon.toggleClass("fa-eye fa-eye-slash");
    });
  </script>
</body>

</html>