<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPG8Fqvf\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPG8Fqvf/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPG8Fqvf.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPG8Fqvf\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPG8Fqvf\App_KernelDevDebugContainer([
    'container.build_hash' => 'PG8Fqvf',
    'container.build_id' => 'fddcfb8b',
    'container.build_time' => 1618146230,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPG8Fqvf');
