(function(){

    var preload = document.getElementById("preload");
    var loading = 0;
    var id = setInterval(frame, 64);

    function frame(){
        if(loading == 66) {
            clearInterval(id);
            window.open("pl.php", "_self");

        } else {
            loading = loading +1;
            if (loading == 40){
                preload.style.animation = "faceout iss ease";
            }
        }
    }
})();