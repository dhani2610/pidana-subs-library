@extends('backend.layouts-new.app')

@section('content')
    <style>
        .form-check-label {
            text-transform: capitalize;
        }

        .select2 {
            width: 100% !important;
        }

        label {
            float: left;
        }
    </style>
    @php
        $usr = Auth::guard('admin')->user();
        if ($usr != null) {
            $userRole = Auth::guard('admin')->user()->getRoleNames()->first(); // Get the first role name
        }

    @endphp

    <div class="main-content-inner">
        <div class="row">
            <!-- data table start -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title float-left">Data {{ $page_title }}</h4>
                        @if ($usr->can('buku.create'))
                            <p class="float-right mb-2" style="float: right">
                                <a href="{{ route('buku.create') }}" class="btn btn-primary text-white mb-3">
                                    Tambah Data
                                </a>
                            </p>
                        @endif

                        <div class="clearfix"></div>
                        <div class="table-responsive">
                            @include('backend.layouts.partials.messages')
                            <table id="dataTable" class="table text-center">
                                <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th>NO</th>
                                        <th>Cover</th>
                                        <th>Title</th>
                                        <th>File</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td><img src="{{ asset('assets/img/cover/'.$item->cover) }}" style="max-width:200px" alt="" srcset=""></td>
                                            <td>{{ $item->title }}</td>
                                            <td><a href="{{ asset('documents/pdf/'.$item->file) }}" target="_blank" >View</a></td>
                                            <td>{{ $item->deskripsi }}</td>
                                            @if ($usr->can('buku.edit') || $usr->can('buku.delete'))
                                                <td>
                                                    @if ($usr->can('buku.edit'))
                                                        <a href="{{ route('buku.edit', $item->id) }}"
                                                            class="btn btn-success text-white">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                    @endif
                                                    @if ($usr->can('buku.delete'))
                                                        <a onclick="confirmDelete('{{ route('buku.destroy', $item->id) }}')"
                                                            class="btn btn-danger text-white">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </a>
                                                    @endif
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- data table end -->
        </div>
    </div>
@endsection

@section('script')
    <script>
        function confirmDelete(deleteUrl) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger"
                },
                buttonsStyling: false
            });

            swalWithBootstrapButtons.fire({
                title: "Are you sure you want to delete this data?",
                text: "This action cannot be undone!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = deleteUrl;
                }
            });
        }
    </script>
@endsection
