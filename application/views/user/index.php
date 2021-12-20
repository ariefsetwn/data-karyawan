<!-- Begin Page Content -->
<div class="container-fluid">
        
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary text-center"><?= $title; ?></h3>
            </div>
            <div class="card-body">
            <div class="col-lg-8">
                <?= $this->session->flashdata('message'); ?>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>No Telpon</th>
                            <th>Created</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td><?= $user['alamat']; ?></td>
                    <td><?= $user['no_telpn']; ?></td>
                    <td><?= date('d F Y', $user['date_created']); ?></td>
                    <td class="text-center" width="150px">
                        <a class="btn btn-primary" href="<?php echo base_url('user/edit') ?>" role="button">Edit</a>
                        <a class="btn btn-danger" href="" role="button">Delete</a>
                    </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 