@extends('layouts.main')

@section('content')
<div class="input max-w-72" data-toggle-password="true">
 <input placeholder="Password" type="password"/>
 <div class="btn btn-icon" data-toggle-password-trigger="true">
  <i class="ki-outline ki-eye toggle-password-active:hidden">
  </i>
  <i class="ki-outline ki-eye-slash hidden toggle-password-active:block">
  </i>
 </div>
</div>
<i class="ki-filled ki-abstract-23"></i>
@endsection
