<?php
include('admin/includes/dbconnection.php');
session_start();
error_reporting(0);
 if(isset($_POST['submit']))
  {

$booknum=mt_rand(100000000, 999999999);
     $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $mobnum=$_POST['mobnum'];
    $add=$_POST['add'];
   $age=$_POST['age'];
   $shift=$_POST['shift'];
   $gender=$_POST['gender'];
 
$sql="insert into tblhiring(BookingNumber,FirstName,LastName,Email,MobileNumber,Address,Age,Shift,Gender)values(:booknum,:fname,:lname,:email,:mobnum,:add,:age,:shift,:gender)";
$query=$dbh->prepare($sql);
$query->bindParam(':booknum',$booknum,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':lname',$lname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobnum',$mobnum,PDO::PARAM_STR);
$query->bindParam(':add',$add,PDO::PARAM_STR);
$query->bindParam(':age',$age,PDO::PARAM_STR);
$query->bindParam(':shift',$shift,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
 $query->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
   echo '<script>alert("Hiring request has been book successfully. Booking Number is "+"'.$booknum.'")</script>';
echo "<script>window.location.href ='index.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>SECURE-G</title>	
	<script src="https://cdn.tailwindcss.com"></script>

	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/nice-select.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>
</head>
<body class='bg-white'>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<!-- Navbar Section -->
	 <header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center p-4">
      <h1 class="text-3xl font-bold text-blue-600">SECURE-G</h1>
      <nav class="space-x-6 text-blue-700 font-medium">
        <a href="home.php" class="hover:text-blue-500">Home</a>
        <a href="index.php" class="hover:text-blue-500">Hiring Form</a>
        <a href="search-request.php" class="hover:text-blue-500">Request Status</a>
        <a href="admin/login.php" class="hover:text-blue-500">Admin</a>
        <a href="client/login.php" class="hover:text-blue-500">Client</a>
      </nav>
    </div>
  </header>

	<!-- <section class="mx-10">
		<img class='h-[450px] m-20 mx-auto rounded-xl shadow shadow-indigo-400' src="img\secure-g.jpeg" alt="hero img"> -->

		<!-- <div class='text-2xl font-bold text-center text-black'>Hiring Form</div>
	</section> -->

<!-- 3D Gradient Background -->
<div class="relative min-h-screen bg-gradient-to-br from-blue-100 via-purple-100 to-pink-100 overflow-hidden flex items-center justify-center p-6">
  <!-- Blurred Glass Effect Container -->
 <div class="bg-white/60 backdrop-blur-lg rounded-xl shadow-2xl p-10 w-[95%] max-w-7xl mx-auto z-10">



    <!-- Your form starts here -->
    <form method="post" class='space-y-6 text-black'>
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Hiring Form</h2>

      <div class="grid md:grid-cols-2 gap-6">
        <div>
          <label for="fname" class="block font-medium mb-1">First Name <span class="text-red-500">*</span></label>
          <input type="text" placeholder="First Name" id="fname" name="fname" required pattern="[A-Za-z]+" title="Only alphabets are allowed"
            class="w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-400">
        </div>

        <div>
          <label for="lname" class="block font-medium mb-1">Last Name <span class="text-red-500">*</span></label>
          <input type="text" placeholder="Last Name" id="lname" name="lname" required pattern="[A-Za-z]+" title="Only alphabets are allowed"
            class="w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-400">
        </div>

        <div>
          <label for="email" class="block font-medium mb-1">Email <span class="text-red-500">*</span></label>
          <input type="email" id="email" name="email" placeholder="Email" required
            class="w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-400">
        </div>

        <div>
          <label for="phone" class="block font-medium mb-1">Mobile Number <span class="text-red-500">*</span></label>
          <input type="tel" id="phone" name="mobnum" placeholder="10-digit Mobile Number" required pattern="[0-9]{10}"
            class="w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-400">
        </div>

        <div>
          <label for="age" class="block font-medium mb-1">Age <span class="text-red-500">*</span></label>
          <input type="number" id="age" name="age" placeholder="Age" required
            class="w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-400">
        </div>

        <div>
          <label class="block font-medium mb-1">Shift Requirement <span class="text-red-500">*</span></label>
          <select name="shift" required
            class="w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-400">
            <option value="">Choose Shift</option>
            <option value="Day">Day</option>
            <option value="Night">Night</option>
            <option value="24hrs">24hrs</option>
          </select>
        </div>

        <div>
          <label class="block font-medium mb-1">Gender <span class="text-red-500">*</span></label>
          <select name="gender" required
            class="w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-400">
            <option value="">Choose Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>

        <div class="md:col-span-2">
          <label class="block font-medium mb-1">Address <span class="text-red-500">*</span></label>
          <textarea name="add" placeholder="Enter Address" required rows="3"
            class="w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-400 resize-none"></textarea>
        </div>
      </div>

      <div class="text-center">
        <button type="submit" name="submit"
          class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md transition duration-300">
          Submit
        </button>
      </div>
    </form>

  </div>

  <!-- Optional Background Blobs -->
  <div class="absolute top-0 left-0 w-80 h-80 bg-purple-200 rounded-full mix-blend-multiply filter blur-2xl opacity-70 animate-pulse"></div>
  <div class="absolute bottom-10 right-0 w-80 h-80 bg-pink-200 rounded-full mix-blend-multiply filter blur-2xl opacity-70 animate-pulse"></div>
</div>

  
    
	
	<!--====== Javascripts & Jquery ======-->
	<!-- <script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">    
   -->
	<footer class='text-center'>
		<p>&copy; 2024 SECURE-G</p>
	</footer>

	<!--====== Javascripts & Jquery ======-->
	<!-- <script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">     -->
  

	</body>
</html>