<?php if(!defined("__XE__"))exit;
if($__Context->prev_document || $__Context->next_document){ ?><div class="pn pnPost">
	<?php if($__Context->prev_document){ ?>
		<a href="<?php echo getUrl('document_srl',$__Context->prev_document->document_srl) ?>" class="prev"><?php echo $__Context->prev_document->getTitle() ?></a>
		<?php if($__Context->next_document){ ?><span class="line btm"></span><?php } ?>
	<?php } ?>
	<?php if($__Context->next_document){ ?>
		<?php if($__Context->prev_document){ ?><span class="line top"></span><?php } ?>
		<a href="<?php echo getUrl('document_srl',$__Context->next_document->document_srl) ?>" class="next"><?php echo $__Context->next_document->getTitle() ?></a>
	<?php } ?>
	<span class="end top"></span>
	<span class="end btm"></span>
</div><?php } ?>
