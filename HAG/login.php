<?php
	include ("app/header.php");
?>
 

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
        
                <?php
                // Check if the user is already logged in
                if (isset($_SESSION['username'])) {
                    echo '<div class="alert alert-success" role="alert">Welcome back, ' . $_SESSION['username'] . '! <a href="?logout=1">Logout</a></div>';
                } else {
                    // If not logged in, check if the form is submitted
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        // Validate the login credentials (you may replace this with a database check)
                        $escaped_username = $conn->real_escape_string($_POST['username']);
                        $escaped_password = $conn->real_escape_string($_POST['password']);
                        // Query to check login credentials
                        $sql = "SELECT * FROM users WHERE username='$escaped_username' AND password='$escaped_password'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // Set the session variable
                            $_SESSION['username'] = $escaped_username;
                            echo '<div class="alert alert-success" role="alert">Login successful. Welcome, ' . $escaped_username . '! <a href="?logout=1">Logout</a></div>';
                        } else {
                            echo '<div class="alert alert-danger" role="alert">Invalid login credentials.</div>';
                            include ("loginform.html");
                        }
                    } else {
                        // Display the login form
                        include ("loginform.html");
                    }
                }
                ?>
            </div>
        </div>
    </div>

<?php
	include ("footer.html");
?>

 

  
    

    <!-- Bootstrap JS (optional, but needed for some Bootstrap features) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>