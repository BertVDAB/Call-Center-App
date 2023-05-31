function flash(cssClass, flashNum, delay, total) {
    if (typeof total === 'undefined') total = 1;
    if (typeof delay === 'undefined') delay = 500;
    document.body.classList.add(cssClass);
    setTimeout(function() {
        document.body.classList.remove(cssClass);
        if (total < flashNum) {
            setTimeout(function() {
                flash(cssClass, flashNum, delay, ++total);
            }, delay);
        }
    }, delay);
}