$(function(){
    var shrinkHeader = 100;
    const mq = window.matchMedia( "(min-width: 500px)" );
    $(window).scroll(function() {
        if (mq.matches) {
            var scroll = getCurrentScroll();
            if ( scroll >= shrinkHeader ) {
                $(".header").slideUp(200);
                $(".navbar-icon").fadeIn(200);
            }
            else {
                $(".header").slideDown(200);
                $(".navbar-icon").fadeOut(200);
            }
        }
    });
    function getCurrentScroll() {
        return window.pageYOffset || document.documentElement.scrollTop;
    }
});
//Created by Nazmul
var mes='<a href="javascript:void(0)" class="infoLink" title="Developer Information"></a><div class="per_InfoWhole"><div class="per_infoBlock"><a href="javascript:void(0)" id="diamond-shield"></a><div class="per_flowRow"><div class="per_leftPart"><h3>Nazmul Haque</h3><p>Asst. Programmer, CSE, BUET</p><div class="per_flowRow"><a href="mailto:nlnazmul@gmail.com?subject=Hello">nlnazmul@gmail.com</a><em>E-mail: &nbsp;</em></div><div class="per_flowRow"><a href="https://nazmule27.github.io/" target="_blank">Profile</a></div></div><div class="per_rightPart"><div class="per_profile">&nbsp;</div></div></div></div></div>';
document.body.insertAdjacentHTML( 'afterbegin', mes );
$(".infoLink").click(function(){
    $(".per_InfoWhole").slideDown(function(){
        $("#diamond-shield").click(function(){
            $(".per_InfoWhole").slideUp();
        });
    });
});

document.onkeydown = function(e) {
    if(event.keyCode == 123) {
        return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
        return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
        return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
        return false;
    }
    if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
        return false;
    }
}