<?php
   include "includes/check_admin.inc.php";
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
    <style>
        body {

    </style>
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
                            <a class="nav-link" href="adminusers.php"><i class="fas fa-users mr-2"></i> Users</a>
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

                  <div class="container mt-4">
                    <h2>All Users</h2>
                    <div class="col-md-12">
                    <table class="table table-striped-columns">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">E-Mail</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($usersList as $user): ?>
                        <tr>
                          <th scope="row"><?php echo htmlspecialchars($user['id']); ?></th>
                          <td><?php echo htmlspecialchars($user['first_name']); ?> <?php echo htmlspecialchars($user['last_name']); ?></td>
                          <td><?php echo htmlspecialchars($user['email']); ?></td>
                          <td>
                            <a href="viewsingleuser.php?id=<?php echo htmlspecialchars($user['id']); ?>">
                              <button class="btn btn-success">View</button>
                            </a>
                          </td>
                        </tr>
                     <?php endforeach; ?>

                      </tbody>
                    </table>
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
