<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerM6WSwRH\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerM6WSwRH/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerM6WSwRH.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerM6WSwRH\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerM6WSwRH\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'M6WSwRH',
    'container.build_id' => 'cbdef738',
    'container.build_time' => 1542022875,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerM6WSwRH');
