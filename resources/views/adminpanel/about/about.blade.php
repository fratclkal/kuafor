@extends('adminpanel.app')





@section('content')




    <section class="section">
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Hakkımızda</h4>
                    </div>
                    <div class="card-content">

                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Başlık</th>
                                    <th>İçerik</th>
                                    <th>Seçenekler</th>

                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($about as $abouts)
                                        <tr>
                                            <td>{{$abouts -> id}}</td>
                                            <td class="text-bold-500">{{$abouts -> title}}</td>
                                            <td class="text-bold-500">{{$abouts -> content}}</td>
                                            <td>
                                                <a href="{{route('updateAbout', $abouts -> id)}}" class="btn btn-success">Güncelle</a>
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



   <!-- <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/balloon/ckeditor.js"></script> -->

    <!--<script>
        BalloonEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>-->



@endsection
