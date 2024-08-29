Translate This Page for Moodle LMS
==================================
![PHP](https://img.shields.io/badge/PHP-v7.2%20to%20v8.3-blue.svg)
![Moodle](https://img.shields.io/badge/Moodle-v3.9%20to%20v4.4-orange.svg)
[![GitHub Issues](https://img.shields.io/github/issues/michael-milette/moodle-blocks_translatepage.svg)](https://github.com/michael-milette/moodle-blocks_translatepage/issues)
[![Contributions welcome](https://img.shields.io/badge/contributions-welcome-green.svg)](#contributing)
[![License](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](#license)

# Table of Contents

- [Translate This Page for Moodle LMS](#translate-this-page-for-moodle-lms)
- [Table of Contents](#table-of-contents)
- [Basic Overview](#basic-overview)
- [Requirements](#requirements)
- [Installation](#installation)
  - [Manual installation](#manual-installation)
- [Updating](#updating)
- [Uninstallation](#uninstallation)
- [Support](#support)
- [License](#license)

# Basic Overview

This block plugin for Moodle LMS adds a dropdown menu enabling you to translate the current page into any language using Google Translate.

[(Back to top)](#table-of-contents)

# Requirements

This plugin requires Moodle 3.9+ from https://moodle.org/ .

[(Back to top)](#table-of-contents)

# Installation

1. Log in to your Moodle site as an admin and go to **Site administration > Plugins > Install plugins**.
2. Upload the ZIP file with the plugin code. You should only be prompted to add extra details if your plugin type is not automatically detected.
3. Check the plugin validation report and finish the installation.

## Manual installation ##

The plugin can be also installed by putting the contents of this directory to

    /blocks/translatepage

Afterwards, log in to your Moodle site as an admin and go to **Site administration > Notifications** to complete the installation.

Alternatively, you can run

    $ php admin/cli/upgrade.php

...to complete the installation from the command line.

See https://docs.moodle.org/en/Installing_plugins for details on installing Moodle plugins.

[(Back to top)](#table-of-contents)

# Updating

There are no special considerations required for updating the plugin.

For more information on releases since then, see
[CHANGELOG.md](https://github.com/michael-milette/moodle-blocks_translatepage/blob/master/CHANGELOG.md).

[(Back to top)](#table-of-contents)

# Uninstallation

Uninstalling the plugin by going into the following:

Home > Administration > Site Administration > Plugins > Manage plugins > Translate Page

...and click Uninstall. You may also need to manually delete the following folder if your webserver does not have the required permissions:

    /blocks/translatepage

Note that, once uninstalled, any tags and content normally handled by this plugin will become visible to all users.

[(Back to top)](#table-of-contents)

# Support

Only paid support is available for this plugin. However, we welcome contributed pull requests to fix bugs and add enhancements.

If you find this plugin useful, please Watch, Fork and Star this repository to let us know that you appreciate that we made this available to you for free.

[(Back to top)](#table-of-contents)

# License

Copyright 2015-2024 TNG Consulting Inc. <www.tngconsulting.ca>

This program is free software: you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation, either version 3 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with
this program.  If not, see <https://www.gnu.org/licenses/>.

[(Back to top)](#table-of-contents)
