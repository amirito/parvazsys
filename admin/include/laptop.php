<div class="row">
	<div class="col-lg-10 col-lg-offset-1 col-sm-offset-1 col-sx-offset-1 col-sm-10 col-xs-10">
    	<form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label pull-right">نام : </label>
                    <div class="col-sm-9">
                      <input type="text" required class="form-control" id="inputEmail3" placeholder="اسم کامل خود را وارد نمایید">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label pull-right">نام خانوادگی : </label>
                    <div class="col-sm-9">
                      <input type="text" required class="form-control" id="inputEmail3" placeholder="اسم کامل خود را وارد نمایید">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label pull-right">موبایل : </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputPassword3" required placeholder="0912345689">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label pull-right">ایمیل : </label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="info@rayweb.ir">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label pull-right">آدرس : </label>
                    <div class="col-sm-9">
                      <textarea class="form-control"></textarea>
                    </div>
                  </div>
                 <hr style="border-color:#099 !important">
                 <div class="form-group">
                 <label for="inputPassword3" class="col-sm-1 control-label pull-right">خرابی : </label>
                 <div class="col-lg-4 col-sm-4 col-xs-4 pull-right">
               <select class="form-control" id="failure">
               <option>--- خرابی را انتخاب کنید ---</option>
 				 <option>کارت گرافیک :‌ </option>
  			   	 <option>کارت صدا  :‌ </option>              
                 <option>هارد دیسک : </option>
                 <option>مانیتور : </option>
                 <option>دی وی دی رایتر : </option>
                 <option>رم : </option>
                 <option>کارت شبکه : </option>
                 <option>باطری :</option>
                 <option>مادربورد : </option>
                 <option>پورت های جانبی :</option>
                 <option>کیبورد :</option>
                 <option>بایوس :</option>
                 <option>وایرلس :</option>
                 
                </select>
                </div>
                <div class="col-lg-7 col-sm-7 col-xs-7">
                <!--<textarea class="form-control" rows="6" id="failure_text"></textarea>-->
                <label for="inputEmail3" class=" col-sm-3 col-xs-3 control-label pull-right">توضیحات : </label>
                <div class="col-sm-8 col-lg-8 col-xs-8"><input type="text" class="form-control" id="failure_text"></div>
                </div><div class="col-sm-1"><input class="btn btn-sm btn-primary" id="go" type="button" value="go"></div>
                <div id="place">
                	
                </div>
                <div class="clearfix"></div></div>
				<hr style="border-color:#099 !important">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label pull-right">مارک لپ تاپ : </label>
                    <div class="col-sm-9">
                              <select class="form-control" id="failure">
               <option>--- مارک لپ تاپ را انتخاب کنید ---</option>
 				 <option>sony</option>
  			   	 <option>lenovo</option>              
                 <option>dell</option>
                 <option>hp</option>
                 <option>acer</option>
                 <option>asus</option>
                 <option>samsung</option>
                 <option>fujitso</option>
                 <option>msi</option>
                 <option>toshiba</option>
                 <option>apple</option>
                 <option>other	</option>
                </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label pull-right">مدل لپ تاپ  : </label>
                    <div class="col-sm-9">
                      <input type="text" required class="form-control" id="inputEmail3" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label pull-right">سریال لپ تاپ : </label>
                    <div class="col-sm-9">
                      <input type="text" required class="form-control" id="inputEmail3">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-5">
                    <br>
                      <button type="submit" class="btn btn-primary btn-lg btn-block ">دریافت کد رهگیری</button>
                      <button onClick="window.print();" class="btn btn-warning btn-lg ">پرینت</button>
                    </div>
                  </div>
                </form>
    </div>
</div>
<script>
	$(document).ready(function(){
		var i = 1;
		$("#failure").change(function() {
		var test =	$("#failure option:selected").val();
            $("#failure_text").val(test);
        });
		
        $("#go").click(function(){
		var test = $("#failure_text").val();
		$("#place").append("<br>");
		$("#place").append("<label id='place"+i+"' name='place"+i+"'></label>");
		$("#place"+i+"").html(test);
		 $("#failure_text").val('');
		i++;	
        });
    });
</script>