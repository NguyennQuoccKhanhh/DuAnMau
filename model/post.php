<?php
function insert_posts($name_post, $image_post, $time, $content_post)
{
    $sql = "INSERT INTO posts(name_post,image_post,time,content_post) VALUES('$name_post', '$image_post', '$time', '$content_post')";
    pdo_execute($sql);
}
function delete_posts($id_post)
{
    $sql = "DELETE FROM posts WHERE id_post=".$id_post;
    pdo_execute($sql);
}
function loadall_posts()
{
    $sql = "SELECT * FROM posts ORDER BY id_post asc";
    $listposts = pdo_query($sql);
    return $listposts;
}
function load_posts_tergether_time($time, $id_post)
{
    $sql = "SELECT * FROM posts WHERE time LIKE '$time' AND id_post <> '$id_post' ";
    $listposts_tergether_time = pdo_query($sql);
    return $listposts_tergether_time;
}
function loadone_posts($id_post)
{
    $sql = "SELECT * FROM posts WHERE id_post=" . $id_post;
    $suabaiviet = pdo_query_one($sql);
    return $suabaiviet;
}
function update_posts($idhidden,$name_post, $image_post, $content_post)
{
    if($image_post != ""){
        $sql = "UPDATE posts SET name_post ='" . $name_post . "',image_post ='" . $image_post . "',content_post ='" . $content_post . "' WHERE id_post=" . $idhidden;
    }else{
        $sql = "UPDATE posts SET name_post ='" . $name_post . "',content_post ='" . $content_post . "' WHERE id_post=" . $idhidden;
    }
    
    
    pdo_execute($sql);
}
?>