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
    position: relative;
  }
  .section .block-image-logo{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 75px;
    height: 85px;
    transition: 0.3s all ease;
  }
  .section .block-image-logo-loaded{
    top: 120px;
  }
}

  .select-popup{
  padding: 0 16px;
  position: absolute;
  top: 215px;
  width: 100%;
  display: none;
  }
  .block-country{
    height: 54px;
    background: rgba(114, 68, 10, 0.6);
    border-radius: 4px;
    display: flex;
    align-items: center;
    padding-left: 30px;
    margin-bottom: 8px;
  }
  .block-country img{
    width: 16px;
    height: 16px;
  }
  .block-country p{
    margin-bottom: 0;
    line-height: 16px;
    padding-left: 15px;
    text-transform: capitalize;
  }
  .block-country-click{
    background: rgb(222, 176, 118,0.61);
  }
}




    </style>
  </head>
  <body class="select-wrapper">
   
    <div class="section section-select">
      <div class="block-image-logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Group-255.png">
      </div>
       <div class="select-popup">
         <div class="block-country vn">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vietnam.png">
            <p class="text">viet nam</p>
        </div>
        <div class="block-country sgp">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/001-singapore.png">
            <p class="text">singapore</p>
        </div>
        <div class="block-country hk">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/002-hong-kong.png">
            <p class="text">hong kong</p>
        </div>
        <div class="block-country ms">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/003-malaysia.png">
            <p class="text">malaysia</p>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'>
</script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js"></script> -->
    <script>
    $(document).ready(function() {
      $(window).on('load', function (){
        setTimeout(function(){
          $('.block-image-logo').addClass('block-image-logo-loaded');
          $('.select-popup').fadeIn(500);
        }, 1000);
      });      
      $('.block-country').click(function(){
        $(this).parent('.select-popup').find('.block-country').removeClass('block-country-click');
        $(this).addClass('block-country-click');
      });
    });
    </script>
  </body>
</html>