<form action="{{ route('department.delete', $department) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit">
        <i class="fa-solid fa-trash text-red-500"></i>
    </button>
</form>
