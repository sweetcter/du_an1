<?php
function loadall_slideshow(){
    $sql = "select * from banner";
    $listbanner= pdo_query($sql);
    return $listbanner;
}
?>
