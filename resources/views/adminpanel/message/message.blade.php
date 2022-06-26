@extends('adminpanel.app')
@section('content')

    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Gelen Yorumlar</h4>
                    </div>
                    <div class="card-content">
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>İsim</th>
                                    <th>Soyisim</th>
                                    <th>E-mail</th>
                                    <th>Yorum</th>
                                    <th>SEÇENEKLER</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($message as $messages)
                                <tr>
                                    <td class="text-bold-500">{{$messages -> name}}</td>
                                    <td>{{$messages -> sur_name}}</td>
                                    <td class="text-bold-500">{{$messages -> e_mail}}</td>
                                    <td>{{$messages -> comment}}</td>
                                    <td>
                                        <a href="{{route('deleteMessage', $messages -> id)}}" class="btn btn-danger">Sil</a>
                                        <a href="" class="btn btn-success">DETAY</a>
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
