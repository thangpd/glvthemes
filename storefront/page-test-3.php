<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,700,700i,800,800i,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/style.css" />
    <style>
@media screen and (max-width: 767px) {
  .section.section-select {
    padding: 0;
    overflow: hidden;
    height: 100vh;
  }
}

.section .loginbtn {
  height: 50px;
  width: 100%;
  -webkit-border-radius: 25px;
  border-radius: 25px;
  text-align: center;
  font-family: Muli;
  font-size: 15px;
  font-weight: bold;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.2;
  letter-spacing: 0.3px;
  color: #72440a;
  border: 0;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
    transition: all 0.3s ease;
  background-image: linear-gradient(to left, #e0c65a, #e0c65a 15%, #f8e884 50%, #e0c65a 87%, #e0c65a);

}

.flag-text { margin-left: 10px; }

.section .loginbtn:focus {
  border: 0;
  outline: 0;
}

/* .section .loginbtn:focus,
.section .loginbtn:active,
.section .loginbtn:hover {
  background-image: none;
  background-color: #be8a4a;
  color: #fff;
} */

.section .title-select {
  font-size: 32px;
  font-family: Muli;
  color: #fff;
  line-height: 1.25;
  padding-top: 60px;
  padding-bottom: 30px;
  position: relative;
}

.select2-container--default .select2-selection--single .select2-selection__rendered{
  font-family: Muli;
  font-size: 16px;
  font-weight: normal;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.19;
  letter-spacing: 0.4px;
  text-align: left;
  color: #909090;
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

/* select {
  display: none;
} */

.wrapper {
  /* display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  display: flex;
  -webkit-box-pack: justify;
  -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap; */
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
  padding: 0 36px 0;
}

/* .wrapper:after {
    content: '';
    position: absolute;
    width: 130px;
    height: 5px;
    border-radius: 4px;
    background-color: #8e8e93;
    bottom: 12px;
    left: 50%;
    transform: translateX(-50%);
} */

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
  /* -webkit-box-align: end;
  -webkit-align-items: flex-end;
      -ms-flex-align: end;
          align-items: flex-end; */

}

.section-select .clearfix {
  /* display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex; */
  padding-bottom: 40px;
  position: absolute;
  left: 36px;
  right: 36px;
  width: calc(100% - 72px);
  bottom: 40px;
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

.select2-container--default .select2-results>.select2-results__options {
  max-height: 310px;
}

.dropdown .option.selected {
  font-weight: 600;
}

.dropdown .option.selected:focus {
  background: #f6f6f6;
}

.section .select2-container {
    width: 100% !important;
    height: 55px;
    border-radius: 4px;
    box-shadow: 0 3px 10px 0 rgba(113, 73, 12, 0.31);
    background-color: #ffffff;
    z-index: 1100;
}
.section .select2-container.select2-container--open {
    z-index: -2;
}
.section .select2-container .select2-selection--single {
    height: 55px;
    border: 0;
}

.section .select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 55px;
    height: 55px;
}

.section .select2-container--default .select2-selection--single .select2-selection__rendered:hover,
.section .select2-container--default .select2-selection--single .select2-selection__rendered:active,
.section .select2-container--default .select2-selection--single .select2-selection__rendered:focus {
  border:1px solid #be8a4a;
}

.select-wrapper .select2-container--default .select2-search--dropdown .select2-search__field:focus {
  border:1px solid #be8a4a;
  outline: none;
}

.section .select2-container--default .select2-selection--single .select2-selection__arrow {
    top: 50%;
    right: 10px;
    pointer-events: none;
    transform: translateY(-56%);
}


.select-wrapper .select2-container--open {
    width: -webkit-calc(100% - 30px) !important;
    width: calc(100% - 30px) !important;
    position: absolute;
    top: 45px !important;
    left: 15px !important;
    right: 15px !important;
}

.select2-container--open .select2-dropdown.select2-dropdown--below {
    width: 100% !important;
    height: 475px;
    left: 0px !important;
    right: 0px !important;
}
.select-wrapper .wrapper .select2-container--open .select2-dropdown--below {
    width: auto !important;
    position: absolute;
    top: auto !important;
    left: auto !important;
    right: auto !important;
    height: auto;
   
}
/* .selection,
.dropdown-wrapper {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
} */
.select-wrapper .select2-dropdown {
    border: 0;
    
}

body {
    margin: 0;
}

.select-wrapper .select2-search--dropdown:before {
    content: 'Your Region';
    font-size: 18px;
    font-family: Muli;
    font-weight: bold;
    font-style: normal;
    font-stretch: normal;
    line-height: 3.06;
    letter-spacing: normal;
    text-align: left;
    color: #1d1103;
}

.select-wrapper .select2-search--dropdown:after {
    content: "\f002";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    -webkit-font-smoothing: antialiased;
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    line-height: 1;
        position: absolute;
    top: 90px;
    right: 40px;
    color: #be8a4a;
}

.select-wrapper .select2-search--dropdown {
    padding: 4px 22px;
}

.section-select .button-close {
  position: absolute;
    right: 25px;
    top: 55px;
    z-index: 1100;
    width: 20px;
    font-size: 20px;
    height: 20px;
    text-align: right;
    color: #be8a4a;
    visibility: hidden;
}

.section-select .select2-container--open + .button-close {
    visibility: visible;
}

/* .section-select .button-close:before {
    content: '\f00d';
    font-family: "Font Awesome 5 Pro";
    font-weight: 900;
    -webkit-font-smoothing: antialiased;
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    line-height: 1;
    position: absolute;
    right: 10px;
    top: 10px;
} */

/* .select-wrapper .select2-hidden-accessible {
    height: 55px !important;
    margin: -1px !important;
    overflow: hidden !important;
    padding: 0 !important;
    position: absolute !important;
    width: calc(100% - 30px) !important;
    left: 0;
} */

.select-wrapper .select2-container--default .select2-search--dropdown .select2-search__field {
    height: 55px;
    -webkit-appearance: none;
    border-radius: 4px;
    box-shadow: 0 3px 10px 0 rgba(113, 73, 12, 0.31);
    -webkit-box-shadow:0 3px 10px 0 rgba(113, 73, 12, 0.31);
    -moz--box-shadow: 0 3px 10px 0 rgba(113, 73, 12, 0.31);
    background-color: #fff;
    border: 0;
    margin-top: 10px;
    padding: 15px;
}

.select2-results {
    padding-top: 30px;
    scroll-behavior: smooth;
}

.select-wrapper .select2-results__option {
    padding: 17px 37px;
    border-bottom: solid 1px #707070;
    font-size: 16px;
  font-weight: normal;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.19;
  letter-spacing: normal;
  text-align: left;
  color: #1d1103;
  font-family: Muli;
}

.select-wrapper .select2-container--default .select2-results__option--highlighted[aria-selected] {
    background-color:#be8a4a;
    border-color: #be8a4a;
}

@media (max-width: 768px) {
  .select-wrapper .select2-container--open > .select2-dropdown {
    display: none;
  }
}




    </style>
  </head>
  <body class="select-wrapper">
    <div class="section section-select">
        <div class="wrapper">
            <div class="select">
                <h1 class="title-select">Select<br/> Your Region</h1>
                    <select class="js-select2" id="type">
                        <!-- <option>Select A</option>
                        <option>Select B</option>
                        <option>Select C</option>
                        <option>Select D</option>
                        <option>Select A</option>
                        <option>Select B</option>
                        <option>Select C</option>
                        <option>Select D</option>
                        <option>Select A</option>
                        <option>Select B</option>
                        <option>Select C</option>
                        <option>Select D</option>
                        <option>Select A</option>
                        <option>Select B</option>
                        <option>Select C</option>
                        <option>Select D</option> -->
                    </select>
                <div class="button-close"><i class="fas fa-times"></i></div>
            </div>
            <div class="clearfix">
                <button type="submit" class="loginbtn">CONTINUE</button>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'>
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js"></script>
    <script id="rendered-js">
    $(document).ready(function() {
        var isoCountries = [
          { id: 'VN', text: 'Viet Nam'},
          { id: 'MY', text: 'Malaysia'},
          { id: 'AF', text: 'Afghanistan'},
          { id: 'AX', text: 'Aland Islands'},
          { id: 'AL', text: 'Albania'},
          { id: 'DZ', text: 'Algeria'},
          { id: 'AS', text: 'American Samoa'},
          { id: 'AD', text: 'Andorra'},
          { id: 'AO', text: 'Angola'},
          { id: 'AI', text: 'Anguilla'},
          { id: 'AQ', text: 'Antarctica'},
          { id: 'AG', text: 'Antigua And Barbuda'},
          { id: 'AR', text: 'Argentina'},
          { id: 'AM', text: 'Armenia'},
          { id: 'AW', text: 'Aruba'},
          { id: 'AU', text: 'Australia'},
          { id: 'AT', text: 'Austria'},
          { id: 'AZ', text: 'Azerbaijan'},
          { id: 'BS', text: 'Bahamas'},
          { id: 'BH', text: 'Bahrain'},
          { id: 'BD', text: 'Bangladesh'},
          { id: 'BB', text: 'Barbados'},
          { id: 'BY', text: 'Belarus'},
          { id: 'BE', text: 'Belgium'},
          { id: 'BZ', text: 'Belize'},
          { id: 'BJ', text: 'Benin'},
          { id: 'BM', text: 'Bermuda'},
          { id: 'BT', text: 'Bhutan'},
          { id: 'BO', text: 'Bolivia'},
          { id: 'BA', text: 'Bosnia And Herzegovina'},
          { id: 'BW', text: 'Botswana'},
          { id: 'BV', text: 'Bouvet Island'},
          { id: 'BR', text: 'Brazil'},
          { id: 'IO', text: 'British Indian Ocean Territory'},
          { id: 'BN', text: 'Brunei Darussalam'},
          { id: 'BG', text: 'Bulgaria'},
          { id: 'BF', text: 'Burkina Faso'},
          { id: 'BI', text: 'Burundi'},
          { id: 'KH', text: 'Cambodia'},
          { id: 'CM', text: 'Cameroon'},
          { id: 'CA', text: 'Canada'},
          { id: 'CV', text: 'Cape Verde'},
          { id: 'KY', text: 'Cayman Islands'},
          { id: 'CF', text: 'Central African Republic'},
          { id: 'TD', text: 'Chad'},
          { id: 'CL', text: 'Chile'},
          { id: 'CN', text: 'China'},
          { id: 'CX', text: 'Christmas Island'},
          { id: 'CC', text: 'Cocos (Keeling) Islands'},
          { id: 'CO', text: 'Colombia'},
          { id: 'KM', text: 'Comoros'},
          { id: 'CG', text: 'Congo'},
          { id: 'CD', text: 'Congo}, Democratic Republic'},
          { id: 'CK', text: 'Cook Islands'},
          { id: 'CR', text: 'Costa Rica'},
          { id: 'CI', text: 'Cote D\'Ivoire'},
          { id: 'HR', text: 'Croatia'},
          { id: 'CU', text: 'Cuba'},
          { id: 'CY', text: 'Cyprus'},
          { id: 'CZ', text: 'Czech Republic'},
          { id: 'DK', text: 'Denmark'},
          { id: 'DJ', text: 'Djibouti'},
          { id: 'DM', text: 'Dominica'},
          { id: 'DO', text: 'Dominican Republic'},
          { id: 'EC', text: 'Ecuador'},
          { id: 'EG', text: 'Egypt'},
          { id: 'SV', text: 'El Salvador'},
          { id: 'GQ', text: 'Equatorial Guinea'},
          { id: 'ER', text: 'Eritrea'},
          { id: 'EE', text: 'Estonia'},
          { id: 'ET', text: 'Ethiopia'},
          { id: 'FK', text: 'Falkland Islands (Malvinas)'},
          { id: 'FO', text: 'Faroe Islands'},
          { id: 'FJ', text: 'Fiji'},
          { id: 'FI', text: 'Finland'},
          { id: 'FR', text: 'France'},
          { id: 'GF', text: 'French Guiana'},
          { id: 'PF', text: 'French Polynesia'},
          { id: 'TF', text: 'French Southern Territories'},
          { id: 'GA', text: 'Gabon'},
          { id: 'GM', text: 'Gambia'},
          { id: 'GE', text: 'Georgia'},
          { id: 'DE', text: 'Germany'},
          { id: 'GH', text: 'Ghana'},
          { id: 'GI', text: 'Gibraltar'},
          { id: 'GR', text: 'Greece'},
          { id: 'GL', text: 'Greenland'},
          { id: 'GD', text: 'Grenada'},
          { id: 'GP', text: 'Guadeloupe'},
          { id: 'GU', text: 'Guam'},
          { id: 'GT', text: 'Guatemala'},
          { id: 'GG', text: 'Guernsey'},
          { id: 'GN', text: 'Guinea'},
          { id: 'GW', text: 'Guinea-Bissau'},
          { id: 'GY', text: 'Guyana'},
          { id: 'HT', text: 'Haiti'},
          { id: 'HM', text: 'Heard Island & Mcdonald Islands'},
          { id: 'VA', text: 'Holy See (Vatican City State)'},
          { id: 'HN', text: 'Honduras'},
          { id: 'HK', text: 'Hong Kong'},
          { id: 'HU', text: 'Hungary'},
          { id: 'IS', text: 'Iceland'},
          { id: 'IN', text: 'India'},
          { id: 'ID', text: 'Indonesia'},
          { id: 'IR', text: 'Iran}, Islamic Republic Of'},
          { id: 'IQ', text: 'Iraq'},
          { id: 'IE', text: 'Ireland'},
          { id: 'IM', text: 'Isle Of Man'},
          { id: 'IL', text: 'Israel'},
          { id: 'IT', text: 'Italy'},
          { id: 'JM', text: 'Jamaica'},
          { id: 'JP', text: 'Japan'},
          { id: 'JE', text: 'Jersey'},
          { id: 'JO', text: 'Jordan'},
          { id: 'KZ', text: 'Kazakhstan'},
          { id: 'KE', text: 'Kenya'},
          { id: 'KI', text: 'Kiribati'},
          { id: 'KR', text: 'Korea'},
          { id: 'KW', text: 'Kuwait'},
          { id: 'KG', text: 'Kyrgyzstan'},
          { id: 'LA', text: 'Lao People\'s Democratic Republic'},
          { id: 'LV', text: 'Latvia'},
          { id: 'LB', text: 'Lebanon'},
          { id: 'LS', text: 'Lesotho'},
          { id: 'LR', text: 'Liberia'},
          { id: 'LY', text: 'Libyan Arab Jamahiriya'},
          { id: 'LI', text: 'Liechtenstein'},
          { id: 'LT', text: 'Lithuania'},
          { id: 'LU', text: 'Luxembourg'},
          { id: 'MO', text: 'Macao'},
          { id: 'MK', text: 'Macedonia'},
          { id: 'MG', text: 'Madagascar'},
          { id: 'MW', text: 'Malawi'},
          { id: 'MV', text: 'Maldives'},
          { id: 'ML', text: 'Mali'},
          { id: 'MT', text: 'Malta'},
          { id: 'MH', text: 'Marshall Islands'},
          { id: 'MQ', text: 'Martinique'},
          { id: 'MR', text: 'Mauritania'},
          { id: 'MU', text: 'Mauritius'},
          { id: 'YT', text: 'Mayotte'},
          { id: 'MX', text: 'Mexico'},
          { id: 'FM', text: 'Micronesia}, Federated States Of'},
          { id: 'MD', text: 'Moldova'},
          { id: 'MC', text: 'Monaco'},
          { id: 'MN', text: 'Mongolia'},
          { id: 'ME', text: 'Montenegro'},
          { id: 'MS', text: 'Montserrat'},
          { id: 'MA', text: 'Morocco'},
          { id: 'MZ', text: 'Mozambique'},
          { id: 'MM', text: 'Myanmar'},
          { id: 'NA', text: 'Namibia'},
          { id: 'NR', text: 'Nauru'},
          { id: 'NP', text: 'Nepal'},
          { id: 'NL', text: 'Netherlands'},
          { id: 'AN', text: 'Netherlands Antilles'},
          { id: 'NC', text: 'New Caledonia'},
          { id: 'NZ', text: 'New Zealand'},
          { id: 'NI', text: 'Nicaragua'},
          { id: 'NE', text: 'Niger'},
          { id: 'NG', text: 'Nigeria'},
          { id: 'NU', text: 'Niue'},
          { id: 'NF', text: 'Norfolk Island'},
          { id: 'MP', text: 'Northern Mariana Islands'},
          { id: 'NO', text: 'Norway'},
          { id: 'OM', text: 'Oman'},
          { id: 'PK', text: 'Pakistan'},
          { id: 'PW', text: 'Palau'},
          { id: 'PS', text: 'Palestinian Territory}, Occupied'},
          { id: 'PA', text: 'Panama'},
          { id: 'PG', text: 'Papua New Guinea'},
          { id: 'PY', text: 'Paraguay'},
          { id: 'PE', text: 'Peru'},
          { id: 'PH', text: 'Philippines'},
          { id: 'PN', text: 'Pitcairn'},
          { id: 'PL', text: 'Poland'},
          { id: 'PT', text: 'Portugal'},
          { id: 'PR', text: 'Puerto Rico'},
          { id: 'QA', text: 'Qatar'},
          { id: 'RE', text: 'Reunion'},
          { id: 'RO', text: 'Romania'},
          { id: 'RU', text: 'Russian Federation'},
          { id: 'RW', text: 'Rwanda'},
          { id: 'BL', text: 'Saint Barthelemy'},
          { id: 'SH', text: 'Saint Helena'},
          { id: 'KN', text: 'Saint Kitts And Nevis'},
          { id: 'LC', text: 'Saint Lucia'},
          { id: 'MF', text: 'Saint Martin'},
          { id: 'PM', text: 'Saint Pierre And Miquelon'},
          { id: 'VC', text: 'Saint Vincent And Grenadines'},
          { id: 'WS', text: 'Samoa'},
          { id: 'SM', text: 'San Marino'},
          { id: 'ST', text: 'Sao Tome And Principe'},
          { id: 'SA', text: 'Saudi Arabia'},
          { id: 'SN', text: 'Senegal'},
          { id: 'RS', text: 'Serbia'},
          { id: 'SC', text: 'Seychelles'},
          { id: 'SL', text: 'Sierra Leone'},
          { id: 'SG', text: 'Singapore'},
          { id: 'SK', text: 'Slovakia'},
          { id: 'SI', text: 'Slovenia'},
          { id: 'SB', text: 'Solomon Islands'},
          { id: 'SO', text: 'Somalia'},
          { id: 'ZA', text: 'South Africa'},
          { id: 'GS', text: 'South Georgia And Sandwich Isl.'},
          { id: 'ES', text: 'Spain'},
          { id: 'LK', text: 'Sri Lanka'},
          { id: 'SD', text: 'Sudan'},
          { id: 'SR', text: 'Suriname'},
          { id: 'SJ', text: 'Svalbard And Jan Mayen'},
          { id: 'SZ', text: 'Swaziland'},
          { id: 'SE', text: 'Sweden'},
          { id: 'CH', text: 'Switzerland'},
          { id: 'SY', text: 'Syrian Arab Republic'},
          { id: 'TW', text: 'Taiwan'},
          { id: 'TJ', text: 'Tajikistan'},
          { id: 'TZ', text: 'Tanzania'},
          { id: 'TH', text: 'Thailand'},
          { id: 'TL', text: 'Timor-Leste'},
          { id: 'TG', text: 'Togo'},
          { id: 'TK', text: 'Tokelau'},
          { id: 'TO', text: 'Tonga'},
          { id: 'TT', text: 'Trinidad And Tobago'},
          { id: 'TN', text: 'Tunisia'},
          { id: 'TR', text: 'Turkey'},
          { id: 'TM', text: 'Turkmenistan'},
          { id: 'TC', text: 'Turks And Caicos Islands'},
          { id: 'TV', text: 'Tuvalu'},
          { id: 'UG', text: 'Uganda'},
          { id: 'UA', text: 'Ukraine'},
          { id: 'AE', text: 'United Arab Emirates'},
          { id: 'GB', text: 'United Kingdom'},
          { id: 'US', text: 'United States'},
          { id: 'UM', text: 'United States Outlying Islands'},
          { id: 'UY', text: 'Uruguay'},
          { id: 'UZ', text: 'Uzbekistan'},
          { id: 'VU', text: 'Vanuatu'},
          { id: 'VE', text: 'Venezuela'},
          { id: 'VG', text: 'Virgin Islands}, British'},
          { id: 'VI', text: 'Virgin Islands}, U.S.'},
          { id: 'WF', text: 'Wallis And Futuna'},
          { id: 'EH', text: 'Western Sahara'},
          { id: 'YE', text: 'Yemen'},
          { id: 'ZM', text: 'Zambia'},
          { id: 'ZW', text: 'Zimbabwe'}
      ];
      function formatCountry (country) {
        if (!country.id) { return country.text; }
        var $country = $(
          '<span class="flag-icon flag-icon-'+ country.id.toLowerCase() +' flag-icon-squared"></span>' +
          '<span class="flag-text">'+ country.text+"</span>"
        );
        return $country;
      };
      $(".js-select2").select2({
        placeholder: "Select a country",
        templateResult: formatCountry,
        templateSelection: formatCountry,
        data: isoCountries,
        maximumSelectionSize: 7
      });
      $('.section-select .button-close').on('click', function () {
        $('.js-select2').select2('close');
      });

      $('.js-select2').on('select2:open', function() {
          $('.select2-search input').prop('focus', -1);
          $("#select option[value='0']").remove();
          $('.select2-dropdown').hide().slideDown("fast", "easeInOutQuint");
      });


      if($( window ).width() < 767) {
        var heightMobile = $( window ).height();
        alert(heightMobile);
        $('.select-wrapper').css('height', heightMobile);
      }

      var dropdownRegion = $('.select-wrapper .select2-container--open > .select2-dropdown');
      var btnOpen = $('.select-wrapper label.select2-selection__rendered');
      var btnClose = $('.select-wrapper .button-close');

      btnOpen.on('click', function() {
        dropdownRegion.fadeIn(300);
      });

      btnClose.on('click', function() {
        dropdownRegion.fadeOut(300);
      });

    });
    </script>
  </body>
</html>