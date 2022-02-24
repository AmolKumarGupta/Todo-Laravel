@extends('layouts/index')
@section('main')
<form action="{{ url('todo') }}" method="post" class="form-create">
<h2>Create Topic</h2>
@csrf
<table>
    <tr>
      <td><label for="inpTopic">Topic : </label></td>
      <td>
        <input id="inpTopic" type="text" name="topic" value="{{ old('topic') }}"/>
        @error('topic')
         <br/><small style="color:red;">{{ $message }}</small>
        @enderror
      </td>
    </tr>
    <tr>
      <td><label for="inpDesc">Description : </label></td>
      <td>
        <input id="inpDesc" type="text" name="desc" value="{{ old('desc') }}"/>
        @error('desc')
         <br/><small style="color:red;">{{ $message }}</small>
        @enderror
      </td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" value="Create" class="edit"></td>
  </tr>
  </table>
</form>
@endsection

