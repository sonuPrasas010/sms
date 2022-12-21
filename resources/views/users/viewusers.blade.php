@extends('app')
@section('content')
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">




            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">New Student</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div>

                {{-- content row --}}
                <div class=" mt-3 mb-4">
                    <div class="col-lg-12 mt-4 mt-lg-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
                                    <table class="table manage-candidates-top mb-0">
                                        <thead>
                                            <tr>
                                                <th>Candidate Name</th>
                                                <th class="text-center">Status</th>
                                                <th class="action text-right">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr class="candidates-list">
                                                    <td class="title">

                                                        <div class="candidate-list-details">
                                                            <div class="candidate-list-info">
                                                                <div class="candidate-list-title">
                                                                    <h5 class="mb-0">
                                                                        <a href="#">
                                                                            {{ $user->name }}
                                                                        </a>
                                                                    </h5>
                                                                </div>
                                                                <div class="candidate-list-option">
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="candidate-list-favourite-time text-center">
                                                        @include('widgets.switch')
                                                    </td>
                                                    <td>
                                                        <ul class="list-unstyled mb-0 d-flex justify-content-end">
                                                            <li> <a  href="/update-user/{{$user->id}}" class="text-primary" data-toggle="tooltip"
                                                                    title="" data-original-title="view"><i
                                                                    class="far fa-eye"></i>

                                                                </a></li>
                                                            <li><a href="#" class="text-info" data-toggle="tooltip"
                                                                    title="" data-original-title="Edit"><i
                                                                        class="fas fa-pencil-alt"></i></a></li>
                                                            <li><a href="#" class="text-danger" data-toggle="tooltip"
                                                                    title="" data-original-title="Delete"><i
                                                                        class="far fa-trash-alt"></i></a></li>
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
        <!-- End of Main Content -->
    @endsection
