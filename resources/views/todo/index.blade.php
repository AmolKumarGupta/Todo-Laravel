@extends('layouts.index')

@section('main')
<div class="data">
  <table>
    <tr>
      <th>id</th>
      <th>topic</th>
      <th>description</th>
      <th>Action</th>
    </tr>
<?php $it=0; ?>
@foreach($todo as $i)
    <?php $it++; ?>
    <tr>
      <td>{{ $it }}</td>
      <td>{{ $i->topic }}</td>
      <td>{{ $i->description }}</td>
      <td>
        <form action='{{ url("todo/{$i->id}") }}' method="post">
          @csrf
          @method('DELETE')
          <button class="del">Delete</button>
        </form>
        <form action='{{ url("todo/{$i->id}") }}' method="get">
          @csrf
          <button class="edit">Edit</button>
        </form>
      </td>
    </tr>
@endforeach
  </table>
</div>

@endsection
