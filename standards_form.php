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
 * Apply Assignment Standards form
 *
 * @package    tool_applyassignmentstandards
 * @copyright  2017 Colin Perepelken {@link https://wcln.ca}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

require_once($CFG->libdir.'/formslib.php');
require_once(__DIR__.'/locallib.php');


/**
 * Definition of standards form.
 *
 * @copyright
 * @license
 */
class standards_form extends moodleform {

    /**
     * Define standards form.
     */
    protected function definition() {
        global $CFG;

        $mform = $this->_form;




        $mform->addElement('text', 'allowsubmissionsfromdate', 'allowsubmissionsfromdate');
        $mform->setType('allowsubmissionsfromdate', PARAM_RAW);
        $mform->setDefault('allowsubmissionsfromdate', 0);

        $mform->addElement('text', 'duedate', 'duedate');
        $mform->setType('duedate', PARAM_RAW);
        $mform->setDefault('duedate', 0);

        $mform->addElement('text', 'cutoffdate', 'cutoffdate');
        $mform->setType('cutoffdate', PARAM_RAW);
        $mform->setDefault('cutoffdate', 0);

        $mform->addElement('text', 'alwaysshowdescription', 'alwaysshowdescription');
        $mform->setType('alwaysshowdescription', PARAM_RAW);
        $mform->setDefault('alwaysshowdescription', 0);

        $mform->addElement('text', 'feedbackcomments', 'feedbackcomments');
        $mform->setType('feedbackcomments', PARAM_RAW);
        $mform->setDefault('feedbackcomments', 1);

        $mform->addElement('text', 'feedbackfiles', 'feedbackfiles');
        $mform->setType('feedbackfiles', PARAM_RAW);
        $mform->setDefault('feedbackfiles', 1);

        $mform->addElement('text', 'submissiondrafts', 'submissiondrafts');
        $mform->setType('submissiondrafts', PARAM_RAW);
        $mform->setDefault('submissiondrafts', 0);

        $mform->addElement('text', 'requiresubmissionstatement', 'requiresubmissionstatement');
        $mform->setType('requiresubmissionstatement', PARAM_RAW);
        $mform->setDefault('requiresubmissionstatement', 0);

        $mform->addElement('text', 'attemptreopenmethod', 'attemptreopenmethod');
        $mform->setType('attemptreopenmethod', PARAM_RAW);
        $mform->setDefault('attemptreopenmethod', "none");

        $mform->addElement('text', 'maxattempts', 'maxattempts');
        $mform->setType('maxattempts', PARAM_RAW);
        $mform->setDefault('maxattempts', -1);

        $mform->addElement('text', 'teamsubmission', 'teamsubmission');
        $mform->setType('teamsubmission', PARAM_RAW);
        $mform->setDefault('teamsubmission', 0);

        $mform->addElement('text', 'requireallteammemberssubmit', 'requireallteammemberssubmit');
        $mform->setType('requireallteammemberssubmit', PARAM_RAW);
        $mform->setDefault('requireallteammemberssubmit', 0);

        $mform->addElement('text', 'preventsubmissionnotingroup', 'preventsubmissionnotingroup');
        $mform->setType('preventsubmissionnotingroup', PARAM_RAW);
        $mform->setDefault('preventsubmissionnotingroup', 0);

        $mform->addElement('text', 'teamsubmissiongroupingid', 'teamsubmissiongroupingid');
        $mform->setType('teamsubmissiongroupingid', PARAM_RAW);
        $mform->setDefault('teamsubmissiongroupingid', 0);

        $mform->addElement('text', 'sendnotifications', 'sendnotifications');
        $mform->setType('sendnotifications', PARAM_RAW);
        $mform->setDefault('sendnotifications', 0);

        $mform->addElement('text', 'sendlatenotifications', 'sendlatenotifications');
        $mform->setType('sendlatenotifications', PARAM_RAW);
        $mform->setDefault('sendlatenotifications', 0);

        $mform->addElement('text', 'sendstudentnotifications', 'sendstudentnotifications');
        $mform->setType('sendstudentnotifications', PARAM_RAW);
        $mform->setDefault('sendstudentnotifications', 1);

        $mform->addElement('text', 'completionpass', 'completionpass');
        $mform->setType('completionpass', PARAM_RAW);
        $mform->setDefault('completionpass', 0);

        $mform->addElement('text', 'completion', 'completion');
        $mform->setType('completion', PARAM_RAW);
        $mform->setDefault('completion', 2);

        $mform->addElement('text', 'completiongradeitemnumber', 'completiongradeitemnumber');
        $mform->setType('completiongradeitemnumber', PARAM_RAW);
        $mform->setDefault('completiongradeitemnumber', 0);

        $mform->addElement('text', 'completionview', 'completionview');
        $mform->setType('completionview', PARAM_RAW);
        $mform->setDefault('completionview', 0);

        $mform->addElement('text', 'completionexpected', 'completionexpected');
        $mform->setType('completionexpected', PARAM_RAW);
        $mform->setDefault('completionexpected', 0);

        $this->add_action_buttons(false, get_string('submit', 'tool_applyassignmentstandards'));
    }

    /**
     * Custom form validation
     * @param array $data
     * @param array $files
     * @return array
     */
    public function validation($data, $files) {
        return array();
    }
}
