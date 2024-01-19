$('.book-collection__search-input').keypress(function (ev) {
    var keycode = (ev.keyCode ? ev.keyCode : ev.which);
    if (keycode == '13') {
        fnc.call(this, ev);
    }
})