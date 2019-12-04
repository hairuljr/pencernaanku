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
               <?= form_open_multipart('artikel/tambahArtikel'); ?>
               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Judul Artikel</label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="text" id="judul" name="judul" class="form-control col-md-7 col-xs-12">
                 </div>
               </div>
               <div class="form-group">
                 <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kategori Artikel</label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <select class="form-control" name="kategori">
                     <option>-- Pilih Kategori --</option>
                     <?php foreach ($artikel_kat as $kat) : ?>
                       <option value="<?= $kat['id_kat_kategori']; ?>"><?= $kat['nama_kategori']; ?></option>
                     <?php endforeach; ?>
                   </select>
                 </div>
               </div>
               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Terbit </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="date" class="form-control" id="tanggal" name="tanggal">
                 </div>
               </div>
               <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Profil</label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input type="file" id="image" name="image" class="form-control col-md-7 col-xs-12" type="text">
                 </div>
               </div>
               <div class="form-group">
                 <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Isi Artikel</label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="isi" class="form-control col-md-7 col-xs-12" type="text" name="isi">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                   <a href="<?= base_url('admin/artikel'); ?>" class="btn btn-primary" type="reset">Batal</a>
                   <button type="submit" class="btn btn-success">Tambah</button>
                 </div>
               </div>

               </form>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- /page content -->