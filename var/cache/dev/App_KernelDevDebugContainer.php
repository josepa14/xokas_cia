<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4ISreoT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4ISreoT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4ISreoT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4ISreoT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4ISreoT\App_KernelDevDebugContainer([
    'container.build_hash' => '4ISreoT',
    'container.build_id' => '9c31a464',
    'container.build_time' => 1676289010,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4ISreoT');