<?php

namespace Cs278\ComposerAudit;

if (\PHP_VERSION_ID >= 70100) {
    require __DIR__.'/ComposerPlugin.real.php';
} else {
    require __DIR__.'/ComposerPlugin.fake.php';
}
