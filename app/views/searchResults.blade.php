@extends("layout.layout")
@section("content")
<style>
.container {
    width:90%;
}
    .inputFieldsSearchResult {
        margin: 0 auto 80px;
        padding: 50px 0;
        width: 1000px;
    }
    .form-control {
    	width:350px;

    }
    .content h1 {
margin: 30px 50px 50px 40%;

    }


    div.dataTables_length {
    float: left;
    background-color: #719BA7;
}
 
div.dataTables_filter {
    float: right;
    background-color: #719BA7;
}
 
div.dataTables_info {
    float: left;
    background-color: #719BA7;
}
 
div.dataTables_paginate {
    float: right;
    background-color: #719BA7;
}
 
div.dataTables_length,
div.dataTables_filter,
div.dataTables_paginate,
div.dataTables_info {
    padding: 6px;
}
table.pretty {
    clear: both;
}
 
/* Self clearing - */
div.dataTables_wrapper:after {
    content: ".";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0;
}
html[xmlns] .dataTables_wrapper { display: block; }
* html .dataTables_wrapper { height: 1%; }
table.pretty {
    width: 100%;
    clear: both;
}
 
table.pretty td,
table.pretty th {
    padding: 5px;
    border: 1px solid #fff;
}
/* Header cells */
table.pretty thead th {
    text-align: center;
    background: #66a9bd;
}
/* Body cells */
table.pretty tbody th {
    text-align: left;
    background: #91c5d4;
}
     
table.pretty tbody td {
    text-align: center;
    background: #d5eaf0;
}
         
table.pretty tbody tr.odd td {
    background: #bcd9e1;
}
/* Footer cells */ 
table.pretty tfoot th {
    background: #b0cc7f;
    text-align: left;
}
     
table.pretty tfoot td {
    background: #d7e1c5;
    text-align: center;
    font-weight: bold;
}
div.dataTables_wrapper {
    background-color: #719ba7;
}
table.pretty thead th.sorting_asc {
    background: #66A9BD url('images/sort_asc.png') no-repeat right center;
}
 
table.pretty thead th.sorting_desc {
    background: #66A9BD url('images/sort_desc.png') no-repeat right center;
}
 
table.pretty thead th.sorting {
    background: #66A9BD url('images/sort_both.png') no-repeat right center;
}
a.paginate_button,
a.paginate_active {
    display: inline-block;
    background-color: #608995;
    padding: 2px 6px;
    margin-left: 2px;
    cursor: pointer;
    *cursor: hand;
}
 
a.paginate_active {
    background-color: transparent;
    border: 1px solid black;
}
 
a.paginate_button_disabled {
    color: #3d6672;
}
.paging_full_numbers a:active {
    outline: none
}
.paging_full_numbers a:hover {
    text-decoration: none;
}
 
div.dataTables_paginate span>a {
    width: 15px;
    text-align: center;
}
 
div.dataTables_info {
    padding: 9px 6px 6px 6px;
}
</style>
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css"/>
<script type="text/javascript" src="<?php echo asset('js/datatables.min.js')?>"></script>
<script type="text/javascript">
// This is our actual script
//http://frugalrouleur.com/ <http://frugalrouleur.com/>  

    $(document).ready(function(){
        $('#example').dataTable( {
            "sPaginationType": "full_numbers"
        } );
    });
</script>
{{ Form::open(array('url' => 'submitSearch')) }}
<h1>Go</h1>
    <div class="inputFieldsSearchResult">
    	<span class="sportInput">{{  Form::input('text', 'sport', $sport, [ 'class' => 'form-control', 'placeholder' => 'sport e.g. squash, jogging']); }}</span>
    	<span class="locationInput">{{  Form::input('text', 'location', $location, ['class' => 'form-control', 'placeholder' => 'location e.g. Castle Hill, NSW']); }}</span>
		{{ Form::submit('Search',['class' => 'sportSubmit']) }}

	</div>
    
{{ Form::close() }}

<table id="example" border="0" cellpadding="0" cellspacing="0" class="pretty">
    <thead>
        <tr>
            <th>Sport</th>
            <th>Location</th>
            <th>Date</th>
            <th>Time</th>
            <th>Contact</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <th scope="row">Soccer</th>
            <td>Dural</td>
            <td>17/02/2014</td>
            <td>6pm</td>
            <td>soccer@soccer.com</td>
        </tr>
        <tr>
            <th scope="row">Soccer</th>
            <td>Glenhaven</td>
            <td>17/02/2014</td>
            <td>5pm</td>
            <td>soccer@soccer.com</td>
        </tr>
        <tr>
            <th scope="row">Soccer</th>
            <td>Castle Hill</td>
            <td>18/02/2014</td>
            <td>1pm</td>
            <td>soccer@soccer.com</td>
        </tr>
    </tbody>
</table>
@stop