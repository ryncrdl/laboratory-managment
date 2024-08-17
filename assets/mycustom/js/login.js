$('.frm_index').submit(function(e){
    e.preventDefault();

    var a = $(this).serialize()+'&key=admin_login';


    $.ajax({
    	type: "POST",
    	data: a,
    	url: 'class/login/login',
    	beforeSend: function(){
    		$(this).find('button').attr('disabled', true);
    	}
    })
    .done(function(data){
    	console.log(data);
    	if(data == 1){
    		toastr.success('Successfully login', 'Redirecting');
    		setTimeout(function(){
    			window.location = 'views/dashboard';
    		},300);

    	}else{
    		toastr.error('Username and password are incorrect');
    		$(this).find('button').attr('disabled', true);
    		$('.frm_index').find('input').val('');
    	}
    });

});


$('.frm_memberlogin').submit(function(e){
    e.preventDefault();

    var nn = $(this).serialize()+"&key=member_login"

    $.ajax({
        type: "POST",
        data: nn,
        url: '../class/login/login',
        beforeSend: function(){
            // $(this).find('button').attr('disabled', true);
        }
    })
    .done(function(data){
        console.log(data);
        if(data == 1){
           toastr.success('Successfully login', 'Redirecting');
            setTimeout(function(){
                window.location = 'home';
            },300);
        }else{
            toastr.error('Incorrect ID Number or Password');
           
        }
    });

});
$('.frm_member_forgotpassword').submit(function(e){
    e.preventDefault();

    var nn = $(this).serialize()+"&key=member_forgot_password"

    $.ajax({
        type: "POST",
        data: nn,
        url: '../class/login/login',
        beforeSend: function(){
            // $(this).find('button').attr('disabled', true);
        }
    })
    .done(function(data){
        console.log(data);
        if(data == 1){
           toastr.success('Verification code has been sent.', 'Redirecting');
            setTimeout(function(){
                window.location = 'code-verification';
            },300);
        }else{
            toastr.error('Incorrect ID Number or Email');
        }
    });

});
$('.frm_member_verification').submit(function(e){
    e.preventDefault();

    var nn = $(this).serialize()+"&key=member_verification"

    $.ajax({
        type: "POST",
        data: nn,
        url: '../class/login/login',
        beforeSend: function(){
            // $(this).find('button').attr('disabled', true);
        }
    })
    .done(function(data){
        console.log(data);
        if(data == 1){
           toastr.success('Verification code has verified.', 'Redirecting');
            setTimeout(function(){
                window.location = 'change-password';
            },300);
        }else{
            toastr.error('Incorrect ID Number or Email');
        }
    });

});
$('.frm_member_changepassword').submit(function(e){
    e.preventDefault();

    var nn = $(this).serialize()+"&key=member_changepassword"

    $.ajax({
        type: "POST",
        data: nn,
        url: '../class/login/login',
        beforeSend: function(){
            // $(this).find('button').attr('disabled', true);
        }
    })
    .done(function(data){
        console.log(data);
        if(data == 1){
           toastr.success('Verification code has verified.', 'Redirecting');
            setTimeout(function(){
                window.location = 'login';
            },300);
        }else{
            toastr.error("Password doesn't match");
        }
    });

});