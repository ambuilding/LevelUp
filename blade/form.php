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