@extends('layouts.main')

@section('title', 'Covid-19 Tanri Abeng University – Informasi Covid-19 Tanri Abeng University')

@section('container')

<section class="page-title-bar clearfix">
   <div class="inner-wrap">
      <div class="page-title-wrap">
         <h1>Kontak</h1>
      </div>
   </div>
</section>
<section class="site-section">
   <div class="container">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 pb-5">
               <!--Form with header-->
               <form action="mail.php" method="post">
                  <div class="card border-primary rounded-0">
                     <div class="card-header p-0">
                        <div class="bg-info text-white text-center py-2">
                           <h3><i class="fa fa-envelope"></i> Kontak Kami</h3>
                           <p class="m-0" style="font-size:18px">Silahkan isi form dibawah ini</p>
                        </div>
                     </div>
                     <div class="card-body p-3">
                        <!--Body-->
                        <div class="form-group">
                           <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                 <div class="input-group-text" style="font-size:18px">Nama</div>
                              </div>
                              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Masukkan Nama Kamu" style="font-size:18px" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                 <div class="input-group-text" style="font-size:18px">Email</div>
                              </div>
                              <input type="email" class="form-control" id="nombre" name="email" placeholder="Masukkan Email" style="font-size:18px" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                 <div class="input-group-text" style="font-size:18px">Pesan</div>
                              </div>
                              <textarea class="form-control" placeholder="Isi Pesan" style="font-size:18px" required></textarea>
                           </div>
                        </div>
                        <div class="text-center">
                           <input type="kirim" value="Kirim" class="btn btn-info btn-block rounded-0 py-2" style="font-size:18px">
                        </div>
                     </div>
                  </div>
               </form>
               <!--Form with header-->
            </div>
         </div>
      </div>
   </div>
</section>

@endsection
            