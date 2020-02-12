@extends('layouts.profile')

@section('title', 'プロフィールの編集')

@section('content')
    <div class="container myprofile">
        <div class="row">
            <h2 class="col-md-6 mx-auto">プロフィール編集</h2>
        </div>

        <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
            @if(count($errors) > 0)
            <ul>
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
            @endif
            <dl class="col-md-6 mx-auto profile-table profile_edit">
                <div class="row">
                    <dt class="col-md-3">氏名</dt>
                    <dd class="col-md-9">
                        <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
                    </dd>
                    <dt class="col-md-3">性別</dt>
                    <dd class="col-md-9">
                        @if($profile_form->gender == 'male' )
                             <label><input type="radio" class="radio" name="gender" value="male" checked>男性</label>
                             <label><input type="radio" class="radio" name="gender" value="female">女性</label>
                         @else
                             <label><input type="radio" class="radio" name="gender" value="male">男性</label>
                             <label><input type="radio" class="radio" name="gender" value="female" checked>女性</label>
                         @endif
                    </dd>
                    <dt class="col-md-3">趣味</dt>
                    <dd class="col-md-9">
                        <input type="text" class="form-control" name="hobby" value="{{ $profile_form->hobby }}">
                    </dd>
                    <dt class="col-md-3">自己紹介欄</dt>
                    <dd class="col-md-9">
                        <textarea class="form-control" name="introduction" rows="10">{{ $profile_form->introduction }}</textarea>
                    </dd>
                </div>
            </dl>
            <input type="hidden" name="id" value="{{ $profile_form->id }}">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6 mx-auto btnwrap">
                    <p class="col-md-2 hensyu-btn"><input type="submit" class="btn btn-primary" value="更新"></p>
                </div>
            </div>
            
        </form>
    </div>
@endsection
