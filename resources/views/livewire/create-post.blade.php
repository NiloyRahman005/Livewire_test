<div>
    <!-- Display success message -->
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <!-- Post creation form -->

    <h1>Without route Name Defined </h1>
    <form wire:submit.prevent="createPost">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" wire:model="title" class="form-control" placeholder="Enter title" />
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" wire:model="content" class="form-control" placeholder="Enter content"></textarea>
            @error('content') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>



    <h1>With ROUTE NAME DEFINED</h1>

    <form wire:submit.prevent="createPost('{{ route('create.post') }}')">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" wire:model="title" class="form-control" placeholder="Enter title" />
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" wire:model="content" class="form-control" placeholder="Enter content"></textarea>
            @error('content') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>

    <!-- Posts table -->
    <h3 class="mt-4">All Posts</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->created_at->format('Y-m-d H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No posts available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
