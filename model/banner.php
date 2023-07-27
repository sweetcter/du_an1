<?php
function selectAll_banner(){
    $sql = "SELECT * FROM banner ORDER BY id_banner ";
    return pdo_query($sql);
}
function add_banner($banner_name,$banner_image)
{
    $sql = "INSERT INTO banner(name_banner,image_banner) 
    VALUES(?,?,?,?,?)";
    pdo_execute($sql,$banner_name,$banner_image);
}

function delete_banner($banner_id){
    $sql = "DELETE FROM banner WHERE id_banner = ?";
    pdo_execute($sql,$banner_id);
}
?>

