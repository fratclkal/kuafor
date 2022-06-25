@extends('adminpanel.app')
@section('content')

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">GALERİ</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Başlık</label>
                                            <input type="text" id="first-name-column" class="form-control"
                                                   placeholder="Başlık" name="fname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>İçerik : </label>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <textarea name="content" id="ck" cols="105" rows="10"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFileMultiple" class="form-label">Fotoğraf Ekle</label>
                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Kaydet</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Temizle</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




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
