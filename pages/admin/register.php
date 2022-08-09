<?php include_once "./includes/header.php";?>
<?php include_once "./includes/navbar.php";?>

<div class="wrapper">
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
    </div>