<?php include_once "topHeader.php"; ?>

            <div class='container-fluid mt-5'>
                    <div class="card border-0 shadow-sm rounded-0">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-10">
                            <p class="h4 font-f">Manage organization </p>
                          </div>
                           <!-- <div class="col-md-2 text-end">
                    <button onclick="printTable()" class="btn btn-print rounded-1">Print Report</button>
                </div> -->
                          <div class="col-md-2"> 
                            <a href="addOrg.php" class="btn btn-primary mb-3 text-black border-0 border-2" style="background-color:rgba(255, 93, 69, 0.6);">Register organization</a>
                          </div>
                        </div>
                        
                        <table class='table table-hover table-bordered mt-1' id="post-table">

                          <thead>
                            <tr>
                              <th width='1%'>S/N</th>
                              <th >Email address</th>
                              <th >Full name</th>
                              <th>Office name</th>
                              <th>Phone number</th>
                              <th width='8%'>Edit</th>
                              <!-- <th width='8%'>Delete</th> -->
                            </tr>
                          </thead>
                          <tbody>
                          <div class="col-md-2 text-end">
                    <button  style="background-color:cyan;" onclick="downloadCSV()" class="btn btn-download rounded-1">Export report</button>
                </div>
                     
                          <?php
                              $no =  1;
                              $org = mysqli_query($con,"select * from organization ");
                              while ($query = mysqli_fetch_array($org)) {
                            ?>
                              <tr >
                                      <td class='text-center'><?php echo $no; ?></td>
                                        <td> <?php echo $query['email']; ?></td>
                                        <td><?php echo ucwords($query['firstName']." ".$query['lastName']); ?></td>
                                        <td><?php echo ucwords($query['officeName']); ?></td>
                                        <td><?php echo $query['phoneNumber']; ?></td>
                                        <td class='text-center'>
                                          <a href="addOrg.php?edit=<?php echo $query['id']; ?>&em=<?php  echo $query['email'] ?>&fn=<?php echo $query['firstName']; ?>&ln=<?php  echo $query['lastName'] ?>&of=<?php echo $query['officeName']; ?>&pn=<?php  echo $query['phoneNumber'] ?>"  class='btn btn-success' >Edit</a>

                                        </td>
                                        <!-- <td class='text-center'>
                                          <button class='btn btn-danger' >Delete</button>
                                        </td> -->
                              </tr>

                            <?php $no += 1; }?>

                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
                
            </div>
        </div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

<script>
// function printTable() {
//     var printContents = document.getElementById('post-table').outerHTML;
//     var originalContents = document.body.innerHTML;

//     document.body.innerHTML = '<html><head><title>Print Report</title></head><body>' + printContents + '</body>';
    
//     window.print();
    
//     document.body.innerHTML = originalContents;
// }

function downloadCSV() {
    var csvContent = "data:text/csv;charset=utf-8,";
    var table = document.getElementById('post-table');
    var rows = table.querySelectorAll('tr');

    rows.forEach(function(row) {
        var cells = row.querySelectorAll('td, th');
        var rowContent = Array.from(cells).map(function(cell) {
            return '"' + cell.textContent.replace(/"/g, '""') + '"';
        }).join(',');
        csvContent += rowContent + "\n";
    });

    var encodedUri = encodeURI(csvContent);
    var link = document.createElement('a');
    link.setAttribute('href', encodedUri);
    link.setAttribute('download', 'applications_report.csv');
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}
</script>
