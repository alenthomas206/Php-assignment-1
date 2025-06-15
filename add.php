<?php include 'database.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Student Portal- Add</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <h1>Student Portal</h1> 
  <nav>
    <a href="add.php">Add Student</a> 
    <a href="view.php">View Students</a>
  </nav>
</header>

<main>
  <h2>Add New Student</h2>

  <form action="add.php" method="post">
    <label>Full Name:</label> 
    <input type="text" name="name" required><br>

    <label>Email Address:</label> 
    <input type="email" name="email" required><br>

    <label>Grade:</label> 
    <input type="text" name="grade" required><br>

    <button type="submit" name="submit">Add Student</button>
  </form>

  <?php
  if (isset($_POST['submit'])) {
      $name = htmlspecialchars($_POST['name']);
      $email = htmlspecialchars($_POST['email']);
      $grade = htmlspecialchars($_POST['grade']); 

      $stmt = $conn->prepare("INSERT INTO students (name, email, grade) VALUES (?, ?, ?)"); 
      $stmt->bind_param("sss", $name, $email, $grade);
      $stmt->execute();

      echo "<p>Student added successfully!</p>"; 
  }
  ?>
</main>

<footer>
  <p>&copy; 2025 Student Portal</p> 
</footer>

</body>
</html>
