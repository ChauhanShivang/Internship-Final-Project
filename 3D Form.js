const signUpBtn = document.querySelector(".signup-btn");
const signInBtn = document.querySelector(".signin-btn");
const formsWrapper = document.querySelector(".forms-wrapper");

signUpBtn.addEventListener("click", (e) => {
    e.preventDefault();
    formsWrapper.classList.add("change");
});

signInBtn.addEventListener("click", (e) => {
    e.preventDefault();
    formsWrapper.classList.remove("change");
});

// Form Validation
function Validate1()
{
    // var Name = document.getElementById("Name").value.trim();
    var Email = document.getElementById("Email").value.trim();
    var Mobile = document.getElementById("Mobile").value.trim();
    var Pin = document.getElementById("Pin").value.trim();
    var Password = document.getElementById("Password").value.trim();
    // var Conf_Password = document.getElementById("Conf_Password").value.trim();
    
    // var Vname = /^[A-Z a-z]+$/;
    var Vemail = /^[a-z]+[0-9]+\@[a-z]{4,}\.[a-z]{3,4}$/;
    var Vmobile = /^[0-9]{10}$/;
    var Vpin = /^\d{6}$/;

    // if(!Vname.test(Name)){
    //     document.getElementById("name").innerHTML = "*Invalid Name";
    //     return false;
    // }
    if(!Vemail.test(Email)){
        document.getElementById("email").innerHTML = "*Invalid Email";
        return false;
    }else{
        document.getElementById("email").innerHTML = "";
    }
    if(!Vmobile.test(Mobile)){
        document.getElementById("mobile").innerHTML = "*Invalid Mobile No.";
        return false;
    }else{
        document.getElementById("mobile").innerHTML = "";
    }
    if(!Vpin.test(Pin)){
        document.getElementById("pin").innerHTML = "*Invalid Pin Code";
        return false;
    }else{
        document.getElementById("pin").innerHTML = "";
    }
    if(Password != Conf_Password){
        document.getElementById("conf_pass").innerHTML = "*Both Password Should be Same";
        return false;
    }else{
        document.getElementById("conf_pass").innerHTML = "";
    }
    return true;
}

function Validate2()
{
    var Name = document.getElementById("name").value.trim();
    var Email = document.getElementById("email").value.trim();
    
    var Vname = /^[a-z A-Z]+$/;
    var Vemail = /^[a-z]+[0-9]+\@[a-z]{4,}\.[a-z]{3,4}$/;

    if(!Vname.test(Name)){
        document.getElementById("ename2").innerHTML = "*Invalid Name";
        return false;
    }else{
        document.getElementById("ename2").innerHTML = "";
    }
    if(!Vemail.test(Email)){
        document.getElementById("eemail2").innerHTML = "*Invalid Email";
        return false;
    }else{
        document.getElementById("eemail2").innerHTML = "";
    }
    return true;
}