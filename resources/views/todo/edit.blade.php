@extends('layouts.index')

@section('main')
<form action='{{ url("todo/{$todo->id}") }}' method="post" class="form-create">
<h2>Edit Topic</h2>
@csrf
@method('PUT')
<table>
    <tr>
      <td><label for="inpTopic">Topic : </label></td>
      <td>
        <input id="inpTopic" type="text" name="topic" value="{{ old('topic')?old('topic'):$todo->topic; }}"/>
        @error('topic')
         <br/><small style="color:red;">{{ $message }}</small>
        @enderror
      </td>
    </tr>
    <tr>
      <td><label for="inpDesc">Description : </label></td>
      <td>
        <input id="inpDesc" type="text" name="desc" value="{{ old('desc')?old('desc'):$todo->description; }}"/>
        @error('desc')
         <br/><small style="color:red;">{{ $message }}</small>
        @enderror
      </td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" value="Confirm" class="edit"></td>
  </tr>
  </table>
</form>
@endsection
