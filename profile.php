<?php
  session_start();  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Account Details</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
      }
      .container {
        position: relative;
        z-index: 2;
        width: 80%;
        margin: 20px auto;
        background-color: #f6f5f3;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border-radius: 10px 10px 0 0;
      }
      .header-buttons {
        display: flex;
        align-items: center;
      }
      .header-buttons button {
        margin-left: 10px;
        padding: 5px 10px;
        background-color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      .profile-pic {
        border-radius: 50%;
        width: 90px;
        height: 90px;
        object-fit: cover;
        border: 3px solid #4070fa;
      }
      .content {
        padding: 40px;
        background-color: #fff;
      }
      .inline {
        display: flex;
        align-items: center;
      }
      .content .upFunction {
        padding: 20px;
        border-radius: 10px;
        border: 2px solid #f5f5f5;
        margin: 3px;
        font-size: 15px;
        margin: 15px;
      }
      .content .upFunction:active {
        border: 2px solid #4070fa;
        color: #4070fa;
      }
      .fa-solid {
        color: #4070fa;
        padding-right: 10px;
        font-size: 16px;
      }
      .section {
        margin-bottom: 20px;
      }
      .section h2 {
        margin-bottom: 10px;
      }
      .section form {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
      }
      .section form div {
        flex: 1 1 45%;
        display: flex;
        flex-direction: column;
      }
      .section form div label {
        margin-bottom: 5px;
      }
      .section form div input,
      .section form div select,
      .section form div textarea {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }
      .buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
      }
      .buttons button {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      .save {
        background-color: #007bff;
        color: #fff;
      }
      .cancel {
        background-color: #ccc;
      }
      .delete {
        background-color: #dc3545;
        color: #fff;
      }
      .video-bg {
        position: fixed;
        right: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
      }
      .video-bg video {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    </style>
  </head>
  <body>
    <div class="video-bg">
      <video width="320" height="240" autoplay loop muted>
        <source src="/7btrrd.mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
    </div>
    <div class="container">
      <div class="header">
        <img src="" />
        <div class="header-buttons">
          <button>Invite user</button>
        </div>
      </div>
      <div class="content">
        <div class="section">
          <h2>Profile Details</h2>
          <div class="inline">
            <img src="./avatars/<?php echo $_SESSION['profile_pics'] ?>" alt="Profile Picture" class="profile-pic" />
            <button class="upFunction">
              <i class="fa-solid fa-upload"></i>Upload
            </button>
            <button class="upFunction">
              <i class="fa-solid fa-trash"></i>Remove
            </button>
          </div>
          <br />
          <form>
            <div>
              <label for="name">Name</label>
              <input type="text" value="<?php echo $_SESSION['first_name'] ?> <?php echo $_SESSION['last_name'] ?>" id="name" placeholder="Enter your full name" />
            </div>
            <div>
              <label for="email">Email</label>
              <input type="text" value="<?php echo $_SESSION['email'] ?>" id="email" placeholder="Your place of expertise" />
            </div>
           
            <div>
              <label for="phone_number">Phone Number</label>
              <input type="text" value="<?php echo $_SESSION['country_code'] ?> <?php echo $_SESSION['phone_number'] ?>" id="phone_number" placeholder="Your experience" />
            </div>
            <div>
              <label for="profile_code">Profile Code</label>
              <input type="text" value="<?php echo $_SESSION['received_code'] ?>" id="profile_code" placeholder="Enter your booking price per hour" readonly />
            </div>
            <div>
              <label for="communication_method">Preferred communication method</label>
              <select id="communication_method">
                <option>Face to Face</option>
                <option>WhatsApp</option>
                <option>Zoom</option>
                <option>Google Meet</option>
                <option>Skype</option>
              </select>
            </div>
            <div>
              <label for="address">Your Address</label>
              <input type="text" id="address" placeholder="Input your address" />
            </div>
            <div>
              <label for="country">Country</label>
              <select id="country">
                <option>Nigeria</option>
                <option>South Africa</option>
                <option>Ghana</option>
                <option>United States of America</option>
                <option>United Kingdom</option>
              </select>
            </div>
            <div>
              <label for="welcome_message">Welcome Message</label>
              <textarea id="welcome_message" rows="5" placeholder="Enter your experience and what you know"></textarea>
            </div>
          </form>
          <div class="buttons">
            <button class="save">Save Changes</button>
            <button class="cancel">Cancel</button>
            <button class="delete">Delete Account</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
