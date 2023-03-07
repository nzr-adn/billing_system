@extends('layouts.applayout')

@section('add_after_css')

<!-- <link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css"/>
<link href="https://cdn.datatables.net/rowreorder/1.3.2/css/rowReorder.dataTables.min.css"/>
<link href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css"/> -->

<!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/DataTables/css/bootstrap.min.css') }}"> -->

<style>
/* .dataTable tbody tr:hover,
{
  background-color: #ffa;
}
.dataTable tbody tr:hover > .sorting_1 {
  background-color: #ffa;
} */
</style>
@endsection

@section('content')

<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <!-- <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span>  -->
                Master Menu
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>

            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @can('user_create')
                        <a href="{{ route('pages.menu.create') }}" class="btn btn-primary">Add New Menu</a>
                        @endcan

                    <br /><br />
                    <table id="example" class="table table-striped table-bordered nowrap dataTable no-footer dtr-inline collapsed" style="width: 100%;" aria-describedby="example_info"><thead>
							<tr><th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 72.6833px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">First name</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 72.6px;" aria-label="Last name: activate to sort column ascending">Last name</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 177.683px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 79.5833px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 28.8833px;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 67.6167px;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 58.7px;" aria-label="Salary: activate to sort column ascending">Salary</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 35.9167px;" aria-label="Extn.: activate to sort column ascending">Extn.</th><th class="sorting dtr-hidden" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="E-mail: activate to sort column ascending">E-mail</th></tr>
						</thead>

						<tbody>
						<tr class="odd">
								<td class="dtr-control sorting_1" tabindex="0">Airi</td>
								<td>Satou</td>
								<td>Accountant</td>
								<td>Tokyo</td>
								<td>33</td>
								<td>2008-11-28</td>
								<td>$162,700</td>
								<td>5407</td>
								<td style="display: none;" class="dtr-hidden">a.satou@datatables.net</td>
							</tr><tr class="even">
								<td class="sorting_1 dtr-control">Angelica</td>
								<td>Ramos</td>
								<td>Chief Executive Officer (CEO)</td>
								<td>London</td>
								<td>47</td>
								<td>2009-10-09</td>
								<td>$1,200,000</td>
								<td>5797</td>
								<td style="display: none;" class="dtr-hidden">a.ramos@datatables.net</td>
							</tr><tr class="odd">
								<td class="dtr-control sorting_1" tabindex="0">Ashton</td>
								<td>Cox</td>
								<td>Junior Technical Author</td>
								<td>San Francisco</td>
								<td>66</td>
								<td>2009-01-12</td>
								<td>$86,000</td>
								<td>1562</td>
								<td style="display: none;" class="dtr-hidden">a.cox@datatables.net</td>
							</tr><tr class="even">
								<td class="sorting_1 dtr-control">Bradley</td>
								<td>Greer</td>
								<td>Software Engineer</td>
								<td>London</td>
								<td>41</td>
								<td>2012-10-13</td>
								<td>$132,000</td>
								<td>2558</td>
								<td style="display: none;" class="dtr-hidden">b.greer@datatables.net</td>
							</tr><tr class="odd">
								<td class="sorting_1 dtr-control">Brenden</td>
								<td>Wagner</td>
								<td>Software Engineer</td>
								<td>San Francisco</td>
								<td>28</td>
								<td>2011-06-07</td>
								<td>$206,850</td>
								<td>1314</td>
								<td style="display: none;" class="dtr-hidden">b.wagner@datatables.net</td>
							</tr><tr class="even">
								<td class="dtr-control sorting_1" tabindex="0">Brielle</td>
								<td>Williamson</td>
								<td>Integration Specialist</td>
								<td>New York</td>
								<td>61</td>
								<td>2012-12-02</td>
								<td>$372,000</td>
								<td>4804</td>
								<td style="display: none;" class="dtr-hidden">b.williamson@datatables.net</td>
							</tr><tr class="odd">
								<td class="sorting_1 dtr-control">Bruno</td>
								<td>Nash</td>
								<td>Software Engineer</td>
								<td>London</td>
								<td>38</td>
								<td>2011-05-03</td>
								<td>$163,500</td>
								<td>6222</td>
								<td style="display: none;" class="dtr-hidden">b.nash@datatables.net</td>
							</tr><tr class="even">
								<td class="sorting_1 dtr-control">Caesar</td>
								<td>Vance</td>
								<td>Pre-Sales Support</td>
								<td>New York</td>
								<td>21</td>
								<td>2011-12-12</td>
								<td>$106,450</td>
								<td>8330</td>
								<td style="display: none;" class="dtr-hidden">c.vance@datatables.net</td>
							</tr><tr class="odd">
								<td class="sorting_1 dtr-control">Cara</td>
								<td>Stevens</td>
								<td>Sales Assistant</td>
								<td>New York</td>
								<td>46</td>
								<td>2011-12-06</td>
								<td>$145,600</td>
								<td>3990</td>
								<td style="display: none;" class="dtr-hidden">c.stevens@datatables.net</td>
							</tr><tr class="even">
								<td class="dtr-control sorting_1" tabindex="0">Cedric</td>
								<td>Kelly</td>
								<td>Senior Javascript Developer</td>
								<td>Edinburgh</td>
								<td>22</td>
								<td>2012-03-29</td>
								<td>$433,060</td>
								<td>6224</td>
								<td style="display: none;" class="dtr-hidden">c.kelly@datatables.net</td>
							</tr>
							</tr><tr class="even">
								<td class="dtr-control sorting_1" tabindex="0">Cedric</td>
								<td>Kelly</td>
								<td>Senior Javascript Developer</td>
								<td>Edinburgh</td>
								<td>22</td>
								<td>2012-03-29</td>
								<td>$433,060</td>
								<td>6224</td>
								<td style="display: none;" class="dtr-hidden">c.kelly@datatables.net</td>
							</tr></tbody>
					</table>
                    <br><br>

                    </div>
                </div>
              </div>
            </div>

          </div>
          <!-- content-wrapper ends -->

@endsection

@section('add_after_js')

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap4.min.js"></script> -->

<script>
  $(document).ready(function() {
	var table = $('#example').DataTable( {
		responsive: true
	} );

	new $.fn.dataTable.FixedHeader( table );
} );
</script>
@endsection
