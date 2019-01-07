<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <title></title>
  </head>
<body>
  <div class="wrapper">

      <div class="bg">
        <div class="square">
                                              <!-- SIGN UP-->
          <div class="sign-up">
                <div class="inside-logo">
                  <span>Sign Up</span>
                  <img class="logo" src="img/logo.png" alt="Logo">
                </div>
                <div class="line-under"></div>

                                              <!-- form-->
                <form method="POST" action="/sign-up-submit.php" class="form">
                  <div class="form-group">
                      <label class="form-label">
                        Name
                        <span class="asterisk">*</span>
                      </label>
                      <img class="icon" src="img/ic_user.png">
                      <img class="icon icon-hidden" src="img/ic_user_active.png">
                      <input class="form-input" type="text" name="name" required/>
                  </div>

                  <div class="form-group">
                      <label class="form-label">
                        Email
                        <span class="asterisk">*</span>
                      </label>
                      <img class="icon" src="img/ic_mail.png">
                      <img class="icon icon-hidden" src="img/ic_mail_active.png">
                      <input class="form-input" type="email" name="email"/>
                  </div>

                  <div class="form-group">
                      <label class="form-label">
                        Password
                        <span class="asterisk">*</span>
                      </label>
                      <img class="icon" src="img/ic_lock.png">
                      <img class="icon icon-hidden" src="img/ic_lock_active.png">
                      <input class="form-input" type="password" name="password"/>
                  </div>

                  <button type="submit" class="button-form">SIGN UP</button>
                </form>
          </div>
                                              <!-- LOGIN -->
          <div class="login invisible">
                <div class="inside-logo">
                  <span>Login</span>
                  <img class="logo" src="img/logo.png" alt="Logo">
                </div>
                <div class="line-under"></div>

                                              <!-- form-->
                <form method="POST" action="/login-submit.php" class="form">
                  <div class="form-group">
                      <label class="form-label">
                        Email
                        <span class="asterisk">*</span>
                      </label>
                      <img class="icon" src="img/ic_mail.png">
                      <img class="icon icon-hidden" src="img/ic_mail_active.png">
                      <input class="form-input" type="text" name="email"/>
                  </div>

                  <div class="form-group">
                      <label class="form-label">
                        Password
                        <span class="asterisk">*</span>
                      </label>
                      <img class="icon" src="img/ic_lock.png">
                      <img class="icon icon-hidden" src="img/ic_lock_active.png">
                      <input class="form-input" type="password" name="password"/>
                  </div>

                  <button type="submit" class="button-form">LOGIN</button>
                </form>
          </div>
        </div>

                                              <!-- RECTANGLE -->

        <div class="bg-left">
          <div>
            <p class="account">Don't have an account?</p>
            <div class="bg-underline"></div>
            <p class="lorem-ipsum">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button type="button" class="button-bg button-sign-up">SIGN UP</button>
          </div>
        </div>
        <div class="bg-right">
          <div>
            <p class="account">Have an account?</p>
            <div class="bg-underline"></div>
            <p class="lorem-ipsum">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <button type="button" class="button-bg button-login">LOGIN</button>
          </div>
        </div>
      </div>



    </div>

<?php require 'footer.view.php' ?>
