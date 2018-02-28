<!-- 	<?php print_r($rows);?> -->
	<input type="hidden" id="u_id" value="<?= $rows[0]['u_id'];?>">
	<input type="text" id="u_name" value="<?= $rows[0]['u_name'];?>">
	<input type="text" id="u_pass" value="<?= $rows[0]['u_pass'];?>">
	<button id="edit">OK</button>
<script type="text/javascript">
		$('#edit').click(function() {
		var u_id = $('#u_id').val();
		var u_name = $('#u_name').val();
  		var u_pass = $('#u_pass').val();
  		// alert(u_id+u_name+u_pass);
  		$.post("<?=base_url()?>index.php/ex1/editac", {u_name: u_name, u_pass: u_pass, u_id : u_id}, function() {
  		}).done(function(data){
  			var json_res = jQuery.parseJSON(data);
  			if(json_res.status===true){
  				alert(json_res.message);
  				location.reload();
  			}else{
  				alert(json_res.message);
  			}
  			 // alert(data);
  		});
  		
});
</script>