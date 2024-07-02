<?php
   session_start();
   include_once "config.php";
   $fname = mysqli_real_escape_string($conn, $_POST['fname']);
   $lname = mysqli_real_escape_string($conn, $_POST['lname']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);

   if (!empty($fname) && !empty($lname) && !empty($email) &&!empty($password)){

    //email validation
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $sql = mysqli_query($conn, "SELECT email FROM user WHERE email ='{$email}'");
        if(mysqli_num_rows($sql) > 0){//if email already exist
            echo "$email - This email already exist!"
        }else{

            //check user upload file or not
            if(isset($_FILES['image'])){
                $img_name = $_FILES['image']['name'];//getting user uplod img name
                $img_type = $_FILES['image']['type'];//getting user uplod img type
                $tmp_name = $_FILES['image']['tmp_name'];//this temporary name is used to save/move file in our folder
           
                //expload image and get the last extension like jpg png
                $img_explode = explode('.'. $img_name);
                $img_ext = end($img_explode);//here we get the extension of an user uploded img file

                $extensions = ['png','jpeg','jpg'];
                if(in_arry($img_ext,$extensions) === true){
                    $time = time(); //return - current time
                    
                    $new_img_name = $time.$img_name;

                    if(move_uploaded_file($tmp_name,"images/".$new_img_name)){//if user upload img move to our folder successfully
                        $status = "Active now"//once user signup then his status will be avtive now
                        $random_id = ran(time(), 1000000);//randonm if for user

                         // insert all user data inside table
                    $sql2 = mysqli_query($conn, "INSERT INTO user (unique_id,fname,lname,lname,password,img,status)
                    VALUE({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}','{$status}')");
                    
                    if($sql2){//if these data inserted  
                        $sqp3  = mysqli_query($conn, "SELECT * FROM user WHERE email  = '{$email}'");
                       
                        if(mysqli_num_rows($sql3) > 0){
                            $row = mysqli_fetch_assoc($sql3);
                            $_SESSION['unique_id'] = $row['unique_id'];//this session we used uniqued_id in other php file
                            echo "Sussecs";
                        }

                            }else{
                                echo "Something went wrong!";
                            }
                    }   
                }else{
                    echo "Plese select an Image file - jpeg, jpg, png!";
                }

            }else{
                echo "Please select an Image file!";
            }
        }

    }else{
        echo "$email - This is not valid email";
    }       

   }else{
        echo "All input field are requird!";
   }
?>