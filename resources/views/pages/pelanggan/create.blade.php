@extends('layout.dashboard')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Elements</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Form Design <small>different form elements</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>

                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                                method="POST" action={{ route('pelanggan.store') }}>
                                @csrf
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama
                                        Pelanggan
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="first-name" required="required" class="form-control "
                                            name="nama_pelanggan">
                                    </div>
                                    @error('nama_pelanggan')
                                        <div class="col-md-6 col-sm-6 ">
                                            <p class="italic text-danger">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tanggal
                                        Pemesanan
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="date" id="first-name" required="required" class="form-control "
                                            name="tanggal_pesanan">
                                    </div>
                                    @error('tanggal_pesanan')
                                        <div class="col-md-6 col-sm-6 ">
                                            <p class="italic text-danger">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Waktu
                                        Pemesanan
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="time" id="first-name" required="required" class="form-control "
                                            name="waktu_pemesanan">
                                    </div>
                                    @error('waktu_pemesanan')
                                        <div class="col-md-6 col-sm-6 ">
                                            <p class="italic text-danger">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Menu
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control" name="menu_id">
                                            <option value="">Choose option</option>
                                            @foreach ($menu as $item)
                                                <option value={{ $item->id }}>{{ $item->nama_menu }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('menu_id')
                                        <div class="col-md-6 col-sm-6 ">
                                            <p class="italic text-danger">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button class="btn btn-primary" type="button">Cancel</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
