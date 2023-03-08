@extends('partial.template')

@section('title_web')
    Assets
@endsection

@section('content')
<div class="container mt-0">
    <div class="row">
        <div class="col-md-12">
            <!-- Page Heading -->
            <h1 class="h3 mb-3 text-gray-800 text-center font-weight-bold">Data Assets</h1>
            <div class="card border-0 shadow rounded">                         
                <div class="card shadow mb-2">
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-sm-12 col-md-8">
                                <a href="{{ route('assets.create') }}" class="btn btn-md btn-primary mb-0 font-weight-bold">
                                    Tambah Data Assets
                                </a>            
                            </div>
                        </div>
                    </div>
                <div class="card-body">                
                   
                    <table class="table table-bordered table-hover text-center">
                        <thead class="font-weight-bold text-gray-800">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">noinv</th>
                                <th scope="col">Content</th>
                                <th scope="col">kondisi</th>
                                <th scope="col">kantor</th>
                                <th scope="col">gudang</th>
                                <th scope="col">aula</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        
                        <tbody>

                            <?php $no=1; ?>
                            @forelse ($assetss as $assets)
                    
                                <tr>
                                    <td>{{$no++}}</td>                       
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/assetss/').$assets->image }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $assets->nama }}</td>
                                    <td>{{ $assets->kelas }}</td>
                                    <td>{{ $assets->noinv }}</td>
                                    <td>{!! $assets->content !!}</td>
                                    <td>{{ $assets->kondisi }}</td>
                                    <td>{{ $assets->kantor }}</td>
                                    <td>{{ $assets->gudang }}</td>
                                    <td>{{ $assets->aula }}</td>
                                    <td>{{ $assets->tahun }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('assets.destroy', $assets->id) }}" method="POST">
                                        <a href="{{ route('assets.show', $assets->id ) }}" class="btn btn-sm btn-warning font-weight-bold">
                                            Detail
                                        </a>                                        
                                        <a href="{{ route('assets.edit', $assets->id ) }}" class="btn btn-sm btn-success font-weight-bold">
                                            Edit                                            
                                        </a>                                        
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger font-weight-bold delete-confirm">
                                                Hapus
                                            </button>                                            
                                        </form>                                        
                                    </td>                                    
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data assets Belum Tersedia
                                </div>
                                @endforelse
                        </tbody>                        
                    </table>
                    {{ $assetss->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
