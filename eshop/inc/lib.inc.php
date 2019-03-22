<?php
function addItemToCatalog($link, $title, $author, $pubyear, $price) {
    $sql = "INSERT INTO catalog (title, author, pubyear, price) VALUES (?,?,?,?)";

    if(!$stmt = mysqli_prepare($link,$sql)) {
        return false;
    } else {
        mysqli_stmt_bind_param($stmt,'ssii',$title, $author, $pubyear, $price);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return true;
    }
}

function clearString($link, $data) {
    return mysqli_real_escape_string($link,trim(strip_tags($data)));
}

function clearInt($data) {
    return abs((int)$data);
}