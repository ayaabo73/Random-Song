<form action="{{route('song.store') }}" method="get">
     @csrf
   
            <input type="text"  name="name" placeholder="name"  class="@error('name') is-invalid @enderror">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br><br>
             
            @error('singer_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <select class="form-select" aria-label="Default select example" name="singer_id" class="@error('singer_id') is-invalid @enderror"  multiple  >
            
              <option selected >Open this select menu</option>
                  @foreach ($singers as $singer )
               <option value="{{ $singer ->id }}" >{{ $singer ->name }}</option>
               @endforeach
            </select>
           
              <br><br>
       <button type="submit">save</button>
</form>


<table class="table">
 <thead>
   @foreach ($songs as $song)
    <tr>
   
       
   
     <th scope="name">{{ $song ->name}}</th>
   
     <td>
      <a href="{{ route('song.edit',$song->id) }}" class="btn btn-primary btn-sm">تعديل</i></button>
      <a href="{{ route('song.destroy',$song->id) }}"class="btn btn-primary btn-sm">حذف</i></button>
      
 
     </td>
    </tr>
   @endforeach
   
    
    
 </thead>
</table>