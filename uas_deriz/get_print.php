<?php
include('koneksi.php');
if($_POST["query"] != '') {
    $search_array = explode(",", $_POST["query"]); 
    $search_text = "'" . implode("', '", $search_array) . "'";
    $query = $conn->query("SELECT * FROM item WHERE nama IN (".$search_text.") ORDER BY id DESC");
}else{
    $query = $conn->query("SELECT * FROM item ORDER BY nama DESC");
}
$total_row = mysqli_num_rows($query);
$output = '';
if($total_row > 0)
{
  
   while ($row = $query ->fetch_object()) {    
    $output.= '
        <div class="col-4">
            <div class="offer offer-radius offer-warning">
                <div class="shape">
                    <div class="shape-text">
                    '.$row->id.'                        
                    </div>
                </div>
                <div class="offer-content">
                    <p class="lead"><font  size="4">'.$row->nama.'</font></p>
                    <p>
                        <font size="1"> '.$row->satuan.' -  Rp. '.$row->harga.'<br> '.$row->barcode.'
                        </font>
                    </p>
                </div>
            </div>
        </div>';
    }
   
    
}
echo $output;
?>
