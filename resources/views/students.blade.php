<h1>Students List</h1>

@foreach($students as $student)
    - {{ $student['name'] }} ({{ $student['email'] }})<br>
@endforeach
