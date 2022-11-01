let nameError = document.getElementById('name-error')
let emailError = document.getElementById('email-error')
let phoneError = document.getElementById('phone-error')
let enquiryError = document.getElementById('enquiry-error')
let submitError = document.getElementById('submit-error')

//Name Validation
function validateName(){
  let name = document.getElementById('contact-name').value;

  if(!name || name.length <=2){
    nameError.innerHTML = 'Name is required';
    return false;
  }
  nameError.innerHTML = '';
  return true;
}

//Email Validation
function validateEmail(){
    let email = document.getElementById('contact-email').value;
  
    if(!email || email.length <=0){
      emailError.innerHTML = 'Email is required!';
      return false;
    }
    if(!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
        emailError.innerHTML = 'Invalid Email. Please enter correct email format!';
        return false;
    }
    emailError.innerHTML = '';
    return true;
  }

  //Phone Number Validation
function validatePhone(){
    let phone = document.getElementById('contact-phone').value;
  
    if(!phone || phone.length <=0){
      phoneError.innerHTML = 'Phone number is required!';
      return false;
    }
    if(phone.length < 10){
        phoneError.innerHTML = 'Phone number should be 10 digits!';
        return false;
    }
    if(phone.length > 10){
        phoneError.innerHTML = 'Phone number exceeded 10 digits!';
        return false;
    }
    phoneError.innerHTML = '';
    return true;
  }

//   Enquiry Validation 
function validateEnquiry(){
    let enquiry = document.getElementById('contact-enquiry').value;
    let required = 30;
    let left = required - enquiry.length;
  
    if(enquiry.length <=0){
      enquiryError.innerHTML = 'Please enter your enquiry!';
      return false;
    }
    if(left > 0){
        enquiryError.innerHTML = 'Atleast ' + left +' more characters required!';
        return false;
    }
    enquiryError.innerHTML = '';
    return true;
  }

  // Form submit validation
  function validateForm(){
    if(!validateName() || !validateEmail() || !validatePhone() || !validateEnquiry()){
        submitError.style.display = 'block';
        submitError.innerHTML = 'Please correct the error before submitting!';
        setTimeout(function(){submitError.style.display = 'none';}, 3000);
        return false;
    }
  }