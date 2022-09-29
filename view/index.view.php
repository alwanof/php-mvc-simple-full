<?php include 'includes/header.php'; ?>
<!-- Begin page content -->
<main class="flex-shrink-0">

    <div class="container">
        <h1 class="mt-5 text-center"><?= $data['title'] ?></h1>
        <div class="list-group w-auto">
            <?php foreach ($data['content'] as $item) : ?>
                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <img src="https://github.com/twbs.png" alt="twbs" class="rounded-circle flex-shrink-0" width="32" height="32">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h6 class="mb-0"><?= $item['head']; ?></h6>
                            <p class="mb-0 opacity-75"><?= $item['date']; ?></p>
                        </div>
                        <small class="opacity-50 text-nowrap"><?= $item['author']; ?></small>
                    </div>
                </a>
            <?php endforeach; ?>

        </div>


    </div>
</main>


<?php include 'includes/footer.php'; ?>