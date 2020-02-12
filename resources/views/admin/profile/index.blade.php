@extends('layouts.profile')

@section('title', 'マイプロフィール')

@section('content')
    <div class="container myprofile">
        <div class="row">
            <h2 class="col-md-6 mx-auto">Myプロフィール</h2>
        </div>
        <div class="row">
            <dl class="col-md-6 mx-auto profile-table">
                @if(count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
                @endif
                <div class="row">
                    <dt class="col-md-3">氏名</dt>
                    <dd class="col-md-9">
                        {{ $profile_form->name }}
                    </dd>
                    <dt class="col-md-3">性別</dt>
                    <dd class="col-md-9">
                        @if($profile_form->gender == 'male' )
                        男性
                        @else
                        女性
                        @endif
                    </dd>
                    <dt class="col-md-3">趣味</dt>
                    <dd class="col-md-9">
                        {{ $profile_form->hobby }}
                    </dd>
                    <dt class="col-md-3">自己紹介欄</dt>
                    <dd class="col-md-9">
                        {!! nl2br(e($profile_form->introduction)) !!}
                    </dd>
                </div>
            </dl>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto btnwrap">
                <p class="col-md-2 hensyu-btn"><a href="{{ action('Admin\ProfileController@edit', ['id' => $profile_form->id]) }}">編集</a></p>
            </div>
        </div>
    </div>
@endsection
