$("#userForm").validate({
    rules: {
        usernameInput: {
            required: true,
        },
        passwordInput: {
            required: true,
            minlength: 8,
        },
    },
    messages:{
        usernameInput: {
            required: 'The Username field is required',
        },
        passwordInput: {
            required: 'The Password field is required',
        }
    },
    submitHandler: function(form){
        alert("Submitted");
        form.submit();
    }
})