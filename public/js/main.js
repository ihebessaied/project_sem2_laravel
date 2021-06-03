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
  $('#btn1').on("click",function(e){
    // let customerId =this.attr("customerId");
     console.log("test susccc");
   });
    $( "#search" ).on("input",function() {
        let c=$(this).val();
        
        console.log(c);
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
     if(c ==''){
       
      $.ajax({
      url:'/fetchs',
      method:"GET",
      data: { mes: c },
      dataType: 'json',
      success: function(response) { 
      $('#child_token').empty();
      let output ='';
      for(let i=0;i<Object.keys(response).length;i++){
      output+='<article class="card card-product-list">'
  output+='	<div class="row no-gutters">'
  output+='	<aside class="col-md-3">'
  output+='	<a href="#" class="img-wrap"><img src='+response[i].image+'></a>'
  output+='	</aside> <!-- col.// -->'
  output+='		<div class="col-md-6">'
  output+='			<div class="info-main">'
  output+='		<a href="#" class="h5 title"> '+response[i].modele_id+' </a>'
  output+='			<div class="rating-wrap mb-3">	'
  output+='				<ul class="rating-stars">'
  output+='					<li style="width:80%" class="stars-active"> '
  output+='					<i class="fa fa-star"></i> <i class="fa fa-star"></i> '
  output+='					<i class="fa fa-star"></i> <i class="fa fa-star"></i> '
	output+='					<i class="fa fa-star"></i> '
	output+='							</li>'
	output+='							<li>'
	output+='								<i class="fa fa-star"></i> <i class="fa fa-star"></i> '
  output+='				<i class="fa fa-star"></i> <i class="fa fa-star"></i> '
  output+='					<i class="fa fa-star"></i> '
  output+='					</li>'
  output+='					</ul>'
  output+='				</div> <!-- rating-wrap.// -->'
	
  output+='			<p> '+response[i].description+'</p>'
  output+='	</div> <!-- info-main.// -->'
  output+='	</div> <!-- col.// -->'
  output+='		<aside class="col-sm-3">'
  output+='			<div class="info-aside">'
	output+='					<div class="price-wrap">'
  output+='					<span class="price h5"> '+response[i].prix+' TND </span>	'
  output+='					<del class="price-old"> $85</del>'
  output+='				</div> <!-- info-price-detail // -->'
  output+='				<p class="text-success">Free shipping</p>'
  output+='				<br>'
  output+='		<p>'
  output+='			<a href="/card/'+response[i].id+'" class="btn btn-primary btn-block" id="btn-ser"> Details </a>'
  output+='					<a href="#" class="btn btn-light btn-block"><i class="fa fa-heart"></i> '
  output+='						<span class="text">Add to wishlist</span></a>'
  output+='				</p>'
  output+='			</div> <!-- info-aside.// -->'
  output+='		</aside> <!-- col.// -->'
  output+='	</div> <!-- row.// -->'
  output+='	</article> <!-- card-product .// -->'
      }
      console.log(output);
      $("#child_token").html(output);
      }
    });
     }else{

        $.ajax({
          url:'/fetchs',
          method:"GET",
          data: { mes: c },
          dataType: 'json',
          success: function(response) {       
                // let car = response[0].prix;
                // console.log(car);
               
                 $("#child_token").empty();
                  let s ='';
                // for(let i=0;i<Object.keys(response).length;i++){
                  // console.log('-----------------');
                  // console.log('id'+response[i].id);
                  // console.log('id'+response[i].description);
                  // console.log('id'+response[i].prix);

                  // console.log('-----------------');
                  // s +='<p> id = '+response[i].id+' || description :'+response[i].description+'|| prix :'+response[i].prix+' </p>';
                
                  // s+='<article class="card card-product-list"> <div class="row no-gutters"><aside class="col-md-3" <a href="#" class="img-wrap"><img src='+response[i].image+'></a> </aside> <div class="col-md-6"><div class="info-main"><a href="#" class="h5 title"> '+response[i].id+'  </a><div class="rating-wrap mb-3"><ul class="rating-stars"><li style="width:80%" class="stars-active"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>  </li><li> <i class="fa fa-star"></i> <i class="fa fa-star"></i>  <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>   </li></ul> </div> <p>'+response[i].id+'</p> </div>  </div>  <aside class="col-sm-3"></aside><div class="info-aside"><div class="price-wrap"> <span class="price h5"> '+response[i].id+' TND </span>	 <del class="price-old"> $85</del> <p class="text-success">Free shipping</p><br><p>  <a href="/card/{{$car->id}}" class="btn btn-primary btn-block"> Details </a><a href="#" class="btn btn-light btn-block"><i class="fa fa-heart"></i>  <span class="text">Add to wishlist</span></a> </p> </div></aside>  </div> ';
                       
                      
                    
                 






                // }
                  // console.log(rs);
                //with out desing data 





                let output ='';
                for(let i=0;i<Object.keys(response).length;i++){
                output+='<article class="card card-product-list">'
            output+='	<div class="row no-gutters">'
            output+='	<aside class="col-md-3">'
            output+='	<a href="#" class="img-wrap"><img src='+response[i].image+'></a>'
            output+='	</aside> <!-- col.// -->'
            output+='		<div class="col-md-6">'
            output+='			<div class="info-main">'
            output+='		<a href="#" class="h5 title"> '+response[i].modele_id+' </a>'
            output+='			<div class="rating-wrap mb-3">	'
            output+='				<ul class="rating-stars">'
            output+='					<li style="width:80%" class="stars-active"> '
            output+='					<i class="fa fa-star"></i> <i class="fa fa-star"></i> '
            output+='					<i class="fa fa-star"></i> <i class="fa fa-star"></i> '
            output+='					<i class="fa fa-star"></i> '
            output+='							</li>'
            output+='							<li>'
            output+='								<i class="fa fa-star"></i> <i class="fa fa-star"></i> '
            output+='				<i class="fa fa-star"></i> <i class="fa fa-star"></i> '
            output+='					<i class="fa fa-star"></i> '
            output+='					</li>'
            output+='					</ul>'
            output+='				</div> <!-- rating-wrap.// -->'
            
            output+='			<p> '+response[i].description+'</p>'
            output+='	</div> <!-- info-main.// -->'
            output+='	</div> <!-- col.// -->'
            output+='		<aside class="col-sm-3">'
            output+='			<div class="info-aside">'
            output+='					<div class="price-wrap">'
            output+='					<span class="price h5"> '+response[i].prix+' TND </span>	'
            output+='					<del class="price-old"> $85</del>'
            output+='				</div> <!-- info-price-detail // -->'
            output+='				<p class="text-success">Free shipping</p>'
            output+='				<br>'
            output+='		<p>'
            output+='			<a href="/card/'+response[i].id+'" class="btn btn-primary btn-block" id="btn-ser"> Details </a>'
            output+='					<a href="#" class="btn btn-light btn-block"><i class="fa fa-heart"></i> '
            output+='						<span class="text">Add to wishlist</span></a>'
            output+='				</p>'
            output+='			</div> <!-- info-aside.// -->'
            output+='		</aside> <!-- col.// -->'
            output+='	</div> <!-- row.// -->'
            output+='	</article> <!-- card-product .// -->'
                }
                console.log(output);
                $("#child_token").html(output);
                // $('#child_token').html(s);

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
}//else fin
      });
    
});





	
  // $('.page-link').on("click",function(event){
  //  event.preventDefault(); 
  //  var page = $(this).attr('href').split('page=')[1];
  //  FetchPage(page);
  // });
 
  // function FetchPage(page)
  // {
  //  var _token = $("input[name=_token]").val();
  //  $.ajax({
  //    url:"{{ route('rentp.fetch') }}",
  //    method:"POST",
  //    data:{_token:_token, page:page},
  //    success:function(data)
  //    {
  //     $('#main_data').html(data);
  //    }
  //  });
  // }
  //yelzem ll contenu mta3 serch yetfasa5 ba3d kol click shom details
$('#btn-ser').on('click',function(){
  $('#search').val('');
})




  // output+='<article class="card card-product-list">'
  // output+='	<div class="row no-gutters">'
  // output+='	<aside class="col-md-3">'
  // output+='	<a href="#" class="img-wrap"><img src='+response[i].image+'></a>'
  // output+='	</aside> <!-- col.// -->'
  // output+='		<div class="col-md-6">'
  // output+='			<div class="info-main">'
  // output+='		<a href="#" class="h5 title"> '+response[i].modele_id+' </a>'
  // output+='			<div class="rating-wrap mb-3">	'
  // output+='				<ul class="rating-stars">'
  // output+='					<li style="width:80%" class="stars-active"> '
  // output+='					<i class="fa fa-star"></i> <i class="fa fa-star"></i> '
  // output+='					<i class="fa fa-star"></i> <i class="fa fa-star"></i> '
	// output+='					<i class="fa fa-star"></i> '
	// output+='							</li>'
	// output+='							<li>'
	// output+='								<i class="fa fa-star"></i> <i class="fa fa-star"></i> '
  // output+='				<i class="fa fa-star"></i> <i class="fa fa-star"></i> '
  // output+='					<i class="fa fa-star"></i> '
  // output+='					</li>'
  // output+='					</ul>'
  // output+='				</div> <!-- rating-wrap.// -->'
	
  // output+='			<p> '+response[i].description+'</p>'
  // output+='	</div> <!-- info-main.// -->'
  // output+='	</div> <!-- col.// -->'
  // output+='		<aside class="col-sm-3">'
  // output+='			<div class="info-aside">'
	// output+='					<div class="price-wrap">'
  // output+='					<span class="price h5"> '+response[i].prix+' TND </span>	'
  // output+='					<del class="price-old"> $85</del>'
  // output+='				</div> <!-- info-price-detail // -->'
  // output+='				<p class="text-success">Free shipping</p>'
  // output+='				<br>'
  // output+='		<p>'
  // output+='			<a href="/card/{{$car->id}}" class="btn btn-primary btn-block"> Details </a>'
  // output+='					<a href="#" class="btn btn-light btn-block"><i class="fa fa-heart"></i> '
  // output+='						<span class="text">Add to wishlist</span></a>'
  // output+='				</p>'
  // output+='			</div> <!-- info-aside.// -->'
  // output+='		</aside> <!-- col.// -->'
  // output+='	</div> <!-- row.// -->'
	// output+='	</article> <!-- card-product .// -->'
 

