<?php
function insert_comments($content, $time,$id_product,$name_user)
{
    $sql = "INSERT INTO comments(content, time, id_product,name_user) VALUES('$content','$time','$id_product','$name_user')";
    pdo_execute($sql);
}
function loadall_comments($id_product)
{
    $sql = "SELECT * FROM comments WHERE 1";
    $sql.=" AND id_product ='$id_product'";
    $sql.=" AND softdelete = 0";
    $sql.=" ORDER BY id_comment desc";
    $listcomments = pdo_query($sql);
    return $listcomments;
}
function loadall_comments_admin()
{
    $sql = "SELECT * FROM comments WHERE softdelete = 0 ORDER BY id_comment desc";
    $listcomments_admin = pdo_query($sql);
    return $listcomments_admin;
}
function loadall_comments_restore()
{
    $sql = "SELECT * FROM comments WHERE softdelete = 1 ORDER BY id_comment asc";
    $listcomments_restore = pdo_query($sql);
    return $listcomments_restore;
}
function softdelete_comments($id_comment){
    $sql = "UPDATE comments SET softdelete = 1 WHERE id_comment=".$id_comment;
    pdo_execute($sql);
}
function restore_comments($id_comment){
    $sql = "UPDATE comments SET softdelete = 0 WHERE id_comment=".$id_comment;
    pdo_execute($sql);
}
?>