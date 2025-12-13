<div style="height: 100vh; display:flex;flex-direction:column; justify-content:center;align-items:center; text-align:center">
   <h1> 
     hi , Are you ready to listen to a new song?
     
   </h1>

   <form action="{{route('generate') }}" method="Get">
    @csrf
                       
       <button type="submit">listen song</button>
   
   </form>
   <form action="{{route('filtering') }}" method="Get">
     
                <select name="singer_id" >
               <option value=" ">اختر مطربك المفضل او اترك فارغا ودع الامر لنا
               </option>
             @foreach ($singers as $singer)
            <option value="{{ $singer->id }}" request={{'singer_id'}}>{{$singer->name}}
             </option>
             @endforeach
                </select>
                <button type="submit">filtering</button>
     </form>
</div>