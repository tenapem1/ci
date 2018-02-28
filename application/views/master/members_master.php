<style>
img {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
</style>
<div class="navigation-example" style="background-image:url('<?=base_url();?>assets/img/mastermembers.jpeg'); width: 100%;">
	<div class="panel panel-body">
	<br><br><br>
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-2">
						<div class="col-sm-12" style="text-align: right;">
							<br><br><br>
							<p class="category"  style="text-align: center; color: #FFFFFF;">เพิ่มรูปภาพ</p>
                            <img src="<?=base_url();?>assets/img/avatar.jpg" alt="Circle Image" class="rounded-circle">
                        </div>
						<div class="col-sm-12" >
                            <input type="file" name="" class="form-control" style="color: #FFFFFF;">
                        </div>
					</div>
					<div class="col-sm-8">
						<div class="row">
						<div class="col-sm-3">
							<h4 style="color: #FFFFFF;">เพิ่มพนักงาน</h4>
						</div>
						</div>
                        <div class="row">
                            <div class="col-sm-8 col-lg-5">
                            	<label class="control-label" style="color: #FFFFFF;">ชื่อพนักงาน</label>
                                <div class="form-group">
                                    <input type="text" value="" placeholder="ชื่อ - นามสกุล" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8 col-lg-5">
                            	<label class="control-label" style="color: #FFFFFF;">เบอร์โทรพนักงาน</label>
                                <div class="form-group">
                                    <input type="text" value="" placeholder="เบอร์โทรศัพท์" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="footer" style="text-align: left;">
                                    <button type="button" style="text-align: center;" class="btn btn-success btn-round">Save</button>
                                    <button id="cencel" type="button" style="text-align: center;" class="btn btn-danger btn-round">Cancel</button>
                                </div>
					</div>
				</div>
	</div>					
</div>
<script type="text/javascript">
	$('#cancel').click(function(event) {
		alert('aaa');
	});
</script>