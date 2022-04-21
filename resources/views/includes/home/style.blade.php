<link rel="apple-touch-icon" sizes="76x76" href="{{ url('frontend/assets/img/apple-icon.png') }}" />

<link rel="icon" type="image/png" href="{{ url('frontend/assets/img/favicon.png') }}" />

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="{{ url('frontend/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
<link href="{{ url('frontend/assets/css/nucleo-svg.css') }}" rel="stylesheet" />



<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />

<!-- CSS Files -->

<link id="pagestyle" href="{{ url('frontend/assets/css/material-kit.css?v=3.0.1') }}" rel="stylesheet" />

<!-- <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet" /> -->

<!-- animation aos -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<style>
    .gambar {
        overflow: hidden;
    }

    .gambar img {
        transition: all 1s ease;
    }

    .gambar:hover img {
        transform: scale(1.3);
    }

    /* animate content */
    .cardd {
        overflow: hidden;
    }

    .cardd {
        transition: all 1.3s ease;
    }

    /* end animate content */

    .cardd:hover {
        -ms-transform: scale(1.5);
        /* IE 9 */
        -webkit-transform: scale(1.5);
        /* Safari 3-8 */
        transform: scale(1.5);
    }

    .gambar {
        border-radius: 5%;
    }

    .latest {
        margin-top: -40px;
    }

    .isi {
        margin-block-start: -35px;
    }

    .desc {
        margin-top: -10px;
    }

    .waktu {
        margin-top: -20px;
    }

    .thumbnail {
        border-radius: 5%;
    }

    .thumbnail1 {
        border-radius: 40px;
    }

    .zoom {
        /* padding: 50px; */
        background-color: rgb(255, 255, 255);
        transition: transform 0.2s;
        /* width: 200px; */
        /* height: 200px; */
        margin: 0 auto;
        border-radius: 20px;
    }

    .zoom:hover {
        -ms-transform: scale(1.1);
        /* IE 9 */
        -webkit-transform: scale(1.1);
        /* Safari 3-8 */
        transform: scale(1.1);
    }

    .judul {
        margin-top: -20px;
    }

    .ronded {
        border-radius: 10%;
    }
</style>