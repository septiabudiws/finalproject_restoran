@extends('layout.dashboard')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Tables <small>Some examples to get you started</small></h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row d-flex justify-center" style="display: block;">
                <div class="col-md-10 col-sm-10 mx-auto">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Data Menu</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="" href={{ '/pelanggan/create' }}><i class="fa fa-plus-square-o"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Tanggal Pemesanan</th>
                                        <th>Waktu Pemesanan</th>
                                        <th>Menu</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pelanggan as $item)
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>{{ $item->nama_pelanggan }}</td>
                                            <td>{{ $item->tanggal_pesanan }}</td>
                                            <td>{{ $item->waktu_pemesanan }}</td>
                                            <td>{{ $item->menu->nama_menu }}</td>
                                            <td>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('pelanggan.destroy', $item->id) }}" method="POST">
                                                    <a href={{ route('pelanggan.edit', $item->id) }}
                                                        class="btn btn-primary btn-sm">
                                                        <i class="fa fa-pencil-square"></i> Edit
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        data-bs-toggle="modal" data-bs-target="#confirm{{ $item->id }}">
                                                        <i class="fa fa-trash"></i> Hapus
                                                    </button>
                                                </form>
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
    </div>
@endsection
