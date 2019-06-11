<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style>
      .logo-img {
  padding: 35px 0 35px;
}

input {
  width: 100%;
  height: 53px;
  -webkit-border-radius: 4px;
          border-radius: 4px;
  border: 0;
  color: #1D1103;
  margin-bottom: 20px;
}

input:focus {
  outline: 0;
  -webkit-box-shadow: 0;
          box-shadow: 0;
}


@media screen and (max-width: 767px) {
  .section {
    padding: 0 36px;
  }
}

.section .block-input-number {
  margin-bottom: 50px;
}

.section .block-input-number .inline-block {
  display: inline-block;
  vertical-align: middle;
  width: 68px;
  margin-bottom: 0;
}

.section .block-input-number .inline-block input {
  width: 100%;
}

.section .block-input-number .inline-block.number {
  margin-left: 6px;
  width: -webkit-calc(100% - 80px);
  width: calc(100% - 80px);
}

.form-login {
  /* Styles for alert... 
    by the way it is so weird when you look at your code a couple of years after you wrote it XD */
}

.form-login .title-form {
  font-size: 32px;
  color: #fff;
  padding-bottom: 50px;
  line-height: 1.25;
}

.form-login .container {
  display: block;
  position: relative;
  margin: 40px auto;
  height: auto;
  width: 500px;
  padding: 20px;
}

@media screen and (max-width: 767px) {
  .form-login .container {
    width: 100%;
    margin: 0;
    padding: 0;
  }
}

.form-login .container ul {
  list-style: none;
  margin: 0;
  padding: 0;
  overflow: none;
}

.form-login ul li {
  color: #fff;
  display: block;
  position: relative;
  width: 100%;
}

.form-login ul li .block-input-number,
.form-login ul li .block-input-login {
  display: none;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.form-login ul li.active .block-input-number,
.form-login ul li.active .block-input-login {
  display: block;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.form-login ul li:last-child {
  margin-bottom: 60px;
}

.block-bottom {
  padding-bottom: 40px;
  position: relative;
}

.block-bottom:after{
  content: '';
    position: absolute;
    width: 130px;
    height: 5px;
    border-radius: 4px;
    background-color: #8e8e93;
    bottom: 12px;
    left: 50%;
    transform: translateX(-50%);
}

.form-login ul li input[type=radio] {
  position: absolute;
  visibility: hidden;
}

.form-login ul li label {
  display: block;
  position: relative;
  font-weight: 300;
  font-size: 16px;
  padding: 15px 25px 0px 45px;
  margin: 10px auto 20px;
  height: 30px;
  z-index: 9;
  cursor: pointer;
  -webkit-transition: all 0.25s linear;
}

.form-login ul li:hover label {
  color: #FFFFFF;
}

.form-login ul li .check {
  display: block;
  position: absolute;
  border: 2px solid #D5A364;
  -webkit-border-radius: 100%;
          border-radius: 100%;
  height: 26px;
  width: 26px;
  top: 10px;
  left: 0px;
  z-index: 5;
  transition: border .25s linear;
  -webkit-transition: border .25s linear;
}

.form-login .loginbtn {
  height: 50px;
  width: 100%;
  -webkit-border-radius: 25px;
          border-radius: 25px;
  text-align: center;
  font-size: 15px;
  font-weight: bold;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.2;
  letter-spacing: 0.3px;
  color: #72440a;
  border: 0;
  background-image: linear-gradient(to left, #e0c65a, #e0c65a 15%, #f8e884 50%, #e0c65a 87%, #e0c65a);

}

.form-login .loginbtn:focus {
  border: 0;
  outline: 0;
}

.form-login .lostpass {
  margin-top: 30px;
}

.form-login .lostpass a {
  color: #D9A666;
  font-size: 16px;
  text-align: center;
  text-decoration: underline;
  line-height: 1.25;
  display: block;
}

.form-login .lostpass a::before, .form-login .lostpass a:after {
  content: none;
}

.form-login ul li:hover .check {
  border: 2px solid #D5A364;
}

.form-login ul li .check::before {
  display: block;
  position: absolute;
  content: '';
  -webkit-border-radius: 100%;
          border-radius: 100%;
  height: 14px;
  width: 14px;
  top: 6px;
  left: 6px;
  margin: auto;
  transition: background 0.25s linear;
  -webkit-transition: background 0.25s linear;
}

.form-login input[type=radio]:checked ~ .check::before {
  background: #fff;
}

.form-login input[type=radio]:checked ~ label {
  color: #fff;
}

.form-login .signature {
  margin: 10px auto;
  padding: 10px 0;
  width: 100%;
}

.form-login .signature p {
  text-align: center;
  font-family: Helvetica, Arial, Sans-Serif;
  font-size: 0.85em;
  color: #AAAAAA;
}

.form-login .signature .much-heart {
  display: inline-block;
  position: relative;
  margin: 0 4px;
  height: 10px;
  width: 10px;
  background: #AC1D3F;
  -webkit-border-radius: 4px;
          border-radius: 4px;
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}

.form-login .signature .much-heart::before,
.form-login .signature .much-heart::after {
  display: block;
  content: '';
  position: absolute;
  margin: auto;
  height: 10px;
  width: 10px;
  -webkit-border-radius: 5px;
          border-radius: 5px;
  background: #AC1D3F;
  top: -4px;
}

.form-login .signature .much-heart::after {
  bottom: 0;
  top: auto;
  left: -4px;
}

.form-login .signature a {
  color: #AAAAAA;
  text-decoration: none;
  font-weight: bold;
}

.form-login .alert {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  background-color: #0DFF92;
  width: 100%;
  position: relative;
  top: 0;
  left: 0;
  z-index: 300;
  padding: 20px 40px;
  color: #333;
}

.form-login .alert h2 {
  font-size: 22px;
  color: #232323;
  margin-top: 0;
}

.form-login .alert p {
  line-height: 1.6em;
  font-size: 18px;
}

.form-login .alert a {
  color: #232323;
  font-weight: bold;
}

    </style>
  </head>
  <body class="index">
    <div class="section section-login">
      <div class="logo-img"><img src="./assets/images/home/logo.svg" alt="#"></div><form action="" class="form-login">
<div class="container">
<h2 class="title-form">Login</h2>
<ul>
<li class="active">
<input type="radio" id="f-option" name="selector" checked>
<label for="f-option">With phone number</label>
<div class="check">
</div>
      <div class="block-input-number">
      <div class="inline-block">
      <input type="text" placeholder="" name="code" required class='input-code'></div>
      <div class="inline-block number">
        <input type="text" placeholder="" name="number" required class='input-number'></div>
      </div></li>
<li class="">
<input type="radio" id="s-option" name="selector">
<label for="s-option">With username/email</label>
<div class="check"><div class="inside"></div></div>
      <div class="block-input-login"><input type="text" placeholder="" name="" required class='input-email'>
<input type="password" placeholder="" name="" required class='input-pass'>
      </div></li>
</ul>
      <div class="block-bottom"><div class="clearfix">
<button type="submit" class="loginbtn">LOG IN</button>
</div>
<div class="lostpass"><a href="#">Lost your passwword</a></div>
      </div></div>
</form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
      $(document ).ready(function() {
      var $click = $('.form-login ul li');
      $click.on('click', function(){
          $click.removeClass('active');
          $(this).addClass('active');
      })
    });
    </script>
  </body>
</html>