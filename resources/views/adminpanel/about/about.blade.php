@extends('adminpanel.app')





@section('content')

    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">HAKKIMIZDA</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Başlık : </label>
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text" id="first-name" class="form-control" name="fname" placeholder="Başlık..">
                                </div>
                                <div class="col-md-4">
                                    <label>İçerik : </label>
                                </div>
                                <div class="col-md-12 form-group">
                                    <div id="editor">İçerik Yazınız..</div>
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

                                    <tr>
                                        <td></td>
                                        <td class="text-bold-500"></td>
                                        <td class="text-bold-500"></td>
                                        <td>
                                            <a href="#" class="btn btn-success">Güncelle</a>
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



    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/balloon/ckeditor.js"></script>

    <script>
        BalloonEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>


@endsection
