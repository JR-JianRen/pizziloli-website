<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFdApbzN\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFdApbzN/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFdApbzN.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFdApbzN\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFdApbzN\App_KernelDevDebugContainer([
    'container.build_hash' => 'FdApbzN',
    'container.build_id' => '7e212fbd',
    'container.build_time' => 1676545241,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFdApbzN');
