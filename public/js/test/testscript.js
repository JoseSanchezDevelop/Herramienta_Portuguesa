function ocultar1() {
    document.getElementById("ShowAction").style.display = "block";
    document.getElementById("CancelarTeste").style.display = "inline";

    document.getElementById("msg1").style.display = "none";
    document.getElementById("msg2").style.display = "none";
    document.getElementById("msg3").style.display = "none";
    document.getElementById("StartTest").style.display = "none";
    document.getElementById("cuest").style.display = "none";
}

function CerrarTest() {
    var rta = confirm("¿Estás Segur@ que quieres cerrar la prueba?");
    if (rta == true) {
        return window.location.reload(alert("¡Haz Cancelado la Prueba 😔!"));
    } else {
        window.preventDefault();
    }
}

function ocultar2() {
    document.getElementById("msg4").style.display = "none";
    document.getElementById("msg5").style.display = "none";
    document.getElementById("msg6").style.display = "none";
}

function cuestionario() {
    document.getElementById("cuest").style.display = "block";

    document.getElementById("msg4").style.display = "none";
    document.getElementById("msg5").style.display = "none";
    document.getElementById("msg6").style.display = "none";
}
