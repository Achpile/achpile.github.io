<?php

/***********************************************************************
    * set_section_steam

***********************************************************************/
function set_section_steam($id) {
	set_subsection_header('Get it on Steam');

echo <<<HTMLBLOCK

<iframe src="https://store.steampowered.com/widget/$id/" frameborder="0" width="646" height="190"></iframe>

HTMLBLOCK;

	set_subsection_footer();
}

?>
