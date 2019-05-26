<?php get_header(); ?>



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

<?php get_footer(); ?>
