<?php
include("menu.php");
?>
<section>
	<div class="main-content">
		<div class="content">
			<div class="registion-form">
				 <h2>Payroll</h2>
				 <form id="sform" role="form"  name="sform"  method="post" action="controller/payroll-insert.php" onsubmit="return valiform()">
				 	<div class="form-group">
								<label for="employee_id" > Employee Id</label>
								<input type="text" id="employee_id" name="employee_id" class="form-control"/>
							</div>

							<div class="form-group">
								<label for="product_id" >product_id</label><br>
								<input type="text" id="product_id" name="product_id" class="form-control" />
							</div>

							<div class="form-group">
								<label for="basic" >Basic </label><br>
								<input type="text" id="basic" name="basic" class="form-control" />
							</div>

							<div class="form-group">
								<label for="allowance" >Allowance</label><br>
								<input type="text" id="allowance" name="allowance" class="form-control"/>
							</div>
							
							<div class="form-group">
								<label for="bonus" >Bonus</label><br>
								<input type="text" id="bonus" name="bonus" class="form-control"/>
							</div>

							<input type="submit" name="submit"  value="Submit" >
						</form>
						</div>
		</div> <!-- /.content -->
	</div>
</section>
<footer>
	<div class="footer">
		<p>&copy;Micro GERP</p>
	</div> <!-- /.footer -->
</footer>
	
</div>

<script>
    function valiform() {
   
        var employee_id = document.sform.employee_id.value;
        var product_id = document.sform.product_id.value;
		var basic = document.sform.basic.value;
        var allowance = document.sform.allowance.value;
        var bonus = document.sform.bonus.value;

        var status = false;

      
         if (employee_id == null || employee_id == "") {
            document.getElementById("employee_id").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("employee_id").style.border =
                    "2px solid green";
            status = true;
        }
         if (product_id == null || product_id == "") {
            document.getElementById("product_id").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("product_id").style.border =
                    "2px solid green";
            status = true;
        }
		if (basic == null || basic == "") {
            document.getElementById("basic").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("basic").style.border =
                    "2px solid green";
            status = true;
        }
		if (allowance == null || allowance == "") {
            document.getElementById("allowance").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("allowance").style.border =
                    "2px solid green";
            status = true;
        }
		if (bonus == null || bonus == "") {
            document.getElementById("bonus").style.border =
                    "2px solid red";
            status = false;
        } else {
            document.getElementById("bonus").style.border =
                    "2px solid green";
            status = true;
        }
      



        return status;
    }
</script> 
</body>
</html>
