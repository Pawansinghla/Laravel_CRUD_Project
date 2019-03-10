@extends('studentapp.layout')

@section('content')


<div class="container">
@include('session.success')
<h1>Our content here</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student Email</th>
      <th scope="col">Student Roll</th>
      <th scope="col">Student Address</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $x=1; ?>
@foreach($students as $student)
<tr>
      <th> {{ $x++}}</th>
      <td>{{$student->student_name}}</td>
      <td>{{$student->email}}</td>
      <td>{{$student->student_roll}}</td>
      <td>{{$student->student_address}}</td>
      <td colspan="2">
     <a href="{{route('student.edit', $student->id)}}" class="btn btn-warning">Edit</a>
     <form  style="display:inline-block" method="post" action="{{route('student.destroy',$student->id)}}">
     {{csrf_field()}}
      <input type="hidden" name="_method" value="DELETE">
      <button type="submit" class="btn btn-danger">Delete</button>
     
     </form>

      </td>
      
    </tr>
    
@endforeach

    </tbody>
</table>

</div>

@endsection
