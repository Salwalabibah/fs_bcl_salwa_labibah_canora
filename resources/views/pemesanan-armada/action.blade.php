<div class="d-flex justify-content-end">
    <a href="{{ route('armada.edit', $item->id) }}"
        class="btn btn-sm btn-info btn-icon ml-2 mr-2 d-flex align-items-center justify-content-center"
        style="height: 30px; width: 30px">
        <i class="fas fa-pen"></i>
    </a>
    <form action="{{ route('armada.destroy', $item->id) }}" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button class="btn btn-sm btn-danger btn-icon confirm-delete d-flex align-items-center justify-content-center"
            style="height: 30px; width: 30px">
            <i class="fas fa-trash"></i>
        </button>
    </form>
</div>
