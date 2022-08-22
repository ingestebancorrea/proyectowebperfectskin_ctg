var btnAbrirPopup = document.getElementById('btn-abrir-popup'),//Accendiendo a los botones o elementos
    overlay = document.getElementById('overlay'),
    popup = document.getElementById('popup'),
    btnCerrarPopup = document.getElementById('btn-cerrar-popup'),
    btnabrirpopup_1 = document.getElementById('btn-abrir-popup_1'),
    btnabrirpopup_2 = document.getElementById('btn-abrir-popup_2');

//Cuando presione el botón abrir agregar eventó, agregar clase
btnAbrirPopup.addEventListener('click', function(){
    overlay.classList.add('active');
    popup.classList.add('active');
});

btnabrirpopup_1.addEventListener('click', function(){
    overlay.classList.add('active');
    popup.classList.add('active');
});

btnabrirpopup_2.addEventListener('click', function(){
    overlay.classList.add('active');
    popup.classList.add('active');
});

//Quitar clase
btnCerrarPopup.addEventListener('click', function(){
    overlay.classList.remove('active');
    popup.classList.remove('active');
});


    

