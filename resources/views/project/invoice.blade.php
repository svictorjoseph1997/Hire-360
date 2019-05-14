<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: x-medium;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }
        .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            background-color: #60A7A6;
            color: #FFF;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
    </style>

</head>
<body>

<div class="information">
    <table width="100%">
        <tr>
            <td align="left" style="width: 40%;">
                <h2>{{ Auth::user()->name }}</h2>
                <pre>
<!--   -->
Status: Paid
</pre>


          <!--   </td>
            <td align="center">
                <img src="/path/to/logo.png" alt="Logo" width="64" class="logo"/>
            </td>
            <td align="right" style="width: 40%;">

                <h3>CompanyName</h3>
                <pre>
                    https://company.com

                    Street 26
                    123456 City
                    United Kingdom
                </pre>
            </td>
        </tr>
 -->
    </table>
</div>


<br/>

<div class="invoice">
    <h3>Invoice</h3>
    <table width="100%">
        <thead>
        <tr align="left">
            <th>Project name</th>
            <th>Quantity</th>
            <th>Total cost</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$title}}</td>
            <td>1</td>
            <td align="left">{{$cost}}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>

        <tfoot>
       <!--  <tr>
            <td colspan="1"></td>
            <td align="left">Total</td>
            <td align="left" class="gray">{{$cost}}</td>
        </tr> -->
        </tfoot>
    </table>
</div>

<button onClick="window.print()">Print</button>

</body>
</html>
