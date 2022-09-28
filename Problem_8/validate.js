function validation(){
    let error = false;

    if(form.employeeName.value == ""){
        document.getElementById("nameErr").innerHTML = "*Name field required";
        error = true;
    }
    else if(!form.employeeName.value.match(/^[a-zA-Z ]*$/)){
        document.getElementById("nameErr").innerHTML = "*Only alphabets & whitespace are allowed";
        error = true;
    }
    else{
        document.getElementById("nameErr").innerHTML = "";
    }

    if(form.employeeJob.value == ""){
        document.getElementById("jobErr").innerHTML = "*Job title field required";
        error = true;
    }
    else{
        document.getElementById("jobErr").innerHTML = "";
    }

    if(form.employeeWorkPlace.value == ""){
        document.getElementById("workErr").innerHTML = "*Work Place field required";
        error = true;
    }
    else{
        document.getElementById("workErr").innerHTML = "";
    }

    if(form.employeeSalary.value == ""){
        document.getElementById("salaryErr").innerHTML = "*Salary filed required";
        error = true;
    }
    else if(form.employeeSalary.value <= 0){
        document.getElementById("salaryErr").innerHTML = "*Invalid salary";
        error = true;
    }
    else{
        document.getElementById("salaryErr").innerHTML = "";
    }

    if(form.employeeEmail.value == ""){
        document.getElementById("emailErr").innerHTML = "*Email field required";
        error = true;
    }
    else if(!form.employeeEmail.value.match(/^\w+([\.]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
        document.getElementById("emailErr").innerHTML = "*Invalid email address";
        error = true;
    }
    else{
        document.getElementById("emailErr").innerHTML = "";
    }

    if(form.employeePhone.value == ""){
        document.getElementById("phoneErr").innerHTML = "*Phone no field required";
        error = true;
    }
    else if(!form.employeePhone.value.match(/^(01)([0-9]{9})$/)){
        document.getElementById("phoneErr").innerHTML = "*Phone no must be 11 digits & start with 01";
        error = true;
    }
    else{
        document.getElementById("phoneErr").innerHTML = "";
    }

    if(form.employeeAddress.value == ""){
        document.getElementById("addressErr").innerHTML = "*Address field required";
        error = true;
    }
    else{
        document.getElementById("addressErr").innerHTML = "";
    }

    if(form.employeeBirth.value == ""){
        document.getElementById("birthErr").innerHTML = "*Date of birth field required";
        error = true;
    }
    else{
        document.getElementById("birthErr").innerHTML = "";
    }

    if(form.employeeGender.value == ""){
        document.getElementById("genderErr").innerHTML = "*Gender field required";
        error = true;
    }
    else{
        document.getElementById("genderErr").innerHTML = "";
    }

    if(form.employeeReligion.value == ""){
        document.getElementById("religionErr").innerHTML = "*Religion field required";
        error = true;
    }
    else{
        document.getElementById("religionErr").innerHTML = "";
    }

    if(form.employeeBlood.value == ""){
        document.getElementById("bloodErr").innerHTML = "*Blood group field required";
        error = true;
    }
    else{
        document.getElementById("bloodErr").innerHTML = "";
    }

    if(error)
        return false;
    
}