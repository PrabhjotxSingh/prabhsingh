$("#gologin").click( function() {
    var url = "#login/keys/" + $("#gologininput").val() + ".html";
    window.location.replace(url);
});

//hidemode
$(document).ready(function(){
    $("#hidehidemode").click(function(){
        $(".hidemode").hide();
		document.title = "Waver";
		var link = document.querySelector("link[rel*='icon']") || document.createElement('link');
        link.type = 'image/x-icon';
        link.rel = 'shortcut icon';
        link.href = 'img/fav.ico';
        document.getElementsByTagName('head')[0].appendChild(link);
    });
    $("#showhidemode").click(function(){
        $(".hidemode").show();
		document.title = "Notes-Google Docs";
		var link = document.querySelector("link[rel*='icon']") || document.createElement('link');
        link.type = 'image/x-icon';
        link.rel = 'shortcut icon';
        link.href = 'img/hidemodeicon.ico';
        document.getElementsByTagName('head')[0].appendChild(link);
    });
});

$(document).ready(function(){
    $("#hide-welcome-alert").click(function(){
        $(".welcome-alert").hide();
    });
    $("#show-welcome-alert").click(function(){
        $(".welcome-alert").show();
    });
});


// Remove banner

window.onload = () => {
   let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
   bannerNode.parentNode.removeChild(bannerNode);
}

//Remove Banner end

//fullscreen games
function makeFullScreen() {
    document.getElementsByTagName("iframe")[0].className = "gameareafull";
    var elem = document.body;
}
//fullscreen game end