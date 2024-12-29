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

// New Code
document.getElementById("Email").addEventListener("input", validateEmail);
document.getElementById("Mobile").addEventListener("input", validateMobile);
document.getElementById("Pin").addEventListener("input", validatePin);

document.getElementById("myform").addEventListener("submit", function(event) {
  if (!validateForm()) {
    event.preventDefault();
  }
});

function validateEmail() {
  const email = document.getElementById("Email").value;
  const emailError = document.getElementById("email");
  if (!/^[a-z]+[0-9]+\@[a-z]{4,}\.[a-z]{3,4}$/.test(email)) {
    emailError.textContent = "* Invalid Email";
    return false;
  } else {
    emailError.textContent = "";
    return true;
  }
}

function validateMobile() {
  const mobile = document.getElementById("Mobile").value;
  const mobileError = document.getElementById("mobile");
  if (!/^[0-9]{10}$/.test(mobile)) {
    mobileError.textContent = "* Invalid Mobile";
    return false;
  } else {
    mobileError.textContent = "";
    return true;
  }
}

function validatePin() {
    const pin = document.getElementById("Pin").value;
    const pinError = document.getElementById("pin");
    if (!/^\d{6}$/.test(pin)) {
      pinError.textContent = "* Invalid Pin";
      return false;
    } else {
      pinError.textContent = "";
      return true;
    }
}

function Validate1() {
  let isValid = true;
  if (!validateEmail()) isValid = false;
  if (!validateMobile()) isValid = false;
  if (!validatePin()) isValid = false;
  return isValid;
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