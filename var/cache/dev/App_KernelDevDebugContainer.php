<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBuu6cO3\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBuu6cO3/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBuu6cO3.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBuu6cO3\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBuu6cO3\App_KernelDevDebugContainer([
    'container.build_hash' => 'Buu6cO3',
    'container.build_id' => '70766dc4',
    'container.build_time' => 1678367259,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBuu6cO3');
