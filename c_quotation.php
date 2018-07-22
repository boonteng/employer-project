<?php
require('header.html');
require('c_nav.php');
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Quotation</title>
	
	
	<h3>Summary Gridview</h3>
	<button type="button" class="btn btn-info pull-right">Create New Quotation</button>
	
	<table class="table table-bordered status" style="width:98%"  align="center">
	<thead>
	<tr>
		<th>Filter</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>
		<div class="form-group row">
			<label class="col-xs-offset-2 col-xs-1">Status:</label>
			<div class="col-xs-2">
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
		</div>
		
		<div class="form-group row">
			<label class="col-xs-offset-2 col-xs-1">Customer:</label>
			<div class="col-xs-2">
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
		</div>
		
		<div class="form-group row">
			<label class="col-xs-offset-2 col-xs-1">Amount:</label>
			<div class="col-xs-2">
			<div class="dropdown">
				<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">All Range
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="#">1000-2000</a></li>
					<li><a href="#">600-1000</a></li>
					<li><a href="#">300-600</a></li>
					<li><a href="#">100-300</a></li>
				</ul>
			</div> 
			</div>
		</div>
		<div class="form-group row">
			<label for="inputDate"class="col-xs-offset-2 col-xs-1">Date:</label>
			<div class="col-xs-2">
				<label>From</label>
				<input type="date" class="form-control" id="inputDate">
			</div>
			<div class="col-xs-2">
				<label>To</label>
				<input type="date" class="form-control" id="inputDate">
			</div>
		</div>
		
		
	
	</td>
	</tr>
	</tbody>
	</table>		
	
	 <table class="table table-hover" style="width:98%"  align="center">
    <thead>
      <tr>
        <th>Status</th>
        <th>
				
			<div class="dropdown">
			
				<button class="outline btn btn-default dropdown-toggle " type="button" data-toggle="dropdown">Date
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="#">Sort Oldest to Newest</a></li>
					<li><a href="#">Sort Newest to Oldest</a></li>
				</ul>
			</div> 
		</th>
        <th>Number</th>
		<th>Customer</th>
		<th>Amount</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><button type="button" class="btn btn-primary">Saved</button></td>
        <td>2018-05-27</td>
        <td>21889</td>
		<td>ACE sdn</td>
		<td>
		<div class="dropdown">
		RM 2889.00
		<button class="btn btn-default dropdown-toggle " type="button" data-toggle="dropdown">
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="#">Edit</a></li>
					<li><a href="#">Delete</a></li>
				</ul>
			</div> 
		</td>
      </tr>
      <tr>
        <td><button type="button" class="btn btn-primary">Saved</button></td>
        <td>2018-04-28</td>
        <td>21456</td>
		<td>Thor sdn</td>
		<td>
		<div class="dropdown">
		RM 8889.00
		<button class="btn btn-default dropdown-toggle " type="button" data-toggle="dropdown">
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="#">Edit</a></li>
					<li><a href="#">Delete</a></li>
				</ul>
			</div> 
		</td>
      </tr>
      <tr>
        <td><button type="button" class="btn btn-primary">Saved</button></td>
        <td>2018-0-15</td>
        <td>21132</td>
		<td>Young sdn</td>
		<td>
		<div class="dropdown">
			RM 9111.00
				<button class="btn btn-default dropdown-toggle " type="button" data-toggle="dropdown">
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="#">Edit</a></li>
					<li><a href="#">Delete</a></li>
				</ul>
			</div> 
		</td>
      </tr>
    </tbody>
  </table>
	
	<div class="dropdown">
	<b>Show</b> 
				<button class="btn btn-default dropdown-toggle " type="button" data-toggle="dropdown">50   
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="#">25</a></li>
					<li><a href="#">50</a></li>
					<li><a href="#">75</a></li>
					<li><a href="#">100</a></li>
				</ul>
	<b> per page </b>
	</div>
	
	</body>
	
<?php require('footer.html'); ?>