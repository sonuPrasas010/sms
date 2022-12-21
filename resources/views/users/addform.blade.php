@extends('app')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">New Student</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>


    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            {{-- start of input --}}
            <form action="" method="post">
                @csrf
                <div class="row justify-content-between">


                    <div class="col-12 input-group  mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input name="username" type="text" class="form-control"
                            value="{{ old('username') }}" placeholder="Username"
                            aria-label="Username" aria-describedby="basic-addon1" >
                        @error('username')
                            <span class="text-danger col-12"> {{ $message }} </span>
                        @enderror
                    </div>
                    {{-- <div class="input-group col-12 mb-3" style="border-radius: 0px !important">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                      </div> --}}

                    <div class="col-12 w-100 input-group  mb-3">
                        <span class="input-group-text "><i class="fa-solid fa-user"></i></span>
                        <input value="{{ old('name') }}" name="name" type="text"
                            aria-label="name" class="form-control mr-1" placeholder="Name" >
                        @error('name')
                            <span class="text-danger col-12"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-12 input-group mb-3">

                        <span class="input-group-text "><i class="fa-solid fa-landmark"></i></span>

                        <select class="custom-select " name="class">
                            <option>Open this select menu</option>
                            <option {{old("class")=='-2' ?"selected":""}} value="-2">Nursery</option>
                            <option {{old("class")=='-1' ?"selected":""}} value="-1">LKG</option>
                            <option {{old("class")=='0' ?"selected":""}} value="0">UKG</option>
                            <option {{old("class")=='1' ?"selected":""}} value="1">1</option>
                            <option {{old("class")=='2' ?"selected":""}} value="2">2</option>
                            <option {{old("class")=='3' ?"selected":""}} value="3">3</option>
                            <option {{old("class")=='4' ?"selected":""}} value="4">4</option>
                            <option {{old("class")=='5' ?"selected":""}} value="5">5</option>
                            <option {{old("class")=='6' ?"selected":""}} value="6">6</option>
                            <option {{old("class")=='7' ?"selected":""}} value="7">7</option>
                            <option {{old("class")=='8' ?"selected":""}} value="8">8</option>
                            <option {{old("class")=='9' ?"selected":""}} value="9">9</option>
                            <option {{old("class")=='10' ?"selected":""}} value="10">10</option>

                        </select>
                        @error('class')
                            <span class="text-danger col-12"> {{ $message }} </span>
                        @enderror



                    </div>
                    <div class="col-12 w-100 input-group mb-3">
                        <span class="input-group-text "><i class="fa-solid fa-people-line"></i>
                        </span>
                        <input type="text" aria-label="Section" name="section"
                            value="{{ old('section') }}" placeholder="section"
                            class="form-control mr-1">
                        @error('section')
                            <div class="text-danger  col-12"> {{ $message }} </div>
                        @enderror

                    </div>






                    <div class="col-12 w-100 input-group mb-3">
                        <span class="input-group-text "><i class="fa-solid fa-ranking-star"></i>
                        </span>
                        <input name="roll" type="number" aria-label="roll"
                            class="form-control mr-1" placeholder="roll number"
                            value="{{ old('roll') }}">
                        @error('roll')
                            <span class="text-danger col-12"> {{ $message }} </span>
                        @enderror

                    </div>

                    <div class="col-12 w-100 input-group mb-3">
                        <span class="input-group-text "><i class="fa-solid fa-key"></i> </span>
                        <input type="text" aria-label="Password" class="form-control mr-1"
                            name="student_password" value="{{ old('student_password') }}"
                            placeholder="student password" >
                        @error('student_password')
                            <span class="text-danger col-12"> {{ $message }} </span>
                        @enderror

                    </div>
                </div>
                @if (session()->has('status'))
                    <div class="alert alert-success">
                        {{ session()->get('status') }}
                    </div>
                @endif
                <button type="submit" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-save"></i>
                    </span>
                    <span class="text">Save User</span>
                    </a>
            </form>
            {{-- end of input --}}
        </div>
    </div>

    <!-- Content Row -->


</div>
@endsection
