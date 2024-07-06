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

            <div class="container">
            
              <div class="container mt-5">
                <h2 class="mb-4">Add Therapist</h2>
                <?php include "includes/messages.inc.php"; ?>
                <form action="includes/add_therapist.inc.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="profile_pics">Profile Picture</label>
                                <input type="file" class="form-control" id="profile_pics" name="profile_pics" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="specialization">Specialization</label>
                                <input type="text" class="form-control" id="specialization" name="specialization" required>
                            </div>
                            <div class="form-group">
                                <label for="experience">Experience (in years)</label>
                                <input type="number" class="form-control" id="experience" name="experience" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Add Therapist</button>
                </form>
            </div>
            </div>
            <div class="col-12 justify-content-center m-auto" style="margin-top: 10px;">
               <h3>All Therapists</h3>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Profile Picture</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Specialization</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
               <?php foreach($therapistsList as $therapists): ?>
                <tr>
                  <th scope="row"><?php echo htmlspecialchars($therapists['id']); ?></th>
                  <th>
                     <img height="100" width="100" src="./therapist_profile/<?php echo htmlspecialchars($therapists['profile_pics']); ?>">
                  </th>
                  <td><?php echo htmlspecialchars($therapists['name']); ?></td>
                  <td><?php echo htmlspecialchars($therapists['email']); ?></td>
                  <td><?php echo htmlspecialchars($therapists['specialization']); ?></td>
                  <td>
                      <a href="includes/delete_th.inc.php?email=<?php echo htmlspecialchars($therapists['email']); ?>"><button class="btn btn-danger">Delete</button></a>
                  </td>
                </tr>
                 <?php endforeach; ?>
              </tbody>
            </table>
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
