@extends('faqs.layout')
 
 @section('content')
     <div class="row" 
            style=" box-sizing: border-box; margin: 5px; justify-content: center;">
         <div class="col-lg-12 margin-tb">
            <h2>FAQ Admin Interface</h2>
         </div>
     </div>
     <div class="row"style=" box-sizing: border-box; margin: 5px; justify-content: center;">
        <div class="col-lg-12 margin-tb">
                 <a class="btn btn-success" href="{{ route('faqs.create') }}"> Create New FAQ</a>
                 <a class="btn btn-success" href="{{ route('faqcategories.index') }}"> View Categories</a>
                 <a class="btn btn-success" href="{{ route('faqsubcategories.index') }}"> View Subcategories</a>
        </div>
     </div>
    
     @if ($message = Session::get('success'))
         <div class="alert alert-success">
             <p>{{ $message }}</p>
         </div>
     @endif

    <table class="table table-bordered" 
            style=" justify-content: center;
                    margin: 20px;">
         <tbody>
         <tr>
             <th>No</th>
             <th>Question</th>
             <th>Answer</th>
             <th>Category</th>
             <th>Subcategory</th>
             <th width="200px">Action</th>
         </tr>
         @foreach ($faqs as $faq)
         <tr>
             <td>{{ ++$i }}</td>
             <td>{{ $faq->question }}</td>
             <td>{{ $faq->answer }}</td>
             <td>{{ $faq->categoryid }}</td>
             <td>{{ $faq->subcategoryid }}</td>
             <td>
                 <form action="{{ route('faqs.destroy',$faq->id) }}" method="POST">
     
                     <a class="btn btn-primary" href="{{ route('faqs.edit',$faq->id) }}">Edit</a>
    
                     @csrf
                     @method('DELETE')
       
                     <button type="submit" class="btn btn-danger">Delete</button>
                 </form>
             </td>
         </tr>
         @endforeach
     </table>
   
     {!! $faqs->links() !!}
       
 @endsection
 