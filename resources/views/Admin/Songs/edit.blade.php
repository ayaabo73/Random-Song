<form action="{{route('song.update',$song->id) }}" method="post">
       @csrf
       @method('PATCH')
       <input type="text"  name="name" placeholder="name" value="{{$song->name }}" class="@error('name') is-invalid @enderror" />
       @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
       @enderror
       <br><br>
       @error('singer_id')
              <div class="alert alert-danger">{{ $message }}</div>
       @enderror
       <select class="form-select" aria-label="Default select example" name="singer_id" class="@error('singer_id') is-invalid @enderror" >
              @foreach ($singers as $singer )
                     <option value="{{ $singer->id }}" @selected(old('singer_id',$song->singer->id)== $singer->id )> {{ $singer ->name }}</option>
              @endforeach
       </select>
       <br><br>
       <button type="submit">update</button>
</form>