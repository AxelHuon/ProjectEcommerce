<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0vYklfJ\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0vYklfJ/App_KernelProdContainer.php') {
    touch(__DIR__.'/Container0vYklfJ.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\Container0vYklfJ\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \Container0vYklfJ\App_KernelProdContainer([
    'container.build_hash' => '0vYklfJ',
    'container.build_id' => '15c2fe18',
    'container.build_time' => 1647174356,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0vYklfJ');