<?php
function loadall_sizes()
{
    $sql = "SELECT * FROM sizes  ORDER BY id_size asc";
    $listsizes = pdo_query($sql);
    return $listsizes;
}
function loadone_sizes($id_size)
{
    $sql = "SELECT * FROM sizes WHERE id_size=" . $id_size;
    $listonesizes = pdo_query_one($sql);
    return $listonesizes;
}
function loadone_colors($id_color)
{
    $sql = "SELECT * FROM colors WHERE id_color=" . $id_color;
    $listonecolors = pdo_query_one($sql);
    return $listonecolors;
}
function loadall_colors()
{
    $sql = "SELECT * FROM colors  ORDER BY id_color asc";
    $listcolors = pdo_query($sql);
    return $listcolors;
}
function insert_variant($id_product, $size, $color, $quanity)
{
    $sql = "INSERT INTO variants(id_product,id_size,id_color,quanity)
     VALUES( '$id_product', '$size', '$color', '$quanity')";
    pdo_execute($sql);
}

function load_variants_product($id_product)
{
    $sql = "SELECT * FROM variants 
    LEFT JOIN sizes 
    ON variants.id_size = sizes.id_size
    LEFT JOIN colors
    ON variants.id_color = colors.id_color
    LEFT JOIN products 
    ON variants.id_product = products.id_product WHERE 1";
    $sql .= " AND variants.id_product = '$id_product'";
    $sql .= " ORDER BY variants.id_variant desc";
    $list_variants_product = pdo_query($sql);
    return $list_variants_product;
}
function update_quanity($quantity, $id_product)
{
    $sql = "UPDATE variants SET quanity=quanity-'$quantity' WHERE id_product = '$id_product'";
    pdo_execute($sql);
}
function get_variant_by_product_size_color($id_product, $size, $color)
{
    $sql = "SELECT * FROM variants WHERE id_product='$id_product' AND id_size='$size' AND id_color='$color'";
    return pdo_query_one($sql);
}
function update_variant_quantity($id_variant, $quanity)
{
    $sql ="UPDATE variants SET quanity = quanity + '$quanity' WHERE id_variant='$id_variant'";
    pdo_execute($sql);
}
