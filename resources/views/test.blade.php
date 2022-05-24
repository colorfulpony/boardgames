@extends('layouts.main')

@section('content')
   <form method="POST" action="{{ route('admin.edit', $item->id) }}">
       @csrf
       @method('PATCH')
       <input type="text" name="title" id="title">
       <input type="text" name="slug" id="slug">
       <input type="text" name="description" id="description">
       <button type="submite">Save</button>
   </form>
@endsection
