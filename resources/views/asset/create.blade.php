@extends('layout.app')
@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('assets.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Tambah asset</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="assetCode" class="form-label">Kode asset</label>
                        <input class="form-control" type="text" name="assetCode" id="assetCode"
                            value="{{ old('assetCode') }}" placeholder="Masukan Kode asset">
                        @error('assetCode')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="assetName" class="form-label">Nama asset</label>
                        <input class="form-control" type="text" name="assetName" id="assetName" value=""
                            placeholder="Masukan Nama asset">
                        @error('assetName')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-13 mb-3">
                        <label for="assetDescription" class="form-label">Deskripsi asset</label>
                        <input class="form-control" type="text" name="assetDescription" id="assetDescription"
                            value="" placeholder="Masukan Deskripsi asset">
                        @error('assetDescription')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="assetPrice" class="form-label">Harga asset</label>
                        <input class="form-control" type="text" name="assetPrice" id="assetPrice" value=""
                            placeholder="Masukan Harga asset">
                        @error('assetPrice')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="type" class="form-label">ID type</label>
                        <select name="type" id="type" class="form-select">
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}"
                                    {{ old('type') == $type->id ? 'selected' : '' }}>
                                    {{ $type->typeCode . ' -' . $type->typeName }}</option>
                            @endforeach
                        </select>
                        @error('type')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 d-grid">
                        <a href="{{ route('assets.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                class="bi-arrow-left-circle
me-2"></i> Cancel</a>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-dark
btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                            Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
    @endsection

