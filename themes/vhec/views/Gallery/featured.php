<?php
	$t_list = new ca_lists();
?>




<div class='container'>
	<div class='row'>
		<div class='col-sm-12'>
			<h1>Featured Galleries</h1>
		</div>
	</div>
	<div class='row'>
		<div class='col-sm-6'>
<?php
			$vn_thematic_type_id = $t_list->getItemIDFromList("lightbox_cat", "thematic_guide");
			print "<div class='featuredGallery'>";
			print "<div class='featuredImage'>".caGetThemeGraphic($this->request, 'museum.jpg')."</div>";
			print "<div class='featuredTitle'>".caNavLink($this->request, 'Thematic Guides', '', '', 'Gallery', 'Index', array('theme' => $vn_thematic_type_id))."</div>";
			print "</div>";
?>		
		</div>
		<div class='col-sm-6'>
<?php
			$vn_timeline_type_id = $t_list->getItemIDFromList("lightbox_cat", "timeline");
			print "<div class='featuredGallery'>";
			print "<div class='featuredImage'>".caGetThemeGraphic($this->request, 'archives.jpg')."</div>";
			print "<div class='featuredTitle'>".caNavLink($this->request, 'Timelines', '', '', 'Gallery', 'Index', array('theme' => $vn_timeline_type_id))."</div>";
			print "</div>";
?>		
		</div>	
		<div class='col-sm-6'>
<?php
			$vn_spotlight_type_id = $t_list->getItemIDFromList("lightbox_cat", "spotlight");
			print "<div class='featuredGallery'>";
			print "<div class='featuredImage'>".caGetThemeGraphic($this->request, 'testimony.jpg')."</div>";
			print "<div class='featuredTitle'>".caNavLink($this->request, 'Collection Spotlights', '', '', 'Gallery', 'Index', array('theme' => $vn_spotlight_type_id))."</div>";
			print "</div>";
?>		
		</div>	
		<div class='col-sm-6'>
<?php
			$vn_in_focus_type_id = $t_list->getItemIDFromList("lightbox_cat", "in_focus");
			print "<div class='featuredGallery'>";
			print "<div class='featuredImage'>".caGetThemeGraphic($this->request, 'library.jpg')."</div>";
			print "<div class='featuredTitle'>".caNavLink($this->request, 'In Focus', '', '', 'Gallery', 'Index', array('theme' => $vn_in_focus_type_id))."</div>";
			print "</div>";
?>		
		</div>				
	</div>
</div>