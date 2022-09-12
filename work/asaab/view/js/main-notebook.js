//loading
window.addEventListener("load", function(){
	var load_screen = document.getElementById("load_screen");
	document.body.removeChild(load_screen);
});
//loading END

//creditalert
$(document).ready(function(){
    $("#hide-credit-alert").click(function(){
        $(".credit-alert").hide();
    });
    $("#show-credit-alert").click(function(){
        $(".credit-alert").show();
    });
});
//credit alert end

//message alert
$(document).ready(function(){
    $("#hide-message-alert").click(function(){
        $(".message-alert").hide();
    });
    $("#show-message-alert").click(function(){
        $(".message-alert").show();
    });
});
//message alert end

// Remove banner

window.onload = () => {
   let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
   bannerNode.parentNode.removeChild(bannerNode);
}

//Remove Banner end