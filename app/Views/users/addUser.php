<?= $this->extend('layout/templates'); ?>

<?= $this->Section('content'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><i class="fas fa-database"></i> <?= $title; ?></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    <?= $title; ?>
                </div>
                <div class="card-body">                    
                    <?= view('Myth\Auth\Views\_message_block'); ?>
                    <?php
                    $errors = session()->getFlashdata('failed');
                    if (!empty($errors)) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong><i class="fas fa-times"></i> Failed</strong> data not added to database.
                            <ul>
                                <?php foreach ($errors as $e) { ?>
                                    <li><?= esc($e); ?></li>
                                <?php } ?>
                            </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashData('success')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong><i class="fas fa-check"></i> Success</strong> <?= session()->getFlashData('success'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <div class="modal-body">
                    <form action="<?= base_url('Users/saveUser'); ?>" method="post">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="username" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="role">Peranan</label>
                            <div class="form-check">
                                <?php foreach ($roles as $peranan):?>
                                <input class="form-check-input" style="margin-left: 0" type="checkbox" name="role" value="<?=$peranan['roleid']; ?>" id="roleCheck<?=$peranan['roleid']; ?>">
                                <label class="form-check-label" for="roleCheck<?=$peranan['roleid']; ?>">
                                    <?=$peranan['rolename']; ?>
                                </label>
                                <?php endforeach; ?>
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="pass_confirm">Ulangi Password</label>
                            <input type="password" name="pass_confirm" class="form-control" autocomplete="off">
                        </div>                    
                        <div class="modal-footer">
                            <a href="<?= base_url('users'); ?>" class="btn btn-secondary btn-sm">Close</a>                            
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?= $this->endSection(); ?>