// $(document).ready(function(){
//   $(".bta").click(function(){
//    alert("test ssucc istall jquery");
//   });

// });
 
/************        BackLog main.js       *****************
 ****FILTER LL CAR A PARTIR MIN INPUT SEARCH****************
 ****FILTER LL CAR A PARTIR MIL MODLE      *****************
 ********(7AWEL T KOUN JSON FORMT LL DATA) *****************
 *************************** */


$(document).ready(function(){
    $( "#search" ).keyup(function() {
        let c=$("#search").val();
        
        console.log(c);
      });
});



$(document).ready(function(){
	
  $(document).onclick('.page-link', function(event){
   event.preventDefault(); 
   var page = $(this).attr('href').split('page=')[1];
   fetch_data(page);
  });
 
  function fetch_data(page)
  {
   var _token = $("input[name=_token]").val();
   $.ajax({
     url:"{{ route('rentp.fetch') }}",
     method:"POST",
     data:{_token:_token, page:page},
     success:function(data)
     {
      $('#main_data').html(data);
     }
   });
  }
 
 });
