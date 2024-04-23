<?php
/*
Template Name: Theme Settings
*/
 ?>
<div class="container">
    <h1>Theme Settings</h1>
    <form method="post" action="options.php" enctype="multipart/form-data">
        <?php settings_errors(); ?>
        <?php
        settings_fields('theme-settings');
        do_settings_sections('theme-settings');
        ?>

        <h2>Logo</h2>
        <div class="form-group">
            <label for="logo">Upload Logo:</label>
            <input type="file" id="logo" name="logo_upload">
            <?php
            $logo_url = esc_attr(get_option('logo'));
            if (!empty($logo_url)) {
                echo '<img src="' . $logo_url . '" alt="Logo" style="max-width: 200px; display: block; margin-top: 10px;">';
            }
            ?>
            <p class="description">Upload your logo image here.</p>
        </div>

        <h2>Contact Information</h2>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" value="<?php echo esc_attr(get_option('phone')); ?>">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea id="address" name="address"><?php echo esc_textarea(get_option('address')); ?></textarea>
        </div>
        <div class="form-group">
            <label for="fax">Fax Number:</label>
            <input type="text" id="fax" name="fax" value="<?php echo esc_attr(get_option('fax')); ?>">
        </div>

        <h2>Social Media Links</h2>
        <div class="form-group">
            <label for="facebook">Facebook:</label>
            <input type="text" id="facebook" name="facebook" value="<?php echo esc_attr(get_option('facebook')); ?>">
        </div>
        <div class="form-group">
            <label for="twitter">Twitter:</label>
            <input type="text" id="twitter" name="twitter" value="<?php echo esc_attr(get_option('twitter')); ?>">
        </div>
        <div class="form-group">
            <label for="linkedin">LinkedIn:</label>
            <input type="text" id="linkedin" name="linkedin" value="<?php echo esc_attr(get_option('linkedin')); ?>">
        </div>
        <div class="form-group">
            <label for="pinterest">Pinterest:</label>
            <input type="text" id="pinterest" name="pinterest" value="<?php echo esc_attr(get_option('pinterest')); ?>">
        </div>

        <?php submit_button(); ?>
    </form>
</div>