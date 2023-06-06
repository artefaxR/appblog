@extends('template.backend.template')
@section('content')

<br>
@if($notif != null)
    <div class="alert alert-info" role="alert">
    {{ $notif }}
    </div>
@endif
<br>
<form method="post" action="{{ current_url() }}">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Article</label>
    <textarea name="article" id="article" class="form-control" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection