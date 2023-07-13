<div class="d-flex">
    <a href="{{ route('assets.show', ['asset' => $asset->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i
            class="bi-eye-fill"></i> Preview</a>
    <a href="{{ route('assets.edit', ['asset' => $asset->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i
            class="bi-pencil-square"></i> Edit</a>
    <div>
        <form action="{{ route('assets.destroy', ['asset' => $asset->id]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-dark btn-sm
me-2"><i class="bi-trash"></i> Delete</button>
        </form>
    </div>
</div>
