var $form = $('#user-form');
var $emailInput = $('#inputEmail');
var $passwordInput = $('#inputPassword');
var $passwordAgainInput = $('#inputPasswordAgain');
$form.keyup(function(){
    var notEmpty = $emailInput.val() !== '' && $emailInput.val() !== '' &&
        $passwordInput.val() !== '' && $passwordAgainInput.val() != '';
    var passwordsMatch =  $passwordInput.val() === $passwordAgainInput.val();
    if(notEmpty && passwordsMatch){
        $('#submit-user').removeAttr('disabled');
    }else{
        $('#submit-user').attr('disabled','disabled');
    }
});
