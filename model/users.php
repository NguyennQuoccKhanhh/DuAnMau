<?php
function insert_users_kh($name, $email, $phone, $address, $password)
{
    $sql = "INSERT INTO users(name_user, email, phone, address, password) VALUES('$name', '$email', '$phone', '$address', '$password')";
    pdo_execute($sql);
}
function insert_users_ad($name, $email, $phone, $address, $password,$role)
{
    $sql = "INSERT INTO users(name_user, email, phone, address, password,role_user) VALUES('$name', '$email', '$phone', '$address', '$password','$role')";
    pdo_execute($sql);
}
function loadall_users()
{
    $sql = "SELECT * FROM users WHERE softdlt_user = 0 ORDER BY id_user desc";
    $list_users = pdo_query($sql);
    return $list_users;
}
function loadall_users_themmoi()
{
    $sql = "SELECT * FROM users ";
    $list_users = pdo_query($sql);
    return $list_users;
}
function delete_users($id_user)
{
    $sql = "UPDATE users SET softdlt_user = 1 WHERE id_user = '$id_user'";
    pdo_execute($sql);
}
function loadall_users_thungrac()
{
    $sql = "SELECT * FROM users WHERE softdlt_user = 1 ORDER BY id_user desc";
    $list_users = pdo_query($sql);
    return $list_users;
}
function delete_users_thungrac($id_user)
{
    $sql = "UPDATE users SET softdlt_user = 0 WHERE id_user = '$id_user'";
    pdo_execute($sql);
}
function loadone_users($id_user)
{
    $sql = "SELECT * FROM users WHERE id_user=" . $id_user;
    $suataikhoan = pdo_query_one($sql);
    return $suataikhoan;
}
function check_users($name, $email, $password){
    $sql = "SELECT * FROM users WHERE name_user='".$name."' AND email='".$email."' AND password='".$password."' AND softdlt_user=0";
    $check = pdo_query_one($sql);
    return $check;
}
function check_users_khoa($name, $email, $password){
    $sql = "SELECT * FROM users WHERE name_user='".$name."' AND email='".$email."' AND password='".$password."' AND softdlt_user=1";
    $check_khoa = pdo_query_one($sql);
    return $check_khoa;
}
function check_email_pass( $email){
    $sql = "SELECT * FROM users WHERE email='".$email."'";
    $check_email = pdo_query_one($sql);
    return $check_email;
}
function update_users_kh($idhidden, $name, $email, $phone, $address, $password)
{
    $sql = "UPDATE users SET name_user ='" . $name . "', email ='" . $email . "', phone ='" . $phone . "', address ='" . $address . "', password ='" . $password . "' WHERE id_user=" . $idhidden;
    pdo_execute($sql);
}
function update_users_ad($idhidden, $name, $email, $phone, $address, $password,$role)
{
    $sql = "UPDATE users SET name_user ='" . $name . "', email ='" . $email . "', phone ='" . $phone . "', address ='" . $address . "', password ='" . $password . "', role_user ='" . $role . "' WHERE id_user=" . $idhidden;
    pdo_execute($sql);
}
?>