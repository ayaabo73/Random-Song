<form action="{{route('singer.update',$singer->id) }}" method="post">
       @csrf
       @method('PATCH')
       <input type="text"  name="name" placeholder="name" value="{{$singer->name }}" class="@error('name') is-invalid @enderror"/>
       @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
       @enderror 
       <br><br>
       <br><br>
       <button type="submit">update</button>
</form>