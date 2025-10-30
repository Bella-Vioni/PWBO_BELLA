<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahta Kuliah</h3>
            <ul class="list-group">
                <?php foreach($data['matkul'] as $matkul) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?php echo $matkul['nama_mk']; ?>
                        <a href="<?php echo BASEURL; ?>/matkul/detail/<?php echo $matkul['id']; ?>" class="badge badge-primary">
                            detail
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
