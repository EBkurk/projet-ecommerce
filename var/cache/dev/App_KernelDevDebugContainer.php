<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container37qVjep\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container37qVjep/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container37qVjep.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container37qVjep\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container37qVjep\App_KernelDevDebugContainer([
    'container.build_hash' => '37qVjep',
    'container.build_id' => 'd6e36983',
    'container.build_time' => 1689681322,
], __DIR__.\DIRECTORY_SEPARATOR.'Container37qVjep');
