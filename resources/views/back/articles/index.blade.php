@extends('back.layouts.master')
@section('title','Tüm Makaleler')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Fotoğraf</th>
                        <th>Makale Başlığı</th>
                        <th>Kategori</th>
                        <th>Görüntüleme Sayısı</th>
                        <th>Oluşturma Tarihi</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    @foreach($blogs as $blog)
                    <tbody>
                      <tr>
                         <td><img src="{{$blog->image}}" width="200"></td>
                         <td>{{$blog->title}}</td>
                         <td>{{$blog->getCategory->name}}</td>
                         <td>{{$blog->hit}}</td>
                         <td>{{$blog->created_at->diffForHumans()}}</td>
                         <td>Burak</td>
                      </tr>
                      @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
