<?php
function insert_oders($name, $phone, $address, $payment_methods, $total_amount, $code_order, $id_user)
{
  $sql = "INSERT INTO orders(name,phone_user_setting,address_user_setting,payment_methods,total_amount, code_order,id_user)
  VALUES('$name', '$phone', '$address', '$payment_methods','$total_amount', '$code_order', '$id_user')";
  $last_id = pdo_execute_return_lastInsertId($sql);
  return $last_id;
}
function insert_orderdetail($id_product, $image_product, $name_product,$size, $color, $price_product, $quantity, $unit_price, $id_order)
{
  $sql = "INSERT INTO orderdetails(id_product,image_product,name_product,id_size,id_color,price_product, quantity,unit_price,id_order)
  VALUES('$id_product','$image_product','$name_product','$size', '$color','$price_product', '$quantity','$unit_price','$id_order')";
  pdo_execute($sql);
}
function loadall_orders()
{
  $sql = "SELECT * FROM orders 
  JOIN users ON orders.id_user = users.id_user ORDER BY id_order desc";
  $listorders = pdo_query($sql);
  return $listorders;
}
// function loadall_orderdetails()
// {
//   $sql = "SELECT * FROM orderdetails";
//   $listorderdetails = pdo_query($sql);
//   return $listorderdetails;
// }
function load_order_kh($id_user)
{
  $sql = "SELECT * FROM orders 
  LEFT JOIN users ON
  orders.id_user = users.id_user
  WHERE 1";
  $sql .= " AND orders.id_user = '$id_user'";
  $sql .= " ORDER BY id_order desc";
  $listorder_kh = pdo_query($sql);
  return $listorder_kh;
}
function update_status_xacnhan($xacnhan)
{
  $sql = "UPDATE orders SET `status` = `status` + 1 
  WHERE id_order = '$xacnhan'";
  pdo_execute($sql);
}
function update_status_huy($huy)
{
  $sql = "UPDATE orders SET `status` = 3 WHERE id_order = '$huy'";
  pdo_execute($sql);
}
function update_status_huy_kh($id_order)
{
  $sql = "UPDATE orders SET `status` = 3 WHERE id_order = '$id_order'";
  pdo_execute($sql);
}
function loadone_orderdetails($id_order)
{
  $sql = "SELECT * FROM orderdetails 
  LEFT JOIN sizes
  ON orderdetails.id_size = sizes.id_size
  LEFT JOIN colors
  ON orderdetails.id_color = colors.id_color
  LEFT JOIN orders
  ON orderdetails.id_order = orders.id_order WHERE 1";
  $sql.=" AND orderdetails.id_order='$id_order'";
  $sql.=" ORDER BY orderdetails.id_order DESC";
  $list_orderdetail = pdo_query($sql);
  return $list_orderdetail;
}

?>
