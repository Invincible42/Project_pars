function submitForm(form, href, redirect) {
    let formData = new FormData(document.getElementById(form));
    let xhr = new XMLHttpRequest();
    xhr.onload = function() {
        if (this.readyState == 4 && this.status == 200) {
            window.location.replace(redirect);
        }
    };
    xhr.open("POST", href, true);
    xhr.send(formData);
}