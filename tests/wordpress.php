<?php
// Focused checks run in an isolated WordPress installation.
$plugin = new Disable_Google_Fonts();
if ($plugin->disable_google_fonts('on', 'on', 'Google fonts: on or off', 'default') !== 'off') throw new RuntimeException('Font toggle was not disabled');
if ($plugin->disable_google_fonts('on', 'on', 'unrelated context', 'default') !== 'on') throw new RuntimeException('Unrelated translation changed');
echo "PASS font toggles and unrelated translations\n";
