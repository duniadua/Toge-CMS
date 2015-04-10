<!-- Bootstrap core JavaScript
 ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo base_url() ?>asset/js/jquery-1.11.2.min"></script>
<script src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/jquery.datetimepicker.js"></script>
<script src="<?php echo base_url() ?>asset/js/jquery.zeroclipboard.js"></script>
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>tinymce.init({selector: 'textarea'});</script>
<script>
    jQuery("#publishdt").datetimepicker({
        format: 'Y-m-d H:i:s',
        inline: false
    });
</script>
<script>
    jQuery(document).ready(function($) {
        
        
        $("body").on("beforecopy", ".zclip", function(e) {                        
            e.clipboardData.setData("text/plain", $("#urlID").val());            
        });
    });
</script>
</body>
</html>