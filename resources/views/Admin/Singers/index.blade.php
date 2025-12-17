<form action="{{route('singer.store') }}" method="get">
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
    @foreach ($singers as $singer)
       
     <tr>
  
   
       <th scope="name">{{ $singer->name}}</th>
     
      <td>
        <a href="{{ route('singer.edit',"$singer->id") }}" class="btn btn-primary btn-sm">تعديل</i></button>
        <a href="{{ route('singer.destroy',"$singer->id") }}"class="btn btn-primary btn-sm">حذف</i></button>
        
   
      </td>
     </tr>
    
    @endforeach
 </thead>
</table>