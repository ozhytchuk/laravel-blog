@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<h2>Categories</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>DESCRIPTION</th>
            <th>DATE ADDED</th>
            <th>ACTIONS</th>
        </tr>
        </thead>
        <tbody>
        @forelse($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->title }}</td>
                <td>{{ $category->description }}</td>
                <td>{{ $category->created_at }}</td>
                <td>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger" id="edit-icon" onclick="var result = confirm('Are you sure?'); if (result) {
                        event.preventDefault();
                        document.getElementById('delete-form').submit();
                    }">
                        Delete
                    </a>
                    <form id="delete-form" action="#" method="post"
                          style="display: none">
                        @csrf
                        @method('DELETE')

                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">
                    <a href="#" class="badge badge-warning">NO DATA</a>
                </td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <a href="{{ route('categories.create') }}" class="btn btn-success" style="float: right">Add new category</a>
</div>