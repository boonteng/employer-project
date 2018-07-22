<?php
require('header.html');
require('c_nav.php');
?>
	<div class="container">
	<h3>Invoices</h3>
	</div>
	<button type="button" class="btn btn-info pull-right">Create an Invoice</button>
	<br><br><br>
	<table class="table status" style="width:98%"  align="center">
    <thead>
      <tr>
		<td> </td>
        <td>Overdue<h4><b>RM 200.00</b></h4></td>
        <td>Coming due within 30 days<h4><b>RM 100.00</b></h4></td>
        <td>Average time to get paid<h4><b>28</b>DAYS</h4></td>
      </tr>
    </thead>
  </table>
	</div>
	<table class="table-boardless" style="width:98%"  align="center">
	<tbody>
	<tr>
	<td>
	<div class="col-xs-1">
			<div class="dropdown">
				<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">All Statuses
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="#">Open</a></li>
					<li><a href="#">Accepted</a></li>
					<li><a href="#">Rejected</a></li>
				</ul>
			</div> 
	</div>
	</td>
	<td>
	<div class="col-xs-1">
				<div class="dropdown">
				<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">All Customers
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="#">A-C</a></li>
					<li><a href="#">D-I</a></li>
					<li><a href="#">J-M</a></li>
					<li><a href="#">N-S</a></li>
					<li><a href="#">T-Z</a></li>
				</ul>
				</div> 
	</div>
	</td>
	<td>
			<div class="col-xs-9">
				<input type="date" id="inputFrom" class="form-control" placeholder="FROM">
			</div>
	</td>
	<td>
			<div class="col-xs-9">
				<input type="date" id="inputTo" class="form-control" placeholder="TO">
			</div>
	</td>
	<td>
	<div class="form-group row">
	<div class="col-xs-6">
				<input type="invoice" class="form-control" id="enterInvoiceNo" placeholder="Enter Invoive No #">
				<span class="glyphicon glyphicon-search"> </span>
			</div>
		</div>
	</td>
	</tr>
	</tbody>
	</table>
	</body>
	<?php require('footer.html'); ?>