<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hoanh Anh Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style>
        .section {
            background-size: cover;
            height: 100%;
            height: 100vh;
            position: relative;
        }

        .section:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            background-color: #333;
            bottom: 0;
            z-index: -2;
        }

@media screen and (max-width: 767px) {
  .section.section-select {
    padding: 0;
  }
}

.section .loginbtn {
  height: 50px;
  width: 100%;
  -webkit-border-radius: 25px;
          border-radius: 25px;
  text-align: center;
  font-size: 15px;
  color: #1D1103;
  border: 0;
  background-image: linear-gradient(to left, #e0c65a, #e0c65a 15%, #f8e884 50%, #e0c65a 87%, #e0c65a);

}

.section .loginbtn:focus {
  border: 0;
  outline: 0;
}

.section .title-select {
  font-size: 32px;
  color: #fff;
  line-height: 1.25;
  padding-top: 60px;
  padding-bottom: 30px;
  position: relative;
  z-index: -1;
}

/* .section .title-select.open {
    display: none;
} */

.section .select .dropdown {
  height: 55px;
  width: 100%;
  -webkit-border-radius: 4px;
          border-radius: 4px;
  line-height: 55px;
  position: relative;
  font-size: 16px;
  box-shadow: 0 3px 10px 0 rgba(113, 73, 12, 0.31);
  background-color: #ffffff;
}

/* .section .select .dropdown.open {
    margin-top:-60px;
}

.section .select .dropdown.open .list {
    top: -172%;
} */

select {
  display: none;
}

.wrapper {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  display: flex;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
  position: relative;
  height: 100vh;
  padding: 0 36px 0;
}

@media screen and (min-width: 767px) {
    .wrapper {
        max-width: 500px;
        width: 100%;
        margin: 0 auto;
        padding: 0;

    }
}

.section-select .close {
  position: absolute;
  right: 20px;
  top: 13px;
  width: 12px;
  height: 12px;
  opacity: 1;
}

.section-select .close:hover {
  opacity: 1;
}

.section-select .close:before, .section-select .close:after {
  position: absolute;
  left: 15px;
  content: ' ';
  height: 20px;
  width: 2px;
  background-color: #be8a4a;
}

.section-select .close:before {
  -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
          transform: rotate(45deg);
}

.section-select .close:after {
  -webkit-transform: rotate(-45deg);
      -ms-transform: rotate(-45deg);
          transform: rotate(-45deg);
}

.section-select .dropdown,
.section-select .clearfix,
.section-select .select {
  display: inline-block;
  width: 100%;
  -webkit-box-align: end;
  -webkit-align-items: flex-end;
      -ms-flex-align: end;
          align-items: flex-end;

}

.section-select .clearfix {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 40px;
  position: relative;
    z-index: -2;
}

.dropdown {
  background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0) 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0.25)), to(rgba(255, 255, 255, 0)));
  background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#40FFFFFF', endColorstr='#00FFFFFF', GradientType=0);
  background-color: #f6f6f6;
  -webkit-border-radius: 6px;
          border-radius: 6px;
  border: solid 1px #eee;
  -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.0075);
          box-shadow: 0 1px 0 rgba(0, 0, 0, 0.0075);
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  cursor: pointer;
  display: block;
  float: left;
  font-size: 14px;
  font-weight: normal;
  height: 42px;
  line-height: 40px;
  outline: none;
  padding-left: 18px;
  padding-right: 30px;
  text-align: left !important;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  white-space: nowrap;
  width: auto;
  -webkit-box-shadow: 0 3px 10px #71490C;
          box-shadow: 0 3px 10px #71490C;
}

.dropdown:focus {
  background-color: #fff;
}

.dropdown:hover {
  background-color: #fff;
}

.dropdown ul, ol {
    list-style: none;
}

.dropdown:active, .dropdown.open {
  background-color: #fff !important;
  border-color: #fff;
  -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05) inset;
          box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05) inset;
}

.dropdown:after {
  height: 0;
  width: 0;
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  border-top: 4px solid #777;
  -webkit-transform: origin(50% 20%);
      -ms-transform: origin(50% 20%);
          transform: origin(50% 20%);
  -webkit-transition: all 0.125s ease-in-out;
  transition: all 0.125s ease-in-out;
  content: '';
  display: block;
  pointer-events: none;
  position: absolute;
  right: 50px;
  top: 43%;
}

@media screen and (min-width: 767px) {
    .dropdown:after {
        right: 18px;
        top: 43.5%;
    }
}

.dropdown.open:after {
  -webkit-transform: rotate(-180deg);
      -ms-transform: rotate(-180deg);
          transform: rotate(-180deg);
}

.dropdown.open .list {
  -webkit-transform: scale(1);
      -ms-transform: scale(1);
          transform: scale(1);
  opacity: 1;
  pointer-events: auto;
}

.dropdown.open .option {
  cursor: pointer;
}

.dropdown.wide {
  width: 100%;
}

.dropdown.wide .list {
  left: 0 !important;
  right: 0 !important;
}

.dropdown .list {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  -webkit-border-radius: 6px;
          border-radius: 6px;
  opacity: 0;
  overflow: hidden;
  pointer-events: none;
  width: -webkit-calc(100% + 30px);
  width: calc(100% + 30px);
    position: absolute;
    top: -300%;
    left: -15px;
    right: -15px;
}

.section .select .dropdown:before {
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    z-index: -1;
    background-color: #fff;
    width: -webkit-calc(100% + 30px);
    width: calc(100% + 30px);
    position: absolute;
    top: -300%;
    left: -15px;
    right: -15px;
    height: 460px;
    opacity: 0;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}

.section .select .dropdown.open:before {
    webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    pointer-events: auto;
    opacity: 1;
}
@media screen and (min-width: 767px) {
    .dropdown .list {
        width: 100%;
        position: absolute;
        top: 65px;
        left: 0px;
        right: 0px;
    }
}

.dropdown .list:hover .option:not(:hover) {
  background-color: transparent !important;
}

.dropdown .list ul {
  height: 350px;
  overflow: auto;
  padding: 0;
}

.dropdown .list .title-select-modal {
  font-size: 18px;
  font-weight: bold;
  font-style: normal;
  font-stretch: normal;
  letter-spacing: normal;
  text-align: left;
  color: #1d1103;
  padding: 20px;
  line-height: 1.25;
  font-weight: bold;
}

.dropdown .option {
  cursor: default;
  font-weight: 400;
  line-height: 40px;
  outline: none;
  padding: 0 20px;
  text-align: left;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
}

.dropdown .option:hover, .dropdown .option:focus {
  background-color: #f6f6f6 !important;
}

.dropdown .option.selected {
  font-weight: 600;
}

.dropdown .option.selected:focus {
  background: #f6f6f6;
}

body {
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  color: #666;
  font-family: 'Montserrat', sans-serif;
}

.container {
  margin: 40px auto 0;
  max-width: 120px;
}

.by {
  bottom: 12px;
  color: #aaa;
  font-size: 12px;
  left: 0;
  position: absolute;
  right: 0;
  text-align: center;
}

a {
  color: #aaa;
  text-decoration: none;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

a:hover {
  color: #666;
}

    </style>
  </head>
  <body class="index">
    <div class="section section-select">
        <div class="wrapper">
        <div class="select">
      <h1 class="title-select">Select<br/> Your Region</h1><select class="">
<option value="" data-display-text="Fruits">None</option>
<option value="apples">Apples</option>
<option value="bananas">Bananas</option>
<option value="oranges">Oranges</option>
<option value="apples">Apples</option>
<option value="bananas">Bananas</option>
<option value="oranges">Oranges</option>
<option value="apples">Apples</option>
<option value="bananas">Bananas</option>
<option value="oranges">Oranges</option>
</select>
</div>
<div class="clearfix">
<button type="submit" class="loginbtn">CONTINUE</button>
</div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
     function create_custom_dropdowns() {
    $('select').each(function(i, select) {
      if (!$(this).next().hasClass('dropdown')) {
        $(this).after('<div class="dropdown ' + ($(this).attr('class') || '') + '" tabindex="0"><span class="current"></span><div class="list"><h2 class="title-select-modal">Your Region<span class="close"></span></h2><ul></ul></div></div>');
        var dropdown = $(this).next();
        var options = $(select).find('option');
        var selected = $(this).find('option:selected');
        dropdown.find('.current').html(selected.data('display-text') || selected.text());
        options.each(function(j, o) {
          var display = $(o).data('display-text') || '';
          dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ? 'selected' : '') + '" data-value="' + $(o).val() + '" data-display-text="' + display + '">' + $(o).text() + '</li>');
        });
      }
    });
  }
  
  // Event listeners
  
  // Open/close
  $(document).on('click', '.dropdown', function(event) {
    $('.dropdown').not($(this)).removeClass('open');
    $(this).toggleClass('open');
    if ($(this).hasClass('open')) {
      $('.title-select').addClass('open')
      $(this).find('.option').attr('tabindex', 0);
      $(this).find('.selected').focus();
    } else {
      $(this).find('.option').removeAttr('tabindex');
      $(this).focus();
    }
  });
  // Close when clicking outside
  $(document).on('click', function(event) {
    if ($(event.target).closest('.dropdown').length === 0) {
      $('.dropdown').removeClass('open');
      $('.title-select').removeClass('open');
      $('.dropdown .option').removeAttr('tabindex');
    }
    event.stopPropagation();
  });
  // Option click
  $(document).on('click', '.dropdown .option', function(event) {
    $(this).closest('.list').find('.selected').removeClass('selected');
    $(this).addClass('selected');
    var text = $(this).data('display-text') || $(this).text();
    $(this).closest('.dropdown').find('.current').text(text);
    $(this).closest('.dropdown').prev('select').val($(this).data('value')).trigger('change');
  });
  
  // Keyboard events
  $(document).on('keydown', '.dropdown', function(event) {
    var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
    // Space or Enter
    if (event.keyCode == 32 || event.keyCode == 13) {
      if ($(this).hasClass('open')) {
        focused_option.trigger('click');
      } else {
        $(this).trigger('click');
      }
      return false;
      // Down
    } else if (event.keyCode == 40) {
      if (!$(this).hasClass('open')) {
        $(this).trigger('click');
      } else {
        focused_option.next().focus();
      }
      return false;
      // Up
    } else if (event.keyCode == 38) {
      if (!$(this).hasClass('open')) {
        $(this).trigger('click');
      } else {
        var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
        focused_option.prev().focus();
      }
      return false;
    // Esc
    } else if (event.keyCode == 27) {
      if ($(this).hasClass('open')) {
        $(this).trigger('click');
      }
      return false;
    }
  });
  
  $(document).ready(function() {
    create_custom_dropdowns();
  });
    </script>
  </body>
</html>