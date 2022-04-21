<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin 2 - Dashboard</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        @include('includes.style')


    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            @include('includes.sidebar')

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    @include('includes.navbar2')

                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="row mb-4">
                            <div class="col">
                                <div class="d-sm-flex align-items-center justify-content-between">
                                    <h1 class="h3 mt-3 text-gray-800">Artikel Resep </h1>
                                </div>
                            </div>
                            <div class="col mt-4 d-flex justify-content-end mr-3">
                                <a href="{{ route('artikel.create') }}" class="btn btn-success">
                                    <span>Tambah</span> <i class="fas fa-fw fa-plus"></i>
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Kategori</th>
                                                <th>Durasi</th>
                                                <th>Jenis</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($items as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td><img src="{{ asset('storage/'. $item->images) }}" alt="" style="width: 100px" class="img-thumbnail"></td>
                                                <td>{{ $item->Category->name }}</td>
                                                <td>{{ $item->duration }}</td>
                                                <td>{{ $item->type->name }}</td>
                                                <td>
                                                    @csrf
                                                    <!-- <a href="" class="btn btn-primary">
                                    <i class="fa fa-eye"></i>
                                </a> -->
                                                    <a href="{{ route('artikel.edit', $item->id) }}" class="btn btn-info">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                    <form action="{{ route('artikel.destroy', $item->id) }}" method="post" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger delete">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="7" class="text-center">
                                                    Data Kosong
                                                </td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $items->links() }}
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- End of Main Content -->

                @include('includes.footer')

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        @include('includes.script')
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </body>

    <script>
        $().click( function(){
            swal({
                    title: "Yakin?",
                    text: "Kamu akan menghapus data pegawai dengan id",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak jadi dihapus");
                    }
                });
        })
    </script>

    <script>
        @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
        @endif
    </script>


    </html>
</x-app-layout>