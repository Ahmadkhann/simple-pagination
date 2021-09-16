<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<div class="container">
	<div class="row">
	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th><input type="checkbox" onclick="checkAll(this)"></th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($user as $users)
          {{-- @php
              var_dump($users)
          @endphp --}}
          <tr>
            <td><input type="checkbox" name=""></td>
            <td>{{ $users->id }}</td>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->email_verified_at }}</td>
            <td>{{ $users->created_at }}</td>
            <td>{{ $users->updated_at }}</td>
        </tr> 
          @endforeach     
        </tbody>
        <tfoot>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
          </tfoot>
    </table>
    <div class="paginate">
      {{ $user->links() }}
    </div>
	</div>
</div>

<style>

table{
    width:100%;
}
/* #example_filter{
    float:right;
}
#example_paginate{
    float:right;
} */
label {
    display: none;
    margin-bottom: .5rem;
    margin-top: .5rem; 
}

svg.w-5.h-5 {
    height: 19px;
}
span.relative.z-0.inline-flex.shadow-sm.rounded-md {
    padding: 28px 10px 50px 10px;
}

</style>

{{-- </style>

<script>
$(document).ready(function() {
    $('#example').DataTable(
        
         {     

      "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
        "iDisplayLength": 5
       } 
        );
} );


function checkAll(bx) {
  var cbs = document.getElementsByTagName('input');
  for(var i=0; i < cbs.length; i++) {
    if(cbs[i].type == 'checkbox') {
      cbs[i].checked = bx.checked;
    }
  }
}
</script> --}}