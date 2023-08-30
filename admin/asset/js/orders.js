$(document).ready(function () {
    let status = $(".status_name").attr("status");
    if(status === "1" || status === "5"){
        $(".status_name").css("color","#ff0000");
    }else{
        $(".status_name").css("color","#A2FF86");
    }
});