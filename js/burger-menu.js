jQuery(document).ready(function($) {
    $("#toggle-nav").click(function(e) {
        $(".nav-cont nav").slideToggle({
            start: function() {
                $(this).css("display", "flex");
            }
        });

        e.preventDefault();
    });
});
