@extends('adminpanel.app')
@section('content')

    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">GALERİ</h4>
                    </div>
                    <a href="{{route('createGallery')}}" class="btn btn-success">Fotoğraf Ekle</a>
                    <br>
                    <div class="card-content">
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>Başlık</th>
                                    <th>İçerik</th>
                                    <th>Fotoğraf</th>
                                    <th>Güncelle</th>
                                    <th>Sil</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($gallery as $gallerys)
                                <tr>
                                    <td class="text-bold-500">{{$gallerys -> gallery_title}}</td>
                                    <td>{{$gallerys -> gallery_comment}}</td>
                                    <td>
                                        <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                                                <img class="w-75 active" src="{{'/galeri/'.$gallerys -> path}}" data-bs-target="#Gallerycarousel" data-bs-slide-to="0">
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-success">Güncelle</a>
                                    </td>
                                    <td><a href="{{route('deleteGallery', $gallerys -> id)}}" class="btn btn-danger">Sil</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
