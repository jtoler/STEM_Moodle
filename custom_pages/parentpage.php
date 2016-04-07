<?php
require_once(dirname(__FILE__) . '/../config.php');

require_login();

// Start setting up the page
$params = array();
$PAGE->set_context(context_user::instance($USER->id));
$PAGE->set_url('/custom_pages/parentpage.php', $params);
$PAGE->set_pagelayout('standard');
$PAGE->set_pagetype('my-index');
$PAGE->blocks->add_region('content');
$PAGE->set_subpage($currentpage->id);
$PAGE->set_title($strmymoodle);
$PAGE->set_heading(fullname($USER));

echo $OUTPUT->header();

//echo $OUTPUT->custom_block_region('content');
// Actual content goes here
echo "Hello World";


echo $OUTPUT->footer();
