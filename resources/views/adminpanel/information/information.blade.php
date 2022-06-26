@extends('adminpanel.app')
@section('content')

    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">İletişim Kurmak İsteyenler</h4>
                    </div>
                    <div class="card-content">
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>İsim - Soyisim</th>
                                    <th>Telefon Numarası</th>
                                    <th>Sil</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($information as $informations)
                                <tr>
                                    <td class="text-bold-500">{{$informations -> id}}</td>
                                    <td>{{$informations -> name_surname}}</td>
                                    <td class="text-bold-500">{{$informations -> phone_num}}</td>
                                    <td><a href="{{route('deleteInformation', $informations -> id)}}" class="btn btn-danger">SİL</a></td>
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
