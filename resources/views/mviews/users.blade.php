 @extends('mlayout.master')
 @section('body')
 @if(Gate::check('isAdmin'))
 <div class="container">
 	<table border="1" width="70%">
 		<?php $i=0?>
 		<tr align="center" style="color: #588a02"><td>Sno.</td><td>Username</td><td>E-mail Address</td><td>UserType</td></tr>
 		@foreach($users as $user)
        <?php $i++?>
 		<tr align="center">

 			<td><?php echo $i ?></td><td>{{$user->name}}</td><td>{{$user->email}}</td><td>{{$user->user_type}}</td>
 		</tr>
 		@endforeach
 	</table>
 </div>
 @else
 <div>Only the admins are allowed to visit this page!</div>

 @endif
 @endsection