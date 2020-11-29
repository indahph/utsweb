@extends('admin.base')

@section('content')
	<div class="jumbotron">
  <h1 class="display-4">Selamat datang di BLOG ANE</h1>
  <p class="lead">Artikel seputar penyakit telinga</p>
  <hr class="my-4">
  <p>penyebab nya adalah Adanya penumpukan cairan di telinga bagian tengah akibat pilek atau rhinitis. Infeksi telinga tengah atau otitis media. Infeksi telinga luar atau otitis eksterna. Gangguan atau kerusakan pada tuba eustachius, yaitu saluran yang menghubungkan telinga dengan hidung dan tenggorokan</p>
  <br> TANYA JAWAB SILAHKAN KLIK TOMBOL DIBAWAH <br>
  <a class="btn btn-primary btn-lg" href="{{url('admin/produk')}}" role="button">KLIK INI </a>
</div>

@endsection