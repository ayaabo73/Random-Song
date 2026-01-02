<form action="{{route('quote.store') }}" method="post">
  @csrf
  <input type="text"  name="body" placeholder="body"  class="@error('body') is-invalid @enderror">
  @error('body')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <br><br>      
  @error('song_id')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror       
  <select class="form-select" aria-label="Default select example" name="song_id" class="@error('song_id') is-invalid @enderror"  >
    <option selected >Open this select menu</option>
    @foreach ($songs as $song )
      <option value="{{ $song ->id }}" >{{ $song->name }}</option>
    @endforeach
  </select>
  <br><br>
  <button type="submit">save</button>    
</form> 

<table class="table">
  <thead>
    <tr>
      <th>QUOTES</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($quotes as $quote)
      <tr>
        <td scope="name">{{ $quote ->body}}</td>
        <td>
          <a href="{{ route('quote.edit',"$quote->id") }}" class="btn btn-primary btn-sm">update</a>
          <form action="{{route('quote.destroy',$quote->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
          </form>  
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
{{ $quotes->links() }}