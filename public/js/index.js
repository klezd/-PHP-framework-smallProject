$(document).ready(function () {
    $("a").on("click", function (e) {
        e.preventDefault();

        var $link = $(e.currentTarget); //the link 've just been clicked
        var $url = $link.attr('href').toString();


        $("a").html("Updated Hello World!");
        encodeURI($url.concat("?action=mouseButtonPressed"))
    });
});