@extends('adminpanel.app')
@section('content')


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
                                            <a href="{{route('updateContact', $contacts -> id)}}" class="btn btn-success">Güncelle</a>
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
