
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Resume</title>
<link type="text/css" rel="stylesheet" href="{{ asset('public/frontend/css/green.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('public/frontend/css/print.css') }}" media="print"/>
    <style>
        .self ul li {
            height: auto;
            margin: 5px 0;
        }
        .myTable table {
            width: 93%;
            margin: 40px 30px;
        }
        .myTable tr th {
            font-weight: bold;
            font-size: 17px;
        }
    </style>
</head>
<body>
<!-- Begin Wrapper -->
<div id="wrapper">
  <div class="wrapper-top"></div>
  <div class="wrapper-mid">
    <!-- Begin Paper -->
    <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">
        <div class="entry">
          <!-- Begin Image -->
        <img class="portrait" src="{{ asset('public/storage/images/'.$data->student_picture) }}" alt="John Smith" />
          <!-- End Image -->
          <!-- Begin Personal Information -->
          <div class="self">
            <h1 class="name" style="font-size: 30px;line-height: 35px;"> {{ $data->student_name }} </h1>
            <ul>
            <li class="ad">{{$data->student_address_village}}, {{ $data->student_address_post_office }} {{ $data->student_address_postal_code }}, {{ $data->city }}, {{ $data->student_address_country }}</li>
              <li class="mail">{{ $data->student_email }}</li>
              <li class="tel">{{ $data->student_phone_number }}</li>
            </ul>
          </div>
          <!-- End Personal Information -->
          <!-- Begin Social -->
          <div class="social">
            <ul>
              <li><a class='north' href="#" title="Download .pdf"><img src="{{ asset('public/frontend/img/icn-save.jpg')}}" alt="Download the pdf version" /></a></li>
            <li><a class='north' href="javascript:window.print()" title="Print"><img src="{{ asset('public/frontend/img/icn-print.jpg') }}" alt="" /></a></li>
            </ul>
          </div>
          <!-- End Social -->
        </div>
        <!-- Begin 1st Row -->

        <div class="myTable">
            <table>
                    <tr>
                        <th>Student ID</th>
                        <td>{{$data->student_id_number}}</td>
                    </tr>
                    <tr>
                        <th>Faculty</th>
                        <td>{{ $data->faculty }}</td>
                    </tr>
                    <tr>
                        <th>Department</th>
                    <td>{{ $data->department }}</td>
                    </tr>
                    <tr>
                        <th>Program</th>
                        <td>{{ $data->program }}</td>
                    </tr>

                    <tr>
                        <th>NID Number</th>
                        <td>{{ $data->student_nid }}</td>
                    </tr>
                    <tr>
                        <th>Date of Birth</th>
                        <td>{{ $data->student_date_of_birth }}</td>
                    </tr>
                    <tr>
                        <th>Blood Group</th>
                        <td>{{ $data->blood_group }}</td>
                    </tr>
                    <tr>
                        <th>Religion</th>
                        <td>{{ $data->student_religion }}</td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>{{ $data->student_gender }}</td>
                    </tr>
                    <tr>
                        <th>Admission Date</th>
                        <td>{{ $data->student_admission_date }}</td>
                    </tr>
                    <tr>
                        <th>Marital Status</th>
                        <td>{{ $data->student_marital_status }}</td>
                    </tr>
                    <tr>
                        <th>Payment Method</th>
                        <td>{{ $data->payment_method }}</td>
                    </tr>
                    <tr>
                        <th>Amount</th>
                        <td>{{ $data->amount }}</td>
                    </tr>
                    <tr>
                        <th>Transaction ID</th>
                        <td>{{ $data->transaction_id }}</td>
                    </tr>
            </table>
        </div>

        <!-- Begin 5th Row -->
      </div>
      <div class="clear"></div>
      <div class="paper-bottom"></div>
    </div>
    <!-- End Paper -->
  </div>
  <div class="wrapper-bottom"></div>
</div>
<div id="message"><a href="#top" id="top-link">Go to Top</a></div>
<!-- End Wrapper -->
</body>
</html>
