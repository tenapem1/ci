<form action="<?=base_url()?>index.php/user/action_edit/<?=$rows[0]['u_id']?>" method="post">
<input type="hidden" name="id" value="<?=$rows[0]['u_id']?>">
<input class="form-control" type="text" name="name" value="<?=$rows[0]['u_name']?>">
<input class="form-control" type="text" name="pass" value="<?=$rows[0]['u_pass']?>">
<button type="summit">Update</button>
</form>