<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJjpxGLs\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJjpxGLs/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJjpxGLs.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJjpxGLs\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJjpxGLs\App_KernelDevDebugContainer([
    'container.build_hash' => 'JjpxGLs',
    'container.build_id' => 'b7ebd46e',
    'container.build_time' => 1678225052,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJjpxGLs');
