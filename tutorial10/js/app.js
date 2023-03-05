
jQuery('#signupform').validate({    
    rules:{
        'name':{
            'required':true,
            'minlength':5,
        },
        'age':{
            'required':true,
        },
        'birthdate':{
            'required':true,
            'date':Date,
        },
        'state':{
            'required':true,
        },
        'city':{
            'required':true,
        },
        'Country':{
            'required':true,
        },
        'profile':{
            'required':true,
            
        },
        'email':{
            'required':true,
            'email':true
        },
        'lemail':{
            'required':true,
            'email':true
        },
        'lpassword':{
            'required':true,
            'minlength':8,
        },
        'password':{
            'required':true,
            'minlength':8,
        },
        'cpassword':{
            'required':true,
            'minlength':8,
            'equalTo':'#password'
        },
    },
    messages:{
        'name':{
            'required':'Please Enter Your first Name',
            'minlength':'Please Enter The Minimum 5 Characture Name'
        },
        'age':{
            'required':'Please Enter Your last Name'
        },
        'birthdate':{
            'required':'Please Enter minimum 12 charchter',
            'minlength':'Please Enter The Minimum 5 Characture Name'
        },
        'state':{
            'required':'Please Enter Your Address'
        },
        'email':{
            'required':'Please Enter Your Email Address',
            'email':'Please Enter The Proper Email Address'
        },
        'city':{
            'equalTo':'Sorry! Your otp Is Not Matched please try again'
        },
        'profile':{
            'equalTo':'Sorry! Your otp Is Not Matched please try again'
        },
        'Country':{
            'required':'Please Enter Your Mobile Number'
        },
        'password':{
            'required':'Please Enter Your Password',
            'minlength':'Please Enter The Minimum 8 Characture Password'
        },
        'cpassword':{
            'required':'Please Enter Your Re-Password',
            'minlength':'Please Enter The Minimum 8 Characture Password',
            'equalTo':'Sorry! Your Password Is Not Match'
        }
    },
    submitHandler:function (form) {
        form.submit();
    }
});
