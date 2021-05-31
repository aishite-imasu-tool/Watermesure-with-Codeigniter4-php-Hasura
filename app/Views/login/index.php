<style>
body {
    background-color: #e9e9e9;
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    line-height: 1.25;
    letter-spacing: 1px;
}

* {
    box-sizing: border-box;
    transition: .25s all ease;
}

.login-container {
    display: block;
    position: relative;
    z-index: 0;
    margin: 4rem auto 0;
    padding: 5rem 4rem 0 4rem;
    width: 100%;
    max-width: 525px;
    min-height: 680px;
    background-image: url(https://i.pinimg.com/originals/d6/b6/0c/d6b60cd9a2da47328b24c0ba4a957c62.gif);
    box-shadow: 0 50px 70px -20px rgba(0, 0, 0, 0.85);
    overflow: hidden;
}

.login-container:after {
    content: '';
    display: inline-block;
    position: absolute;
    z-index: 0;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-image: radial-gradient(ellipse at left bottom, rgba(22, 24, 47, 1) 0%, rgba(38, 20, 72, .9) 59%, rgba(17, 27, 75, .9) 100%);
    box-shadow: 0 -20px 150px -20px rgba(0, 0, 0, 0.5);
    overflow: hidden;
}

.form-login {
    position: relative;
    z-index: 1;
    padding-bottom: 4.5rem;
    border-bottom: 1px solid rgba(255, 255, 255, 0.25);
}

.login-nav {
    position: relative;
    padding: 0;
    margin: 0 0 6em 1rem;
}

.login-nav__item {
    list-style: none;
    display: inline-block;
}

.login-nav__item+.login-nav__item {
    margin-left: 2.25rem;
}

.login-nav__item a {
    position: relative;
    color: rgba(255, 255, 255, 0.5);
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 1.25rem;
    padding-bottom: .5rem;
    transition: .20s all ease;
}

.login-nav__item.active a,
.login-nav__item a:hover {
    color: #ffffff;
    transition: .15s all ease;
}

.login-nav__item a:after {
    content: '';
    display: inline-block;
    height: 10px;
    background-color: rgb(255, 255, 255);
    position: absolute;
    right: 100%;
    bottom: -1px;
    left: 0;
    border-radius: 50%;
    transition: .15s all ease;
}

.login-nav__item a:hover:after,
.login-nav__item.active a:after {
    background-color: rgb(17, 97, 237);
    height: 2px;
    right: 0;
    bottom: 2px;
    border-radius: 0;
    transition: .20s all ease;
}

.login__label {
    display: block;
    padding-left: 1rem;
}

.login__label,
.login__label--checkbox {
    color: rgba(255, 255, 255, 0.5);
    text-transform: uppercase;
    font-size: .75rem;
    margin-bottom: 1rem;
}

.login__label--checkbox {
    display: inline-block;
    position: relative;
    padding-left: 1.5rem;
    margin-top: 2rem;
    margin-left: 1rem;
    color: #ffffff;
    font-size: .75rem;
    text-transform: inherit;
}

.login__input {
    color: white;
    font-size: 1.15rem;
    width: 100%;
    padding: .5rem 1rem;
    border: 2px solid transparent;
    outline: none;
    border-radius: 1.5rem;
    background-color: rgba(255, 255, 255, 0.25);
    letter-spacing: 1px;
}

.login__input:hover,
.login__input:focus {
    color: white;
    border: 2px solid rgba(255, 255, 255, 0.5);
    background-color: transparent;
}

.login__input+.login__label {
    margin-top: 1.5rem;
}

.login__input--checkbox {
    position: absolute;
    top: .1rem;
    left: 0;
    margin: 0;
}

.login__submit {
    color: #ffffff;
    font-size: 1rem;
    font-family: 'Montserrat', sans-serif;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-top: 1rem;
    padding: .75rem;
    border-radius: 2rem;
    display: block;
    width: 100%;
    background-color: rgba(17, 97, 237, .75);
    border: none;
    cursor: pointer;
}

.login__submit:hover {
    background-color: rgba(17, 97, 237, 1);
}

.login__forgot {
    display: block;
    margin-top: 3rem;
    text-align: center;
    color: rgba(255, 255, 255, 0.75);
    font-size: .75rem;
    text-decoration: none;
    position: relative;
    z-index: 1;
}

.login__forgot:hover {
    color: rgb(17, 97, 237);
}

.cont {
    position: relative;
    height: 100%;
    margin: 0;
    width: 100%;
    background-image: url('https://scr.vn/wp-content/uploads/2020/07/H%C3%ACnh-n%E1%BB%81n-Macbook-scaled.jpg');
    background-size: cover;
    overflow: auto;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
}

</style>
<html  class="cont">
<tbody>
    <div class="cont">
        <div class="login-container">
            <div class="form-login">
                <ul class="login-nav">
                    <li id="activeSignIn" class="login-nav__item active">
                        <a id="SignIn"><label>SIGN IN</label></a>
                    </li>
                    <li id="activeSignUp" class="login-nav__item">
                        <a id="SignUp"><label>SIGN UP</label></a>
                    </li>
                </ul>
				<div id="signInView">
					<label for="login-input-user" class="login__label">
						Username
					</label>
					<input id="login-input-user" class="login__input" type="text" />
					<label for="login-input-password" class="login__label">
						Password
					</label>
					<input id="login-input-password" class="login__input" type="password" />
				
					<label for="login-sign-up" class="login__label--checkbox">
						<input id="login-sign-up" type="checkbox" class="login__input--checkbox" />
						Keep me Signed in
					</label>
					<button  onclick="login_submit()" class="login__submit">Sign in</button>
                    <!-- <button onclick="location.href='/watermeasure/public/top'" class="login__submit">Sign in</button> -->
				</div>
                <div id="signUpView">
					<!-- render view  "signUp"-->
                </div>

            </div>
            <a href="#" class="login__forgot">Forgot Password?</a>
        </div>
    </div>
</tbody>
</html>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>

document.getElementById("SignUp").onclick = function() {
    SignUp()
};
document.getElementById("SignIn").onclick = function() {
    SignIn()
};

var signInView = document.getElementById("signInView");
var signUpView = document.getElementById("signUpView");

function SignIn() {
	signInView.style.display = "block";
	signUpView.style.display = "none";

	document.getElementById("activeSignIn").className += " active";
	document.getElementById("activeSignUp").className = "login-nav__item";
}

function SignUp() {
	signInView.style.display = "none";
	signUpView.style.display = "block";
    document.getElementById("signUpView").innerHTML =
        '<label for="login-input-user" class="login__label">Username</label><input id="signup-input-user" class="login__input" type="text" /><label for="login-input-password" class="login__label">Password</label><input id="signup-input-password" class="login__input" type="password" /> <label for="login-input-repeat-password" class="login__label">Repeat Password</label><input id="signup-input-repeat-password" class="login__input" type="password" /> <div> &nbsp</div><button onclick="SignUp_submit()" class="login__submit">Sign Up</button>';

	document.getElementById("activeSignUp").className += " active";
	document.getElementById("activeSignIn").className = "login-nav__item";
}

var api = <?=json_encode($api)?>;
function login_submit() {

    if($('#login-input-user').val() != '' && $('#login-input-password').val() != '') {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("/watermeasure/public/login/checklogin");?>",
            data: {
                login_id: $('#login-input-user').val(),
                password: $('#login-input-password').val(),
            },
            success: function(data) {
                if(data != '') {
                    window.location = api;
                }
            }
        });

    }
    
}


function SignUp_submit() {
    // alert('SignUp_submit');
}

</script>
<!-- active -->