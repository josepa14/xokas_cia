<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFuevDXp\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFuevDXp/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFuevDXp.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFuevDXp\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFuevDXp\App_KernelDevDebugContainer([
    'container.build_hash' => 'FuevDXp',
    'container.build_id' => '761d05ed',
    'container.build_time' => 1678059496,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFuevDXp');
