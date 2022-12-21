@extends('app')
@section('content')
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">




            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                {{-- content row --}}
                <div class=" mt-3 mb-4">
                    <div class="col-lg-12 mt-4 mt-lg-0">

                        <div class="col-md-12">



                            <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
                                @if (Request::path() == 'category')
                                    <form action="" method="post">
                                        @csrf
                                        <div class="d-flex has-validation">

                                            <input
                                                class="form-control w-25
                                            @error('category')
                                            is-invalid
                                            @enderror
                                           "
                                                type="text" required name="category" id="category"
                                                value="{{ old('category') }}" placeholder="category name">

                                            <button type="submit" class="btn btn-primary mx-2">Add</button>
                                        </div>
                                    </form>
                                @else
                                    <form action="" method="post">
                                        @csrf
                                        <div class="d-flex">

                                            <input class="form-control w-25" type="text" name="category" id="category"
                                                value="{{ $cat->name }}" placeholder="category name" autofocus>
                                            <button type="submit" class="btn btn-primary mx-2">Update</button>
                                        </div>
                                    </form>
                                @endif

                                <table class="table manage-candidates-top mb-0">
                                    <thead>
                                        <tr>
                                            <th>Category Name</th>
                                            <th class="action text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr class="candidates-list">
                                                <td class="title">

                                                    <div class="candidate-list-details">
                                                        <div class="candidate-list-info">
                                                            <div class="candidate-list-title">
                                                                <h5 class="mb-0">
                                                                    <a href="#">
                                                                        {{ $category->name }}

                                                                    </a>
                                                                </h5>
                                                            </div>
                                                            {{-- <div class="candidate-list-option">
                                                                <ul class="list-unstyled">
                                                                    @if ($user->class)
                                                                        <li><i class="fas fa-filter pr-1"></i>
                                                                            Class:
                                                                            @if ($user->class == -2)
                                                                                {{ 'Nursery' }}
                                                                            @elseif ($user->class == -1)
                                                                                {{ 'LKG' }}
                                                                            @elseif ($user->class == -0)
                                                                                {{ 'UKG' }}
                                                                            @else
                                                                                {{ $user->class }}
                                                                            @endif
                                                                            {{ '(' . $user->section . ')' }}
                                                                            {{ 'Roll No.' . $user->roll }}
                                                                        </li>
                                                                    @endif
                                                                    <li><i
                                                                            class="fas fa-map-marker-alt pr-1"></i>Rolling
                                                                        Meadows, IL 60008</li>
                                                                </ul>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="candidate-list-favourite-time text-center">
                                                    @include('widgets.switch')
                                                </td>
                                                <td>
                                                    <ul class="list-unstyled mb-0 d-flex justify-content-end">
                                                        <li>
                                                            <a class="btn btn-link" href="/category/{{ $category->id }}" class="text-info" title="edit" >
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <form action="/delete-category/{{ $category->id }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit"  class="btn btn-link">
                                                                    <i class="far fa-trash-alt text-danger"></i>
                                                                </button>

                                                            </form>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <div class="text-center mt-3 mt-sm-3">
                                    <ul class="pagination justify-content-center mb-0">
                                        <li class="page-item disabled"> <span class="page-link">Prev</span>
                                        </li>
                                        <li class="page-item active" aria-current="page"><span class="page-link">1
                                            </span> <span class="sr-only">(current)</span></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">...</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">25</a></li>
                                        <li class="page-item"> <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

    </div>
@endsection
