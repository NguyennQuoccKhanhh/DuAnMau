<?php
function insert_banner($image)
{
    $sql = "INSERT INTO banners(image_banner) VALUES('$image')";
    pdo_execute($sql);
}
function loadall_banners()
{
    $sql = "SELECT * FROM banners ORDER BY id_banner asc";
    $listbanners = pdo_query($sql);
    return $listbanners;
}
function loadone_banners($id_banner)
{
    $sql = "SELECT * FROM banners WHERE id_banner=" . $id_banner;
    $suabanner = pdo_query_one($sql);
    return $suabanner;
}
function update_banners($idhidden, $image)
{
    if($image != ""){
        $sql = "UPDATE banners SET image_banner ='" . $image . "' WHERE id_banner=" . $idhidden;
    }
    pdo_execute($sql);
}

?>