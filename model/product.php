<?php
function insert_product( $name, $image, $description, $price,$id_category)
{
    $sql = "INSERT INTO products(name_product,image_product,description,price_product, id_category)
     VALUES('$name','$image','$description','$price','$id_category')";
    pdo_execute($sql);
}
function loadall_products($keyword,$id_category)
{
    $sql = "SELECT * FROM products 
    LEFT JOIN categories 
    ON categories.id_category = products.id_category
    WHERE 1";
    if(!empty($keyword)){
        $sql.=" AND products.id_product like '%".$keyword."%'";
    }
    if(!empty($id_category) && $id_category > 0){
        $sql.=" AND products.id_category = '".$id_category."'";
    }
    $sql.=" AND categories.softdelete = 0";
    $sql.=" AND products.softdelete = 0";
    $sql.=" ORDER BY products.id_product desc";
    $listproduct = pdo_query($sql);
    return $listproduct;
}
function loadall_products_thungrac($keyword,$id_category)
{
    $sql = "SELECT * FROM products 
    LEFT JOIN categories 
    ON categories.id_category = products.id_category
    WHERE 1";
    if(!empty($keyword)){
        $sql.=" AND products.id_product like '%".$keyword."%'";
    }
    if(!empty($id_category) && $id_category > 0){
        $sql.=" AND products.id_category = '".$id_category."'";
    }
    $sql.=" AND categories.softdelete = 0";
    $sql.=" AND products.softdelete = 1";
    $sql.=" ORDER BY products.id_product desc";
    $listproduct = pdo_query($sql);
    return $listproduct;
}

function loadall_products_kh_new()
{
    $sql = "SELECT * FROM products
    LEFT JOIN categories
    ON categories.id_category = products.id_category
    WHERE 1";
    $sql.=" AND categories.softdelete = 0";
    $sql.=" AND products.softdelete = 0";
    $sql.=" ORDER BY products.id_product desc limit 0,7";
    $listproduct_nw = pdo_query($sql);
    return $listproduct_nw;
}
function loadall_products_above_menu()
{
    $sql = "SELECT * FROM products
    LEFT JOIN categories
    ON categories.id_category = products.id_category
    WHERE 1";
    $sql.=" AND categories.softdelete = 0";
    $sql.=" AND products.softdelete = 0";
    $sql.=" ORDER BY products.id_product desc";
    $list_products_above_menu= pdo_query($sql);
    return $list_products_above_menu;
}
function loadone_variants($id_product)
{
    $sql = "SELECT * FROM variants
    LEFT JOIN products 
    ON products.id_product = variants.id_product 
    WHERE variants.id_product='$id_product'";
    $variants = pdo_query_one($sql);
    return $variants;
}
function loadone_products($id_product)
{
    $sql = "SELECT * FROM products WHERE id_product=" . $id_product;
    $suasp = pdo_query_one($sql);
    return $suasp;
}
function load_products_tergether($id_product,$id_category)
{
    $sql = "SELECT * FROM products WHERE id_category= ".$id_category." AND id_product <>" . $id_product;
    $listproduct_tergether = pdo_query($sql);
    return $listproduct_tergether;
}
function update_product($idhidden,$name,$description,$price,$image,$id_category)
{
    if($image != ""){
        $sql = "UPDATE products SET name_product ='$name',description ='$description',price_product ='$price',image_product ='$image',id_category ='$id_category' WHERE id_product='$idhidden'";
    }else{
        $sql = "UPDATE products SET name_product =' $name',description ='$description',price_product ='$price',id_category =' $id_category' WHERE id_product='$idhidden'";
    }
    pdo_execute($sql);
}
function update_roleproduct($quantity,$id_product){
    $sql = "UPDATE products SET role_product = role_product + '$quantity' WHERE id_product = '$id_product'";
    pdo_execute($sql);
}
function load_role_product(){
    $sql = "SELECT * FROM products WHERE 1";
    $sql.=" AND role_product>0 ";
    $sql.=" AND products.softdelete = 0";
    $sql.=" ORDER BY role_product desc limit 0,7";
    $list_product_role_product = pdo_query($sql);
    return $list_product_role_product;
}
function delete_products($id_product)
{
    $sql = "UPDATE products SET softdelete = 1 WHERE id_product=" . $id_product;
    pdo_execute($sql);
}
function delete_products_thungrac($id_product)
{
    $sql = "UPDATE products SET softdelete = 0 WHERE id_product=" . $id_product;
    pdo_execute($sql);
}
?>  