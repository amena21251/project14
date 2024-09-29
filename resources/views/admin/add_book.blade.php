<!DOCTYPE html>
<html>
  <head> 
  @include('admin.css')
<style type="text/css">
  .div_center{
    text-align: center;
    margin: auto;
  }  
  .title_deg{
    color: white;
    padding: 35px;
    font-size: 40px;
    font-weight: bold;
  }


 label 
{
   display: inline-block;
   width: 200px;
}
.div_pad{
    padding: 15px;
}
</style>



  </head>
  <body>
   @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
<div class="div_center" >
<h1 class="title_deg" >Add Books</h1>
<form action="{{url('store_book')}}" method="Post" enctype="multipart/form-data">
    @csrf
    <div class="div_pad">
        <lable>Book Title</lable>
        <input type="text" name="book_name">
    </div  >

    <div class="div_pad">
        <lable>Auther name</lable>
        <input type="text" name="auther_name">
    </div>
    <div class="div_pad">
        <lable>Price</lable>
        <input type="text" name="price">
    </div>
    <div class="div_pad">
        <lable>Quantity</lable>
        <input type="number" name="quantity">
    </div>
    <div class="div_pad">
        <lable>Description</lable>
        <textarea name="description"></textarea>
    </div>
    
    <div class="div_pad">
        <lable>Category</lable>
      <select name="category" required>
        <option>Select a Category</option>
        @foreach ($data as $data)
        
       
        <option value="{{$data->id}}">{{$data->cat_titele}}</option>
        @endforeach
      </select>
    </div>



    <div class="div_pad">
        <lable>Book Image</lable>
        <input type="file" name="book_img">
    </div>
    <div class="div_pad">
        <lable>Auther Image</lable>
        <input type="file" name="auther_img">
    </div>
   
    <div class="div_pad">
        
        <input type="submit" value="Add Book" class="btn btn-info">
    </div>
</form>
</div>


            </div>
            </div>
            </div>
       



     @include('admin.footer')
  </body>
</html>