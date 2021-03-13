// sort
$(document).ready(function () {
    $('.work__button').click(function () {
        const value = $(this).attr('data-filter')
        if (value == 'all') {
            $('.item-box').show('1000')
        }
        else {
            $('.item-box').not('.' + value).hide('1000')
            $('.item-box').filter('.' + value).show('1000')
        }
    })
    $('.work__button').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
    })
})

// $("sendMess").on("click", function () {
//     var name = $("#name").val().trim();
//     var email = $("#email").val().trim();
//     var massage = $("#massage").val().trim();
//     if (email == "") {
//         $("errMess").text("Print Email")
//         return false;
//     } else if (name == "") {
//         $("errMess").text("Print name")
//         return false;
//     }
//     else if (massage == "") {
//         $("errMess").text("Print massage")
//         return false;
//     }

//     $("errMess").text("")
// })
