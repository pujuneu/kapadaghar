@extends('layouts.app')
@section('content')
 @include('layouts.message')
 <h2 class="font-bold text-4xl text-blue-700">Notices</h2>
 <hr class="h-1 bg-blue-200">

 <div class="my-4 text-right px-10">
    <a href="{{route('notice.create')}}" class="bg-amber-400 text-black px-4  py-2 rounded-lg shadow-md
    hover:shadow-amber-300">Add Notice</a>
 </div>

 <table id="mytable" class="display">
    <thead>
    <th>Order</th>
    <th>Notice</th>
    <th>Action</th>
    </thead>
    <tbody>
      @foreach ($notices as $notice)
      <tr>
         <td>{{$notice->priority}}</td>
         <td>{{$notice->notice}}</td>
         <td>
                <a href="{{route('notice.edit',$notice->id)}}" class="bg-blue-600 text-white px-2 py-1 rounded
                 shadow hover:shadow_blue-400">Edit</a>

                   {{-- <a onclick="return confirm('Are you sure to delete?')" href="{{route('notice.destroy',$notice->id)}}" class="bg-red-600 text-white px-2 py-1 rounded
                      shadow hover:shadow-red-400">Delete</a> --}}

                    <a onclick="showDelete('{{$notice->id}}')" class="bg-red-600 text-white px-2 py-1 rounded shadow hover:shadow-red-400 cursor-pointer">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
 </table>

 {{-- backdrop-filter: blur(15px); --}}
 <div id="deleteModal" class="fixed hidden left-0 top-0 right-0 bottom-0 bg-opacity-50 backdrop-blur-sm bg-blue-400">
   <div class="flex h-full justify-center items-center">
       <div class="bg-white p-4 rounded-lg">
           <form action="{{route('notice.destroy')}}" method="POST">
               @csrf
               <p class="font-bold text-2xl">Are you Sure to Delete?</p>
               <input type="hidden" name="dataid" id="dataid" value="">
               <div class="flex justify-center">
                   <input type="submit" value="Yes" class="bg-blue-600 text-white px-4 py-2 mx-2 rounded-lg cursor-pointer">
                   <a onclick="hideDelete()" class="bg-red-600 text-white px-4 py-2 mx-2 rounded-lg cursor-pointer">No</a>
               </div>
           </form>
       </div>
   </div>
</div>

 <script>
    let table = new DataTable('#mytable');
 </script>

<script>

   function showDelete(x)
   {
       // $('#dataid').val(x);
       document.getElementById('dataid').value = x;
       document.getElementById('deleteModal').style.display = "block";
   }

   function hideDelete()
   {
       document.getElementById('deleteModal').style.display = "none";
   }
</script>
 @endsection