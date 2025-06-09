<?php include_once "topHeader.php"; ?>

            <div class='container-fluid mt-5'>
                    <div class="card border-0 shadow-sm rounded-0">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-10">
                             <!-- <div class="col-md-2 text-end">
                    <button onclick="printTable()" class="btn btn-print rounded-1">Print Report</button>
                </div> -->
                        </div>
                            <p class="h4 font-f">Manage application </p>
                          </div>
                        </div>
                <div class="col-md-2 text-end">
                    <button  style="background-color:cyan;" onclick="downloadCSV()" class="btn btn-download rounded-1">Export report</button>
                </div> 
                        
                        <table class='table table-hover table-bordered mt-1' id="post-table">
                          <thead>
                            <tr>
                              <th width='1%'>S/N</th>
                              <th>Applicant name</th>
                              <th>Email address</th>
                              <th >Position</th>
                              <th >Office name</th>
                              <th >Education level</th>
                              <th>GPA </th>
                              <th>Status</th>
                              <th>Date </th>
                              <th >Certificate</th>
                              
                            </tr>
                          </thead>

                          <tbody>
                            <?php
                              $no =  1;
                              $app = mysqli_query($con,"select a.*, p.*, s.*, ac.* from application a JOIN post p ON a.postId = p.postID  JOIN applicant s ON a.applicantEmail = s.email JOIN academicQualification ac ON s.email = ac.applicantEmail order by ac.gpa desc; ");
                              while ($query = mysqli_fetch_array($app)) {
                            ?>
                              <tr>
                                      <td class='text-center'><?php echo $no; ?></td>
                                      <td><?php echo ucwords($query['firstName']." ".$query['lastName']); ?> </td>
                                      <td><?php echo $query['email']; ?> </td>
                                        <td><?php echo $query['position']." - ( ".$query['amount']." )"; ?> </td>
                                        <td> <?php echo $query['officeName']; ?></td>
                                        <td> <?php echo $query['educationLevel']; ?></td>
                                        <td> <?php echo $query['gpa']; ?></td>
                                        <td><?php echo $query['appStatus']; ?></td>
                                        <td> <?php echo $query['postDate']; ?></td>
                                        <td>
                                            <a class="btn btn-info border-0" href="../applicant/cv/<?php echo $query['certificate']; ?>" target="_blank" style="background-color:rgba(255, 93, 69, 0.6);">view</a>
                                        </td>
                            
                              </tr>
                            <?php $no +=1; }?>

                            
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
