



$(document).ready(function(){
    $(".container-xl").delegate("#deletc","click",function(event){
      event.preventDefault();
    let customerId =$(this).attr("customerId");
     $('#deleteEmployeeModal').attr("customerid",customerId);
    //  $('#FormDelete').attr("action","{{route('customers.destroy',['customer'=>"+customerId+"])}}");      1 ere methode en cours 
    $('#FormDelete').attr("action","customers/"+customerId);
   });
   $(".container-xl").delegate("#deletc1","click",function(event){
    event.preventDefault();
  let customerId =$(this).attr("customerId");
   $('#deleteEmployeeModal').attr("customerid",customerId);
  //  $('#FormDelete').attr("action","{{route('customers.destroy',['customer'=>"+customerId+"])}}");      1 ere methode en cours 
  $('#FormDelete').attr("action","cars/"+customerId);
 });
  });