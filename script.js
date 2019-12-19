// Loader au chargement

// $('#form, #svg-christmas').hide();

// $(window).on('load', function () {
//     $(".loader").fadeOut("1000");
//     $('#form, #svg-christmas').show();
// })

// Création flocons

let width = window.innerWidth;
let height = window.innerHeight;

window.onload = function () {
    setInterval(() => {
        let flocon = document.querySelectorAll('.stars');
        let conteneur = document.getElementById('svg-christmas');
        let monImg = document.createElement('img');

        monImg.src = "images/snow_2.svg";
        conteneur.appendChild(monImg);
        monImg.classList.add('stars');

        starplace(monImg);

        for (let i = 0; i < flocon.length; i++) {
            let element = flocon[i];
            top_snow = element.offsetTop;

            if (top_snow > 750) {
                element.remove();
            }

        }




    }, 1000);
}

// Fonction positionnement aléatoire des flocons

function starplace(element) {
    let calculW = Math.floor(Math.random() * Math.floor(width - 100));
    element.style.left = calculW + 'px';
    // let calculH = Math.floor(Math.random() * Math.floor(height - 100));
    // element.style.top = calculH + 'px';
}


// Apparition formulaire

let partage = document.querySelector("#share");
let formulaire = document.querySelector("#form");

partage.addEventListener('click', function (e) {
    e.preventDefault();
    formulaire.classList.add("opacity");
    formulaire.classList.remove("close");
})

// Disparition formulaire

let close = document.querySelector("#fermer");

fermer.addEventListener('click', function(e) {
    e.preventDefault();
    formulaire.classList.add("close");
    setTimeout(() => {
        formulaire.classList.remove("opacity");
    }, 2000);
})


// AJAX Formulaire

$(function () {

    $('#form').submit(function (e) {

        e.preventDefault();
        $('.error').empty();
        let postdata = $('#form').serialize();

        $.ajax({
            type: 'POST',
            url: 'contact.php',
            data: postdata,
            dataType: 'json',
            success: function (result) {
                if (result.isSuccess) {
                    $("#form").append("<p class='thank-you'>La carte de voeux a bien été transmise.</p>");
                    $("#form")[0].reset();
                    $("#mailfrom").hide();
                    $("#mailto").hide();
                    $("#mailmessage").hide();
                    $("#submit").hide();
                }
                else {
                    $("#myname + .error").html(result.mynameError);
                    $("#myemail + .error").html(result.myemailError);
                    $("#youremail + .error").html(result.youremailError);
                    $("#message + .error").html(result.messageError);
                }
            }
        });

    });

})


// Boules de neige père noel

let snow = document.querySelectorAll('.st20');


for (let i = 0; i < snow.length; i++) {

    var colors = ['#F79432', '#9F1E29', '#0D6244', '#9EBBDB', '#ffffff', "#418364", "#f55656"];
    var random_color = colors[Math.floor(Math.random() * colors.length)];

    snow[i].classList.add("snow");
    snow[i].setAttribute("fill", random_color);
    snow[i].classList.remove("st20");

}

setInterval(() => {
    let snow = document.querySelectorAll('.snow');

    // Boules de neige père noel
    for (let i = 0; i < snow.length; i++) {
        const element = snow[i];
        randColor(element);
    }

}, 2000);

function randColor(lui) {
    var colors = ['#F79432', '#9F1E29', '#0D6244', '#9EBBDB', '#ffffff', "#418364", "#f55656"];
    var random_color = colors[Math.floor(Math.random() * colors.length)];

    lui.removeAttribute("fill");
    lui.setAttribute("fill", random_color);
}