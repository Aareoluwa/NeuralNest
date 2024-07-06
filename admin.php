 <?php  
    session_start();
    if ($_SESSION['role'] != "1") {
        header("Location: includes/logout.inc.php");
        exit();
    }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Your custom CSS -->
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
       
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active-nav-link" href="#"><i class="fas fa-home mr-2"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="adminaddtherapist.php"><i class="fas fa-user-plus mr-2"></i> Add Therapist</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="adminbooking.php"><i class="fas fa-user mr-2"></i>Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="adminuser.php"><i class="fas fa-users mr-2"></i> Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-cog mr-2"></i> Settings</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content area -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

               <!--  <h2 class="mt-2">Welcome to Admin Dashboard</h2>
                <p>Here you can manage your application efficiently.</p> -->

                  <div class="container">
			        <div class="row" style="gap:10px;">
			            <div class="col-md-3 mt-3 text-blck text-center py-3 rounded" style="border: 1px solid black;">
			                <h4>Number Of Users</h4>
			                <h2>1k+</h2>
			            </div>
			             <div class="col-md-3 mt-3 text-blck text-center py-3 rounded" style="border: 1px solid black;">
			                <h4>Number Of Bookings</h4>
			                <h2>1k+</h2>
			            </div>
			             <div class="col-md-3 mt-3 text-blck text-center py-3 rounded" style="border: 1px solid black;">
			                <h4>Number Of New Bookings</h4>
			                <h2>1k+</h2>
			            </div>
			        </div>
			    </div>

            </main>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Your custom scripts -->
    <script src="scripts.js"></script>
</body>
</html>
