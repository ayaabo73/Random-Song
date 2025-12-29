<form action="{{route('singer.store') }}" method="post">
    @csrf
    <input type="text"  name="name" placeholder="name"  class="@error('name') is-invalid @enderror">
    @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br><br>
    <button type="submit">save</button>

</form>


<table class="table">
  <thead>
    <tr>
      <th>SINGERS</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($singers as $singer)
      <tr>
        <td scope="name">{{ $singer->name}}</td>
        <td>
          <a href="{{ route('singer.edit',"$singer->id") }}" class="btn btn-primary btn-sm">update</i></button>
          <form action="{{route('singer.destroy',$singer->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
{{ $singers->links() }}