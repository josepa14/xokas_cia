<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLkGXVII\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLkGXVII/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLkGXVII.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLkGXVII\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLkGXVII\App_KernelDevDebugContainer([
    'container.build_hash' => 'LkGXVII',
    'container.build_id' => '5d504ad4',
    'container.build_time' => 1677699765,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLkGXVII');
