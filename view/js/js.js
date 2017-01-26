$(document).ready(function() {
    $(".aajax").on("click", function(e){                             //Generation Ajax
        e.preventDefault();
        var $a = $(this);
        var $adresse = $a.attr("href");
        var arr = $adresse.split('?')[1];

console.log("1");
        $.ajax({
            type : "GET",
            data: arr,
            success : function(data){
                console.log("3");
                $("#contenu").html(data);
            }
        });
    });
});


function subs(){
    $("#subscribe").removeClass("invisible");
}


function popup(){
    $(".popup_com").addClass("active");
}
function cacher(){
    $(".popup_com").removeClass("active");
}
