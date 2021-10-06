function submitForm(form, href, redirect) {
    let formData = new FormData(document.getElementById(form));
    let xhr = new XMLHttpRequest();
    xhr.onload = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(redirect === "" || redirect === null) {

            } else {
                window.location.replace(redirect);
            }
        }
    };
    xhr.open("POST", href, true);
    xhr.send(formData);
}

function searchForm(form, href, callback) {
    var formData = new FormData(document.getElementById(form));
    var xhr = new XMLHttpRequest(); // Usual mix-and-matching for x-browser omitted for brevity
    xhr.onload = function() {
        // readyState 4 means the request is done, If the HTTP request has completed
        // status 200 is a successful return, If the HTTP response code is 200 (e.g. successful)
        if (this.readyState == 4 && this.status == 200) {
            // document.getElementById('spinner').style.display = 'none';
            callback(this); // Retrieve the response text
        }
        // An error occurred during the request.
    };
    xhr.open("POST", href, true);
    xhr.send(formData);
}

function sendToContent(result){
    console.log(result);
    // 'This is the returned text.'
    return document.getElementById("content").innerHTML = result.response;
}