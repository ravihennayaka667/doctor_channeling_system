<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
 
<h3 id="myModalLabel">Add</h3>
</div>
<div class="modal-body">
<form method="post" action="../../functions/addfoodsfunction.php"  enctype="multipart/form-data">
<table class="table1">
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Food Name</label></td>
		<td width="30"></td>
		<td><input type="text" name="Food_name" placeholder="FoodName" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">LastName</label></td>
		<td width="30"></td>
		<td><input type="text" name="Food_price" placeholder="foodprice" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Select your Image</label></td>
		<td width="30"></td>
		<td><input type="file" name="image"></td>
	</tr>
</table>
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Upload</button>
    </div>
</form>
</div>