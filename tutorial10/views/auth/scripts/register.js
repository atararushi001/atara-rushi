$("#userForm").validate({
    rules:{
        usernameInput: {
            required: true,
            minlength: 3
        },
        passwordInput: {
            required: true,
            minlength: 8,
        },
        retypePasswordInput: {
            required: true,
            equalTo: '#passwordInput',
        },
        age: {
            required: true,
        }, 
        birthdate: {
            required: true,
        },
        city: {
            required: true,
        },
        state: {
            required: true,
        },
        country: {
            required: true,
        },
        profile: {
            required: true,
        }
    },
    messages:{
        usernameInput:{
            required: 'The Username field is required',
            minlength: 'You must enter at least 3 characters'
        },
        passwordInput: {
            required: 'The Password field is required',
            minlength: 'You must enter at least 8 characters'
        },
        retypePasswordInput: {
            required: 'The Confirm password field is required',
            equalTo: 'The Confirm password field must match with Password'
        },
    },
    submitHandler: function(form){
        alert("Submitted");
        form.submit();
    }
})