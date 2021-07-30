@extends('layouts.app') 

@section('content') 

<div> 

<h3>Tambah Category</h3> 
<form action="{{ url('/category') }}" method="POST">
 
@csrf 
<table>
    
    <div class="form-group">
    <lable for="">Nama</lable> 
    <input type="text" name="cat_name">
    </div>

    <div class="form-group">
    <lable for="">Text</lable> 
    <input type="text" name="cat_text">
    </div>

    <div class="form-group">
    <input type="submit" value="SIMPAN">
    </div>
   
</table> 
</form> 
</div> 
@endsection