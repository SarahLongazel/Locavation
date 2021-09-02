<?php

$result = $conn->query($sql);
	//output data of each row
if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()) {
    $bus_id = $row["bus_id"];
    $busname = $row["bus_name"];
    $busaddr = $row["bus_addr"];
    $buscity = $row["bus_city"];
    $busst = $row["bus_st"];
    $buszip = $row["bus_zip"];
    $busphone1 = $row["bus_phone1"];
    $busphone2 = $row["bus_phone2"];
    $busphone3 = $row["bus_phone3"];
    $busemail = $row["bus_email"];
    $th_nail = $row["th_nail"];
    $pic_1 = $row["pic_1"];
    $pic_2 = $row["pic_2"];
    $pic_3 = $row["pic_3"];
    $pic_4 = $row["pic_4"];
    $pic_5 = $row["pic_5"];
    $pictn_w = $row["picth_w"];
    $pic1_w = $row["pic1_w"];
    $pic2_w = $row["pic2_w"];
    $pic3_w = $row["pic3_w"];
    $pic4_w = $row["pic4_w"];
    $pic5_w = $row["pic5_w"];
    $picth_h = $row["pictn_h"];
    $pic1_h = $row["pic1_h"];
    $pic2_h = $row["pic2_h"];
    $pic3_h = $row["pic3_h"];
    $pic4_h = $row["pic4_h"];
    $pic5_h = $row["pic5_h"];
    $alt_thnl = $row["alt_thnl"];
    $alt_1 = $row["alt_1"];
    $alt_2 = $row["alt_2"];
    $alt_3 = $row["alt_3"];
    $alt_4 = $row["alt_4"];
    $alt_5 = $row["alt_5"];
    $blurb = $row["blurb_info"];
    $busweb = $row["bus_website"];

    echo '<div class="listingcontainer">
    <div class="listthnlpic"><img src=" ' . $th_nail . ' " alt=" ' . $alt_thnl . ' " style = width: ' . $pictn_w . '; height: ' . $pictn_h . ';"></div><div class="listinfocont">' . $busname . '<br>' . $busaddr . '<br> ' . $buscity . ' ' . $busst . ' ' . $buszip . '<br>' . $busweb .  '(' . $busphone1 . ') ' . $busphone2.  ' - '  . $busphone3 .  '</div><div class="scoreviewcont"></div>
    <div class="listinfocont">' . $blurb . '</div><div class="scoreviewcont"></div><br>
    <div class="listpic"><a href=" ' .$pic_1 . ' "><img src=" ' . $pic_1 . ' " alt=" ' . $alt_1 . ' " style = width: ' . $pictn_w . '; height: ' . $pictn_h . ';"></a></div>
    <div class="listpic"><img src=" ' . $pic_2 . ' " alt=" ' . $alt_2 . ' " style = width: ' . $pictn_w . '; height: ' . $pictn_h . ';"></div>
    <div class="listpic"><img src=" ' . $pic_3 . ' " alt=" ' . $alt_3 . ' " style = width: ' . $pictn_w . '; height: ' . $pictn_h . ';"></div>
    <div class="listpic"><img src=" ' . $pic_4 . ' " alt=" ' . $alt_4 . ' " style = width: ' . $pictn_w . '; height: ' . $pictn_h . ';"></div>
    <div class="listpic"><img src=" ' . $pic_5 . ' " alt=" ' . $alt_5 . ' " style = width: ' . $pictn_w . '; height: ' . $pictn_h . ';"></div>

      </div><br>';
      }
} else {
  echo "<br>Listings coming. Please, come back soon.";
}
$conn->close(); 

?>