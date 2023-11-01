# Translate This Page, a plugin for Moodle LMS #

This block plugin for Moodle LMS adds a dropdown menu enabling you to translate the current page into any language using Google Translate.

Tested to be compatible with Moodle 3.9, 4.x and PHP 7.4 to 8.2.

## Installing via uploaded ZIP file ##

1. Log in to your Moodle site as an admin and go to **Site administration > Plugins > Install plugins**.
2. Upload the ZIP file with the plugin code. You should only be prompted to add extra details if your plugin type is not automatically detected.
3. Check the plugin validation report and finish the installation.

## Installing manually ##

The plugin can be also installed by putting the contents of this directory to

    {your/moodle/dirroot}/blocks/translatepage

Afterwards, log in to your Moodle site as an admin and go to **Site administration > Notifications** to complete the installation.

Alternatively, you can run

    $ php admin/cli/upgrade.php

...to complete the installation from the command line.

## Support

Only paid support is available for this plugin. However, we welcome contributed pull requests to fix bugs and add enhancements.

If you find this plugin useful, please Watch, Fork and Star this repository to let us know that you appreciate that we made this available to you for free.

## License ##

Copyright 2015-2023 TNG Consulting Inc. <www.tngconsulting.ca>

This program is free software: you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation, either version 3 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with
this program.  If not, see <https://www.gnu.org/licenses/>.
