@extends('layouts.app')

@section('content')
<?php
header("Refresh: 5;URL=/");
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! You'll be redirected to homepage in 5sec!

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
