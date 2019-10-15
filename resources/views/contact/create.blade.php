@extends('layouts.app')

@section('title', 'Contact Us')
        
@section('content')
    @if(!session()->has('message'))
        <h1>Contact</h1>
            <form action="/contact" method="POST">
                <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Customer" value="{{ old('name') }}">
                    </div>
                    <div class="pb-1 mt-n3"> {{ $errors->first('name') }} </div>
                
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                    </div>
                <div class="pb-1 mt-n3"> {{ $errors->first('email') }} </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"> {{ old('message') }} </textarea>
                </div>
                <div class="pb-1 mt-n3"> {{ $errors->first('message') }} </div>

                <hr>
                @csrf

                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
    @endif
@endsection