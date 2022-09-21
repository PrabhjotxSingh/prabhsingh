//loading
window.addEventListener("load", function(){
	var load_screen = document.getElementById("load_screen");
	document.body.removeChild(load_screen);
});
//loading END

//secret message
if (window.addEventListener) {
    var keys = [],
        teju = "84,69,74,85";
    window.addEventListener("keydown", function(e){
        keys.push(e.keyCode);
        if (keys.toString().indexOf(teju) >= 0) {
             alert('Hey TJ! Welcome to my website.');
						 alert('<3 forever yours!');
						 alert('Okay wait let us play a game before you leave.');
						 food = prompt('What is my favorite food?');
						 if(food == "pasta"){
							 alert("Nice! You got it!");
						 }
						 else{
							 alert("Bro, it is pasta! How do you not know this?");
						 }
						 alert("That's all TJ! Byeeeee!");
            keys = [];
        };
    }, true);
};
//secret message end
