<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-3.2.1.js">
	
</script>
<button id="loadData">
	Load data !
</button>
<p id="eiei"></p>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('#loadData').click(function(){
		 // $("#eiei").load('<?=base_url();?>index.php/load/content');
		 $.get('<?=base_url();?>index.php/load/content', function() {
		 }).done(function(eiei){
		 	$('#eiei').html(eiei);
		 });
		});

	});
</script>