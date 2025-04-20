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

        .asset-table tbody tr td {
            padding: 10px;
        }

        .asset-table .remove-row {
            cursor: pointer;
            color: red;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            border: none !important;
            background: none !important;
        }

        /* Style for the switch */
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        /* Hide the default checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* Style for the slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: 0.4s;
            border-radius: 34px;
        }

        /* The circle inside the slider */
        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            border-radius: 50%;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: 0.4s;
        }

        /* When the checkbox is checked, change the slider color and move the circle */
        input:checked+.slider {
            background-color: #4CAF50;
        }

        input:checked+.slider:before {
            transform: translateX(26px);
        }
    </style>

    <div class="main-content-inner">
        <div class="row">
            <form action="{{ route('paket.update', $paket->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title text-center">Edit Data Paket</h4>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Status -->
                                    <div class="form-group col-md-12">
                                        <label class="mt-3" for="">Status</label>
                                        <select name="status" id="" class="form-control" required>
                                            <option value="1" {{ $paket->status == 1 ? 'selected' : '' }}>Aktif
                                            </option>
                                            <option value="0" {{ $paket->status == 0 ? 'selected' : '' }}>Tidak Aktif
                                            </option>
                                        </select>
                                    </div>

                                    <!-- Nama Paket -->
                                    <div class="form-group col-md-12">
                                        <label class="mt-3" for="nama">Nama Paket</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            value="{{ old('nama', $paket->nama) }}" required>
                                    </div>

                                    <!-- Tipe Paket -->
                                    <div class="form-group col-md-12">
                                        <label class="mt-3" for="type">Tipe</label>
                                        <select name="type" id="type" class="form-control" required>
                                            <option value="month" {{ $paket->type == 'month' ? 'selected' : '' }}>Bulan
                                            </option>
                                            <option value="week" {{ $paket->type == 'week' ? 'selected' : '' }}>Minggu
                                            </option>
                                        </select>
                                    </div>

                                    <!-- Harga Paket -->
                                    <div class="form-group col-md-12">
                                        <label class="mt-3" for="harga">Harga Coret (IDR)</label>
                                        <input type="number" class="form-control" id="harga_coret" name="harga_coret" value="{{ old('harga_coret', $paket->harga_coret) }}" required>
                                        <small style="color: red">0 jika tidak ingin ditampilkan</small>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="mt-3" for="harga">Harga (IDR)</label>
                                        <input type="number" class="form-control" id="harga" name="harga"
                                            value="{{ old('harga', $paket->harga) }}" required>
                                    </div>

                                    <!-- Benefit -->
                                    <div class="form-group col-md-12">
                                        <label class="mt-3" for="benefit">Benefit</label>
                                        <div id="benefit-fields">
                                            @foreach (json_decode($paket->benefit) as $benefit)
                                                <div class="input-group mb-3">
                                                    <input type="text" name="benefit[]" class="form-control"
                                                        value="{{ $benefit }}" placeholder="Tambah Benefit" required>
                                                    <button type="button" class="btn btn-danger remove-benefit">-</button>
                                                </div>
                                            @endforeach
                                            <button type="button" class="btn btn-success add-benefit">+</button>
                                        </div>
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
@endsection

<!-- Add Select2 CSS in the <head> section -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    
    <!-- Add this in the <head> section or just before </body> tag -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
<script>
    $(document).ready(function() {

        $('.add-benefit').click(function() {
            $('#benefit-fields').append(
                '<div class="input-group mb-3"><input type="text" name="benefit[]" class="form-control" placeholder="Tambah Benefit" required><button type="button" class="btn btn-danger remove-benefit">-</button></div>'
                );
        });

        $(document).on('click', '.remove-benefit', function() {
            $(this).parent().remove();
        });

        $(document).on('click', '.remove-row', function() {
            $(this).closest('tr').remove();
        });
    });
</script>
