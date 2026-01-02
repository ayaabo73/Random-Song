<form action="{{route('quote.update',$quote->id) }}" method="post">
       @csrf
       @method('PATCH')
       <input type="text"  name="body" value="{{$quote->body }}"  class="@error('body') is-invalid @enderror"/>    
       @error('body')
              <div class="alert alert-danger">{{ $message }}</div>
       @enderror
       <br><br>
       @error('song_id')
              <div class="alert alert-danger">{{ $message }}</div>
       @enderror   
       <select class="form-select" aria-label="Default select example" name="song_id" class="@error('song_id') is-invalid @enderror" >
              @foreach ($songs as $song )
              <option value="{{ $song ->id }}" @selected(old('song_id',$quote->song->id)== $song->id )> {{ $song->name }}</option>
              @endforeach
       </select>   
       <br><br>
       <button type="submit">update</button>
</form>