@extends('layouts.app')

@section('content')

    <div class="container mt-4 w-50 border ">
        <h1 class="text-center">Create a New Venue</h1>


        @if($message = Session::get('success'))


        <div class="alert alert-success alert-block text-center">
                <strong>{{ $message }}</strong>
        </div>


        @endif

        {!! Form::open(['url' => ['store-venue'], 'method' => 'post']) !!}
            <div class="form-group">
                {{ Form::label('name','Name') }}
                {{ Form::text('name',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('address','Address') }}
                {{ Form::text('address',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('capacity','Capacity') }}
                {{ Form::text('capacity',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group">
                {{ Form::label('price','Price') }}
                {{ Form::text('price',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group shadow-none">
                {!! Form::button('Create New Venue', ['type' => 'submit', 'class' => 'btn btn-success']) !!}

            </div>
        {!! Form::close() !!}

    </div>

@endsection
