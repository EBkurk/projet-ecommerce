<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQlj9BQa\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQlj9BQa/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQlj9BQa.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQlj9BQa\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQlj9BQa\App_KernelDevDebugContainer([
    'container.build_hash' => 'Qlj9BQa',
    'container.build_id' => 'f044a0bf',
    'container.build_time' => 1689517799,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQlj9BQa');
