@extends('layouts.app')

@section('content')
        <div class="panel panel-default">
            <div class="panel-heading">داشبورد</div>

            <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                شما وارد شده اید.
            </div>
        </div>
@endsection
