<form method="POST" action="/replies/{{ $reply->id }}/favorites">
                        {{ csrf_field() }}

                        <button type="submit" class="btn btn-default" {{ $reply->isFavorited() ? 'disabled' : '' }}>
                            {{ $reply->favorites_count }} {{ str_plural('Favorite', $reply->favorites_count) }}
                        </button>
                    </form>

<form method="POST" action="/replies/{{ $reply->id }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                </form>

<h1>
	{{ $profileUser->name }}
</h1>

@can ('update', $profileUser)
	<form method="POST" action="{{ route('avatar', $profileUser) }}" enctype="multipart/form-data">
		{{ csrf_field() }}

		<input type="file" name="avatar">

		<button type="submit" class="btn btn-primary">Add Avatar</button>
	</form>
@endcan

<img src="{{ asset($profileUser->avatar()) }}" width="200" height="200">

<img src="{{ $thread->creator->avatar() }}" alt="{{ $thread->creator->name }}" width="25" height="25" class="mr-1">
