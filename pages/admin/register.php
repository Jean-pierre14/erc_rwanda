<?php include_once "./includes/header.php";?>
<?php include_once "./includes/navbar.php";?>


<div class="wrapper">
        <div class="box padding-5 text-center">
            <div class="group-btn">
                <a href="register.php?event=post" class="btn btn-primary">New Post</a>
                <a href="register.php?event=admin" class="btn btn-primary">New Admin</a>
            </div>
        </div>
        <?php if(isset($_GET['event'])):?>
            <?php if($_GET['event'] == 'post'):?>
                <?php
                    include_once "../../backend/config.php";
                    $get = '';
                    $img = '';
                    $title = '';
                    $subtitle = '';
                    $message = '';
                    $photo = '';
                    $button = '<button type="button" class="btn newPost">Send <i class="fa fa-send"></i></button>';

                    if(isset($_GET['get'])){
                        $get = $_GET['get'];
                        
                        $sql = mysqli_query($con, "SELECT * FROM news WHERE news_id = {$get}");
                        
                        if(mysqli_num_rows($sql) == 1){

                            $row = mysqli_fetch_assoc($sql);
                            $title = $row['title'];
                            $subtitle = $row['subtitle'];
                            $message = $row['content'];
                            $img = $row['img'];

                            $photo = '<img src="../../assets/img/Posts/'.$img.'" alt="" class="avatar-mx">';

                            $button = '<button type="button" class="btn update">Update <i class="fa fa-send"></i></button>';

                        }else{
                            print '<p class="alert alert-anger">Something went wrong...</p>';
                            $button = '<button type="button" class="disable btn update">You can\'t Update <i class="fa fa-send"></i></button>';
                        }
                    }
                    ?>
                <div class="box">
                    <h3>News</h3>
                    <form action="#" class="myForm">
                        <div class="error-text">This error</div>
                        <div class="group">
                            <label for="title">Title</label>
                            <input type="text" id="title" value="<?= $title;?>" name="title" placeholder="Title" class="input">
                        </div>
                        <div class="group">
                            <label for="sub-title">Sub-Title</label>
                            <input type="text" value="<?= $subtitle;?>" name="sub-title" id="sub-title" placeholder="Title" class="input">
                        </div>
                        <div class="group">
                            <label for="content">Content</label>
                            <textarea name="content" value="<?= $message;?>" id="content" class="textarea" placeholder="Message..."></textarea>
                        </div>
                        
                        <div class="group">
                            <?= $photo;?>
                            <label for="img">Image</label>
                            <input type="file" name="img" id="img">
                        </div>

                        <div class="group">
                            <?= $button;?>
                        </div>
                    </form>
                </div>
                <script src="../../assets/js/newPost.js"></script>
            <?php elseif($_GET['event'] == 'admin'):?>
                <div class="box">
                    <h3>New Admin</h3>
                    <form action="#" class="myForm">
                        <div class="error-text">This error</div>
                        
                        <div class="group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="email" class="input">
                        </div>
                        <div class="group">
                            <button type="button" class="registerAdmin">Register <i class="fa fa-send"></i></button>
                        </div>
                    </form>
                </div>
                <script src="../../assets/js/newAdmin.js"></script>
            
                    <?php endif;?>
        <?php else:?>
            <div class="box">
                <h3>Welcome {Today}</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta possimus harum unde vitae provident eveniet esse cupiditate porro, id, odit eius, at veniam? Fugit, eum? Accusamus dolor repellendus impedit eaque?
                </p>
            </div>
        <?php endif;?>
    </div>

