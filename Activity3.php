<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Registration</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background: linear-gradient(135deg, silver, #333);
        }
        .container {
            max-width: 700px;
            width: 100%;
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 15px;
            box-shadow: 0 15px 20px rgba(0, 0, 0, 0.15);
        }
        .container .title {
            font-size: 25px;
            font-weight: 500;
            position: relative;
            color: #333;
        }
        .container .title::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 30px;
            border-radius: 5px;
            background: linear-gradient(135deg, silver, #333);
        }
        .content form .user-details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
        }
        form .user-details .input-box {
            margin-bottom: 15px;
            width: calc(100% / 1);
        }
        form .input-box span.details {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
            color: #333;
        }
        .user-details .input-box input {
            height: 45px;
            width: 100%;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 15px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }
        .user-details .input-box input:focus,
        .user-details .input-box input:valid {
            border-color: silver;
        }
		
        form .gender-details .gender-title {
            font-size: 20px;
            font-weight: 500;
            color: #333;
        }
        form .category {
            display: flex;
            width: 40%;
            margin: 14px 0 12px;
            justify-content: space-between;
        }
        form .category label {
            display: flex;
            align-items: center;
            cursor: pointer;
            color: #333;
        }
        form .category label .dot {
            height: 18px;
            width: 18px;
            border-radius: 50%;
            margin-right: 5px;
            background: #d9d9d9;
            border: 5px solid transparent;
            transition: all 0.3s ease;
        }
        #dot-1:checked ~ .category label .one,
        #dot-2:checked ~ .category label .two {
            background: silver;
            border-color: #d9d9d9;
        }
        form input[type="radio"] {
            display: none;
        }
        form .button {
            margin: 30px 0;
        }
        form .button input {
            width: 100%;
            border-radius: 5px;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, silver, #333);
        }
        form .button input:hover {
            background: linear-gradient(-135deg, silver, #333);
        }
        @media(max-width: 584px) {
            .container {
                max-width: 100%;
            }
            form .user-details .input-box {
                margin-bottom: 15px;
                width: 100%;
            }
            form .category {
                width: 100%;
            }
            .content form .user-details {
                max-height: 300px;
                overflow-y: scroll;
            }
            .user-details::-webkit-scrollbar {
                width: 5px;
            }
        }
        @media(max-width: 459px) {
            .container .content .category {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <main>
        <div class="container">
            <div class="title">Registration</div>
            <div class="content">
                <form action="registration.php" method="POST">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">ID Number</span>
                            <input type="text" name="idno" placeholder="ID Number" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Firstname</span>
                            <input type="text" name="firstname" placeholder="Firstname" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Middlename</span>
                            <input type="text" name="middlename" placeholder="Middlename" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Lastname</span>
                            <input type="text" name="lastname" placeholder="Lastname" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Age</span>
                            <input type="text" name="age" placeholder="Age" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Year Level</span>
                            <input type="text" name="year_level" placeholder="Year Level" required>
                        </div>
						<div class="input-box">
                            <span class="details">Gender</span>
                            <input type="text" name="gender" placeholder="Gender" required>
                        </div>
                    <div class="input-box">
                        <span class="details">Contact Number</span>
                        <input type="text" name="contact" placeholder="Contact Number" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Home Address</span>
                        <input type="text" name="address" placeholder="Home Address" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email Address</span>
                        <input type="text" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" name="confirmpassword" placeholder="Confirm Password" required>
                    </div>
                    <div class="button">
                        <input type="submit" value="Register"
                    </div>
                    <div class="field">
                        <p> Already have an account? <a href="http://localhost/Activity/Activity2.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
