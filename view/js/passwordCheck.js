function passwordVisibility(){
    let x = document.getElementById("password")
    let y = document.getElementById("passwordValidate");
    let button = document.getElementById("visibility");
    if (x.type === "password" && y.type === "password") {
        x.type = "text";
        y.type = "text";
        button.value="visibility"
    }else{
        x.type = "password";
        y.type = "password";
        button.value="visibility_off"
    }
}

function checkPasswords(event){
    let password = document.getElementById("password")
    let passwordValidate = document.getElementById("passwordValidate")
    let alertMessage = document.getElementById("passwordAlert")
    if(password.value !== passwordValidate.value){
        event.preventDefault();
        alertMessage.innerHTML = "Passwords do not match";
        password.classList.add("border-parsRed");
        password.classList.toggle("border-parsOrange")
        passwordValidate.classList.add("border-parsRed");
        passwordValidate.classList.toggle("border-parsOrange")
       return false
    }else{
        return true
    }
}