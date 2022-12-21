@extends('app')
@section('content')
<div class="container">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Student</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>


    <div class="card ">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body ">
            <form class="row" action="/update-user/{{$student->id}}" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{ $student->id }}">
                <div class="mb-2 col-6 " >
                    {{-- <label class="d-inline-block mx-auto w-50" for="name">Username</label> --}}
                    <label class="mx-0" for="name">Username</label>

                    <input class=" py-4  form-control" type="text" name="username" id="username" value="sonu@gmail.com" readonly>
                </div>
                <div class="mb-2 col-6" >
                    <label class="mx-0" for="name">Name</label>
                    <input class=" w-100 py-4 border-dark form-control" type="text" name="name" id="name" value="{{ $student->name }}">
                    @error('name')
                    <div class="text-danger"> {{ $message }}</div>

                    @enderror
                </div>
                <div class="mb-2 col-6" >
                    <label class="w-100" for="section">Section</label>
                    <input class="w-100 rounded-top w-50 py-4 border-dark form-control" type="text" name="section" id="section" value="{{$student->section }}">
                    @error('section')
                    <div class="text-danger"> {{ $message }}</div>

                    @enderror
                </div>
                <div class="mb-2 col-6" >
                    <label class="w-100" for="class">Class</label>

                    <select class="custom-select custom-select-lg " name="class" >
                        <option class="text-small">Open this select menu</option>
                        <option {{$student["class"]=='-2' ?"selected":""}} value="-2">Nursery</option>
                        <option {{$student["class"]=='-1' ?"selected":""}} value="-1">LKG</option>
                        <option {{$student["class"]=='0' ?"selected":""}} value="0">UKG</option>
                        <option {{$student["class"]=='1' ?"selected":""}} value="1">1</option>
                        <option {{$student["class"]=='2' ?"selected":""}} value="2">2</option>
                        <option {{$student["class"]=='3' ?"selected":""}} value="3">3</option>
                        <option {{$student["class"]=='1' ?"selected":""}} value="1">1</option>
                        <option {{$student["class"]=='2' ?"selected":""}} value="2">2</option>
                        <option {{$student["class"]=='3' ?"selected":""}} value="3">3</option>
                        <option {{$student["class"]=='1' ?"selected":""}} value="1">1</option>
                        <option {{$student["class"]=='2' ?"selected":""}} value="2">2</option>
                        <option {{$student["class"]=='3' ?"selected":""}} value="3">3</option>
                        <option {{$student["class"]=='1' ?"selected":""}} value="1">1</option>
                        <option {{$student["class"]=='2' ?"selected":""}} value="2">2</option>
                        <option {{$student["class"]=='3' ?"selected":""}} value="3">3</option>
                        <option {{$student["class"]=='4' ?"selected":""}} value="4">4</option>
                        <option {{$student["class"]=='5' ?"selected":""}} value="5">5</option>
                        <option {{$student["class"]=='6' ?"selected":""}} value="6">6</option>
                        <option {{$student["class"]=='7' ?"selected":""}} value="7">7</option>
                        <option {{$student["class"]=='8' ?"selected":""}} value="8">8</option>
                        <option {{$student["class"]=='9' ?"selected":""}} value="9">9</option>
                        <option {{$student["class"]=='10' ?"selected":""}} value="10">10</option>

                    </select>
                    @error('class')
                    <div class="text-danger"> {{ $message }}</div>

                    @enderror

                </div>



                <div class="mb-2 col-6">
                    <label class="w-100" for="roll">Roll</label>
                    <input class="w-100 rounded-top w-50 py-4 border-dark form-control" type="number" name="roll" id="class"  value="{{ $student->roll }}">
                    @error('roll')
                    <div class="text-danger"> {{ $message }}</div>

                    @enderror
                </div>
                <div class="mb-2 col-6">
                    <label class="w-100" for="student_password">Password</label>
                    <input class="w-100 rounded-top w-50 py-4 border-dark form-control" type="text" name="student_password" id="student_password"  value="{{ $student->password }}">
                    @error('student_password')
                    <div class="text-danger"> {{ $message }}</div>

                    @enderror
                </div>


                <button type="submit" class="btn btn-primary w-25 text-center mx-auto mt-5">
                    <span class="icon text-white-50">
                        <i class="fas fa-save"></i>
                    </span>
                    <span class="text">Save User</span>
                    </a>
            </form>
        </div>
    </div>



</div>
@endsection
