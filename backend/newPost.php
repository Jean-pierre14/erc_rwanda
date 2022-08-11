<?php
    include_once "./config.php";

    session_start();

    $title = mysqli_real_escape_string($con, htmlentities(trim($_POST['title'])));
    $subtitle = mysqli_real_escape_string($con, htmlentities(trim($_POST['sub-title'])));
    $message = mysqli_real_escape_string($con, htmlentities(trim($_POST['content'])));

    if(!empty($title) && !empty($message)){
        if(isset($_FILES['img'])){
            $img_name = $_FILES['img']['name'];
            $img_type = $_FILES['img']['type'];
            $tmp_name = $_FILES['img']['tmp_name'];

            // Explode image and get the last extension 
            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode); // Here we get the extension

            $extension = ['png', 'jpeg', 'jpg'];
            
            if(in_array($img_ext, $extension) === true){ 
                
                $time = time();
                $new_name_img = $time.$img_name;
                if(move_uploaded_file($tmp_name, "../assets/img/Posts/".$new_name_img)){
                
                    $randomId = rand(time(), 10000000);
                    $sql2 = mysqli_query($con, "INSERT INTO news(unique_id, title, subtitle, content, img) VALUES({$randomId},'{$title}', '{$subtitle}','{$message}','{$new_name_img}')");
                    
                    if($sql2){
                        print "success";
                    }else{
                        print "Something went wront";
                    }
                }
                
            }else{
                echo "Please select an Image file - Png, jpeg or jpg";
            }

        }else{
            echo "Please select an image";
        }
    }else{
        print "All fields are required";
    }