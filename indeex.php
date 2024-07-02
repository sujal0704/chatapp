<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="stylesheet" href="style.css">
        <script src="javascript/signup.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Chat App-singup</title>
</head>
    
<body>
    <div class="wrapper">
        <section class= "form singup">
            <header>Realtime chat App</header>
                <form action="#" enctype="multipart/form-data">
                    <div class="error-txt"></div>
                    <div class="name-details">
                        <div class="field input">
                            <label>First Name</label>
                            <input type="text" name="fname" placeholder="First Name" required>
                        </div>

                        <div class="field input">
                            <label>Last Name</label>
                            <input type="text" name="lname" placeholder="Last Name" required>
                        </div>

                        <div class="field input">
                            <label>Email Address</label>
                            <input type="text" name="email" placeholder="Enter your email address" required>
                        </div>

                        <div class="field input">
                            <label>Password</label>
                            <input type="password" name="password"  placeholder="Enter new password" required>
                            <i class ="fas fa-eye"></i>

                        </div>

                        <div class="field image">
                            <label>Select Image</label>
                            <input type="file" name="image" required>
                        </div>

                        <div class="field button">
                            <input type="submit" value="Continue to chat">
                        </div>
                    </div>
                </form>
                <div class="link">Alrready signed up? <a href="login.php">Login now</a></div>
            </section>     
    </div>
    <script src="javascript/pass-show-hide.js"></script>
        

</body>
</html>