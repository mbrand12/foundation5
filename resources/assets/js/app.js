window.$ = window.jQuery = require('jquery')
require('bootstrap-sass');

$( document ).ready(function() {
    console.log($.fn.tooltip.Constructor.VERSION);
});

$('div.alert').not('.alert-important').delay(3000).slideUp(300);
