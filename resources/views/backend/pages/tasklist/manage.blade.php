@extends ('backend.template.template')

@section('content')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Manage All Task List</h4>
        <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h6 class="br-section-label">Manage Task List</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="bd bd-gray-300 rounded table-responsive">

                    <!--Manage Table Start-->
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#Sl.</th>
                                <th scope="col">Post Heading</th>
                                <th scope="col">Post Details</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php $i=1; @endphp

                            @foreach ($tasks as $task)
                            <tr>
                                <th scope="row">{{ $i }}</th>
                                <td>{{ $task->name }}</td>
                                <td>{{ $task->description }}</td>
                                <td>
                                    @if ( $task->status == 1 )
                                    <span class="badge badge-warning">Pending</span>
                                    @elseif ( $task->status == 2 )
                                    <span class="badge badge-success">Complete</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="action-panel">
                                        <ul>
                                            <li>
                                                <a href="{{ route('task.edit',  $task->id) }}">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" data-toggle="modal" data-target="#delete{{ $task->id }}">
                                                    <i class="far fa-trash-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="delete{{ $task->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this post?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="modal-buttons">
                                                        <ul>
                                                            <li>
                                                                <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-danger">Confirm</button>
                                                                    <button data-dismiss="modal" class="btn btn-success">Cancel</button>
                                                                </form>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @php $i++; @endphp
                            @endforeach

                        </tbody>
                    </table>
                    <!--Manage Table End-->
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection