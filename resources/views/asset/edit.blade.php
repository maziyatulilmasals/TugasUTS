@extends('layout.app')
@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('assets.update', ['asset' => $asset->id])}}" method="POST">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Edit Asset</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="assetCode" class="form-label">Kode asset</label>
                            <input class="form-control " type="text" name="assetCode" id="assetCode"
                                value="{{ $errors->any() ? old('assetCode') : $asset->assetCode }}"
                                placeholder="Masukan Kode Terbaru asset">
                            @error('assetCode')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="assetName" class="form-label">Nama asset</label>
                            <input class="form-control " type="text" name="assetName" id="assetName"
                                value="{{ $errors->any() ? old('assetName') : $asset->assetName }}"
                                placeholder="Masukan Nama Terbaru asset">
                            @error('assetName')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="assetPrice" class="form-label">Harga asset</label>
                            <input class="form-control " type="text" name="assetPrice" id="assetPrice"
                                value="{{ $errors->any() ? old('assetPrice') : $asset->assetPrice }}"
                                placeholder="Masukan Harga Terbaru asset">
                            @error('assetPrice')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-13 mb-3">
                            <label for="assetDescription" class="form-label">Deskripsi asset</label>
                            <input class="form-control " type="text" name="assetDescription" id="assetDescription"
                                value="{{ $errors->any() ? old('assetDescription') : $asset->assetDescription }}"
                                placeholder="Masukan Deskripsi Terbaru asset">
                            @error('assetDescription')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="type" class="form-label">ID type</label>
                            <select name="type" id="type" class="form-select">
                                @php
                                    $selected = '';
                                    if ($errors->any()) {
                                        $selected = old('type');
                                    } else {
                                        $selected = $asset->type_id;
                                    }
                                @endphp
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}" {{ $selected == $type->id ? 'selected' : '' }}>
                                        {{ $type->typeCode .
                                            ' -
                                                                    ' .
                                            $type->typeName }}</option>
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
                                    class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
