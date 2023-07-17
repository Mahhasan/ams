@extends('layouts.master')
@section('content')

<div class="container-fluid ">
    <div class="d-flex justify-content-between ">
        <h2 class="text-left my-3">AMS Email Marketing</h2>
        <button class="btn btn-success send-email my-3" type="submit">Send Email</button>
    </div>
    <div class="clearfix"></div>
   
    <div class="card shadow mb-4">
        <div class="card-body">
    
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <label><input type="checkbox" class="" id="select-all" /> Select All</label>
                
                    <thead>

                        <tr>

                            <th>#</th>

                            <th>No</th>

                            <th>Name</th>

                            <th>Email</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($users as $user)

                        <tr>

                            <td><input type="checkbox" class="user-checkbox" name="users[]" value="{{ $user->id }}"></td>

                            <td>{{ $user->id }}</td>

                            <td>{{ $user->first_name }} {{ $user->last_name }}</td>

                            <td>{{ $user->email }}</td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>



<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".send-email").click(function() {
        var selectRowsCount = $("input[class='user-checkbox']:checked").length;
        if (selectRowsCount > 0) {
            var ids = $.map($("input[class='user-checkbox']:checked"), function(c) {
                return c.value;
            });
            $.ajax({
                type: 'POST',
                url: "{{ route('ajax.send.email') }}",
                data: {
                    ids: ids
                },
                success: function(data) {

                    alert(data.success);
                    window.location='users'

                }

            });



        } else {

            alert("Please select at least one user from list.");

        }

        console.log(selectRowsCount);

    });

    var selectAllItems = "#select-all";
var checkboxItem = ":checkbox";

$(selectAllItems).click(function() {
  
  if (this.checked) {
    $(checkboxItem).each(function() {
      this.checked = true;
    });
  } else {
    $(checkboxItem).each(function() {
      this.checked = false;
    });
  }
  
});
</script>
@endsection