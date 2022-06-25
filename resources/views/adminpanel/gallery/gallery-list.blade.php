@extends('adminpanel.app')
@section('content')

    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">GALERİ</h4>
                    </div>
                    <div class="card-content">
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>Başlık</th>
                                    <th>İçerik</th>
                                    <th>Fotoğraf</th>
                                    <th>Seçenekler</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-bold-500">Michael Right</td>
                                    <td>$15/hr</td>
                                    <td>
                                        <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                                            <a href="#">
                                                <img class="w-100 active" src="https://images.unsplash.com/photo-1633008808000-ce86bff6c1ed?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyN3x8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" data-bs-target="#Gallerycarousel" data-bs-slide-to="0">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-success">Güncelle</a>
                                        <a href="#" class="btn btn-danger">Sil</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
