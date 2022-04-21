@extends('layouts.detail')

@section('content')
<!-- content -->
<div class="card card-body shadow-blur mx-3 mx-md-6 mt-n8">
    <!-- header judul -->
    <div class="card card-body mx-md-12 mt-n9 bg-gray-100">
        <small class="px-5 py-3">
            <h3 class="text-center">{{ $item->title }}</h3>
            <p class="text-center mt-4">
                {{ $item->deskripsi }}
            </p>
            <div class="row text-center mt-5 center">
                <div class="col-3"></div>
                <div class="col-2">
                    <p class="text-center desc badge" style="color: rgb(224, 0, 0)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg>
                        <small class="ms-1" style="font-size: small">{{ $item->duration }}</small>
                    </p>
                </div>
                <div class="col-2">
                    <p>
                        <small class="badge" style="
                                        background-color: rgb(227, 231, 0);
                                        color: rgb(0, 0, 0);
                                    ">{{ $item->category->name }}</small>
                    </p>
                </div>
                <div class="col-2">
                    <p>
                        <small style="color: black">{{ $item->type->name }}</small>
                    </p>
                    <div class="col-3"></div>
                </div>
            </div>
        </small>
    </div>

    <!-- isi bawah -->
    <!-- Alat -->
    <div class="content ps-6">
        <h4 class="mt-5">Alat</h4>
        <p class="ps-1" style="color: black">{!! $item->alat !!}</p>

        <!-- bahan -->
        <h4 class="mt-4">Bahan</h4>
        <p class="ps-1" style="color: black">{!! $item->bahan !!}</p>

        <!-- bahan -->
        <h4 class="mt-4">Langkah-Langkah</h4>
        <p class="" style="color: black"> {!! $item->langkah_langkah !!}</p>

        <h4 class="mt-4 ps-3">Video Pembuatan</h4>
        <div class="ms-3 mb-6">

        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ Str::limit($item->link_video, -11) }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            
        </div>
    </div>
</div>
<!-- end content -->
@endsection