<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Apply Assignment Standards
 *
 * @package    tool_applyassignmentstandards
 * @copyright  2017 Colin Perepelken {@link https://wcln.ca}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

require_once(__DIR__ . '/../../../config.php');
require_once($CFG->libdir.'/adminlib.php');


/**
 * Applies assignment standards to DB
 * @param $course
 * @param $password
 * @return void
 */
function tool_applyassignmentstandards_set_assignment_standards($params) {
    global $DB;

    // feedback comments and files
    $feedback_comments_sql = "UPDATE {assign_plugin_config}
                     SET value = ?
                     WHERE plugin = 'comments'
                     AND subtype = 'assignfeedback'
                     AND name = 'enabled'";
    $DB->execute($feedback_comments_sql, array($params['feedbackcomments']));

    $feedback_files_sql = "UPDATE {assign_plugin_config}
                     SET value = ?
                     WHERE plugin = 'file'
                     AND subtype = 'assignfeedback'
                     AND name = 'enabled'";
    $DB->execute($feedback_files_sql, array($params['feedbackfiles']));

    unset($params['feedbackcomments']);
    unset($params['feedbackfiles']);

    $sql = 'UPDATE {assign}
             SET allowsubmissionsfromdate=?,
                 duedate=?,
                 cutoffdate=?,
                 alwaysshowdescription=?,
                 submissiondrafts=?,
                 requiresubmissionstatement=?,
                 attemptreopenmethod=?,
                 maxattempts=?,
                 teamsubmission=?,
                 requireallteammemberssubmit=?,
                 preventsubmissionnotingroup=?,
                 teamsubmissiongroupingid=?,
                 sendnotifications=?,
                 sendlatenotifications=?,
                 sendstudentnotifications=?
                 completionpass=?,
                 completion=?,
                 completiongradeitemnumber=?,
                 completionview=?,
                 completionexpected=?
                 WHERE {course_modules}.instance={assign}.id
                 AND {assign}.course={course_modules}.course';

    $DB->execute($sql, $params);

}

/**
 * Convert from form object to params array
 * @param $fromform
 * @return array
 */
function tool_applyassignmentstandards_fromfrom_to_params($fromform) {
    $params = array();


}
