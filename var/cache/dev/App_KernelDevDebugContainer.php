<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQ8GpTxZ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQ8GpTxZ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQ8GpTxZ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQ8GpTxZ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQ8GpTxZ\App_KernelDevDebugContainer([
    'container.build_hash' => 'Q8GpTxZ',
    'container.build_id' => 'fe8cd9ae',
    'container.build_time' => 1734565103,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQ8GpTxZ');
