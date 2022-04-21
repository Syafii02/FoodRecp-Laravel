@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h3 class="text-center mt-3">Edit Data {{ $item->title }}</h3>
    <div class="card shadow mt-3">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="card-body">
            <form action="{{ route('artikel.update', $item->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $item->title }}" required autofocus>
                </div>
                <div class="form-group mt-6">
                    <label>Kategori</label>
                    <select name="category_id" required class="form-control">
                        <option value="{{ $item->category_id }}">Jangan Diubah</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-6">
                    <label>Metode Pengolahan</label>
                    <select name="type_id" required class="form-control">
                        <option value="{{ $item->type_id }}">Jangan Diubah</option>
                        @foreach ($types as $type)
                        <option value="{{ $type->id }}">
                            {{ $type->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-6">
                    <label for="duration">Durasi</label>
                    <input type="text" class="form-control" name="duration" placeholder="Durasi Pembuatan (30 Menit)" value="{{ $item->duration }}">
                </div>
                <div class="form-group mt-6">
                    <label for="link_video">Link Video YouTube</label>
                    <input type="text" class="form-control" name="link_video" placeholder="https://www.youtube.com/" value="{{ $item->link_video }}">
                </div>
                <div class="control-group">
                    <input type="file" name="images" class="myfrm form-control" multiple value="{{ asset('storage/'.$item->images) }}">
                    <img src="{{ asset('storage/'.$item->images) }}" class="border  m-3" width="100px" alt="">
                </div>

                <!-- <div class="form-group mt-6">
                    <label for="alat">Alat</label>
                    <textarea type="text" name="alat" rows="3" class="d-block w-100 form-control" value="">{{ $item->alat }}</textarea>
                </div>
                <div class="form-group mt-6">
                    <label for="bahan">Bahan</label>
                    <textarea type="text" name="bahan" rows="3" class="d-block w-100 form-control" value="">{{ $item->bahan }}</textarea>
                </div> -->

                <div class="form-group mt-4">
                    <label for="alat">alat</label>
                    <input id="alat" type="hidden" name="alat" value="{{ $item->alat }}">
                    <trix-editor input="alat"></trix-editor>
                </div>
                <div class="form-group">
                    <label for="bahan">Bahan</label>
                    <input id="bahan" type="hidden" name="bahan" value="{{ $item->bahan }}">
                    <trix-editor input="bahan"></trix-editor>
                </div>

                <div class="form-group">
                    <label for="langkah_langkah">Langkah-Langkah</label>
                    <input id="langkah" type="hidden" name="langkah_langkah" value="{{ $item->langkah_langkah }}">
                    <trix-editor input="langkah"></trix-editor>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
@endsection