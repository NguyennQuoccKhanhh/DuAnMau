<?php
function loadall_thongke_admin()
{
    $sql = "SELECT categories.name_category as tenloai, count(products.id_product) as countsp ";
    $sql .= " FROM products LEFT JOIN categories ON  products.id_category=categories.id_category";
    $sql .= " GROUP BY categories.id_category ";
    $sql .= " ORDER BY categories.id_category DESC ";
    $list_thongke_admin = pdo_query($sql);
    return $list_thongke_admin;
}
function loadall_thongke_view()
{
    $sql = "SELECT categories.name_category as tenloai, count(products.id_product) as countsp ";
    $sql .= " FROM products LEFT JOIN categories ON  products.id_category=categories.id_category WHERE 1";
    $sql .= " AND categories.softdelete = 0";
    $sql .= " AND products.softdelete = 0";
    $sql .= " GROUP BY categories.id_category ";
    $sql .= " ORDER BY categories.id_category DESC ";
    $list_thongke_view = pdo_query($sql);
    return $list_thongke_view;
}
function load_order_huy()
{
    $sql = " SELECT count(orders.status) as order_huy FROM orders WHERE status=3";
    $list_order_huy = pdo_query($sql);
    return $list_order_huy;
}
function load_order_ban()
{
    $sql = " SELECT count(orders.status) as order_ban FROM orders WHERE status=2";
    $list_order_ban = pdo_query($sql);
    return $list_order_ban;
}
function load_total_thongke()
{
    $sql = " SELECT SUM(orderdetails.unit_price) as total_price ";
    $sql .= " FROM orderdetails LEFT JOIN orders ON orderdetails.id_order = orders.id_order WHERE orders.status = 2";
    $list_total_thongke = pdo_query($sql);
    return $list_total_thongke;
}
function load_thongke_categories_role_product()
{
    $sql = "SELECT 
            categories.name_category AS name_category, 
            SUM(products.role_product) AS role_product 
        FROM 
            products 
            LEFT JOIN categories ON categories.id_category = products.id_category 
            LEFT JOIN orderdetails ON orderdetails.id_product = products.id_product
            LEFT JOIN orders ON orderdetails.id_order = orders.id_order
        WHERE 
            categories.softdelete = 0 AND
            products.softdelete = 0 AND
            orders.status = 2
        GROUP BY 
            categories.id_category 
        ORDER BY 
            role_product DESC";
    $list_thongke_categories_role_product = pdo_query($sql);
    return $list_thongke_categories_role_product;
}
function thongke_top5()
{
    $sql = "SELECT name_product, role_product FROM products ORDER BY role_product desc limit 0,5";
    $listproducts = pdo_query($sql);
    return $listproducts;
}
