<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container80dvia0\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container80dvia0/appProdProjectContainer.php') {
    touch(__DIR__.'/Container80dvia0.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container80dvia0\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container80dvia0\appProdProjectContainer(array(
    'container.build_hash' => '80dvia0',
    'container.build_id' => '1b9e3a62',
    'container.build_time' => 1541282763,
), __DIR__.\DIRECTORY_SEPARATOR.'Container80dvia0');
