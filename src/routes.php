<?php

return [
    '~^$~' => [\school\Controllers\MainController::class, 'main'],
    '~^courses/(\d+)$~' => [\School\Controllers\CoursesController::class, 'view'],
    '~^hello/(.*)$~' => [\school\Controllers\MainController::class, 'sayHello'],
    '~^bye/(.*)$~'=>[\school\Controllers\MainController::class, 'sayBye'],
];