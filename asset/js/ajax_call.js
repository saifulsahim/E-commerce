function brand(id) {
    $("#brand").val(id);
    $("#category").val('');
    cat_brand_filter();

}


function category(id) {
    $("#brand").val('');
    $("#category").val(id);
    cat_brand_filter();

}

function cat_brand_filter() {

    var brand_id = $("#brand").val();

    var category_id = $("#category").val();


    $.ajax({
        url: 'Products/brand_cat_filter',
        method: "POST",
        data: {'b_id': brand_id, 'c_id': category_id},
        cache: false,
        success: function (data) {
            //console.log(data);
            $(".features_items").html(data);
//                    var data = $.parseJSON(msg);
//
//   $('.due').html(data);
        }
    });

}


