    $("a.nav-link").on("click", function() {
        var target = $(this).attr('attr-menu');
        $("html, body").animate({
            scrollTop: $("#"+target).offset().top - 200
        }, 300);
    });