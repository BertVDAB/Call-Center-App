var option = {
    animation: true,
    delay: 3000
};

function Toasts(x) {
    var toastHTMLElement = document.getElementById(x);

    var toastElement = new bootstrap.Toast(toastHTMLElement, option);
    var toastDiv = document.getElementById('toastdiv');

    toastDiv.classList.remove('d-none');
    toastElement.show();
}