<?php include __DIR__ . '/../header.php'; ?>
<?php foreach ($courses as $course): ?>
    <h2><a href="/school/www/courses/<?= $course->getId() ?>"><?= $course->getName() ?></a></h2>
    <p><?= $course->getDescription() ?></p>
    <hr>
<?php endforeach; ?>
<?php include __DIR__ . '/../footer.php'; ?>