<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Welcome</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: grid;
            height: 100vh;
            place-items: center;
            background: linear-gradient(135deg, silver, #333);
            font-family: 'Poppins', sans-serif;
            color: #000; /* Font color set to black */
            font-weight: bold; /* Set font weight to bold */
            font-style: italic; /* Set font style to italic */
        }

        /* Header styling */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            width: 100%;
            background-color: #fff;
            border-radius: 0 0 15px 15px;
        }

        .header h1 {
            font-size: 24px;
        }

        /* Profile image container styling */
        .profile-image-container {
            width: 50px;
            height: 50px;
            background-color: #ddd;
            border-radius: 50%;
            overflow: hidden;
        }

        .profile-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Button styling */
        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .button {
            margin-bottom: 10px;
            padding: 10px 20px;
            background-color: #000; /* Button background color set to black */
            color: #fff; /* Font color set to white */
            border: 2px solid silver; /* Initial border color set to silver */
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, border-color 0.3s, transform 0.3s, color 0.3s;
        }

        .button:hover {
            background-color: silver; /* Change background color on hover to silver */
            border-color: #000; /* Change border color on hover to black */
            color: #000; /* Change font color on hover to black */
        }

        .button:active {
            transform: scale(0.95); /* Add a scale effect when clicked */
        }

        /* Logout button styling */
        .logout-button {
            padding: 10px 20px;
            background-color: #000; /* Button background color set to black */
            color: #fff; /* Font color set to white */
            border: 2px solid #000; /* Initial border color set to black */
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, border-color 0.3s, transform 0.3s, color 0.3s;
        }

        .logout-button:hover {
            background-color: #ff0000; /* Change background color on hover to red */
            border-color: #000; /* Change border color on hover to black */
        }

        .logout-button:active {
            transform: scale(0.95); /* Add a scale effect when clicked */
        }
    </style>
</head>
<body>
    <?php
    // Start session
    session_start();

    // Check if the student's name is set in the session
    $student_name = isset($_SESSION['student_name']) ? $_SESSION['student_name'] : 'Student'; // Default name if not set
    ?>

    <header class="header">
        <h1>Welcome, <?php echo $student_name; ?></h1>
        <div class="profile-image-container">
            <!-- You can replace the source with the actual profile image -->
            <img class="profile-image" src="https://via.placeholder.com/50" alt="Profile Image">
        </div>
    </header>

    <main>
        <div class="container">
            <div class="button-container">
                <button class="button" onclick="editProfile()">Edit Profile</button>
                <button class="button" onclick="sitin()">Sitin</button>
                <button class="button" onclick="viewRemainingSessions()">View Remaining Sessions</button>
                <button class="logout-button" onclick="logout()">Logout</button>
            </div>
        </div>
    </main>

    <script>
        // Edit Profile function
        function editProfile() {
            alert('Edit Profile clicked');
            // Add your functionality here
        }

        // Sitin function
        function sitin() {
            alert('Sitin clicked');
            // Add your functionality here
        }

        // View Remaining Sessions function
        function viewRemainingSessions() {
            alert('View Remaining Sessions clicked');
            // Add your functionality here
        }

        // Logout function
        function logout() {
            alert('Logout clicked');
            // Add your functionality here
            window.location.href = 'http://localhost/Activity/Activity2.php'; // Redirect to login page
        }
    </script>
</body>
</html>
