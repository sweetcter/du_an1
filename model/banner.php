<?php
function loadall_slideshow(){
    $sql = "select * from banner";
    return pdo_query($sql);
}
function add_banner($banner_name,$banner_image,$banner_oder,$category_id)
{
    $sql = "INSERT INTO banner(name_banner,image_banner,oder,id_category) 
    VALUES(?,?,?,?,?)";
    pdo_execute($sql,$banner_name,$banner_image,$banner_oder,$category_id);
}

function delete_banner($banner_id){
    $sql = "DELETE FROM banner WHERE id_banner = ?";
    pdo_execute($sql,$banner_id);
}
?>

