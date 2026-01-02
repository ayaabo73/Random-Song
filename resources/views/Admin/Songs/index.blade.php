<form action="{{route('song.store') }}" method="post">
  @csrf
  <input type="text"  name="name" placeholder="name"  class="@error('name') is-invalid @enderror">
  @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <br><br>
  @error('singer_id')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <select class="form-select" aria-label="Default select example" name="singer_id" class="@error('singer_id') is-invalid @enderror"  >
    <option selected >Open this select menu</option>
    @foreach ($singers as $singer )
      <option value="{{ $singer->id }}" >{{ $singer->name }}</option>
    @endforeach
  </select>
  <br><br>
  <button type="submit">save</button>
</form>

<table class="table">
  <thead>
    <tr>
      <th>SONGS</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($songs as $song)
      <tr>
        <td scope="name">{{ $song ->name}}</td>
        <td>
          <a href="{{ route('song.edit',$song->id) }}" class="btn btn-primary btn-sm">update</a>
          <form action="{{route('song.destroy',$song->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
{{ $songs->links() }}