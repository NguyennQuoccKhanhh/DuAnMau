<?php
function insert_categories($tenloai)
{
    $sql = "INSERT INTO categories(name_category) VALUES('$tenloai')";
    pdo_execute($sql);
}
// function loadall_categories_dm()
// {
//     $sql = "SELECT * FROM categories ORDER BY id_category asc";
//     $listcategories = pdo_query($sql);
//     return $listcategories;
// }
function loadall_categories()
{
    $sql = "SELECT * FROM categories WHERE softdelete = 0 ORDER BY id_category asc";
    $listcategories = pdo_query($sql);
    return $listcategories;
}
function loadall_categories_restore()
{
    $sql = "SELECT * FROM categories WHERE softdelete = 1 ORDER BY id_category asc";
    $listcategories_restore = pdo_query($sql);
    return $listcategories_restore;
}
function loadone_categories($id)
{
    $sql = "SELECT * FROM categories WHERE id_category=" . $id;
    $suadm = pdo_query_one($sql);
    return $suadm;
}
function update_categories($idhidden, $tenloai)
{
    $sql = "UPDATE categories SET name_category ='" . $tenloai . "' WHERE id_category=" . $idhidden;
    pdo_execute($sql);
}
function softdelete_categories($id_category){
    $sql = "UPDATE categories SET softdelete = 1 WHERE id_category=".$id_category;
    pdo_execute($sql);
}
function restore_categories($id_category){
    $sql = "UPDATE categories SET softdelete = 0 WHERE id_category=".$id_category;
    pdo_execute($sql);
}
?>