<?php
// This file is part of Translate This Page for Moodle - https://moodle.org/
//
// Translate This Page is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Translate This Page is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Translate This Page.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Block translatepage is defined here.
 *
 * @package   block_translatepage
 * @copyright 2015-2023 TNG Consulting Inc. <www.tngconsulting.ca>
 * @link      https://www.tngconsulting.ca/
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_translatepage extends block_base {

    /**
     * Initializes class member variables.
     */
    public function init() {
        // Needed by Moodle to differentiate between blocks.
        $this->title = get_string('pluginname', 'block_translatepage');
    }

    /**
     * Returns the block contents.
     *
     * @return stdClass The block contents.
     */
    public function get_content() {

        if ($this->content !== null) {
            return $this->content;
        }

        if (empty($this->instance)) {
            $this->content = '';
            return $this->content;
        }

        $this->content = new stdClass();
        $this->content->items = array();
        $this->content->icons = array();
        $this->content->footer = '';

        if (!empty($this->config->text)) {
            $this->content->text = $this->config->text;
        } else {
            $code = '<div id="google_translate_element"></div>';
            $code .= '<script>';
            $code .= '    function googleTranslateElementInit() {';
            $code .= '        new google.translate.TranslateElement({pageLanguage: \'' . current_language() . '\', ';
            $code .= '        layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, \'google_translate_element\');';
            $code .= '    }';
            $code .= '</script>';
            $code .= '<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>';
            $code .= '<p>' . get_string('translationsvary', 'block_translatepage') . '</p>';
            $this->content->text = $code;
        }

        return $this->content;
    }

    /**
     * Defines configuration data.
     *
     * The function is called immediately after init().
     */
    public function specialization() {

        // Load user defined title and make sure it's never empty.
        if (empty($this->config->title)) {
            $this->title = get_string('pluginname', 'block_translatepage');
        } else {
            $this->title = $this->config->title;
        }
    }

    /**
     * Sets the applicable formats for the block.
     *
     * @return string[] Array of pages and permissions.
     */
    public function applicable_formats() {
        return array(
            'all' => true,
            'course' => true,
            'site' => true
        );
    }
}
