@extends('partial.template')

@section('title_web')
    Tambah Assets
@endsection

@section('content')
    <div class="container mt-0">
        <div class="row">
            <div class="col-md-12">
            <!-- Page Heading -->
            <h1 class="h3 mb-3 text-gray-800 text-center font-weight-bold">Input Data Assets</h1>
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('assets.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">GAMBAR</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                            
                                <!-- error message untuk nama -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan name">
                            
                                <!-- error message untuk nama -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">kelas</label>
                                <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{ old('kelas') }}" placeholder="Masukkan kelas">
                            
                                <!-- error message untuk nama -->
                                @error('kelas')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">No Inventaris</label>
                                <input type="text" class="form-control @error('noinv') is-invalid @enderror" name="noinv" value="{{ old('noinv') }}" placeholder="Masukkan no inventaris">
                            
                                <!-- error message untuk nama -->
                                @error('noinv')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">tahun</label>
                                <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun" value="{{ old('tahun') }}" placeholder="Masukkan tahun">
                            
                                <!-- error message untuk nama -->
                                @error('tahun')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">kondisi</label>
                                <input type="text" class="form-control @error('kondisi') is-invalid @enderror" name="kondisi" value="{{ old('kondisi') }}" placeholder="Masukkan kondisi">
                            
                                <!-- error message untuk nama -->
                                @error('kondisi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">kantor</label>
                                <input type="text" class="form-control @error('kantor') is-invalid @enderror" name="kantor" value="{{ old('kantor') }}" placeholder="Masukkan kantor">
                            
                                <!-- error message untuk nama -->
                                @error('kantor')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">gudang</label>
                                <input type="text" class="form-control @error('gudang') is-invalid @enderror" name="gudang" value="{{ old('gudang') }}" placeholder="Masukkan gudang">
                            
                                <!-- error message untuk nama -->
                                @error('gudang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">aula</label>
                                <input type="text" class="form-control @error('aula') is-invalid @enderror" name="aula" value="{{ old('aula') }}" placeholder="Masukkan aula">
                            
                                <!-- error message untuk nama -->
                                @error('aula')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            

                            <div class="form-group">
                                <label class="font-weight-bold">KONTEN</label>
                                <textarea class="form-control @error('konten') is-invalid @enderror" name="konten" rows="5" placeholder="Masukkan Konten assets">{{ old('konten') }}</textarea>
                            
                                <!-- error message untuk conten -->
                                @error('konten')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <a href="/assets" class="btn btn-success font-weight-bold">Kembali</a>
                            <button type="submit" class="btn btn-md btn-primary font-weight-bold">Simpan</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'konten' );
</script>
    @endsection