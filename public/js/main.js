// $(document).ready(function(){
//   $(".bta").click(function(){
//    alert("test ssucc istall jquery");
//   });

// });
 
/************       main.js       *****************
 ****FILTER LL CAR A PARTIR MIN INPUT SEARCH****************
 ****FILTER LL CAR A PARTIR MIL MODLE      *****************
 ********(7AWEL T KOUN JSON FORMT LL DATA) *****************
 *************************** */


$(document).ready(function(){
    $( "#search" ).on("input",function() {
        let c=$(this).val();
        
        console.log(c);
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

        $.ajax({
          url:'/fetchs',
          type: "GET",
          dataType: 'json',
          data: { mes: c },
          success: function(rs) {       
                // let car = response[0].prix;
                // console.log(car);
               
                 $("#child_token").empty();
                  // let s ='';
                // for(let i=0;i<Object.keys(response).length;i++){
                //   // console.log('-----------------');
                //   // console.log('id'+response[i].id);
                //   // console.log('id'+response[i].description);
                //   // console.log('id'+response[i].prix);

                //   // console.log('-----------------');
                //   s +='<p> id = '+response[i].id+' || description :'+response[i].description+'|| prix :'+response[i].prix+' </p>';
                
                // }

                //with out desing data 
                $('#child_token').html(rs);

                // console.log(Object.values(response));
                // console.log(Object.keys(response));
                // console.log(Object.entries(response));
              //  for(let i=0,i<r
                
                // tansech tere8 ll main bech t insiry data jdida 
               
                
                  // for(let i=0;i<Object.keys(response).length;i++){
                  //   $('#child').html(function(response){
                  //   console.log('-----------------');
                  //   // console.log('id'+response[i].id);
                  //   console.log('id'+response[i].description);
                  //   console.log('id'+response[i].prix);
  
                  //   console.log('-----------------');
                  //   });
                  // }
               


              // }
          }
        });

      });
});




	
  $('.page-link').on("click",function(event){
   event.preventDefault(); 
   var page = $(this).attr('href').split('page=')[1];
   FetchPage(page);
  });
 
  function FetchPage(page)
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
 

