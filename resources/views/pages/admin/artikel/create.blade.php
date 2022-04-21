@extends('layouts.admincreate')

@section('content')
<div class="container-fluid">
    <h3 class="text-center mt-3">Tambah Data</h3>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow mt-3">
        <div class="card-body">
            <form action="{{ route('artikel.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title') }}" required autofocus>
                </div>
                <div class="form-group mt-6">
                    <label>Kategori</label>
                    <select name="category_id" required class="form-control">
                        <option value="">(Makanan/Minuman)</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-6">
                    <label>Metode Pengolahan</label>
                    <select name="type_id" required class="form-control">
                        <option value="">(Modern/Tradisional)</option>
                        @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-6">
                    <label for="alat">Deskripsi</label>
                    <textarea name="deskripsi" rows="3" class="d-block w-100 form-control" value="{{ old('deskripsi') }}"></textarea>
                </div>
                <div class="form-group mt-6">
                    <label for="durasi">Durasi</label>
                    <input type="text" class="form-control" name="duration" placeholder="Durasi Pembuatan (30 Menit)" value="{{ old('duration') }}">
                </div>
                <div class="form-group mt-6">
                    <label for="link_video">Link Video YouTube</label>
                    <input type="text" class="form-control" name="link_video" placeholder="https://www.youtube.com/" value="{{ old('link_video') }}">
                </div>
                <div class="control-group">
                    <input type="file" name="images" class="myfrm form-control" value="{{ old('images') }}">
                </div>
                <!-- <div class="form-group mt-6">
                    <label for="alat">Alat</label>
                    <textarea name="alat" rows="3" class="d-block w-100 form-control" value="{{ old('alat') }}"></textarea>
                </div>
                <div class="form-group mt-6">
                    <label for="bahan">Bahan</label>
                    <textarea name="bahan" rows="3" class="d-block w-100 form-control" value="{{ old('bahan') }}"></textarea>
                </div> -->
                <div class="form-group mt-4">
                    <label for="alat">alat</label>
                    <input id="alat" type="hidden" name="alat" value="{{ old('alat') }}">
                    <trix-editor input="alat"></trix-editor>
                </div>
                <div class="form-group">
                    <label for="bahan">Bahan</label>
                    <input id="bahan" type="hidden" name="bahan" value="{{ old('bahan') }}">
                    <trix-editor input="bahan"></trix-editor>
                </div>
                <div class="form-group">
                    <label for="langkah_langkah">Langkah-Langkah</label>
                    <input id="langkah_langkah" type="hidden" name="langkah_langkah" value="{{ old('langkah_langkah') }}">
                    <trix-editor input="langkah_langkah"></trix-editor>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
@endsection