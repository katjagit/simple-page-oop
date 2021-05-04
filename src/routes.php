<?php

return [
    '~^hello/(.*)$~' => [\school\Controllers\MainController::class, 'sayHello'],
    '~^$~' => [\school\Controllers\MainController::class, 'main'],
    '~^bye/(.*)$~'=>[\school\Controllers\MainController::class, 'sayBye'],
];