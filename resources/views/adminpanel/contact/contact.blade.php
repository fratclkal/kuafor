@extends('adminpanel.app')
@section('content')

    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">İletişim</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" method="POST" action="{{route('createContact')}}">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Telefon Numarası :</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="first-name" class="form-control" name="phone_num"
                                           placeholder="Telefon Numarası">
                                </div>
                                <div class="col-md-4">
                                    <label>Email :</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="email" id="email-id" class="form-control" name="email"
                                           placeholder="Email">
                                </div>
                                <div class="col-md-4">
                                    <label>Adres :</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="first-name" class="form-control" name="address"
                                           placeholder="Adres">
                                </div>


                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Kaydet</button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">İletişim</h4>
                    </div>
                    <div class="card-content">

                        <!-- table striped -->
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Email</th>
                                    <th>Telefon</th>
                                    <th>Adres</th>
                                    <th>Seçenekler</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contact as $contacts)
                                    <tr>
                                        <td>{{$contacts -> id}}</td>
                                        <td class="text-bold-500">{{$contacts -> email}}</td>
                                        <td>{{$contacts -> phone_num}}</td>
                                        <td class="text-bold-500">{{$contacts -> address}}</td>
                                        <td>
                                            <a href="#" class="btn btn-success">Güncelle</a>
                                            <a href="#" class="btn btn-danger">Sil</a>
                                        </td>
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
