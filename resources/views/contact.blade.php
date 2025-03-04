@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Liên Hệ</h2>

    {{-- Hiển thị thông báo thành công --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Hiển thị lỗi validation --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Họ và tên:</label>
            <input type="text" name="fullname" class="form-control" value="{{ old('fullname') }}" required>
            @if ($errors->has('fullname'))
                <div class="text-danger">{{ $errors->first('fullname') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <div class="text-danger">{{ $errors->first('email') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label>Số điện thoại:</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required>
            @if ($errors->has('phone'))
                <div class="text-danger">{{ $errors->first('phone') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label>Nội dung:</label>
            <textarea name="message" class="form-control" rows="4" required>{{ old('message') }}</textarea>
            @if ($errors->has('message'))
                <div class="text-danger">{{ $errors->first('message') }}</div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Gửi Liên Hệ</button>
    </form>
</div>
@endsection
