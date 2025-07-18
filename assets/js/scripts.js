//STCKY
// $(document).ready(function(){
//     var zero = $('.logo').height();
//     window.onscroll = function (){
//         if(window.scrollY > 350){
//             $('.zero').css( 'height',  zero);
//             $('.topo').addClass('sticky-top');
//             $('.logo').css( 'display', 'none' );
//             $('.main-menu').addClass('justify-content-around').addClass('py-1').removeClass('justify-content-md-end');
//         } else {
//             $('.zero').css( 'height', '0' );
//             $('.topo').removeClass('sticky-top');
//             $('.logo').css( 'display', 'block' );
//             $('.main-menu').addClass('justify-content-md-end').removeClass('py-1').removeClass('justify-content-around');
//         }
//     }
// });

//MENU
$(document).ready(function(){
    $('.botao-responsivo').click(function(){
        if ($(".main-menu").hasClass("d-none")) {
            $(".main-menu").hide().removeClass("d-none").slideDown(300);
        } else {
            $(".main-menu").slideUp(300, function(){
                $(".main-menu").addClass("d-none");
            });
        }
    });
});
//SUB-MENU
// $(document).ready(function(){
//     $(".main-menu>.abre>a").bind("click", function(){
//         if($(this).next(".sm").is(":hidden")){
//             $(".sm").slideUp();
//             $(this).next(".sm").slideDown();
//         } else {
//             $(this).next(".sm").slideUp();
//         }
//     });
// });

//BANNER
$(document).ready(function() {
    
    $('.banner').cycle({
		timeout:7000,
		speed:1000, 
        slides: '> div.banner-foto'
	});

    $(".owl-slogan").owlCarousel({
        autoplay: true,
        autoplayTimeout: 7000,
        autoplayHoverPause: true,
        items: 1,
        singleItem : true,
        loop: true,
        nav: false,
        dots: false
    });      

    $(".owl-cliente").owlCarousel({
        autoplay: true,
        autoplayTimeout: 7000,
        autoplayHoverPause: true,
        responsiveClass:true,
        // items: 3,
        loop: true,
        nav: false,
        dots: false,
        // margin: 80,
        // navText: ['<i class="fas fa-fw fa-lg fa-angle-left"></i>', '<i class="fas fa-fw fa-lg fa-angle-right"></i>'],
        responsive:{
            0:{
                items:1,
                // nav:true
            },
            600:{
                items:2,
                // nav:true
            },
            1000:{
                items:4,
                // nav:true
            }
        }
    });
});


//MOVIMENTAÇÃO
function movimenta(rolar){
	$('html, body').animate({ scrollTop: $(rolar).offset().top }, 1000);
}

//MODAL
var modal = document.getElementById('modal');
function janela_modal(janela) { modal.style.display = "flex"; $(".janela_modal").hide(); $(janela).show(); }; 

$(".close").click(function() { modal.style.display = "none"; });

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// FORMULÁRIO DE CONTATO
// Mascara de TELEFONE
$(document).ready(function() {
    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };
    $('.celular-mask').mask(SPMaskBehavior, spOptions);
    
// Mascara de CPF e CNPJ
var CpfCnpjMaskBehavior = function (val) {
    return val.replace(/\D/g, '').length <= 11 ? '000.000.000-009' : '00.000.000/0000-00';
},
cpfCnpjpOptions = {
    onKeyPress: function(val, e, field, options) {
    field.mask(CpfCnpjMaskBehavior.apply({}, arguments), options);
    }
};
$('.cpfcnpj').mask(CpfCnpjMaskBehavior, cpfCnpjpOptions);

    $('#formcontato').submit(function(){
        var dados = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "enviar-contato.php",
            data: dados,
            dataType: 'json',
            beforeSend: function(){
                $("#resultado").removeClass('alert-white alert-danger alert-success alert-warning').addClass('alert alert-white');
                $("#resultado").html('Aguarde, enviando a mensagem');
                $("#resultado").fadeIn(250);
            },
            success: function(resposta){
                $("#resultado").removeClass("alert-white alert-danger alert-success alert-warning").addClass(resposta.tipo);
                $("#resultado").html(resposta.mensagem);
                console.log(resposta);
            },
            error: function(resposta){
                $("#resultado").removeClass("alert-white alert-danger alert-success alert-warning").addClass('alert-danger');
                $("#resultado").html('Um erro desconhecido aconteceu e sua mensagem não pode ser enviada');
                console.log(resposta);
            }
        });
        return false;
    });

});

function reloadcaptcha(){
    $('#imgcaptcha').attr('src','captcha.php?l=130&a=35&tf=20&ql=5&new='+(new Date()).getTime());
}
function reloadcaptcha_contato(){
    $('#imgcaptcha-contato').attr('src','captcha-contato.php?l=130&a=35&tf=20&ql=5&new='+(new Date()).getTime());
}

//Função para abrir pop up
function popup(url){
    varWindow = window.open (
        url,
        'Compartilhar',
        'width=500, height=650, top=100, left=200, scrollbars=no'
    );
}

//Constrói a URL depois que o DOM estiver pronto        
document.addEventListener("DOMContentLoaded", function() {
    var url = encodeURIComponent(window.location.href);
    var titulo = encodeURIComponent(document.title).replace(/'|"|%25/g, "");
    //var via = encodeURIComponent("usuario-twitter"); //nome de usuário do twitter do seu site
    
    document.getElementById("share-facebook").href = "javascript:popup('https://www.facebook.com/sharer/sharer.php?u=" + url+"')";//altera a URL do botão facebook
    document.getElementById("share-twitter").href = "javascript:popup('https://twitter.com/intent/tweet?url="+url+"&text="+titulo+"')";//altera a URL do botão
    //document.getElementById("share-twitter").href = "javascript:popup(https://twitter.com/intent/tweet?url="+url+"&text="+titulo+"&via="+via+"')"; //se for usar o atributo via, utilize a seguinte url
    
    //tenta obter o conteúdo da meta tag description
    var summary = document.querySelector("meta[name='description']");
    summary = (!!summary)? summary.getAttribute("content") : null;
    
    //se a meta tag description estiver ausente...
    if(!summary){
        //...tenta obter o conteúdo da meta tag og:description
        summary = document.querySelector("meta[property='og:description']");
        summary = (!!summary)? summary.getAttribute("content") : null;
    }
    //altera o link do botão
    linkedinLink = (!!summary)? "https://www.linkedin.com/shareArticle?mini=true&url="+url+"&title="+titulo + "&summary=" + encodeURIComponent(summary) : "https://www.linkedin.com/shareArticle?mini=true&url="+url+"&title="+titulo;
    document.getElementById("share-linkedin").href = "javascript:popup('"+linkedinLink+"')";
}, false);

$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});