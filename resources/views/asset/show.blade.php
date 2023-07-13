@extends('layout.app')
@section('content')
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Preview</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="assetCode" class="form-label">Asset Code</label>
                        <h5>{{ $asset->assetCode }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="assetName" class="form-label">Asset Name</label>
                        <h5>{{ $asset->assetName }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="assetPrice" class="form-label">Price</label>
                        <h5>{{ $asset->assetPrice }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="assetDescription" class="form-label">Description</label>
                        <h5>{{ $asset->assetDescription }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="type_id" class="form-label">Type Code</label>
                        <h5>{{ $asset->type->typeName }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('assets.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

