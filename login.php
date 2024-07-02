<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Chat App-Login</title>
</head>
    
<body>
    <div class="wrapper">
        <section class= "form login">
            <header>Realtime chat App</header>
                <form action="#">
                    <div class="error-txt">This is an error message!</div>
                    <div class="name-details">
                       
                        <div class="field input">
                            <label>Email Address</label>
                            <input type="text" placeholder="Enter your email address">
                        </div>

                        <div class="field input">
                            <label>Password</label>
                            <input type="password" placeholder="Enter your password">
                            <i class ="fas fa-eye"></i>
                        </div>

                        <div class="field button">
                            <input type="submit" value="Continue to chat">
                        </div>
                    </div>
                </form>
                <div class="link">Not yet signed up? <a href="indeex.php">signup now</a></div>
            </section>     
    </div>
    <script src="javascript/pass-show-hide.js"></script>
</body>
</html>