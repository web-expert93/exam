function userValidate(){
    if(document.getElementById("username").value == ""){
        document.getElementById("userErr").innerHTML = " *Field is required";
        return false;
    }
    else if(!document.getElementById("username").value.match(/^[a-zA-Z_]*$/)){
        document.getElementById("userErr").innerHTML = " *Only alphabets and underscore are allowed";
        return false;
    }
    else{
        document.getElementById("userErr").innerHTML = "";
        return true;
    }
}

function passValidate(){
    if(document.getElementById("password").value == ""){
        document.getElementById("passErr").innerHTML = " *Field is required";
        return false;
    }
    else if(!document.getElementById("password").value.match(/^\w{8,}$/)){
        document.getElementById("passErr").innerHTML = " *Password must be at least 8 characters";
        return false;
    }
    else{
        document.getElementById("passErr").innerHTML = "";
        return true;
    }
}

function cPassValidate(){
    if(document.getElementById("cPassword").value != document.getElementById("password").value){
        document.getElementById("cPassErr").innerHTML = " *Password not matched";
        return false;
    }
    else{
        document.getElementById("cPassErr").innerHTML = "";
        return true;
    }
}

function emailValidate(){
    if(document.getElementById("email").value == ""){
        document.getElementById("emailErr").innerHTML = " *Field is required";
        return false;
    }
    else if(!document.getElementById("email").value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
        document.getElementById("emailErr").innerHTML = " *Invalid Email";
        return false;
    }
    else{
        document.getElementById("emailErr").innerHTML = "";
        return true;
    }
}

function nameValidate(){
    if(document.getElementById("name").value == ""){
        document.getElementById("nameErr").innerHTML = " *Field is required";
        return false;
    }
    else if(!document.getElementById("name").value.match(/^[a-zA-Z ]*$/)){
        document.getElementById("nameErr").innerHTML = " *Only alphabets & whitespace are allowed";
        return false;
    }
    else{
        document.getElementById("nameErr").innerHTML = "";
        return true;
    }
}

function contactValidate(){
    if(document.getElementById("contact").value == ""){
        document.getElementById("contactErr").innerHTML = " *Field is required";
        return false;
    }
    else if(!document.getElementById("contact").value.match(/^(01)([0-9]{9})$/)){
        document.getElementById("contactErr").innerHTML = " *Phone no must be 11 digits & start with 01";
        return false;
    }
    else{
        document.getElementById("contactErr").innerHTML = "";
        return true;
    }
}

function formValidate(){
    if(!userValidate() || !passValidate() || !cPassValidate() || !emailValidate() || !nameValidate() || !contactValidate()){
        return false;
    }
    else{
        return true;
    }
}