<?php
$color_name = $_POST['colorName'];
$colorType = $_POST['colorType'];
$color_image = !empty($_FILES['colorImage']) ? $_FILES['colorImage'] : "";
$color_tmp_image = $color_image['tmp_name'];
$color_name_id = 0;
if (check_color_name_exist($color_name) >= 1) {
    $color_name_reuslt = select_color_name_by_name($color_name);
    $array = [
        'status' => 'error',
        'color_name_id' => $color_name_reuslt['color_name_id'],
        'color_name' => $color_name_reuslt['color_name'],
    ];
    echo json_encode($array);
} else {
    if (!empty($color_image)) {
        $color_imgage_result = add_image_js_version($color_image, $color_tmp_image, $ASSET_URL);
        $color_name_id = add_color_name($color_name, $color_imgage_result, $colorType);
    }
    $color_name_result = select_color_name_by_id($color_name_id);
    echo json_encode($color_name_result);
}
