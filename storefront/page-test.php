<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.css">
  <style>
    .alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
  width: 33.333%
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 700;
}

.alert-dismissible {
  padding-right: 4rem;
}

.alert-dismissible .close {
  position: absolute;
  top: 0;
  right: 0;
  padding: 0.75rem 1.25rem;
  color: inherit;
}

.alert-primary {
  color: #004085;
  background-color: #cce5ff;
  border-color: #b8daff;
}

.alert-primary hr {
  border-top-color: #9fcdff;
}

.alert-primary .alert-link {
  color: #002752;
}

.alert-secondary {
  color: #383d41;
  background-color: #e2e3e5;
  border-color: #d6d8db;
}

.alert-secondary hr {
  border-top-color: #c8cbcf;
}

.alert-secondary .alert-link {
  color: #202326;
}

.alert-success {
  color: #155724;
  background-color: #d4edda;
  border-color: #c3e6cb;
}

.alert-success hr {
  border-top-color: #b1dfbb;
}

.alert-success .alert-link {
  color: #0b2e13;
}

.alert-info {
  color: #0c5460;
  background-color: #d1ecf1;
  border-color: #bee5eb;
}

.alert-info hr {
  border-top-color: #abdde5;
}

.alert-info .alert-link {
  color: #062c33;
}

.alert-warning {
  color: #856404;
  background-color: #fff3cd;
  border-color: #ffeeba;
}

.alert-warning hr {
  border-top-color: #ffe8a1;
}

.alert-warning .alert-link {
  color: #533f03;
}

.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb;
}

.alert-danger hr {
  border-top-color: #f1b0b7;
}

.alert-danger .alert-link {
  color: #491217;
}

.alert-light {
  color: #818182;
  background-color: #fefefe;
  border-color: #fdfdfe;
}

.alert-light hr {
  border-top-color: #ececf6;
}

.alert-light .alert-link {
  color: #686868;
}

.alert-dark {
  color: #1b1e21;
  background-color: #d6d8d9;
  border-color: #c6c8ca;
}

.alert-dark hr {
  border-top-color: #b9bbbe;
}

.alert-dark .alert-link {
  color: #040505;
}

button.bg-primary:hover,
button.bg-primary:focus {
  background-color: #0062cc !important;
}

.bg-secondary {
  background-color: #6c757d !important;
}

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #545b62 !important;
}

.bg-success {
  background-color: #28a745 !important;
}

a.bg-success:hover, a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
  background-color: #1e7e34 !important;
}

.bg-info {
  background-color: #17a2b8 !important;
}

a.bg-info:hover, a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #117a8b !important;
}

.bg-warning {
  background-color: #ffc107 !important;
}

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #d39e00 !important;
}

.bg-danger {
  background-color: #dc3545 !important;
}

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #bd2130 !important;
}

.bg-light {
  background-color: #f8f9fa !important;
}

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #dae0e5 !important;
}

.bg-dark {
  background-color: #343a40 !important;
}

a.bg-dark:hover, a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: #1d2124 !important;
}

button {
  border-radius: 0;
}

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
input {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

select {
  word-wrap: normal;
}

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

button:not(:disabled),
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled) {
  cursor: pointer;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

button:focus {
  outline: none;
  box-shadow: none;
}

@media screen and (max-width: 768px) {
    .alert {
      width: 100%;
    }
  }

  </style>
</head>
<body>

<div class="container">
    <button class="btn btn-success" onclick="successClick()">Success</button>
    <button class="btn btn-info" onclick="infoClick()">Information</button>
    <button class="btn btn-warning" onclick="warningClick()">Warning</button>
    <button class="btn btn-danger" onclick="dangerClick()">Danger</button>
    <button class="btn btn-primary" onclick="primaryClick()">Primary</button>
    <button class="btn btn-default" onclick="defaultClick()">Default</button>
    <button class="btn btn-link"
            onclick="linkClick('test title','message','https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js')">
        Link
    </button>
</div>
<script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type='text/javascript' src="https://cdn.jsdelivr.net/npm/bootstrap-notify@3.1.3/bootstrap-notify.min.js "></script>
<script type='text/javascript' src='<?php echo get_theme_file_uri() ?>/assets/js/store-child.js?ver=5.2'></script>
<script>

    var successClick = function (title, message, url, target) {
        if (title === '') {
            title = 'Success';
        }
        if (message === '') {
            message = 'Default Message';
        }
        if (url === '') {

        }
        if (target === '') {
            target = '_blank';
        }

        $.notify({
            // options
            title: '<strong>' + title + '</strong>',
            message: "<br>" + message,
            icon: 'glyphicon glyphicon-ok',
            url: url,
            target: target,
        }, {
            // settings
            element: 'body',
            //position: null,
            type: "success",
            //allow_dismiss: true,
            //newest_on_top: false,
            showProgressbar: false,
            placement: {
                from: "top",
                align: "right"
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 3300,
            timer: 1000,
            url_target: '_blank',
            mouse_over: null,
            animate: {
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutRight'
            },
            onShow: null,
            onShown: null,
            onClose: null,
            onClosed: null,
            icon_type: 'class',
        });
    }

    var infoClick = function (title, message, url, target) {
        if (title === '') {
            title = 'Info';
        }
        if (message === '') {
            message = 'Default Message';
        }
        if (url === '') {

        }
        if (target === '') {
            target = '_blank';
        }

        $.notify({
            // options
            title: '<strong>' + title + '</strong>',
            message: "<br>" + message,
            icon: 'glyphicon glyphicon-ok',
            url: url,
            target: target,
        }, {
            // settings
            element: 'body',
            position: null,
            type: "info",
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: false,
            placement: {
                from: "top",
                align: "right"
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 3300,
            timer: 1000,
            url_target: '_blank',
            mouse_over: null,
            animate: {
                enter: 'animated bounceInDown',
                exit: 'animated bounceOutUp'
            },
            onShow: null,
            onShown: null,
            onClose: null,
            onClosed: null,
            icon_type: 'class',
        });
    }

    var warningClick = function (title, message, url, target) {
        if (title === '') {
            title = 'Warning';
        }
        if (message === '') {
            message = 'Default Message';
        }
        if (url === '') {

        }
        if (target === '') {
            target = '_blank';
        }

        $.notify({
            // options
            title: '<strong>' + title + '</strong>',
            message: "<br>" + message,
            icon: 'glyphicon glyphicon-ok',
            url: url,
            target: target,
        }, {
            // settings
            element: 'body',
            position: null,
            type: "warning",
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: false,
            placement: {
                from: "top",
                align: "right"
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 3300,
            timer: 1000,
            url_target: '_blank',
            mouse_over: null,
            animate: {
                enter: 'animated bounceIn',
                exit: 'animated bounceOut'
            },
            onShow: null,
            onShown: null,
            onClose: null,
            onClosed: null,
            icon_type: 'class',
        });
    }

    var dangerClick = function (title, message, url, target) {
        if (title === '') {
            title = 'Danger';
        }
        if (message === '') {
            message = 'Default Message';
        }
        if (url === '') {

        }
        if (target === '') {
            target = '_blank';
        }

        $.notify({
            // options
            title: '<strong>' + title + '</strong>',
            message: "<br>" + message,
            icon: 'glyphicon glyphicon-ok',
            url: url,
            target: target,
        }, {
            // settings
            element: 'body',
            position: null,
            type: "danger",
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: false,
            placement: {
                from: "top",
                align: "right"
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 3300,
            timer: 1000,
            url_target: '_blank',
            mouse_over: null,
            animate: {
                enter: 'animated flipInY',
                exit: 'animated flipOutX'
            },
            onShow: null,
            onShown: null,
            onClose: null,
            onClosed: null,
            icon_type: 'class',
        });
    }

    var primaryClick = function (title, message, url, target) {
        if (title === '') {
            title = 'Primary';
        }
        if (message === '') {
            message = 'Default Message';
        }
        if (url === '') {

        }
        if (target === '') {
            target = '_blank';
        }

        $.notify({
            // options
            title: '<strong>' + title + '</strong>',
            message: "<br>" + message,
            icon: 'glyphicon glyphicon-ok',
            url: url,
            target: target,
        }, {
            // settings
            element: 'body',
            position: null,
            type: "success",
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: false,
            placement: {
                from: "top",
                align: "right"
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 3300,
            timer: 1000,
            url_target: '_blank',
            mouse_over: null,
            animate: {
                enter: 'animated lightSpeedIn',
                exit: 'animated lightSpeedOut'
            },
            onShow: null,
            onShown: null,
            onClose: null,
            onClosed: null,
            icon_type: 'class',
        });
    }

    var defaultClick = function (title, message, url, target) {
        if (title === '') {
            title = 'Default';
        }
        if (message === '') {
            message = 'Default Message';
        }
        if (url === '') {

        }
        if (target === '') {
            target = '_blank';
        }

        $.notify({
            // options
            title: '<strong>' + title + '</strong>',
            message: "<br>" + message,
            icon: 'glyphicon glyphicon-ok',
            url: url,
            target: target,
        }, {
            // settings
            element: 'body',
            position: null,
            type: "warning",
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: false,
            placement: {
                from: "top",
                align: "right"
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 3300,
            timer: 1000,
            url_target: '_blank',
            mouse_over: null,
            animate: {
                enter: 'animated rollIn',
                exit: 'animated rollOut'
            },
            onShow: null,
            onShown: null,
            onClose: null,
            onClosed: null,
            icon_type: 'class',
        });
    }

    var linkClick = function (title, message, url, target) {
        if (title === '') {
            title = 'Link';
        }
        if (message === '') {
            message = 'Default Message';
        }
        if (url === '') {

        }
        if (target === '') {
            target = '_blank';
        }

        $.notify({
            // options
            title: '<strong>' + title + '</strong>',
            message: "<br>" + message,
            icon: 'glyphicon glyphicon-ok',
            url: url,
            target: target,
        }, {
            // settings
            element: 'body',
            position: null,
            type: "danger",
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: false,
            placement: {
                from: "top",
                align: "right"
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 3300,
            timer: 1000,
            url_target: '_blank',
            mouse_over: null,
            animate: {
                enter: 'animated zoomInDown',
                exit: 'animated zoomOutUp'
            },
            onShow: null,
            onShown: null,
            onClose: null,
            onClosed: null,
            icon_type: 'class',
        });
    }


</script>
<?php get_footer(); ?>
