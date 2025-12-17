<form action="{{route('quote.store') }}" method="get">
    @csrf
   
            <input type="text"  name="body" placeholder="body"  class="@error('body') is-invalid @enderror">
            @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br><br>
             
            @error('song_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
           <select class="form-select" aria-label="Default select example" name="song_id" class="@error('singer_id') is-invalid @enderror"  multiple  >
            
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
  
   @foreach ($quotes as $quote)
    <tr>
   
      <th scope="name">{{ $quote ->body}}</th>

     <td>
      <a href="{{ route('quote.edit',"$quote->id") }}" class="btn btn-primary btn-sm">تعديل</i></button>
      <a href="{{ route('quote.destroy',"$quote->id") }}"class="btn btn-primary btn-sm">حذف</i></button>
      
 
     </td>
    
    </tr>

    
   @endforeach
 </thead>
</table>