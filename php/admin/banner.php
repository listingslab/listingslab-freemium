<div id="admin_banner" class="admin_section"><div class="pad_ten">
	<h1>Site wide banner</h1>
	<div id="banner_instructions">
		<p>Want to use a site-wide banner? You can add a 
		standard sized banner of 728x90 px here. The image 
		will be scaled responsively.</p>
	</div>
	<?php
		$b = get_theme_mod ('use_banner', 'no');
	?>
	<input type="checkbox" id="use_banner_id" name="use_banner" value="yes"> Use banner<br>
</div></div>