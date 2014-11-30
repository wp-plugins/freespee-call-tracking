<div class="wrap">
  <h2>Freespee Call Tracking</h2>
  <form method="post" action="options.php"> 
     <?php @settings_fields('freespee_call_tracking-group'); ?>
     <?php @do_settings_fields('freespee_call_tracking-group'); ?>

     <table class="form-table">  
        <tr valign="top">
          <th scope="row"><label for="fs_advid">Customer ID</label></th>
          <td><input type="text" name="fs_advid" id="fs_advid" style="width: 300px;" value="<?php echo @get_option('fs_advid'); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row"><label for="fs_conf_append">Additional JS config</label></th>
          <td><textarea name="fs_conf_append" id="fs_conf_append" style="width: 300px;" rows="4" /><?php echo @get_option('fs_conf_append'); ?></textarea></td>
        </tr>
     </table>

     <?php @submit_button(); ?>

     <p>Your customer ID can be found in your <a href="http://analytics.freespee.com" target="_blank">Freespee account</a>. If you need help, please follow our <a href="http://support.freespee.com/hc/en-us/articles/201962881-Wordpress-plugin" target="_blank">Wordpress plugin guide</a> to get going!</p>

     <p>For information on how to enable Google Analytics integration, please <a href="http://support.freespee.com/hc/en-us/articles/200527862-Enabling-Google-Analytics-integration" target="_blank">follow this guide</a>.
  </form>
</div>
