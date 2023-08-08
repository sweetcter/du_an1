$(document).ready(function () {
  let colors = [];
  $("#add-color").click(function () {
    let newColor = $("#ad_color_type").val();
    let typeColor = $("#ad_color_type option:selected").text();
    if (colors.length > 0) {
      let color = colors.find(function (element) {
        return newColor === element;
      });
      if (color !== undefined) {
        $("#color_message").text(`Màu ${typeColor} đã được thêm`);
        setTimeout(function () {
          $("#color_message").text("");
        }, 3000);
        return;
      }
    }
    if (newColor) {
      colors.push(newColor);
      $("#color_list").append(
        `<div class="color_type my-2" style="display:inline-block"><span class="new-color px-3">${typeColor}</span><button color-id=${newColor} class="delete_color_btn btn btn-danger cursor-pointer" type="button">Xóa</button></div>`
      );
      updateColorData();

      // Gắn sự kiện click cho nút "Xóa" ngay sau khi tạo nút
      $(".delete_color_btn:last").click(function () {
        let getIdColor = $(this).attr("color-id");
        let removeItem = getIdColor;
        colors = colors.filter(function (value) {
          return value !== removeItem;
        });
        updateColorData();
        $(this).closest(".color_type").remove();
      });
    }
  });

  function updateColorData() {
    $("#colorData").val(colors.toString());
  }
});