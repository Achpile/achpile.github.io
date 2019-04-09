<?php

	include('assets/include/all.php');

//######################################################################

	set_header('Dispersio 2');
	set_menu();

//######################################################################

	set_project_status('InDev');
	set_section_header('Dispersio 2');

//######################################################################

	set_subsection_header('Description');
	set_subsection_text('Dispersio 2 is a retro-styled adventure platformer written in C++ with SFML');
	set_subsection_footer();

//######################################################################

	set_subsection_header('Controls');
	set_control('A'         , 'move left');
	set_control('D'         , 'move right');
	set_control('W'         , 'up');
	set_control('S'         , 'down');
	set_control('SPACE'     , 'jump');
	set_control('R'         , 'retry');
	set_control('ESC'       , 'menu');
	set_subsection_footer();

//######################################################################

	set_deps_start();
	set_deps('SFML'   , 'http://sfml-dev.org/');
	set_deps('Jansson', 'http://www.digip.org/jansson/');
	set_deps_end();

//######################################################################

	set_footer();

?>
