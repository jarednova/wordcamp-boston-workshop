<?php
	$start = TimberHelper::start_timer();
	$data = Timber::get_context();
	$data['posts'] = Timber::get_posts();
	Timber::render('index.twig', $data);
	echo TimberHelper::stop_timer($start);