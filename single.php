<?php
	$data = Timber::get_context();
	$data['menu'] = new TimberMenu(2);
	//$data['headline'] = get_the_title();
	$post = new TimberPost();
	$data['post'] = $post;
	$data['comment_form'] = TimberHelper::get_comment_form();
	Timber::render(array('single-'.$post->ID.'.twig', 'single-'.$post->post_type.'.twig', 'single.twig'), $data);