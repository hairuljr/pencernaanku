   <!-- page content -->
   <div class="right_col" role="main">
     <div class="">
       <div class="page-title">
         <div class="title_left">
           <h3><?= $judul; ?></h3>
         </div>
         <div class="title_right">
         </div>
       </div>
     </div>
     <div class="clearfix"></div>

     <div class="row">
       <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
           <div class="x_content">
             <br />
             <div class="form-horizontal form-label-left">
               <?php foreach ($artikel as $a) : ?>
                 <?= form_open_multipart('artikel/tambahArtikel'); ?>
                 <input type="hidden" name="id" value="<?= $a['id']; ?>">
                 <div class="form-group">
                   <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Judul Artikel</label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="text" id="judul" name="judul" value="<?= $a['judul']; ?>" class="form-control col-md-7 col-xs-12">
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kategori Artikel</label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                     <select class="form-control" name="kategori">
                       <?php foreach ($artikel_kat as $kat) : ?>
                         <option value="<?= $kat['id']; ?>">Kategori Sekarang = <?= $kat['nama_kategori']; ?></option>
                         <option value="<?= $kat['id']; ?>"><?= $kat['nama_kategori']; ?></option>
                       <?php endforeach; ?>
                     </select>
                   </div>
                 </div>
                 <div class="form-group">
                   <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Terbit </label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= (new DateTime($a['tanggal']))->format('Y-m-d'); ?>">
                   </div>
                 </div>
                 <div class="form-group">
                   <label class="control-label col-md-3 col-sm-3 col-xs-12">Profil</label>
                   <div class="col-sm-3">
                     <img style="width: 150px; margin-bottom: 10px;" src="<?= base_url('assets/images/artikel/') . $a['image']; ?>" class="img-thumbnail">
                   </div>
                   <div class="col-md-3">
                     <input type="file" class="form-control" id="image" name="image"><?= $a['image']; ?>
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Isi Artikel</label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                     <input id="isi" class="form-control col-md-7 col-xs-12" type="text" name="isi" value="<?= $a['isi']; ?>">
                   </div>
                 </div>
                 <div class="form-group">
                   <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                     <a href="<?= base_url('admin/artikel'); ?>" class="btn btn-primary" type="reset">Batal</a>
                     <button type="submit" class="btn btn-success">Tambah</button>
                   </div>
                 </div>

                 </form>
               <?php endforeach; ?>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- /page content -->