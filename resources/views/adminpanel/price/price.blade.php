@extends('adminpanel.app')
@section('content')

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Fiyat Ekle</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Traş İsmi (Saç, Sakal, ...)</label>
                                            <input type="text" id="first-name-column" class="form-control"
                                                   placeholder="Traş İsmi (Saç, Sakal, ...)" name="fname-column">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Fiyat</label>
                                            <input type="text" id="last-name-column" class="form-control"
                                                   placeholder="Fiyat" name="lname-column">
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Kaydet</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">FİYAT LİSTESİ</h4>
                    </div>
                    <div class="card-content">
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>Traş İsmi</th>
                                    <th>Fiyat</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-bold-500">Michael Right</td>
                                    <td></td>
                                    <td class="text-bold-500"></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">Mikkey Mice</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-500">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
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
