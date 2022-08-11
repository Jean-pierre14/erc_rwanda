<?php
    include_once "./config.php";

    $sql = mysqli_query($con, "SELECT * FROM news LEFT JOIN admins ON news.poster_id = admins.admin_id ORDER BY news_id DESC LIMIT 10");
    $output = '';

    if(mysqli_num_rows($sql) > 0){

        while($row = mysqli_fetch_assoc($sql)){
            
            $file = '<img src="./assets/img/Posts/'.$row['img'].'" alt="'.$row['title'].'" class="img-max">';

            ($row['img'] != '') ? $img = $file : $img = '';
            $output .= '
            <div class="box">
            <div class="card">
                <div class="cardHeader">
                    '.$img.'
                </div>
                <div class="cardBody">
                    <h2>
                        '.$row['title'].'
                    </h2>
                    <span><i>"'.$row['subtitle'].'"</i></span>
                    <p>
                        <i>
                            '.$row['content'].'
                        </i>
                    </p>
                </div>
                <div class="cardFooter">
                    <div class="">
                        <button type="button" class="btn btn-primary like">Like</button>
                        <button type="button" class="btn btn-danger dislike">Dislike</button>
                    </div>
                    <div class="">
                        <img title="'.$row['email'].'" src="./assets/img/rodrigue.jpg" alt="'.$row['email'].'">
                    </div>
                </div>
            </div>
        </div>
            ';    
        }    
    }else{
        $output = '<p class="">There is no news today...</p>';
    }

    print $output;