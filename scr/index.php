<?php
include_once 'includes/header.php';
include_once 'includes/navbar.php';
include_once 'functions.php';

$events = getPopularEvents(5); 

?>

<div class="container mt-5">
    <h1>Добро пожаловать на платформу для волонтеров</h1>
    <p>Здесь вы можете найти интересные волонтерские мероприятия и принять участие.</p>
    <h2>Популярные мероприятия</h2>

    <div class="events">
        <?php foreach ($events as $event): ?>
            <div class="event">
                <h3><?= htmlspecialchars($event['name']); ?></h3>
                <p>Дата: <?= htmlspecialchars($event['date']); ?></p>
                <p>Участников: <?= htmlspecialchars($event['participants']); ?></p>
                <a href="events/detail.php?id=<?= $event['id']; ?>" class="btn btn-info">Подробнее</a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include_once 'includes/footer.php'; ?>
