var togl_menu = document.getElementById('togl_menu');
var asideBar = document.getElementById('asideBar');
var navLinks = document.querySelectorAll('.nav-link span.mbt');

togl_menu.addEventListener('click', function () {
    asideBar.classList.toggle('collapsed');
    navLinks.forEach(function (link) {
        link.style.display = (asideBar.classList.contains('collapsed')) ? 'none' : 'inline';
    });
});
document.querySelectorAll('.select2').forEach(function(selectElement) {
    $(selectElement).select2({
        theme: "bootstrap-5",
        width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
        placeholder: $( this ).data( 'placeholder' ),
        closeOnSelect: false,
        allowClear: true,
    });
});

$('.tiny').each(function(index, element) {
    tinymce.init({
        selector: 'textarea.' + element.className.split(' ').join('.'),
    });
});