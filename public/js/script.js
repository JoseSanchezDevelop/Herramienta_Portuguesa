


//PRELOAD SCREEN

$("body").css({ "overflow-y": "hidden" });

var cargarImg = $("img");
var cargarScript = $("script");
var cargarCSS = $("lnik");
var cargarVideos = $("video");
var cargarAudios = $("audio");
var totalObjetos = [];
var numItem = 0;
var valorPorcentaje = 0;
var incremento = 0;
var numCarga = 0;

totalObjetos.push(cargarImg, cargarScript, cargarCSS, cargarVideos, cargarAudios);

totalObjetos.forEach(funcionForEach);

function funcionForEach(item, index) {
    
    for(var n = 0; n < item.length; n++){

        numItem++;  //30 en total

        valorPorcentaje = 100 / numItem;
        

    }

    for (var n = 0; n < item.length; n++){

        preload(n, item);
        

    }

}

function preload(n, item) {

    setTimeout(function () {
    
        $(item[n]).ready(function () {

            numCarga++;

            incremento = Math.floor(numCarga * valorPorcentaje);

            $("#porcentajeCarga").html(incremento + "%");

            $("#rellenoCarga").css({ "width": incremento + "%" });

            if (incremento >= 100) {

                $("#preload").delay(350).fadeOut("slow");
                $("body").delay(350).css({ "overflow-y": "scroll" });

            }

        })



    }, n * 100)

}

/* SCROLL UP */

$.scrollUp({
    scrollText: "",
    scrollSpeed: 2000,
    easingType: "easeOutQuint"
})

