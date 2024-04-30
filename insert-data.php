
<?php
/*
 * Template Name: Insert Data
 */
get_header()
    ?>
<form id="custom-form">
    <input type="text" id="name" name="name" placeholder="Name">
    <input type="email" id="email" name="email" placeholder="Email">
    <button id="submit-form" type="submit">Submit</button>
    <div id="success-message" style="display: none;"></div>

</form>
<?php get_footer() ?>