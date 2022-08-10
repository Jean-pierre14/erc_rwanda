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
                <div class="box">
                    <h3>News</h3>
                    <form action="#" class="myForm">
                        <div class="error-text">This error</div>
                        <div class="group">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" placeholder="Title" class="input">
                        </div>
                        <div class="group">
                            <label for="sub-title">Sub-Title</label>
                            <input type="text" name="title" id="sub-title" placeholder="Title" class="input">
                        </div>
                        <div class="group">
                            <label for="content">Content</label>
                            <textarea name="content" id="content" class="textarea" placeholder="Message..."></textarea>
                        </div>
                        <div class="group">
                            <label for="img">Image</label>
                            <input type="file" name="img" id="img">
                        </div>
                        <div class="group">
                            <button>Send <i class="fa fa-send"></i></button>
                        </div>
                    </form>
                </div>
            <?php elseif($_GET['event'] == 'admin'):?>
                <div class="box">
                    <h3>New Admin</h3>
                    <form action="#" class="myForm">
                        <div class="error-text">This error</div>
                        
                        <div class="group">
                            <label for="email">Title</label>
                            <input type="email" id="email" name="email" placeholder="email" class="input">
                        </div>
                        
                        <div class="group">
                            <label for="img">Image</label>
                            <input type="file" name="img" id="img">
                        </div>

                        <div class="group">
                            <button type="button" class="registerAdmin">Register <i class="fa fa-send"></i></button>
                        </div>
                    </form>
                </div>
            
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

<script src="../../assets/js/newAdmin.js"></script>