<?php
session_start();
include ("config.php");
if(!isset($_SESSION["user"])){
	echo "<script>window.open('loginadmin.php', '_self')</script>";

} else{
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
    </style>
</head>
<body>
    

<div class="container">
    <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Search.." />
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab" id="dev-table">
    <thead class="bg-warning text-dark">
    
        <tr>
                <th ><strong>Date:Time</strong></th>
				<th><strong>Name</strong></th>
				<th><strong>Gender</strong></th>
				<th><strong>Address</strong></th>
				<th><strong>State</strong></th>
				<th><strong>City</strong></th>
				<th><strong>PIN</strong></th>
				<th><strong>Occupation</strong></th>
				<th><strong>Phone No</strong></th>
                 <th colspan="2" class="text-center"><strong>Action</strong></th>
				 
				 
        </tr>
    </thead>
    <tbody>
			<?php
			include "config.php";
			
			if(isset($_POST["submit"]))
			{
				$key_word=$_POST['search'];
				$sql="SELECT * from reject where name like '$key_word%'";	

			}
				else
				{
					$sql="SELECT * from reject order by regdate asc";
				}
				$result=mysqli_query($db,$sql);
				
				while($row=mysqli_fetch_array($result))
				{
					echo '<tr>';
					echo '<td><font color="000">'.$row["regdate"].'</font></td>';
					echo '<td><font color="000">'.$row["name"].'</font></td>';
					echo '<td><font color="000">'.$row["gender"].'</font></td>';
					echo '<td><font color="000">'.$row["address"].'</font></td>';
					echo '<td><font color="000">'.$row["state"].'</font></td>';
					echo '<td><font color="000">'.$row["city"].'</font></td>';
					echo '<td><font color="000">'.$row["pin"].'</font></td>';
					echo '<td><font color="000">'.$row["occu"].'</font></td>';
					echo '<td><font color="000">'.$row["phonenumber"].'</font></td>';
					echo '<td align="center">
							<a href="undoreject.php?id='.$row["id"].'">
							<input class="btn btn-info" type="submit" id="undoreject" name="undoreject" value="Undo Reject">
							&emsp;
							
							</td>';

					echo '<td align="center">
							<a href="acceptjoinreject.php?id='.$row["id"].'">
							<input class="btn btn-success" type="submit" id="accept" name="accept" value="Accept">
							&emsp;
							
							</td>';
					echo '</tr>';
				}
				
			?>
									</tbody>
								</table>
							</div>
						</div>
			    	</div>
				</div>
			<script>
			function openNav() {
			    document.getElementById("mySidenav").style.width = "250px";
			    document.getElementById("main").style.marginLeft = "250px";
			    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
			}

			function closeNav() {
			    document.getElementById("mySidenav").style.width = "0";
			    document.getElementById("main").style.marginLeft= "0";
			    document.body.style.backgroundColor = "white";
			}
			</script>
			<script>
			function myFunction()
			{
			    location.reload();
			}
			</script>



<script type="text/javascript">
function condel()
{
	return confirm("Do you want to delete this data !");
}
</script>
<script>
function selectrow(x) {
    alert("Under Construction");
}

</script>
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/fliplightbox.min.js"></script>
  <script src="js/functions.js"></script>
<script>
(function(){
    'use strict';
	var $ = jQuery;
	$.fn.extend({
		filterTable: function(){
			return this.each(function(){
				$(this).on('keyup', function(e){
					$('.filterTable_no_results').remove();
					var $this = $(this), 
                        search = $this.val().toLowerCase(), 
                        target = $this.attr('data-filters'), 
                        $target = $(target), 
                        $rows = $target.find('tbody tr');
                        
					if(search == '') {
						$rows.show(); 
					} else {
						$rows.each(function(){
							var $this = $(this);
							$this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
						})
						if($target.find('tbody tr:visible').size() === 0) {
							var col_count = $target.find('tr').first().find('td').size();
							var no_results = $('<tr class="filterTable_no_results"><td colspan="'+col_count+'">No results found</td></tr>')
							$target.find('tbody').append(no_results);
						}
					}
				});
			});
		}
	});
	$('[data-action="filter"]').filterTable();
})(jQuery);

$(function(){
    // attach table filter plugin to inputs
	$('[data-action="filter"]').filterTable();
	
	$('.container').on('click', '.panel-heading span.filter', function(e){
		var $this = $(this), 
			$panel = $this.parents('.panel');
		
		$panel.find('.panel-body').slideToggle();
		if($this.css('display') != 'none') {
			$panel.find('.panel-body input').focus();
		}
	});
	$('[data-toggle="tooltip"]').tooltip();
})
</script>

<
</body>
</html>
<?php } ?>
