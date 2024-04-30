<?php 
/*Template Name: Form Submission */
get_header();?>

<div class="container" style="margin-top:50px; width:500px;">
<form id="my-form" method="post">
    <!-- Form fields -->
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <textarea name="message" placeholder="Message" required></textarea>
    <button type="submit">Submit</button>
</form>

<?php wp_enqueue_script( 'my-ajax-script' ); ?>
</div>

<?php 
get_footer();
