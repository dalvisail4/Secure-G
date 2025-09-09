<?php
include('admin/includes/dbconnection.php');
session_start();
error_reporting(0);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SECURE-G | Search Request</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
</head>
<body class="bg-gray-50 text-gray-900 font-sans">
    <!-- Navbar -->
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

    <!-- Hero Section -->
    <section class="text-center py-10 px-4">
        <img src="img/harsh.jpg" alt="Security Guards" class="mx-auto w-full max-w-4xl rounded-2xl shadow-lg">
        <h2 class="text-3xl font-bold mt-8">Search Your Booking Status</h2>
        <p class="text-gray-600 mt-2">Enter your booking number below to check if you've been accepted or rejected.</p>
    </section>

    <!-- Search Form -->
    <section class="px-4 max-w-2xl mx-auto">
        <form method="post" class="bg-white shadow-md rounded-xl p-6 space-y-4">
            <label for="searchdata" class="block text-lg font-semibold">Booking Number</label>
            <input id="searchdata" type="text" name="searchdata" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-400" placeholder="Enter Your Booking Number">
            <button type="submit" name="search" class="w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 transition">Search</button>
        </form>
    </section>

    <!-- PHP Result Table -->
    <section class="max-w-6xl mx-auto mt-10 px-4">
        <div class="bg-white p-6 rounded-xl shadow-md overflow-auto">
            <?php if(isset($_POST['search'])): ?>
                <?php $sdata = $_POST['searchdata']; ?>
                <h3 class="text-xl font-semibold mb-4">Results for "<?php echo $sdata; ?>"</h3>
                <table class="min-w-full table-auto border border-gray-300">
                    <thead>
                        <tr class="bg-indigo-100 text-left">
                            <th class="p-2">S.No</th>
                            <th class="p-2">Booking Number</th>
                            <th class="p-2">Name</th>
                            <th class="p-2">Email</th>
                            <th class="p-2">Contact Number</th>
                            <th class="p-2">Status</th>
                            <th class="p-2">Assigned Guard</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql="SELECT * from tblhiring where BookingNumber like '$sdata%'";
                            $query = $dbh -> prepare($sql);
                            $query->execute();
                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                            $cnt=1;
                            if($query->rowCount() > 0):
                                foreach($results as $row):
                        ?>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="p-2"><?php echo htmlentities($cnt); ?></td>
                            <td class="p-2"><?php echo htmlentities($row->BookingNumber); ?></td>
                            <td class="p-2"><?php echo htmlentities($row->FirstName . ' ' . $row->LastName); ?></td>
                            <td class="p-2"><?php echo htmlentities($row->Email); ?></td>
                            <td class="p-2"><?php echo htmlentities($row->MobileNumber); ?></td>
                            <td class="p-2">
                                <?php echo $row->Status ? '<span class="px-2 py-1 bg-blue-100 text-blue-800 rounded">' . htmlentities($row->Status) . '</span>' : 'Not Updated Yet'; ?>
                            </td>
                            <td class="p-2">
                                <?php echo ($row->Status && $row->Status != "Rejected") ? htmlentities($row->GuardAssign) : 'Not Assigned / Rejected'; ?>
                            </td>
                        </tr>
                        <?php $cnt++; endforeach; else: ?>
                        <tr>
                            <td colspan="7" class="text-center text-red-500 py-4">No record found for this booking number.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-6 text-gray-600 mt-10">
        &copy; 2023 SECURE-G
    </footer>
</body>
</html>
