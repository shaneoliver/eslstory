@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div>
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        </div>
    @endif
@endsection
