# SlapBack
[![](https://poggit.pmmp.io/shield.state/SlapBack)](https://poggit.pmmp.io/p/SlapBack)
[![](https://poggit.pmmp.io/shield.api/SlapBack)](https://poggit.pmmp.io/p/SlapBack)<br>
Slappers can now hit back at you!

# Requirements

- PocketMine-MP API 5.0.0 or newer.
- PHP 8.1 or newer.
- The [Slapper](https://github.com/ReinfyTeam/Slapper) plugin.

SlapBack is maintained by ReinfyTeam. Compatibility checks in this campaign use
[Axolotl-PM](https://github.com/NhanAZ/Axolotl-PM), a PocketMine-MP-compatible
server distribution.

# Features
- Ability to configure the behavior of the Slappers.

# Disclaimer
This plugin is designed for PocketMine-MP. If you are using a fork or spoon,
please report issues to that project instead.

# How to Install?
- You must have the [Slapper](https://github.com/ReinfyTeam/Slapper) plugin.
- Just put this plugin in your `plugins/` folder, and it should work!<br>
- You can configure the plugin by accessing `plugin_data/SlapBack/config.yml`

# Report a Issue/Bug
You found a bug or a plugin issue?
- Contact support in the [Discord Server](https://discord.gg/v2rNeHaptd)
- Create an [Issue](https://github.com/ReinfyTeam/SlapBack/issues)
- Write your bug & the issue you are having with all informations including the crash or errors so I can track the issue.
- Submit the issue and be patient for a response for a solution to your problem :D

# Build and test

The build process uses [DevTools](https://github.com/NhanAZ/DevTools) to package
and validate the plugin PHAR. Development checks use Composer and PHPStan:

    composer install
    composer analyse

The packaged plugin must retain plugin.yml, the resources/ directory and the
PHP source under src/.

# License

SlapBack is licensed under the GNU Lesser General Public License v2.1 or later.
