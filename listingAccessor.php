  <?php

  /*
  Yangdizhu.com
  2012 All rights reserved.

  listingAccessor.php
  DB Accessor for listing page.

  Author: Xiaoli, Ma
  03/10/2013

  */
	  include('common/db_conn.php');


	  $property_table = "property";
	  $image_table = "property_img";
	  //field names
	  $title = "title";
	  $subtitle = "subtitle";
	  $street_addr = "street_addr";
	  $city = "city";
	  $county = "county";
	  $state = "state";
	  $zipcode = "zipcode";
	  $sale_price = "sale_price";
	  $year_built = "year_built";
	  $property_type = "property_type";
	  $monthly_fee = "monthly_fee";
	  $num_bedrooms ="num_bedrooms";
	  $num_bathrooms = "num_bathrooms";
	  $g_long = "g_long";
	  $g_lat = "g_lat";
	  $sqft = "sqft";
	  $story = "story";
	  $body_text = "body_text";
	  $src_agent_id = "src_agent_id";
	  $last_update = "last_update";

   //Fetching from your database table.

        $query = "SELECT t1.$title,t1.$subtitle, t1.$sale_price, t1.monthly_fee, t1.$num_bedrooms,t1.$sqft,t2.img_path
        FROM $property_table t1 left join $image_table t2 on t1.id = t2.property_id
        where t1.id >200";
        $request = mysql_query($query) or die (mysql_error());
        

        include('fund_thumbnail.php');

        // while($row = mysql_fetch_assoc($request)){
        // print "<div class=property_list_field >". $row['title']." </div>";
        // print "<div class=property_list_field >". $row['subtitle']." </div>";
        // print "<div class=property_list_field >". $row['sale_price']." </div>";
        // print "<div class=property_list_field >". $row['num_bedrooms']." </div>";
        // print "<div class=property_list_field >". $row['sqft']." </div>";
        // print "<div class=property_image>";
        // print "<img src=".$row['img_path']."></div>";

        // }



      

?>