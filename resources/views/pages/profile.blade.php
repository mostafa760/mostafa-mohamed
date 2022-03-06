@extends('layouts.app')
@section('styles')
<style>
    .header-home{
        display:none;
    }
</style>
@endsection

@section('content')
    @include('layouts.header')
    <div class="container">
            <form method="POST" action="{{route('users.edit')}}" enctype="multipart/form-data">
                @csrf
                <section class="profile_personal">
                    <div class="row">
                        <div class="col-12 profile-name">
                            <div class="profile-name-content">
                                <ul>
                                    <li><h3>Name :</h3> <span>{{auth()->user()->name}}</span></li>
                                    <li><h3>Email :</h3> <span>{{auth()->user()->email}}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </section>
                <section class="profile_form">
                    <div class="edit-profile">
                        <h3>Edit Profile</h3>
                    </div>
                    <div class="row profile_form_content">
                        <div class="col-md-6 mb-3">
                            <label class="form-label"> Name</label>
                            <input type="text" class="form-control" value="{{auth()->user()->name}}"
                                name="name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" value="{{auth()->user()->email}}" name="email">
                        </div>
                        <div class="save-changes direction_rtl">
                            <button type="submit" class="btn btn-primary" >Save Changes</button>
                        </div>
                    </div>
                </section>
            </form>
    </div>
@include('layouts.footer')
@endsection
