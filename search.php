<?php

session_start();

require_once("db.php");

$limit = 4;

if(isset($_GET["page"])) {
	$page = $_GET['page'];
} else {
	$page = 1;
}

$start_from = ($page-1) * $limit;



			  if(isset($_GET['filter']) && $_GET['filter']=='searchBar') {

			    $search = $_GET['search'];
			    $sql = "SELECT * FROM photographers WHERE (name LIKE '%$search%') OR (companyname LIKE '%$search%')
			    OR(state LIKE '%$search%') OR (city LIKE '%$search%') LIMIT $start_from, $limit";
			    

			  }
			else if(isset($_GET['filter']) && $_GET['filter']=='experience') {

			    $search = $_GET['search'];
			    $sql = "SELECT * FROM photographers WHERE (name LIKE '%$search%') OR (companyname LIKE '%$search%')
			    OR(state LIKE '%$search%') OR (country LIKE '%$search%') LIMIT $start_from, $limit";
			    

			  }
			else if(isset($_GET['filter']) && $_GET['filter']=='city') {

			    $search = $_GET['search'];
			    $sql = "SELECT * FROM photographers WHERE (name LIKE '%$search%') OR (companyname LIKE '%$search%')
			    OR(state LIKE '%$search%') OR (city LIKE '%$search%') LIMIT $start_from, $limit";
			    

			  }


	 

			  $result = $conn->query($sql);
			  if($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
			      $sql1 = "SELECT * FROM photographers WHERE id_company='$row[id_company]'";
			                $result1 = $conn->query($sql1);
			                if($result1->num_rows > 0) {
			                  while($row1 = $result1->fetch_assoc()) 
			                  {
			               ?>

			         <div class="attachment-block clearfix">
						 <a href="view-job-post.php?id=<?php echo $row['id_company']; ?>">
							 <img class="attachment-img" src="uploads/logo/<?php echo $row1['logo']; ?>" alt="Attachment Image"></a>
			                <div class="attachment-pushed">
			                  <h4 class="attachment-heading"><br/><a href="view-job-post.php?id=<?php echo $row['id_company']; ?>"><?php echo $row['name']; ?></a> <span class="attachment-heading pull-right" style="padding-right: 30px;"><br/><?php echo $row['state']; ?></span></h4>
			                  <div class="attachment-text">
			                      <div><strong><?php echo $row1['companyname']; ?> | <?php echo $row1['city']; ?> | Website:<?php echo $row['website']; ?></strong></div>
			                  </div>
			                </div>
			              </div>

			      <?php
			        }
			      }
			    }
			  }






$conn->close();