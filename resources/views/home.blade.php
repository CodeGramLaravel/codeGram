@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/images/freeCodeCamp.jpg" class="rounded-circle" style="height:150px;">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>150</strong> post</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
        <div class="row pt-4">
            <div class="col-4">
                <img src="https://instagram.frgn5-1.fna.fbcdn.net/v/t51.2885-15/e35/70303910_720240971773212_6266103486872587826_n.jpg?_nc_ht=instagram.frgn5-1.fna.fbcdn.net&_nc_cat=100&oh=265147c7d8d1d89b2b4e2f34fd7a8845&oe=5E7823CB" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://instagram.frgn5-2.fna.fbcdn.net/v/t51.2885-15/e35/73527623_158166208601186_7855403223712441155_n.jpg?_nc_ht=instagram.frgn5-2.fna.fbcdn.net&_nc_cat=102&oh=a5bb32b99aa85aa536211ab597f6d224&oe=5E863534" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://instagram.frgn5-2.fna.fbcdn.net/v/t51.2885-15/e35/29094550_196700594428277_4702280145854005248_n.jpg?_nc_ht=instagram.frgn5-2.fna.fbcdn.net&_nc_cat=105&oh=e3d31b0e97612721728a544c7d86f397&oe=5E7EE637" class="w-100">
            </div>
        </div>
    </div>
</div>
@endsection
