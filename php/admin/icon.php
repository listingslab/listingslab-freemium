<div id="admin_icon" class="admin_section"><div class="pad_ten">
	<h1>MicroSite Icon</h1>
	<?php
		$i = get_theme_mod ('icon', get_template_directory_uri().'/img/png/system/add_logo.png');
	?>
	<div id="icon_instructions">
	<p><a id="choose-from-library-link" href="#"
	    data-update-link="<?php print get_admin_url();?>admin.php?page=FREEmium&action=update_icon" 
	    data-choose="<?php esc_attr_e( 'Choose MicroSite Icon' ); ?>"
	    data-update="<?php esc_attr_e( 'Set MicroSite Icon' ); ?>">
	    <img id="admin_icon_img" src="<?php print $i;?>">
	</a>
Your MicroSite icon is vital. It's not just the
logo at the top left of the website, but also the default
image used for all kinds of things, from the favicon to
the image used when pages are shared to Google or Facebook.</p>
<p>Square images work best, ideally around 250px in size. 
If possible you should use a nice, clean version of 
a logo which is still recognisable when shrunk to tiny size.</p>
<p>Click on the icon to choose a different one.</p>
	</div>
	<input id="icon_url" type="hidden" name="icon_url" value="<?php print $i;?>" />
	<div style="clear:both; height:10px;"></div>
	<div class="admin_save">
		<a href="<?php print get_admin_url(get_current_blog_id());?>admin.php?page=FREEmium" id="admin_icon_revert" class="button">CANCEL</a>
		<a href="#" id="admin_icon_save" class="button-primary">SAVE</a>
	</div>
</div></div>