<h3 style="margin-left: 5%; margin-bottom: 2%">Add category</h3>
<div class="container">
    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input id="title" type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="Description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="5"></textarea>
        </div>
        <button class="btn btn-success" style="cursor: pointer; float: right; margin-bottom: 2%;">
            Save
        </button>
    </form>
</div>