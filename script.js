function tasi() {
var top = document.getElementsByClassName("yukari");
scroll(0,0);
}

// function bilgi(d) {
//     var deneme = document.getElementById("resim");
//     var balon = document.createElement("div");
//     balon.setAttribute("class", "fw-bold");
//     balon.setAttribute("id", "balon1")
//     balon.style.position = "absolute";
//     balon.style.backgroundColor = 'rgba(127, 255, 0, 0.8)';
//     balon.style.padding = "20px";
//     balon.style.left = "25%";
//     balon.style.borderRadius = "20px";    
//     balon.innerHTML = "Bu bir deneme yazısıdır.";
//     deneme.appendChild(balon);
// }
function bclose(e) {
    var balonn = document.getElementById("balon1");
    balonn.remove();
}
function phonegoster() {
    var phone = document.getElementById("phone-span");
    phone.classList.toggle("goster");
}
function goster() {
    var whatsapp = document.getElementById("whatsapp-span");
    whatsapp.classList.toggle("goster");
}
function formgoster() {
    var formizle = document.getElementById("form-span");
    formizle.classList.toggle("goster");
}
