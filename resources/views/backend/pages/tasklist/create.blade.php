@extends ('backend.template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Create the Post.</h4>
        <!-- <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p> -->
    </div>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h6 class="br-section-label">Update the Post</h6>
                <!-- Form Start -->
                <form action="{{ route('task.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Post Heading</label>
                        <input type="text" name="name" class="form-control" required="required" autocomplete="off" value="task">
                    </div>
                    <div class="mb-3">
                        <label>Details of the Post</label>
                        <textarea name="description" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Post Status</label>
                        <select class="form-control" name="status">
                            <option value="2">Please select the status</option>
                            <option value="1">Pending</option>
                            <option value="2">Complete</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="save" class="btn btn-info btn-block mg-b-10" value="Add new Task">
                    </div>
                </form>
                <!-- Form End -->
            </div>
        </div>
    </div>
</div>

@endsection