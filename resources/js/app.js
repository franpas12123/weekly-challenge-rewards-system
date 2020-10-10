require("./bootstrap");

$(document).ready(function() {
    $("a").click(function() {
        $("a").removeClass("active");
        $(this).addClass("active");
    });
});
