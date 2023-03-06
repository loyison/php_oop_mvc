<?php require_once APPROOT . '/views/inc/header.php'; ?>
<div class="p-5 mb-4 bg-light rounded-3 text-center">
    <div class="container">
        <h1 class="display-3">
            <?php echo $data['title'] ?>
        </h1>
        <p class="lead"><?php echo $data['description'] ?></p>
    </div>
</div>
<?php require_once APPROOT . '/views/inc/footer.php'; ?>
