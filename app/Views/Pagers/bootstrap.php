<?php $pager->setSurroundCount(4) ?>
<nav class="mt-4">
    <ul class="pagination d-flex flex-wrap justify-content-end pagination">

        <?php
        $state = 0;
        if ($pager->hasPrevious()) : ?>

            <li class="page-item"><a class="page-link" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>"><i class="ti-angle-left"></i><span aria-hidden="true"><?= lang('Pager.first') ?></span></a></li>
            <li class="page-item"><a class="page-link" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>"><span aria-hidden="true"><?= lang('Pager.previous') ?></span></a></li>
        <?php endif ?>
        <?php foreach ($pager->links() as $link) : ?>
            <li class="page-item <?= $link['active'] ? 'active' : '' ?>"><a class="page-link" href="<?= $link['uri'] ?>"><?= $link['title'] ?></a></li>
        <?php endforeach ?>
        <?php if ($pager->hasNext()) : ?>

            <li class="page-item"><a class="page-link" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>"><span aria-hidden="true"><?= lang('Pager.next') ?></span></a></li>
            <li class="page-item"><a class="page-link" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>"><span aria-hidden="true"><?= lang('Pager.last') ?></span></a></li>

        <?php endif ?>


    </ul>
</nav>