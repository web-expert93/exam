function validation(){
    let error = false;

    if(form.studentName.value == ""){
        document.getElementById("nameErr").innerHTML = "*Name field required";
        error = true;
    }
    else if(!form.studentName.value.match(/^[a-zA-Z ]*$/)){
        document.getElementById("nameErr").innerHTML = "*Only alphabets & whitespace are allowed";
        error = true;
    }
    else{
        document.getElementById("nameErr").innerHTML = "";
    }

    if(form.studentDepartment.value == ""){
        document.getElementById("departmentErr").innerHTML = "*Department field required";
        error = true;
    }
    else{
        document.getElementById("departmentErr").innerHTML = "";
    }

    if(form.studentRoll.value == ""){
        document.getElementById("rollErr").innerHTML = "*Roll no field required";
        error = true;
    }
    else if((form.studentRoll.value <= 0)){
        document.getElementById("rollErr").innerHTML = "*Roll must be positive";
        error = true;
    }
    else if(!form.studentRoll.value.match(/^[0-9]{8}$/)){
        document.getElementById("rollErr").innerHTML = "*Roll must be 8 digits";
        error = true;
    }
    else{
        document.getElementById("rollErr").innerHTML = "";
    }

    if(form.studentReg.value == ""){
        document.getElementById("regErr").innerHTML = "*Registration no filed required";
        error = true;
    }
    else if(form.studentReg.value <= 0){
        document.getElementById("regErr").innerHTML = "*Registration no must be positive";
        error = true;
    }
    else if(!form.studentReg.value.match(/^[0-9]{4}$/)){
        document.getElementById("regErr").innerHTML = "*Registration no must be 4 digits";
        error = true;
    }
    else{
        document.getElementById("regErr").innerHTML = "";
    }

    if(form.studentEmail.value == ""){
        document.getElementById("emailErr").innerHTML = "*Email field required";
        error = true;
    }
    else if(!form.studentEmail.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
        document.getElementById("emailErr").innerHTML = "*Invalid email address";
        error = true;
    }
    else{
        document.getElementById("emailErr").innerHTML = "";
    }

    if(form.studentPhone.value == ""){
        document.getElementById("phoneErr").innerHTML = "*Phone no field required";
        error = true;
    }
    else if(!form.studentPhone.value.match(/^(01)([0-9]{9})$/)){
        document.getElementById("phoneErr").innerHTML = "*Phone no must be 11 digits & start with 01";
        error = true;
    }
    else{
        document.getElementById("phoneErr").innerHTML = "";
    }

    if(form.studentAddress.value == ""){
        document.getElementById("addressErr").innerHTML = "*Address field required";
        error = true;
    }
    else{
        document.getElementById("addressErr").innerHTML = "";
    }

    if(form.studentBirth.value == ""){
        document.getElementById("birthErr").innerHTML = "*Date of birth field required";
        error = true;
    }
    else{
        document.getElementById("birthErr").innerHTML = "";
    }

    if(form.studentGender.value == ""){
        document.getElementById("genderErr").innerHTML = "*Gender field required";
        error = true;
    }
    else{
        document.getElementById("genderErr").innerHTML = "";
    }

    if(form.studentReligion.value == ""){
        document.getElementById("religionErr").innerHTML = "*Religion field required";
        error = true;
    }
    else{
        document.getElementById("religionErr").innerHTML = "";
    }

    if(form.studentBlood.value == ""){
        document.getElementById("bloodErr").innerHTML = "*Blood group field required";
        error = true;
    }
    else{
        document.getElementById("bloodErr").innerHTML = "";
    }

    if(form.studentPhoto.value === ""){
        document.getElementById("imageErr").innerHTML = "*Image is required";
        error = true;
    }
    else if(!form.studentPhoto.value.match(/(\.jpg|\.jpeg|\.png)$/)){
        document.getElementById("imageErr").innerHTML = "Image file must have .jpg, .jpeg, .png extension";
        error = true;
    }
    else{
        document.getElementById("imageErr").innerHTML = "";
    }

    if(error)
        return false;
    
}