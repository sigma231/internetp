<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
        <tbody>
                    @foreach($fee as $fee)
                        <tr>
                            <td>{{$fee->studentnumber}}</td>
                            <td>{{$fee->studentname}}</td>
                            <td>{{$fee->dateofpayment}}</td>
                            <td>{{$fee->amount}}</td>
                            <td><a href="/individualfeespaid/{{ $fee->studentnumber }}">Fees Paid</td>
                        </tr>
                        
                        <?php  $total += $fee->amount ?>
                        
                    @endforeach
        </tbody>      
    </table>
    
  </body>
</html>