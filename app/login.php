<?php
    include "../includes/functions.php";
    include "../includes/script.php";
    include "../includes/style.php";
    include "../includes/meta.php";
?>

<body class="body-all">
    <main class="main r-flex">
        <div class="form-area bg-white">
            <h3 class="raleway-bold font-36 text-lightblue">Sign in</h3>
            <p class="raleway-regular font-14 text-grey">Provide email and password</p>

            <form action="#" class="form-input-area">
                <div class="r-flex focus-input-area">
                    <span class="text-lightblue font-20">@</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="email" name="" id="" placeholder="hello@vendor.com" class="font-16 raleway-normal">
                </div>
                <div class="r-flex focus-input-area">
                    &nbsp;<span class="text-lightblue font-20">
                    <svg width="12" height="23" viewBox="0 0 12 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="6" cy="6" r="5.5" stroke="#5ECCF1"/>
                        <path d="M6 12V22H9.5" stroke="#5ECCF1"/>
                        <path d="M9.5 19H7.5" stroke="#5ECCF1"/>
                    </svg>

                    </span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="email" name="" id="" placeholder="password" class="font-16 raleway-normal">
                </div>
            </form>

            <div class="r-flex login-area">
                <p class="login-text font-18 raleway-bold">login</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <svg width="38" height="13" viewBox="0 0 38 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 7H37" stroke="#9C9C9C"/>
                    <path d="M28.5 1L36.5 7L28.5 12.5" stroke="#9C9C9C"/>
                </svg>
            </div>
        </div>
        <div class="signup-tab bg-grey text-center">
            <p class="sign-up-text font-16 raleway-regular">sign up</p>
            <span>
                <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 16.5L8.5 8.5L0.999999 0.5" stroke="#969696"/>
                </svg>
            </span>
        </div>                        
    </main>
</body>