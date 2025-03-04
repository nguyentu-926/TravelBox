@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Đặt Chuyến Đi</h2>

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

    <form action="{{ route('booking.store') }}" method="POST">
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
            <label>Số người:</label>
            <input type="number" name="num_people" class="form-control" value="{{ old('num_people') }}" required min="1">
            @if ($errors->has('num_people'))
                <div class="text-danger">{{ $errors->first('num_people') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label>Ngày đi:</label>
            <input type="date" name="trip_date" class="form-control" value="{{ old('trip_date') }}" required>
            @if ($errors->has('trip_date'))
                <div class="text-danger">{{ $errors->first('trip_date') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label>Tổng tiền (VNĐ):</label>
            <input type="number" name="total_price" class="form-control" value="{{ old('total_price') }}" required>
            @if ($errors->has('total_price'))
                <div class="text-danger">{{ $errors->first('total_price') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label>Phương thức thanh toán:</label>
            <select name="payment_method" class="form-control">
                <option value="credit_card" {{ old('payment_method') == 'credit_card' ? 'selected' : '' }}>Thẻ tín dụng</option>
                <option value="bank_transfer" {{ old('payment_method') == 'bank_transfer' ? 'selected' : '' }}>Chuyển khoản ngân hàng</option>
                <option value="cash" {{ old('payment_method') == 'cash' ? 'selected' : '' }}>Tiền mặt</option>
            </select>
            @if ($errors->has('payment_method'))
                <div class="text-danger">{{ $errors->first('payment_method') }}</div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Đặt Chuyến</button>
    </form>
</div>
@endsection
