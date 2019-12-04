@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-sm-4">
            <div>
                <div class="d-flex align-items-baseline">
                    <div class="pr-3">
                        <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-75" style="max-width:40px;">
                    </div>
                    <div>
                        <p class="font-weight-bold">
                            <a href="/profile/{{$post->user->id}}">
                                <span class="text-dark">{{$post->user->username}}</span>
                            </a>
                            <a href="#" class="pl-3">Follow</a>
                        </p>               
                    </div>
                </div>
                <hr>
                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark">{{$post->user->username}}</span>
                        </a>
                    </span> 
                    {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
</div>

@endsection