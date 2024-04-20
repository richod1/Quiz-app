function formValidation(){
    let username=document.form["registerform"]["username"]
    let Email=document.forms["registerform"]["email"]
    let Password=document.forms["registerform"]["password"]
    let Mobile=document.forms["registerform"]["mobilephone"]
    if(username.value==""){
        alert('Name is required');
        username.focus();
        return false;
    }
    if(Email.value==""){
        alert('Email is required');
        Email.focus();
        return false;
    }

    if(Password.value==""){
        alert("Password is required")
        Password.focus();
        return false;
    }

    if(Mobile.value==""){
        alert("Mobile Number is required");
        Mobile.focus();
        return false;
    }
    return true;
}