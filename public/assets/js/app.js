$(function () {
    $(".slider-wrapper").slick({
        infinite: true,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false
    });
    $('#orderFormSubmit').on('click', function () {
        $.ajax({
            beforeSend: function () {
                $("#orderForm .err").each(function (idx, val) {
                    $(val).html("");
                });
                $("#orderForm #orderFormSuccess").each(function (idx, val) {
                    $(val).html("");
                });
                $('#loader').show();
            },
            complete: function () {
                $('#loader').hide();
            },

            url: "/order-form",
            type: "post",
            data: $("#orderForm").serializeArray(),
            success: function (data) {
                if ($(data.errors).length > 0) {
                    $(data.errors).each(function (id, error) {
                        $("#" + error).html("missing");
                    });
                    return false;
                } else {
                    $("#orderForm").trigger("reset");
                    $("#orderFormSuccess").html("Successful success");
                }
            },
            error: function (msg) {
                console.log(msg);
            }

        });
    });
});