# SlapBack
[![](https://poggit.pmmp.io/shield.state/SlapBack)](https://poggit.pmmp.io/p/SlapBack)
[![](https://poggit.pmmp.io/shield.api/SlapBack)](https://poggit.pmmp.io/p/SlapBack)<br>
Slapper entities react with an arm-swing animation when hit.

# Requirements

- PocketMine-MP API 5.0.0 or newer.
- PHP 8.1 or newer.
- The [Slapper](https://github.com/ReinfyTeam/Slapper) plugin.

SlapBack is maintained by ReinfyTeam. Compatibility checks in this campaign use
[Axolotl-PM](https://github.com/NhanAZ/Axolotl-PM), a PocketMine-MP-compatible
server distribution.

# Features
- Makes a SlapperHuman swing its arm when it is hit.
- The plugin does not apply damage or change the Slapper's health.

# Disclaimer
This plugin is designed for PocketMine-MP. If you are using a fork or spoon,
please report issues to that project instead.

# Installation
- You must have the [Slapper](https://github.com/ReinfyTeam/Slapper) plugin.
- Put this plugin in your `plugins/` folder.

# Report an issue
If you find a bug or another plugin issue:
- Contact support in the [Discord Server](https://discord.gg/v2rNeHaptd)
- Create an [Issue](https://github.com/ReinfyTeam/SlapBack/issues)
- Include the problem, crash or error details, and relevant logs so the issue can be investigated.
- Submit the issue and wait for a response.

# Build and test

The build process uses [DevTools](https://github.com/NhanAZ/DevTools) to package
and validate the plugin PHAR. Development checks use Composer and PHPStan:

    composer install
    composer analyse

The packaged plugin must retain plugin.yml and the PHP source under src/.

# License

SlapBack is licensed under the GNU Lesser General Public License v2.1 or later.
