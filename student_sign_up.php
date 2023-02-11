<?php 


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="design.css">
    <h1 style="text-align: center;">Sign Up for Student Users</h1>
  </head>
  <body style="text-align: center;">
  <p style="text-align: center;">Sign up page for student users</p>
  <div class="login-form">
    <form action="" style="display: inline-block;">
      <label for="firstname">First Name</label>
      <input type="text" id="firstname" name="firstname" required><br><br>
      
      <label for="lastname">Last Name:</label>
      <input type="text" id="lastname" name="lastname" required><br><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      
      <label for="email">Expected Graduation Year:</label>
      <input type="text" id="email" name="email" required><br><br>

      <!-- Major selection -->
      <label for="major">Select your Major:</label>
      <select name="major" id="major" required>
        <option value="pick_one">*Select a Major*</option>
        <option value="Accounting">Accounting</option>
        <option value="American">American Studies</option>
        <option value="Anthropology">Anthropology</option>
        <option value="Art">Art History</option>
        <option value="Biochemistry">Biochemistry</option>
        <option value="Biology">Biology</option>
        <option value="Chemistry">Chemistry</option>
        <option value="Classical">Classical Studies</option>
        <option value="Communication">Communication</option>
        <option value="Computer Engineering">Computer Engineering</option>
        <option value="Computer Science">Computer Science</option>
        <option value="Criminology">Criminology</option>
        <option value="Cybersecurity">Cybersecurity</option>
        <option value="Economics">Economics</option>
        <option value="Electrical Engineering">Electrical Engineering</option>
        <option value="English">English</option>
        <option value="Environmental Science">Environmental Science</option>
        <option value="Finance">Finance</option>
        <option value="French">French</option>
        <option value="German">German</option>
        <option value="Global Commerce and Culture">Global Commerce and Culture</option>
        <option value="History">History</option>
        <option value="Information Science">Information Science</option>
        <option value="Interdisciplinary Studies">Interdisciplinary Studies</option>
        <option value="Kinesiology">Kinesiology</option>
        <option value="Management">Management</option>
        <option value="Marketing">Marketing</option>
        <option value="Mathematics">Mathematics</option>
        <option value="Applied Mathematics">Mathematics - Computational and Applied</option>
        <option value="Music">Music</option>
        <option value="Neuroscience">Neuroscience</option>
        <option value="Philosophy">Philosophy</option>
        <option value="Physics">Physics</option>
        <option value="Political Science">Political Science</option>
        <option value="Psychology">Psychology</option>
        <option value="Social Work">Social Work</option>
        <option value="Sociology">Sociology</option>
        <option value="Spanish">Spanish</option>
        <option value="Studio">Studio Art</option>
        <option value="Theater">Theater</option>
      </select><br><br>

      <label for="major">Enter your second Minor (If applicable):</label>
      <select name="major" id="major">
        <option value="pick_one">*Select a Major*</option>
        <option value="Accounting">Accounting</option>
        <option value="American">American Studies</option>
        <option value="Anthropology">Anthropology</option>
        <option value="Art">Art History</option>
        <option value="Biochemistry">Biochemistry</option>
        <option value="Biology">Biology</option>
        <option value="Chemistry">Chemistry</option>
        <option value="Classical">Classical Studies</option>
        <option value="Communication">Communication</option>
        <option value="Computer Engineering">Computer Engineering</option>
        <option value="Computer Science">Computer Science</option>
        <option value="Criminology">Criminology</option>
        <option value="Cybersecurity">Cybersecurity</option>
        <option value="Economics">Economics</option>
        <option value="Electrical Engineering">Electrical Engineering</option>
        <option value="English">English</option>
        <option value="Environmental Science">Environmental Science</option>
        <option value="Finance">Finance</option>
        <option value="French">French</option>
        <option value="German">German</option>
        <option value="Global Commerce and Culture">Global Commerce and Culture</option>
        <option value="History">History</option>
        <option value="Information Science">Information Science</option>
        <option value="Interdisciplinary Studies">Interdisciplinary Studies</option>
        <option value="Kinesiology">Kinesiology</option>
        <option value="Management">Management</option>
        <option value="Marketing">Marketing</option>
        <option value="Mathematics">Mathematics</option>
        <option value="Applied Mathematics">Mathematics - Computational and Applied</option>
        <option value="Music">Music</option>
        <option value="Neuroscience">Neuroscience</option>
        <option value="Philosophy">Philosophy</option>
        <option value="Physics">Physics</option>
        <option value="Political Science">Political Science</option>
        <option value="Psychology">Psychology</option>
        <option value="Social Work">Social Work</option>
        <option value="Sociology">Sociology</option>
        <option value="Spanish">Spanish</option>
        <option value="Studio">Studio Art</option>
        <option value="Theater">Theater</option>
      </select><br><br>

      <!-- Minor selection -->
      <label for="minor">Enter your Minor:</label>
      <select name="minor" id="minor" required>
        <option value="pick_one">*Select a Minor*</option>
        <option value="A-A Studies">African-American Studies</option>
        <option value="American">American Studies</option>
        <option value="Anthropology">Anthropology</option>
        <option value="Art">Art History</option>
        <option value="Biology">Biology</option>
        <option value="Business Administration">Business Administration</option>
        <option value="Chemistry">Chemistry</option>
        <option value="Childhood Studies">Childhood Studies</option>
        <option value="Chinese Studies">Chinese Studies</option>
        <option value="Civic Engagement and Social Justice">Civic Engagement and Social Justice</option>
        <option value="Classical">Classical Studies</option>
        <option value="Communication">Communication</option>
        <option value="Computer Science">Computer Science</option>
        <option value="Dance">Dance</option>
        <option value="Data Science">Data Science</option>
        <option value="Digital Humanities">Digital Humanities</option>
        <option value="Economics">Economics</option>
        <option value="English">English</option>
        <option value="Environmental Science">Environmental Science</option>
        <option value="Film Studies">Film Studies</option>
        <option value="French">French</option>
        <option value="German">German</option>
        <option value="Graphic Design">Graphic Design</option>
        <option value="History">History</option>
        <option value="Health">Health, Medical, and Wellness Studies</option>
        <option value="Human">Human Rights and Conflict Resolution</option>
        <option value="Information Science">Information Science</option>
        <option value="International">International Culture and Business</option>
        <option value="Judeo-Christian">Judeo-Christian Studies</option>
        <option value="Journalism">Journalism</option>
        <option value="Latin">Latin</option>
        <option value="Latin American Studies">Latin American</option>
        <option value="Leadership Studies">Leadership Studies</option>
        <option value="Linguistics">Linguistics</option>
        <option value="Literature">Literature</option>
        <option value="Mathematics">Mathematics</option>
        <option value="Medieval">Medieval and Renaissance Studies</option>
        <option value="Middle East and North Africa">Middle East and North Africa Studies</option>
        <option value="Military Science">Military Science (ROTC)</option>
        <option value="Museum Studies">Museum Studies</option>
        <option value="Philosophy">Philosophy and Religion</option>
        <option value="Philosophy of Law">Philosophy of Law</option>
        <option value="Photography">Photography and Video Art</option>
        <option value="Physics">Physics</option>
        <option value="Political Science">Political Science</option>
        <option value="Psychology">Psychology</option>
        <option value="Social Work">Social Work</option>
        <option value="Sociology">Sociology</option>
        <option value="Spanish">Spanish</option>
        <option value="Studio">Studio Art</option>
        <option value="Theater">Theater</option>
        <option value="National Security">U.S. National Security Studies</option>
        <option value="Women, Gender and Sexuality">Women, Gender and Sexuality Studies</option>
        <option value="Writing">Writing</option>
      </select><br><br>

      <label for="minor">Enter your second Minor (If applicable):</label>
      <select name="minor" id="minor">
        <option value="pick_one">*Select a Minor*</option>
        <option value="A-A Studies">African-American Studies</option>
        <option value="American">American Studies</option>
        <option value="Anthropology">Anthropology</option>
        <option value="Art">Art History</option>
        <option value="Biology">Biology</option>
        <option value="Business Administration">Business Administration</option>
        <option value="Chemistry">Chemistry</option>
        <option value="Childhood Studies">Childhood Studies</option>
        <option value="Chinese Studies">Chinese Studies</option>
        <option value="Civic Engagement and Social Justice">Civic Engagement and Social Justice</option>
        <option value="Classical">Classical Studies</option>
        <option value="Communication">Communication</option>
        <option value="Computer Science">Computer Science</option>
        <option value="Dance">Dance</option>
        <option value="Data Science">Data Science</option>
        <option value="Digital Humanities">Digital Humanities</option>
        <option value="Economics">Economics</option>
        <option value="English">English</option>
        <option value="Environmental Science">Environmental Science</option>
        <option value="Film Studies">Film Studies</option>
        <option value="French">French</option>
        <option value="German">German</option>
        <option value="Graphic Design">Graphic Design</option>
        <option value="History">History</option>
        <option value="Health">Health, Medical, and Wellness Studies</option>
        <option value="Human">Human Rights and Conflict Resolution</option>
        <option value="Information Science">Information Science</option>
        <option value="International">International Culture and Business</option>
        <option value="Judeo-Christian">Judeo-Christian Studies</option>
        <option value="Journalism">Journalism</option>
        <option value="Latin">Latin</option>
        <option value="Latin American Studies">Latin American</option>
        <option value="Leadership Studies">Leadership Studies</option>
        <option value="Linguistics">Linguistics</option>
        <option value="Literature">Literature</option>
        <option value="Mathematics">Mathematics</option>
        <option value="Medieval">Medieval and Renaissance Studies</option>
        <option value="Middle East and North Africa">Middle East and North Africa Studies</option>
        <option value="Military Science">Military Science (ROTC)</option>
        <option value="Museum Studies">Museum Studies</option>
        <option value="Philosophy">Philosophy and Religion</option>
        <option value="Philosophy of Law">Philosophy of Law</option>
        <option value="Photography">Photography and Video Art</option>
        <option value="Physics">Physics</option>
        <option value="Political Science">Political Science</option>
        <option value="Psychology">Psychology</option>
        <option value="Social Work">Social Work</option>
        <option value="Sociology">Sociology</option>
        <option value="Spanish">Spanish</option>
        <option value="Studio">Studio Art</option>
        <option value="Theater">Theater</option>
        <option value="National Security">U.S. National Security Studies</option>
        <option value="Women, Gender and Sexuality">Women, Gender and Sexuality Studies</option>
        <option value="Writing">Writing</option>
      </select><br><br>

      <input type="submit" value="Sign Up">
    </form>
  </div>
  </body>
</html>