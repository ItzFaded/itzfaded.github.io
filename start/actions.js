h1header.onmouseover = function() {
    var element = document.getElementById("h1header");
        element.innerHTML = "Hii~, this should change the header text";
    
    //h1header.getElementById("h1header").innerHTML = "";
};
h1header.onmouseout = function() {
    var element = document.getElementById("h1header");
        element.innerHTML = "Hii~";
    
    //h1header.getElementById("h1header").innerHTML = "";
};

hidehidden = function() {
    var element = document.getElementById("hidden")

        if (element.style.display === 'none') {element.style.display = 'block';}
        else {element.style.display = 'none';}
            }

//maycontainer.onclick = function () {
//    var element = document.getElementById("maycontainer")
//        if (element.style.border === '5px solid #464646') {element.style.border = '5px solid #ff0c34';}
//        else {element.style.border = '5px solid #464646'}
//}
//choice2.onclick = function() {
//    var element = document.getElementById("hidden");
//        element.id = "choice";
//        element.style.display = 'none';/
//}
//

hide = function () {
var element = document.getElementById('')
    element.style.display = 'none';
}
