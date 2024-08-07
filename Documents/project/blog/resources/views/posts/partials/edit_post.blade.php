@auth
<form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    {{-- Post title --}}
    <div class="form-group">
        <label for="title">Post title</label>
        <input type="text"
               name="title"
               id="title"
               class="form-control"
               value="{{ $post->title }}"
               placeholder="write post title here.."
               />

        @if ($errors->has('title'))
            <small class="text-danger">{{ $errors->first('title') }}</small>
        @endif
    </div>
    {{-- End --}}

    {{-- Post body --}}
    <div class="form-group">
        <label for="body">Post body</label>
        <textarea class="form-control"
                  name="body"
                  id="body"
                  rows="3"
                  placeholder="write post body here.."
                  style="resize: none;">{{ $post->body }}</textarea>

        @if ($errors->has('body'))
            <small class="text-danger">{{ $errors->first('body') }}</small>
        @endif
    </div>
    <div class="my-2">
        <label for="image">Image:</label>
        <input class="form-control" type="file" name="image" id="image">
    </div>
    @if ($errors->has('image'))
        <small class="text-danger">{{ $errors->first('image') }}</small>
    @endif

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Update Post</button>
        <a href="{{ route('home') }}" class="btn btn-default">Back</a>
    </div>

</form>
@else
    <?=redirect($post->path())?>
@endauth

