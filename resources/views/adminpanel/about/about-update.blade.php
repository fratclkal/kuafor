@extends('adminpanel.app')
@section('content')

    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Hakkımızda Güncelleme</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" method="POST" action="{{route('updateAbout', $about ->id)}}">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Başlık : </label>
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text" id="first-name" class="form-control" name="title" placeholder="{{$about -> title}}">
                                </div>
                                <div class="col-md-4">
                                    <label>İçerik : </label>
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea name="content" id="ck" cols="105" rows="10">{{$about -> content}}</textarea>
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

    <script>
        const textarea = document.querySelector( '#ck' );

        ClassicEditor
            .create( textarea )
            .then( editor => { window.editor = editor } );

        document.getElementById( 'submit' ).onclick = () => {
            textarea.value = editor.getData();
        }
    </script>

@endsection
