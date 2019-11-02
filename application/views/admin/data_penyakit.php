        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?= $subMenu['judul']; ?></h3>
              </div>

              <div class="title_right">
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
                          <th>No</th>
                          <th>Kode</th>
                          <th>Gejala</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <tr>
                          <td><?= $i; ?></td>
                          <td>P01</td>
                          <td>Sakit Perut</td>
                          <td>
                            <a href="" class="badge badge-success" data-toggle="modal" data-target="#editUserModal">edit</a>
                            <a href="" class="badge badge-danger" onclick="return confirm('Anda yakin ingin hapus user ini?');">delete</a>
                          </td>
                        </tr>
                        <tr>
                          <td><?= $i; ?></td>
                          <td>P02</td>
                          <td>Sakit Hati</td>
                          <td>
                            <a href="" class="badge badge-success" data-toggle="modal" data-target="#editUserModal">edit</a>
                            <a href="" class="badge badge-danger" onclick="return confirm('Anda yakin ingin hapus user ini?');">delete</a></td>
                        </tr>
                        <tr>
                          <td><?= $i; ?></td>
                          <td>P03</td>
                          <td>Sakit Jiwa</td>
                          <td>
                            <a href="" class="badge badge-success" data-toggle="modal" data-target="#editUserModal">edit</a>
                            <a href="" class="badge badge-danger" onclick="return confirm('Anda yakin ingin hapus user ini?');">delete</a>
                          </td>
                        </tr>
                        <?php $i++; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->