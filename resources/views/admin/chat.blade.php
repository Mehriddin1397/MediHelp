@extends('layouts.admin')

@section('title', 'Chat')

@section('content')
    <div class="nxl-content without-header nxl-full-content">
        <div class="main-content d-flex">
            <div class="content-area">
                <div class="content-area-header sticky-top bg-white p-3">
                    <div class="d-flex align-items-center gap-3">
                        <img src="{{ asset($receiver->doctorProfile->avatar_path ?? 'assets/images/avatar/default.png') }}" class="img-fluid rounded-circle" width="50">
                        <div>
                            <h5 class="mb-0">{{ $receiver->name }}</h5>
                            <small class="text-success">Active Now</small>
                        </div>
                    </div>
                </div>

                <div class="content-area-body p-4" style="height: 70vh; overflow-y: auto;">
                    @foreach($messages as $msg)
                        @if($msg->sender_id == Auth::id())
                            <div class="text-end mb-3">
                                <p class="d-inline-block bg-primary text-white rounded p-2">{{ $msg->message }}</p>
                                <small class="text-muted d-block">{{ $msg->created_at->format('H:i') }}</small>
                            </div>
                        @else
                            <div class="text-start mb-3">
                                <p class="d-inline-block bg-light rounded p-2">{{ $msg->message }}</p>
                                <small class="text-muted d-block">{{ $msg->created_at->format('H:i') }}</small>
                            </div>
                        @endif
                    @endforeach
                </div>

                <form action="{{ route('chat.store', $receiver->id) }}" method="POST" class="d-flex border-top">
                    @csrf
                    <input type="text" name="message" class="form-control border-0" placeholder="Xabaringizni yozing..." required>
                    <button class="btn btn-primary" type="submit">
                        <i class="feather-send"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
