@extends ('layout.admin_layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Admin Profile Page</title>
</head>
<body>
   
  <div class="div" class="container">
    <div class="card-header">
  
  
    <h4> Student List</h4>
  
  </div>
  <div class="card-body">
    <table class="table table-bordered">
      <thead class="text-center">
        
          <th> Department </th>
      
      </thead>
  
     
        <tr>
          <td class="text-center"> All Computer Science Students  <a href="wc"  class="btn btn-success "> View  </a>  </td>
          <td class="text-center"> Computer Science Nd1  <a href="comsci"  class="btn btn-success "> View  </a></td>
          <td class="text-center"> Computer Science Nd2  <a href="comsci2"  class="btn btn-success "> View  </a></td>
          <td class="text-center"> Computer Science Hnd1 <a href="comscih"  class="btn btn-success "> View  </a> </td>
          <td class="text-center"> Computer Science Hnd2 <a href="comscih2"  class="btn btn-success "> View  </a> </td>
        </tr>
      
        <tr>
          <td class="text-center"> All Slt Students <br> <a href="allslt"  class="btn btn-success "> View  </a> </td>
          <td class="text-center"> SLT Nd1 <br> <a href="slt1" class="btn btn-success "> View  </a>   </td>
          <td class="text-center"> SLT Nd2 <br> <a href="slt2" class="btn btn-success "> View  </a>  </td>
          <td class="text-center"> All Physics Students <br> <a href="allphy"  class="btn btn-success "> View  </a>  </td>
          <td class="text-center"> Physics Hnd1 <br> <a href="phy"  class="btn btn-success "> View  </a>    </td>
          <td class="text-center"> Physics Hnd2 <br> <a href="phy2"  class="btn btn-success "> View  </a>  </td>
        </tr>
      

        <tr>
          <td class="text-center"> All Biology Student  <br> <a href="allbio"  class="btn btn-success "> View  </a> </td>
          <td class="text-center"> Biology Hnd1 <br> <a href="bio"  class="btn btn-success "> View  </a> </td>
          <td class="text-center"> Biology Hnd2  <br> <a href="bio2"  class="btn btn-success "> View  </a> </td>
          <td class="text-center"> All Chemistry Student  <br> <a href="allchem"  class="btn btn-success "> View  </a> </td>
          <td class="text-center"> Chemistry Hnd1 <br> <a href="chem"  class="btn btn-success "> View  </a>  </td>
          <td class="text-center"> Chemistry Hnd2 <br> <a href="chem2"  class="btn btn-success "> View  </a> </td>
        </tr>
      

        
          
      
    </table>
  </div>
  </div>
       
     
</body>
</html>
@stop