$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
$("#menu-2").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
$(".sub-btn").click(function() {
    $(this).next(".sub-menu").slideToggle();
    $(this).find(".dropdown").toggleClass('rotate');

});