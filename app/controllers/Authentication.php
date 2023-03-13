<?php
class Authentication extends Controller {
    
    function SignIn(){
        $this->RenderView('authentication/sign_in');
    }

    function SignUp(){
        $this->RenderView('authentication/sign_up');
    }
}

?>