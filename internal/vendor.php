<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vendor Summary</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Custom styles */
    body {
      padding-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="text-center">Vendor Summary</h1>
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <thead class="thead-dark">
          <tr>
            <th>Vendor ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Created At</th>
            <th>Number of Customers</th>
            <th>Number of Transactions</th>
            <th>Number of Orders</th>
            <th>Number of Deliveries</th>
          </tr>
        </thead>
        <tbody>
          <?php
          error_reporting(E_ALL);
          ini_set('display_errors', 1);
          
            // Database credentials
            $db_host = 'localhost'; // Assuming the database is hosted locally
            $db_name = 'mbgfdkhzks';
            $db_user = 'mbgfdkhzks';
            $db_pass = '53VR2AnP4w';

            // Establish database connection
            $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

            // Check connection
            if (!$connection) {
                echo 'Connection Error';
              die('Database connection failed: ' . mysqli_connect_error());
            }

            // Fetch data from the database
            $query = "SELECT * FROM vendor_summary ORDER BY id DESC";
            $result = mysqli_query($connection, $query);

            // Check if there are any rows returned
            if (mysqli_num_rows($result) > 0) {
              // Loop through each row and display the data
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['vendor_id'] . '</td>';
                echo '<td>' . $row['vendor_name'] . '</td>';
                echo '<td>' . $row['vendor_phone'] . '</td>';
                echo '<td>' . $row['vendor_created_at'] . '</td>';
                echo '<td>' . $row['num_customers'] . '</td>';
                echo '<td>' . $row['num_transactions'] . '</td>';
                echo '<td>' . $row['num_orders'] . '</td>';
                echo '<td>' . $row['num_deliveries'] . '</td>';
                echo '</tr>';
              }
            } else {
              echo '<tr><td colspan="8">No data available</td></tr>';
            }

            // Close database connection
            mysqli_close($connection);
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
