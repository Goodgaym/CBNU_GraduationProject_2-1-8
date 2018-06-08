<?php if(!defined("__XE__"))exit;?><script>
    <?php if($__Context->url){ ?>
        top.location.href = "<?php echo $__Context->url ?>";
    <?php }else{ ?>
	var url = top.location.href.replace(/#(.+)$/i,'');
	top.location = url;
    <?php } ?>
</script>
