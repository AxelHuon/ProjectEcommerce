<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXVHfZcG\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXVHfZcG/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXVHfZcG.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXVHfZcG\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXVHfZcG\App_KernelDevDebugContainer([
    'container.build_hash' => 'XVHfZcG',
    'container.build_id' => 'b795c83f',
    'container.build_time' => 1647195460,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXVHfZcG');
