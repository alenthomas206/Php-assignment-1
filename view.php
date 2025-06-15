<?php include 'database.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>View Students</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <h1>Portal</h1>
  <nav>
    <a href="add.php">Add</a> |
    <a href="view.php">View</a>
  </nav>
</header>

<main>
  <h2>Student Records</h2>

  <table>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Grade</th>
    </tr>

    <?php
    $sql = "SELECT * FROM students";  
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . htmlspecialchars($row['name']) . "</td>
                    <td>" . htmlspecialchars($row['email']) . "</td>
                    <td>" . htmlspecialchars($row['grade']) . "</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No records found.</td></tr>";
    }
    ?>
  </table>
</main>

<footer>
  <p>&copy; 2025 Portal</p>
</footer>

</body>
</html>
