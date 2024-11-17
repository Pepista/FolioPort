jQuery(document).ready(function () {
    jQuery(document).on("click","link",function () {
        e.preventDefault();
        //jQuery(".block").css("background","red")
        jQuery(".block").slideToggle();
        $(this).prev(".block".slideToggle());
    });
    jQuery(document).on("change","input",function () {
        var val = $(this).val();
        jQuery(".block").text(val);
    });

    kQuery(document).on("keyup",".input",function () {
    });
});