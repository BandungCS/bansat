@extends('partial.template')

@section('title_web')
    Detail Data assets
@endsection

@section('content')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->        
            <h1 class="h3 mb-3 text-gray-800 font-weight-bold text-center">Detail Data assets</h1>
                   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-sm-12 col-md-8">
                   
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="text-center text-primary text-dark font-weight-bold">
                            <th>No</th>
                            <th>Gambar</th>
                            <th>nama</th>
                            <th>kelas</th>
                            <th>Noinv</th>
                            <th>Content</th>
                            <th>Kondisi</th>
                            <th>Kantor</th>
                            <th>Gudang</th>
                            <th>Aula</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                                <tr class="text-center">
                                    <td>{{ $no++ }}</td>
                                    <td><img src="{{ Storage::url('public/assetss/').$detail->image }}" class="rounded" style="width: 120px; height:120px;"></td>
                                    <td>{{ $detail->nama }}</td>
                                    <td>{{ $detail->kelas }}</td>
                                    <td>{{ $detail->noinv }}</td>
                                    <td>{!! $detail->content !!}</td>
                                    <td>{{ $detail->kondisi }}</td>
                                    <td>{{ $detail->kantor }}</td>
                                    <td>{{ $detail->gudang }}</td>
                                    <td>{{ $detail->aula }}</td>

                                    
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </tr>
                        
                        </tbody>
                </table>
                <a href="/assets" class="btn btn-success font-weight-bold">Kembali</a>
            </div>
        </div>
    </div> 
</div>
</div>
    <!-- /.container-fluid -->
@endsection