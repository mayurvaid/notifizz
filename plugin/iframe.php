<html>
<head>
<script src="jquery.js"></script>
<script>



var url = (window.location != window.parent.location)
            ? document.referrer
            : document.location.href;
var melem = null;
window.onmessage = function(e) {

  melem = $(e.data);
  getItems();
};


function imgClick(elem){
	debugger;
	$(".img-list ul li").removeClass('selected');
	$(".img-container .item-image img").attr("src",$(elem).find('img').attr('src'));
	$(".img-container .item-desc").html($(elem).find('a').attr('title'));
	$(elem).addClass("selected");
}



function getItems(){
    var images = melem.find("img");
    var html = ''; 
    images.each(function(index) {
            var link = $(this).closest("a");
            var productname = $(this).attr("alt");

            var prod_img_src = $(this).attr('src');

            var link_src = link.attr("href");   

            if(productname && prod_img_src){
                debugger;
            var image_width = $(this).attr('gw_displaywidth');

             if(productname && link.length==0 && image_width>350 && false){

                html +="<div style='width:520px; display: inline-block; border: 1px solid gray; overflow: hidden; margin:5px; padding:5px;'><img style='width:470' src='"+prod_img_src+"'/><br><b>title:</b>"+productname+"<br/><b>link:</b>"+link_src+"<br><br><b>Price:</b>"+price+"</div>";

            }

            else if(link.length!=0 && productname && link.attr("href").length>5 && image_width>100 &&  (link.attr("title") != productname)  ){
               // $("#gw_product_list").html()

               

               /* var elem = link.closest(".col");
                if(elem.length==0){
                     elem = link.closest("li");
                }
                */
                var price = "";//elem.text().split("₹")[1];


            //    var p1 = contains('div', 'sometext'); // find "div" that contain "sometext"
            
            
            	html +="<li><a href='#' title='"+productname+"' onclick='imgClick(this)'><img src='"+prod_img_src+"' ></a></li>";
            

                //html +="<div style='width:220px; display: inline-block; border: 1px solid gray; overflow: hidden; margin:5px; padding:5px;'><img style='width:170' src='"+prod_img_src+"'/><br><b>title:</b>"+productname+"<br/><b>link:</b>"+link_src+"<br><br><b>Price:</b>"+price+"</div>";
            }  

        }

            $("#product_list").html(html);
    })


}
</script>

	<style>
	body,input{
		color: #333;
		font-family: "Helvetica Neue", Helvetica, arial, sans-serif;
		-webkit-font-smoothing: antialiased;
		font-size: 14px;
	}
	.w-modal-body {
	    display: flex;
	}
	.w-modal,
	.w-backdrop {
		position: fixed;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		margin: 0 auto;
		height: 100%;
		z-index: 9999;
		display: block;
		top: 0;
	}
	.w-backdrop {
		background: rgba(0, 0, 0, 0.7);
	}
	.w-modal-container {
		width: 900px;
		height: auto;
		background: #fff;
		position: absolute;
		z-index: 9999;
		border-radius: 5px;
		top: 50%;
		left: 50%;
		-ms-transform: translate(-50%, -50%);
		-moz-transform: translate(-50%, -50%);
		-webkit-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
	}
	.w-modal .closeIcon {
		position: absolute;
		right: 8px;
		top: 5px;
		color: #888;
		font-size: 20px;
		text-decoration: none;
	}
	.w-modal .w-modal-header {
		padding-top: 25px;
		width: 100%;
		text-align: center;
	}
	.img-container .item-image{
		text-align:center;
	}
	.img-container .item-image{
		text-align:center;
		margin-bottom: 30px;
	}
	.img-list{
		width: 500px;
		display: inline-block;
		float: left;
		overflow-y: scroll;
		overflow-x: hidden;
		height: 350px;
	}
	.img-list ul{
		padding-left: 5px;
		width: 100%;
	}
	.img-list ul li{
		width: 90px;
		height: 100px;
		display: inline-block;
		margin: 4px;
		border: 2px solid #ccc;
	}
	.img-list ul li img{
		object-fit: contain;
		height: 100px;
		width: 90px;
		border: 0;
	}
	.img-list ul li.selected{
		border: 2px solid red;
	}
	.img-container,.notify-options{
		display: inline-block;
		width: 350px;
		padding: 20px;
		border-left: 1px solid #f2f2f2;
		line-height: 1.4;
	}
	.img-container .item-image img{
		width:80%;
	}
	#notifyInfoForm input{
		background: #f6f6f6;
		border-radius: 4px;
		border: 1px solid #eaeaea;
	}	
	#notifyInfoForm .form-input{
		margin:20px 0;
	}
	#notifyInfoForm .inputFld{
		margin: 10px 0;
		padding: 5px;
		width: 98%;
	}
	#notifyInfoForm .inputFld#priceFld{
		width: 50%;
		margin: 0px 30px;
	}
	#notifyInfoForm .form-checkbox input{
		-webkit-transform: scale(1.4,1.4);
		-moz-transform: scale(1.4,1.4);
		-o-transform: scale(1.4,1.4);
		margin-right: 15px;
	}
	#notifyInfoForm .form-checkbox .help{
		width: 18px;
		height: 18px;
		border-radius: 50px;
		border: 2px solid #67c1ea;
		text-align: center;
		color: #fff;
		background-color: #67c1ea;
		display: inline-block;
		position: absolute;
		font-weight: bold;
		right: 34px;
		font-size: 16px;
	}
	#notifyInfoForm .form-checkbox{
		margin:12px 0;
		display: flex;
		position:relative;
	}
	#notifyInfoForm .emailRemember{
		display:flex;
		font-size: 13px;
	}
	#notifyInfoForm .emailRemember #emailRemember{
		-webkit-transform: scale(1.2,1.2);
		-moz-transform: scale(1.2,1.2);
		-o-transform: scale(1.2,1.2);
		margin-right: 10px;
	}
	#notifyInfoForm button#notifySave{
		color: #fff;
		padding: 10px 40px;
		text-decoration: none;
		margin: 0 5px;
		font-size: 14px;
		box-shadow: 0 4px 2px -2px rgba(0, 0, 0, 0.14);
		border-radius: 4px;
		border: 1px solid #67c1ea;
		background-color: #67c1ea;
	}
	</style>
</head>
<body>
	<div class="w-backdrop"></div>
	<div class="w-modal">
	  <div class="w-modal-container">
		<div class="w-modal-header">
		</div>
		<div class="w-modal-body">
		 <div class="img-list">
			<ul id="product_list">
			 </ul>
		 </div>
		 <div class="img-container">
			<div class="item-image"><img src="http://ecx.images-amazon.com/images/I/41xEPXEOx6L._AC_US160_FMwebp_QL70_.jpg" alt=""></div>
			<div class="item-desc">a-size-medium a-color-null s-inline  s-access-title  color-variation-title-replacement a-text-normal</div>
		 </div>
		 <div class="notify-options">
			<form id="notifyInfoForm">
				<div>Notify me whenever:</div>
				<div class="form-checkbox">
					<input type="checkbox" name="priceDown" id="priceDown">
					<label for="priceDown">Price goes down</label>
					<span class="help">?</span>
				</div>
				<input type="text" class="inputFld" style="display:none;" name="priceFld" id="priceFld" placeholder="enter price">
				<div class="form-checkbox">
					<input type="checkbox" name="notificationList" value="exchangeOffer" id="exchangeOffer">
					<label for="exchangeOffer">On Exchange Offer</label>
					<span class="help">?</span>
				</div>
				<div class="form-checkbox">
					<input type="checkbox" name="notificationList" value="inStock" id="inStock">
					<label for="inStock">Back in-stock</label>
					<span class="help">?</span>
				</div>
				<div class="form-checkbox">
					<input type="checkbox" name="notificationList" value="additionalDesc" id="additionalDesc">
					<label for="additionalDesc">Additional discounts</label>
					<span class="help">?</span>
				</div>
				<div class="form-checkbox">
					<input type="checkbox" name="notificationList" value="dialyDeal" id="dialyDeal">
					<label for="dialyDeal">On Daily Deal</label>
					<span class="help">?</span>
				</div>
				<div class="form-checkbox">
					<input type="checkbox" name="notificationList" value="lighteningDeal" id="lighteningDeal">
					<label for="lighteningDeal">On Lightening Deal</label>
					<span class="help">?</span>
				</div>
				<div class="form-input">
					<label for="notifyEmail">Email to be Notified:</label>
					<input type="text" class="inputFld" name="notifyEmail" id="notifyEmail" placeholder="email address">
					<div class="emailRemember">
						<input type="checkbox" name="emailRemember" id="emailRemember">
						<label for="emailRemember">Remember this email address</label>
					</div>
				</div>
				<button type="button" id="notifySave">save</button>
			</form>
		 </div>
		</div>
		<a href="javascript:void(0)" class="closeModal closeIcon">X</a>
	  </div>
	</div>
	<script>
		$(document).ready(function(){
			
			$("#priceDown").on('click',function(){
				$(this).prop('checked') ? $("#priceFld").show() : $("#priceFld").hide();
			});
		});

		$("#notifySave").click(function(){
			var valuesArray = $('input:checkbox:checked').map( function() {
			    return this.value;
			}).get().join(",");

			var data = {
				"itemDescription" : $(".item-desc").html(),
				"itemImage" : $(".item-image").find("img").attr("src"),
				"itemURL" : "http://www.google.com",
				"itemPrice" : $("#priceFld").val(),
				"emailId" : $("#notifyEmail").val(),
				"notificationList" : valuesArray
			};
			$.ajax({
			  type: "POST",
			  url: 'http://localhost/notifiz/item.php?action=addItem',
			  dataType: 'json',
			  data: JSON.stringify(data),
			  success: function(data){
			  	alert(data);
			  }
			});
		});
	</script>
	<img src="#" id="width_check" style="visibility:hidden">
	
</body>
</html>




