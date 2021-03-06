@extends('adminpanel.app')
@section('content')

    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">İletişim Bilgileri Güncelle</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" method="POST" action="{{route('updateContact', $contact -> id)}}">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Telefon Numarası :</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="first-name" class="form-control" name="phone_num"
                                           placeholder="{{$contact -> phone_num}}">
                                </div>
                                <div class="col-md-4">
                                    <label>Email :</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="email" id="email-id" class="form-control" name="email"
                                           placeholder="{{$contact -> email}}">
                                </div>
                                <div class="col-md-4">
                                    <label>Adres :</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="first-name" class="form-control" name="address"
                                           placeholder="{{$contact -> address}}">
                                </div>


                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Güncelle</button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
