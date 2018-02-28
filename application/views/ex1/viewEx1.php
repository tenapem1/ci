	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.min.css">
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<table border="1" padding="0" width="50%">
	<thead>
		<th>ID</th>
		<th>Name</th>
		<th>Pass</th>
		<th>Edit</th>
		<th>Delete</th>
	</thead>
	<tbody>
		<?php
			foreach ($rows as $key => $value) {
		?>
		<tr>
			<td><?=$value['u_id'];?></td>
			<td><?=$value['u_name'];?></td>
			<td><?=$value['u_pass'];?></td>
			<td><button u_id="<?=$value['u_id'];?>" class="btn btn-info editModal">แก้ไข</button></td>
			<td><button u_id="<?=$value['u_id'];?>" class="del btn btn-danger">ลบ</button></td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
<input type="text" id="name">
<input type="password" id="pass">
<button id="insert">OK</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p id="formEdit"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
	$('.del').click(function(){
		var u_id = $(this).attr('u_id');
		var d = confirm('ยืนยันการลบ')
		if (d===true){
		$.post('<?=base_url();?>index.php/ex1/delete/'+u_id, function() {
		}).done(function(data){
			var json_res = jQuery.parseJSON(data);
  			if(json_res.status===true){
  				alert(json_res.message);
  				location.reload();
  			}else{
  				alert(json_res.message);
  			}
		});
		}
	})
	$('.editModal').click(function() {
		// alert('55555');
		var u_id = $(this).attr('u_id');
		$.post('<?=base_url();?>index.php/ex1/contentModal/'+u_id, function() {
		}).done(function(data){
			$('#formEdit').html(data)
			$('#myModal').modal('show')
		});
		// alert (u_id);
	});
	$('#insert').click(function() {
		var u_name = $('#name').val();
  		var u_pass = $('#pass').val();
  		$.post("<?=base_url()?>index.php/ex1/insert", {u_name: u_name, u_pass: u_pass}, function() {
  		}).done(function(data){
  			var json_res = jQuery.parseJSON(data);
  			if(json_res.status===true){
  				alert(json_res.message);
  			}else{
  				alert(json_res.message);
  			}
  			 // alert(data);
  		});
  		window.location.href = '<?=base_url();?>index.php/ex1';
});
</script>