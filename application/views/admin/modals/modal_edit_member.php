<!-- Modal Edit -->
<?php foreach ($member as $m) : ?>
  <div class="modal fade" id="editMemberModal<?= $m['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="apasih">Edit Member</h5>
        </div>
        <form action="<?= base_url('member/editMember'); ?>" method="post">
          <input type="hidden" name="id" value="<?= $m['id']; ?>">
          <div class="modal-body">
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" value="<?= $m['name']; ?>">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="email" name="email" value="<?= $m['email']; ?>">
            </div>
            <div class="form-group">
              <select class="form-control" name="is_active">
                <?php
                  if ($m['is_active'] == 1) {
                    $m['is_active'] = 'Aktif';
                  } else {
                    $m['is_active'] = 'Tidak Aktif';
                  }
                  ?>
                <option value="<?= $m['id']; ?>">Status Sekarang = <?= $m['is_active']; ?></option>
                <option>Aktif</option>
                <option>Tidak Aktif</option>
              </select>
            </div>
            <div class="form-group">
              <input type="date" class="form-control" id="date_created" name="date_created" value="<?= (new DateTime($m['date_created']))->format('Y-m-d'); ?>">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-round btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-round btn-primary">Edit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>