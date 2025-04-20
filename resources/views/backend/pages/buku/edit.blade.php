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
            color: black;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 10px;
        }
    </style>

    <div class="main-content-inner">
        <div class="row">
            <form action="{{ route('buku.update',$buku->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title text-center">Update Data</h4>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group col-md-12">
                                        <label class="mt-2" for="upload_foto">Cover</label>
                                        <input type="file" class="form-control img" id="cover" accept="application/image"
                                            data-default-file="{{ asset('assets/img/cover/'.$buku->cover) }}"
                                            name="cover">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="mt-2" for="upload_foto">Upload File</label>
                                        <input type="file" class="form-control dropify" id="file" accept="application/pdf"
                                            data-default-file="{{ asset('documents/pdf/'.$buku->file) }}"
                                            name="file">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="mt-2" for="merek">Ttile</label>
                                        <input type="text" class="form-control" id="title" value="{{ $buku->title }}" name="title" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="mt-2" for="jenis_unit">Deskripsi</label>
                                        <textarea name="deskripsi" class="form-control" required id="">{{ $buku->deskripsi }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary mt-4" type="submit" style="float: right">Simpan Data</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
  
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

    <script>
        $('.dropify').dropify();
        $('.img').dropify();
    </script>
@endsection
