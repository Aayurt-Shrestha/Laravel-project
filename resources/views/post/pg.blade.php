@extends('mlayout.master')
@section('body')
<h2>POST Detail View</h2>
<table border="2" width="50%" style="font-size: 22px;">
						<tr align="center">
							<td>id</td><td>{{$post->id}}</td>
						</tr>
						<tr align="center">
						<td>Select Category :</td><td>{{$post->category}}</td>
  						</tr>

  						<tr align="center">
  							<td>Upload your Image:</td>
  							<td><img src="{{url($post->img)}}" width="130px" height="150px" style="background-color: white"></td>
  						</tr>
  						<tr align="center"><td>Product Code</td><td>{{$post->pcode}}</td></tr>
  						<tr align="center"><td>Price</td><td>{{$post->price}}</td></tr>
              <tr align="center"><td>Description</td><td>{{$post->description}}</td></tr>
              <tr align="center"><td>Specification</td><td>{{$post->specification}}</td></tr>
              <tr align="center"><td>Type</td><td><font color="red">{{$post->type}}</font></td></tr>
              <tr align="center"><td>Author id</td>
              <td align="center">{{$post->author_id}}</td></tr>
              <tr align="center"><td>Author Name</td>
              <td align="center">{{$user->name}}</td></tr>
              <tr align="center"><td>Author Contact</td>
              <td align="center">+977<font color="blue"> {{$user->contact}} </font></td></tr>
					</table>
@endsection