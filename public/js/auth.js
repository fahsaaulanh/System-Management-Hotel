    $(document).ready(function(){
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');
});

var loginEmail = document.getElementById('email');
var loginPassword = document.getElementById('password');
var registerName = document.getElementById('register_name');
var registerEmail = document.getElementById('register_email');
var registerPassword = document.getElementById('register_password');
var passwordConfirm = document.getElementById('password_confirm');

$('.login-reg-panel input[type="radio"]').on('change', function() {
    if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut(); 
        $('.login-info-box').fadeIn();
        
        if ($('.login-info-box').fadeIn()){
            loginEmail.setAttribute("type", "email");
            }
            else ($('.login-info-box').fadeOut())
            loginEmail.setAttribute("type", "hidden");
        
        if ($('.login-info-box').fadeIn()){
            loginPassword.setAttribute("type", "password");
            }
            else ($('.login-info-box').fadeOut())
            loginPassword.setAttribute("type", "hidden");

        if ($('.login-info-box').fadeIn()){
            registerName.setAttribute("type", "hidden");
            }
            else ($('.login-info-box').fadeOut())
            registerName.setAttribute("type", "text");

        if ($('.login-info-box').fadeIn()){
            registerEmail.setAttribute("type", "hidden");
            }
            else ($('.login-info-box').fadeOut())
            registerEmail.setAttribute("type", "email");

        if ($('.login-info-box').fadeIn()){
            registerPassword.setAttribute("type", "hidden");
            }
            else ($('.login-info-box').fadeOut())
            registerPassword.setAttribute("type", "password");

        if ($('.login-info-box').fadeIn()){
            passwordConfirm.setAttribute("type", "hidden");
            }
            else ($('.login-info-box').fadeOut())
            passwordConfirm.setAttribute("type", "password");

        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');
        
    }
    else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();

        if ($('.login-info-box').fadeIn()){
            loginEmail.setAttribute("type", "hidden");
            }
            else ($('.login-info-box').fadeOut())
            loginEmail.setAttribute("type", "email");
        
        if ($('.login-info-box').fadeIn()){
            loginPassword.setAttribute("type", "hidden");
            }
            else ($('.login-info-box').fadeOut())
            loginPassword.setAttribute("type", "password");

        if ($('.login-info-box').fadeIn()){
            registerName.setAttribute("type", "text");
            }
            else ($('.login-info-box').fadeOut())
            registerName.setAttribute("type", "hidden");

        if ($('.login-info-box').fadeIn()){
            registerEmail.setAttribute("type", "email");
            }
            else ($('.login-info-box').fadeOut())
            registerEmail.setAttribute("type", "hidden");

        if ($('.login-info-box').fadeIn()){
            registerPassword.setAttribute("type", "password");
            }
            else ($('.login-info-box').fadeOut())
            registerPassword.setAttribute("type", "hidden");

        if ($('.login-info-box').fadeIn()){
            passwordConfirm.setAttribute("type", "password");
            }
            else ($('.login-info-box').fadeOut())
            passwordConfirm.setAttribute("type", "hidden");
        
        $('.white-panel').removeClass('right-log');
        
        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
});