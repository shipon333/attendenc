
@include('backend.header');	
							<!-- begin:: Aside -->

<!-- Uncomment this to display the close button of the panel
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
-->

@include('backend.sideber');
<!-- end:: Aside -->
			
			
@yield('content')
@if(session()->has('success'))
    <script type="text/javascript">
      $(function(){
        $.notify("{{session()->get('success')}}",{globalPosition:'top right', className:'success'});
      });
    </script>
  @endif
  @if(session()->has('error'))
    <script type="text/javascript">
      $(function(){
        $.notify("{{session()->get('error')}}",{globalPosition:'top right', className:'error'});
      });
    </script>
  @endif
  <script>  
  $(document).ready(function () {
    $(document).on('click', '#delete', function () {
      var actionTo = $(this).attr('href');
      var token = $(this).attr('data-token');
      var id = $(this).attr('data-id');
      swal({
        title: "Are you sure?",
        type: "success",
        showCancelButton: true,
        confirmButtonClass: 'btn-danger',
        confirmButtonText: 'Yes',
        cancelButtonText: "No",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function (isConfirm) {
        if (isConfirm) {
          $.ajax({
            url:actionTo,
            type: 'post',
            data: {id:id, _token:token},
            success: function (data) {
              swal({
                title: "Deleted!",
                type: "success"
              },
              function (isConfirm) {
                if (isConfirm) {
                  $('.' + id).fadeOut();
                }
              });
            }
          });
        } else {
          swal("Cancelled", "", "error");
        }
      });
      return false;
    });
  });
</script>

@include('backend.footer');	
