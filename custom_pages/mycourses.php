<?php

require_once("../config.php");
require_once($CFG->dirroot. '/course/lib.php');
require_once($CFG->libdir. '/coursecatlib.php');

$site = get_site();

$context = get_context_instance(CONTEXT_SYSTEM);

$PAGE->set_url('/course/index.php');
$PAGE->set_context($context);

$PAGE->set_pagelayout('coursecategory');
$courserenderer = $PAGE->get_renderer('core', 'course');

$PAGE->set_heading($site->fullname);
$course_array = enrol_get_users_courses($USER->id);

echo $OUTPUT->header();
echo $OUTPUT->skip_link_target();
?>

<div class="courses">
    <?php
        foreach($course_array as $course) {
            //var_dump($course);
            $link = $CFG->wwwroot . '/course/view.php?id=' . $course->id;
            echo '<div class="coursebox clearfix odd first collapsed">
                    <div class="info">
                        <div class="coursename"><a href="'.$link.'">'.$course->fullname.'</a></div>
                    </div>
                  </div>';
        }
    ?>
</div>


<?php echo $OUTPUT->footer(); ?>