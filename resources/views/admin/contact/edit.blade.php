<form action="{{ route('contact.update', $data->id) }}" method="POST">
@csrf

<input type="text" name="name" value="{{ $data->name }}">
<input type="email" name="email" value="{{ $data->email }}">
<input type="text" name="nis" value="{{ $data->nis }}">

<button type="submit">Update</button>
</form>
