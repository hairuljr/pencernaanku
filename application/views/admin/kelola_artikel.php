<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><?= $subMenu['judul']; ?></h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Tabel <?= $subMenu['judul']; ?></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Judul</th>
                  <th>Gambar</th>
                  <th>Tanggal</th>
                  <th>Kategori</th>
                  <th>Isi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Penyebab Sakit Hati</td>
                  <td><img width="140px" src="<?= base_url('assets/images/media.jpg'); ?>"></td>
                  <td><?= date('d F Y'); ?></td>
                  <td>
                    <span class="badge bg-blue">sakit</span>
                    <span class="badge bg-blue">hati</span>
                  </td>
                  <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos nisi laboriosam qui voluptatibus, laudantium quod perspiciatis eligendi repudiandae iure possimus.
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->