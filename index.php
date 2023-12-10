<?php

require_once "functions.php";

route('/about', 'about');
route('/', 'about');
route('/resume', 'resume');
route('/contacts', 'contacts');
route('/interesting', 'interesting');

route('/ajax/about-popup', 'about-popup');

?>