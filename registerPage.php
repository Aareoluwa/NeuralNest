<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <?php
          include 'includes/messages.inc.php';
        ?>
        <h4>Create an account to get started with YouTherapist and begin managing your practice. Choose below if you are a therapist.</h4>
        <form action="includes/register.inc.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
             <div class="flex">
              <label for="profile_picss">Profile Picture:</label>
              <input type="file" id="profile_picss" name="profile_pics" required>
            </div>
          </div>
          <div class="form-group">
             <div class="flex">
              <label for="first-name">First Name:</label>
              <input type="text" id="first-name" name="first_name" required>
            </div>
            <div class="flex">
              <label for="last-name">Last Name:</label>
              <input type="text" id="last-name" name="last_name" required>
            </div>
          </div>
          <div class="form-group">
            <div class="flex">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>
            </div>
            <div class="flex">
              <label for="confirm-email">Confirm Email:</label>
              <input type="email" id="confirm-email" name="confirm_email" required>
            </div>
          </div>
          <div class="form-group">
            <div class="flex">
              <label for="password">Password:</label>
              <input type="password" id="password" name="password" required>
            </div>
            <div class="flex">
              <label for="confirm-password">Confirm Password:</label>
              <input type="password" id="confirm-password" name="confirm_password" required>
            </div>
          </div>
          <div class="form-group">
            <div class="flex">
              <label for="dob">Date of Birth:</label>
              <input type="date" id="dob" name="dob" required>
            </div>
            <div class="flex">
              <label for="received-code">Received Code:</label>
              <input type="text" id="received-code" value="Would Be Assigned" name="" readonly>
            </div>
          </div>
          <div class="form-group">
            <label for="phone">Phone Number:</label>
            <div class="inline-group">
              <select id="country-code" name="country_code" required>
                <option value="+234">+234 (NIG)</option>
                <option value="+1">+1 (US)</option>
                <option value="+44">+44 (UK)</option>

              </select>
              <input type="tel" id="phone" name="phone_number" required>
            </div>
          </div>
          <div class="form-group checkbox-group">
            <input type="checkbox" value="checked" id="terms" name="terms" required>
            <label for="terms">I agree to the <a href="#">Terms and Conditions</a></label>
          </div>
          <div class="form-group checkbox-group">
            <input value="checked" type="checkbox" id="privacy" name="privacy" required>
            <label for="privacy">I agree to the <a href="#">Privacy Policy</a></label>
          </div>
          <button type="submit" class="btn">Register</button>
        </form>
        <p>Already have an account? <a href="loginPage.php">Login</a></p>
      </div>
</body>
</html>
