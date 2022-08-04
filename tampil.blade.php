@extends('layouts.master')

@section('judul','Beranda')

@section('tabeljual')
<table class="table">
    <thead class="bg-primary">
      <tr>
        <th scope="col" style="color: white">No</th>
        <th scope="col" style="color: white">Nama</th>
        <th scope="col" style="color: white">NIS</th>
        <th scope="col" style="color: white">Kelas</th>
        <th scope="col" style="color: white">Alamat</th>
        <th scope="col" style="color: white">Tanggal lahir</th>

      </tr>
    </thead>
    <tbody>
      <?php $n=1; ?>
      @foreach($bio as $p)
      <tr>
        <th scope="row">{{$n++}}</th>
        <td>{{$p->nama}}</td>
        <td>{{$p->nis}}</td>
        <td>{{$p->kelas}}</td>
        <td>{{$p->alamat}}</td>
        <td>{{$p->tgllhr}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</section>
</div>

@endsection