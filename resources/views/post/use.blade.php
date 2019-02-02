@extends('mlayout.master')
@section('body')
<?php
  $i=1;
  ?>
<table border="1" width="70%" >
  <tr align="center"><td>Sno.</td><td>Image</td><td>EDIT</td><td>Delete</td></tr>
  <tr>
@foreach($posts as $post)
  <td width="5%">
  <div align="center">{{$i++}}</div> 
  
  </td>
  <td  width="55%">
                            <div align="center">
                              <img src="{{url($post->img)}}" width="130px" height="150px" style="background-color: white">
                            </div>
                            <div align="center" style="height:80px;margin:3px;">
                              <font style="font-size:12px;">
                              {{$post->title}}
                              </font>
                              <br>
                                              <font size="1" color="#191919"><b>Rs. {{$post->price}}</b><br><font color="grey">{{$post->type}}</font>
                                              </font>
                                            </div>
  </td>
  <td><div align="center"><form action="{{route('post.edit',$post->id)}}" method="post">@csrf
  @method('get')
  <button type="Submit" class="btn btn-info">Edit</button>
</form></div></td><td><div align="center"><form action="{{route('post.destroy',$post->id)}}" method="post">@csrf
  @method('delete')
  <button type="Submit" class="btn btn-danger">Delete</button>
</form></td>
  </tr>
@endforeach

</table>
@endsection