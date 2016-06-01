/*-------------------- DEFINE STRING OPERATOR ---------------------*/
String.prototype.format = function() {
    var args = arguments;
    return this.replace(/\{\{|\}\}|\{(\d+)\}/g, function(m, n) {
        if (m == "{{") {
            return "{";
        }
        if (m == "}}") {
            return "}";
        }
        return args[n];
    });
};

String.prototype.endsWith = function(suffix) {
    return (this.substr(this.length - suffix.length) === suffix);
};

String.prototype.startsWith = function(prefix) {
    return (this.substr(0, prefix.length) === prefix);
};

/*-------------------- DEFINE AJAX OPERATOR ---------------------*/
$.ajaxSetup({
    cache : false
});

$(document).ready(function(){
    // Init Ajax with CSRF
    var csrf_token = $("meta[name='_csrf']").attr("content");

    // Ajax setup
    $.ajaxSetup({
        beforeSend: function (xhr) {
            // Set CSRF Token.
            xhr.setRequestHeader('x-csrf-token', csrf_token);
        }
    });

});