//$(document).ready(function(){


//confirm deletion with sweetalert
$(document).on("click",".confirmDelete",function(){//as the deleting function is not working in pagenation so we use this function
    var record = $(this).attr("record");
    var recordid = $(this).attr("recordid");
    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
    window.location.href = "/admin/"+record+"/"+recordid; 
  }
});
});

//});