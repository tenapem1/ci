<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous">
  	
  </script>
  <input type="text" id="u_name">
  <input type="text" id="u_pass">
  <button id="submit" ">OK</button>
  <script type="text/javascript">
  	
  	$('#submit').click(function() {
  		var u_name = $('#u_name').val();
  		var u_pass = $('#u_pass').val();
  		$.post("<?=base_url()?>index.php/user/ajextest", {u_name: u_name, u_pass: u_pass}, function() {
  		}).done(function(data){
  			var json_res = jQuery.parseJSON(data);
  			if(json_res.status===true){
  				alert(json_res.message);
  			}else{
  				alert(json_res.message);
  			}
  			// alert(data);
  		});
  	});
  </script>