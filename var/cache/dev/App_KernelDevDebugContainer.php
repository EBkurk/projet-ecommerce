<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0w486Ug\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0w486Ug/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0w486Ug.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0w486Ug\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container0w486Ug\App_KernelDevDebugContainer([
    'container.build_hash' => '0w486Ug',
    'container.build_id' => '3a53074d',
    'container.build_time' => 1688911966,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0w486Ug');
