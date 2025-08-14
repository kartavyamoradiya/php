<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<form action="" method="GET">
  <div class="container">
    <div class="form-row">
      <div class="input-field ">
        <input type="text" class="form-control" name="first_name" placeholder="First name" required>
      </div>
      <div class="input-field">
        <input type="text" class="form-control" name="middle_name" placeholder="Middle name" required>
      </div>
      <div class="input-field">
        <input type="text" class="form-control" name="last_name" placeholder="Last name" required>
      </div>
    </div>
    <div class="form-group row">
      <div class="input-field email">
        <i class="fa-regular fa-envelope"></i>
          <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email" required>
      </div>
    </div>
    <div class="form-group">
      <div class="input-field mobile">
        <i class="fa-solid fa-phone"></i>
        <!-- <input type="tel" class="form-control" name="contact_number" id="inputContactnumber" placeholder="Contact number" required> -->
        <input type="tel" class="form-control" name="contact_number" id="inputContactnumber" placeholder="Contact number" pattern="^\d{10}$" title="Please enter a 10-digit contact number" required>
      </div>
    </div>
    <div class="form-check">
      <div class="input-field gender">
        <input class="form-check-input" type="radio" name="gender" value="Male" id="flexRadioDefault1" required>
        <label class="form-check-label" for="flexRadioDefault1">
        Male
        </label>
      </div>
    </div>
    <div class="form-check">
      <div class="input-field gender">
        <input class="form-check-input" type="radio" name="gender" value="Female" id="flexRadioDefault2" required>
        <label class="form-check-label" for="flexRadioDefault2">
        Female
        </label>
      </div>
    </div>
    <div class="form-group">
      <div class="input-field">
        <label for="dateInput">Date of birth:-</label>
        <input type="date" class="form-control" id="dateInput" name="dob" required>
      </div>
    </div>
    <div class="input-field">
      <select class="custom-select custom-select-sm" name="occupation" required>
      <option value="" selected disabled>Occupation type</option>
      <option value="Teaching">Teaching</option>
      <option value="Engineering">Engineering</option>
      <option value="Web developer">Web developer</option>
      <option value="Designer">Designer</option>
      </select>
    </div>
    <div class="form-group">
      <div class="input-field">
       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Textarea" name="comments" required></textarea>
      </div>
    </div>
    <div class="input-field button">
      <input class="btn btn-primary" type="submit" name="contact_form" value="Submit Form">
    </div>
  </div>
<?php
 
if ($_SERVER['REQUEST_METHOD'] == 'GET'&& !empty($_GET)) {
  /*echo "<pre>"; 
  print_r($_GET);*/
  $first_name = $_GET['first_name'];
  $middle_name = $_GET['middle_name'];
  $last_name = $_GET['last_name'];
  $email = $_GET['email'];
  $contact_number = $_GET['contact_number'];
  $gender = $_GET['gender'];
  $dob = $_GET['dob'];
  $occupation = $_GET['occupation'];
  $comments = $_GET['comments'];
  //echo"<pre>";print_r($_POST);die;//die
  echo"<pre>";
    echo"<div class=container>";
      echo"<div class='form-submit form-control'>";
        echo "First Name: " . $first_name . "<br>";
      echo"</div>";
      echo"<div class='form-submit form-control'>";
        echo "Middle Name: " . $middle_name . "<br>";
      echo"</div>";
      echo"<div class='form-submit form-control'>";
        echo "Last Name: " . $last_name . "<br>";
      echo"</div>";
      echo"<div class='form-submit form-control'>";
        echo "Email: " . $email . "<br>";
      echo"</div>";
      echo"<div class='form-submit form-control'>";
        echo "Contact Number: " . $contact_number . "<br>";
      echo"</div>";
      echo"<div class='form-submit form-control'>";
        echo "Gender: " . $gender. "<br>";
      echo"</div>";
      echo"<div class='form-submit form-control'>";
        echo "Date of Birth: " .$dob . "<br>";
      echo"</div>";
      echo"<div class='form-submit form-control'>";
        echo "Occupation: " . $occupation. "<br>";
      echo"</div>";
      echo"<div class='form-submit form-control'>";
        echo "Comments: " . $comments. "<br>";
      echo"</div>";
    echo"</div>";
  echo"</pre>"; 
}

?>
</form>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>