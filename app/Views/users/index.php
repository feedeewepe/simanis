<?= $this->extend('layout/templates'); ?>

<?= $this->Section('content'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><i class="fas fa-user"></i> <?= $title; ?></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    <?= $title; ?> Table
                </div>
                <div class="card-body">
                    <a href="<?= base_url('/users/addUser'); ?>" class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus-square"></i> Add user</a>
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
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Active</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($all_data as $datas) : ?>
                                    <tr>
                                        <td width="1%"><?= $no++; ?></td>
                                        <td><?= esc($datas['email']); ?></td>
                                        <td><?= esc($datas['username']); ?></td>                                        
                                        <td><?php foreach ($datas['role'] as $role): echo $role['rolename'].'<br>'; endforeach; ?></td>
                                        <td><?= esc(($datas['active'] == 1 ? 'Yes' : 'No')); ?></td>
                                        <td class="text-center" width="20%">
                                            <a href="#" class="btn btn-success btn-sm mb-1" data-bs-toggle="modal" data-bs-target="#updateModal<?= $datas['id']; ?>">
                                                Update
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm mb-1" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $datas['id']; ?>">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    

    <!-- Update modal -->
    <?php foreach ($all_data as $datas) : ?>
        <div class="modal fade" id="updateModal<?= $datas['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i> Update Data</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= form_open('users/saveUser/'.$datas['id']); ?>
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $datas['id']; ?>">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email<?= $datas['id']; ?>" class="form-control" value="<?= $datas['email']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username<?= $datas['id']; ?>" class="form-control" value="<?= $datas['username']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nim_nip">NIM / NIP</label>
                            <input type="text" name="nim_nip" id="nim_nip<?= $datas['id']; ?>" class="form-control" value="<?= $datas['nim_nip']; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password<?= $datas['id']; ?>" class="form-control" placeholder="Isi jika Ganti Password Baru" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="pass_confirm">Ulangi Password</label>
                            <input type="password" name="pass_confirm" id="pass_confirm<?= $datas['id']; ?>" class="form-control"  placeholder="Isi jika Ganti Password Baru" autocomplete="off">
                        </div>  
                        <div class="form-group">
                            <label for="role">Peranan</label>
                            <div class="form-check">
                                <?php foreach ($roles as $peranan):?>
                                <input class="form-check-input" type="checkbox" style="margin-left: 0" name="role[]" value="<?=$peranan['roleid']; ?>" id="roleCheck<?=$peranan['roleid']; ?>" <?php foreach ($datas['role'] as $sbg): echo $sbg['roleid'] == $peranan['roleid'] ? 'checked' : ''; endforeach; ?>>
                                <label class="form-check-label" for="roleCheck<?=$peranan['roleid']; ?>">
                                    <?=$peranan['rolename']; ?>
                                </label>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="active">Active</label>                            
                            <select name="active" class="form-control <?php if (session('errors.active')) : ?>is-invalid<?php endif; ?>"  placeholder="Active Status">
                                <?php $act = $datas['active']; ?>
                                <option value="1" <?= $act == '1' ? 'selected' : null; ?>>Activate</option>
                                <option value="0" <?= ($act == '0' || $act == null) ? 'selected' : null; ?>>Deactivate</option>
                            
                            </select> 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Delete modal -->
    <?php foreach ($all_data as $datas) : ?>
        <div class="modal fade" id="deleteModal<?= $datas['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-exclamation-circle"></i> Delete Data</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= form_open('users/deleteUser/'.$datas['id']); ?>
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $datas['id']; ?>">
                        <p>Apakah anda yakin menghapus data <b><?= $datas['username']; ?><b>?</p>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger btn-sm">Submit</button>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?= $this->endSection(); ?>