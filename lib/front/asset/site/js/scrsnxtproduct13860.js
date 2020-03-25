function collapseItem($id) {
    $(".store_list").hide();
    $("#store_list_" + $id).toggle();
}

function getDetailInventory($product_id) {
    // $.ajax({
        // 'type': 'POST',
        // 'url': '/home/get_detail_inventory/' + $product_id,
        // 'success': function(data) {
        //     $('#myModalInventory .modal-body').html(data);
        // }
    // });
    $('#myModalInventory').modal('show');
}

function callToYourPhone(t) {
    $phone = prompt("Xin mời nhập số điện thoại của bạn"), null != $phone && (isNaN($phone) ? alert("Số điện thoại phải là số từ 0 đến 9") : 10 != $phone.length ? alert("Số điện thoại phải là 10 số") : ($url = "site/product/callcustomer/" + $phone + "/" + t, $.ajax({
        url: $url,
        type: "POST",
        async: !1,
        success: function(t) {
            alert("Cám ơn bạn! CODO SUPP sẽ gọi lại cho bạn trong thời gian sớm nhất")
        }
    })))
}

function ChoiceProperties1(t) {
    $(t.target.value).click()
}

function ChoiceProperties2(t) {
    $(t.target.value).click()
}

function ChoiceGifts1(t) {
    $(t.target.value).attr("checked", !0)
}

function ChoiceGifts2(t) {
    $(t.target.value).attr("checked", !0)
}

function action_cart_product() {
    $(window).width() < 780 ? $(".is_mobile").val("1") : $(".is_mobile").val("0")
}

function changeChoiceGift(t) {
    $("#choice_gifts1 option[value='#" + t + "']").prop("selected", !0), $("#choice_gifts2 option[value='#" + t + "']").prop("selected", !0)
}

function check_inventory() {
    $(".radio-label.inventory").click(function() {
        $prop_inven_id = $(this).attr("id"), $("#choice_properties1 option[value='#" + $prop_inven_id + "']").prop("selected", !0), $("#choice_properties2 option[value='#" + $prop_inven_id + "']").prop("selected", !0)
    })
}
// $(document).mouseup(function(t) {
//     var e;
//     (e = $(".popup-container")).is(t.target) || 0 !== e.has(t.target).length || e.parent().fadeOut(), (e = $(".form-rate .form")).is(t.target) || 0 !== e.has(t.target).length || e.parent().fadeOut(), (e = $(".notification .wrap")).is(t.target) || 0 !== e.has(t.target).length || e.parent().fadeOut()
// }), $(".close-popup").click(function() {
//     $(".popup").fadeOut()
// }), $(".notification .wrap .close").click(function() {
//     $(".notification").fadeOut()
// }), $(document).ready(function(t) {
//     check_inventory(), action_cart_product(), $("#mobile_addtocart").is(":visible") && ($("#mobile_addtocart").html($("#temp_mobile_addtocart").html()), $("#temp_mobile_addtocart").html(""))
// });