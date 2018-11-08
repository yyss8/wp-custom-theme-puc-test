jQuery(document).ready( function($){

    $("#mobile-menu-button").click(function(){
        $("#mobile-dropdown-menu").slideToggle('fast');
    });

    $("#mobile-dropdown-up").click(function(){
        $("#mobile-dropdown-menu").slideToggle('fast');
    });
});