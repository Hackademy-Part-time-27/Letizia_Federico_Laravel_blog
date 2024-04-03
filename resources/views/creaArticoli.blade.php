<x-layout title='crea articolo'>

    <div class="mt-5 m-5">
        <form action="{{ route('storeArticoli') }}" method="POST">
            @csrf

            <div class="form-group ">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" class="form-control" id="category" name="category" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="body">Body:</label>
                <textarea class="form-control" id="body" name="body" rows="10" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Create Article</button>
        </form>
        </div>
</div>
</x-layout>