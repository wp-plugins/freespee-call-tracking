<script type="text/javascript">
  var __fs_conf = __fs_conf || [];
  __fs_conf.push(['setAdv',{'id': '<?php echo @get_option('fs_advid'); ?>'}]);
<?php
  if (@get_option('fs_conf_append')) {
    echo @get_option('fs_conf_append');
    echo "\n";
  }
?>
</script>
