$(document).ready(function() {
    $("#form_contact").submit(function() {
        var t = !0,
            n = $.trim($(this).find('input[name="name"]').val()),
            h = $.trim($(this).find('input[name="phone"]').val()),
            i = $.trim($(this).find('textarea[name="content"]').val());
        return "" == n || n.length > 32 ? ($("#name").html("<p>Họ tên không bỏ trống và phải nhỏ hơn 32 ký tự</p>"), t = !1) : $("#name").html(""), "" == h || 10 != h.length ? ($("#phone").html("<p>Số điện thoại không bỏ trống và phải = 10 số</p>"), t = !1) : $("#phone").html(""), "" == i ? ($("#content").html("<p>Nội dung không bỏ trống</p>"), t = !1) : $("#content").html(""), t
    }), $("#form_rate").submit(function() {
        var t = !0,
            n = $.trim($(this).find('input[name="name"]').val()),
            h = $.trim($(this).find('input[name="phone"]').val()),
            i = $.trim($(this).find('textarea[name="content"]').val());
        return "" == $.trim($(this).find('input[name="sms_notify"]:checked').val()) ? ($("#sms_notify").text("Mời bạn chọn lựa có thông báo SMS hay không"), t = !1) : $("#sms_notify").text(""), "" == n || n.length > 32 ? ($("#name").text("Tên không bỏ trống và phải nhỏ hơn 32 ký tự"), t = !1) : $("#name").text(""), "" == h || 10 != h.length ? ($("#phone").text("Số điện thoại không bỏ trống và phải = 10 số"), t = !1) : $("#phone").text(""), "" == i ? ($("#content").text("Nội dung không bỏ trống"), t = !1) : $("#content").text(""), t
    }), $("#form_address_update").submit(function() {
        var t = !0,
            n = $.trim($(this).find('input[name="name"]').val()),
            h = ($.trim($(this).find('input[name="phone"]').val()), $.trim($(this).find('input[name="address"]').val()));
        return "" == n || n.length > 32 ? ($("#name").html("<p>Tên không bỏ trống và phải nhỏ hơn 32 ký tự</p>"), t = !1) : $("#name").html(""), "" == h ? ($("#address").html("<p>Địa chỉ không được bỏ trống</p>"), t = !1) : $("#address").html(""), t
    }), $("#form_address_insert").submit(function() {
        var t = !0,
            n = $.trim($(this).find('input[name="name"]').val()),
            h = ($.trim($(this).find('input[name="phone"]').val()), $.trim($(this).find('input[name="address"]').val()));
        return "" == n || n.length > 32 ? ($("#name").html("<p>Tên không bỏ trống và phải nhỏ hơn 32 ký tự</p>"), t = !1) : $("#name").html(""), "" == h ? ($("#address").html("<p>Địa chỉ không được bỏ trống</p>"), t = !1) : $("#address").html(""), t
    }), $("#form_register").submit(function() {
        var t = !0,
            n = $.trim($(this).find('input[name="name"]').val()),
            h = ($.trim($(this).find('input[name="phone"]').val()), $.trim($(this).find('input[name="password"]').val())),
            i = $.trim($(this).find('input[name="address"]').val());
        return "" == n || n.length > 32 ? ($("#name").html("<p>Tên không bỏ trống và phải nhỏ hơn 32 ký tự</p>"), t = !1) : $("#name").html(""), h.length < 6 ? ($("#password").html("<p>Mật khẩu phải ít nhất 6 kí tự</p>"), t = !1) : $("#password").html(""), "" == i || i.length > 255 ? ($("#address").html("<p>Địa chỉ không bỏ trống và phải nhỏ hơn 255 ký tự</p>"), t = !1) : $("#address").html(""), t
    }), $("#form_forgot").submit(function() {
        var t = !0,
            n = $.trim($(this).find('input[name="code"]').val()),
            h = $.trim($(this).find('input[name="phone"]').val()),
            i = $.trim($(this).find('input[name="password"]').val());
        return "" == n || n.length > 32 ? ($("#code").html("<p>Mã code không hợp lệ!</p>"), t = !1) : ($url = $(this).attr("base") + "site/user/check_code/" + h + "/" + n, $.ajax({
            url: $url,
            type: "POST",
            async: !1,
            success: function(n) {
                0 == (n = JSON.parse(n)) ? ($("#code").html("<p>Mã code không hợp lệ!</p>"), t = !1) : $("#code").html("")
            },
            error: function() {
                t = !1
            }
        })), i.length < 6 ? ($("#password").html("<p>Mật khẩu phải ít nhất 6 kí tự</p>"), t = !1) : $("#password").html(""), t
    })
});