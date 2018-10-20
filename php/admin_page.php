<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/admin_page.css">
	<link rel="stylesheet" type="text/css" href="../css/card.css">
    <link rel="stylesheet" type="text/css" href="../css/card.scss">
</head>
<body>
	<center>
		<?php 
			include '../data/get_data.php';

			function dynamicQuery($query,$noOfCards_perLine=3)
			{
				$cards=array();
				$result=get_table_data_query($query); 
				for($i=0;$i<count($result);$i++){
					$row=$result[$i];
					array_push($cards,getCard($i, $row['name'], $row['email'], $row['phone'], $row['address'], $row['room_type'], $row['cost'], $row['card']));
				}

				$noOfCards=sizeof($cards);
				print("<table>");
				
				$cardsleft = $noOfCards;
				while ($cardsleft > 0) {
					print("<tr>");
					print("<div class=wrapper>");
					if($cardsleft > $noOfCards_perLine){
						# SHOW ALL NUMBER OF CARDS.
						for($i = 0; $i<$noOfCards_perLine; $i++){
							print($cards[$i + $noOfCards - $cardsleft]);
							echo '<script>console.log("'.($i + $noOfCards - $cardsleft).'")</script>';
						}
						$cardsleft -= $noOfCards_perLine;
						echo '<script>console.log("next")</script>';
					} else{
						while($cardsleft != 0){
							print($cards[$noOfCards - $cardsleft]);
							echo '<script>console.log("'.($noOfCards - $cardsleft).'")</script>';
							$cardsleft -= 1;
						}
					}
					print("</div>");
					print("</tr>");
					}
				print("</table>");

			}//dynamicQuery

			function getCard($i, $name, $email, $mobile,  $address, $room_type, $cost, $card)
			{
				return 
				sprintf(
					"<td>
						
							<div class=card>
								<input type=checkbox id=%s class=more aria-hidden=true>
								<div class=content>
									<div class=front style=\"background-image: url('https://images.unsplash.com/photo-1529408686214-b48b8532f72c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=986e2dee5c1b488d877ad7ba1afaf2ec&auto=format&fit=crop&w=1350&q=80')\">
										<div class=inner>
											 Name:  %s <br><br>
											 Email:  %s <br><br>
											 Mobile:  %s
											
											<label for=%s class=\"button\" aria-hidden=\"true\">
												Details
											</label>
										</div>
									</div>
									<div class=back>
										<div class=inner>
											
											Address: %s<br>
											Cost: %s<br>
											Room Type: %s<br>
											Card: %s
											<label for=%s class=\"button return\" aria-hidden=\"true\">
												Go Back
											</label>
										</div>
									</div>
								</div>
							</div>
						
						
					</td>", 
					$i,$name, $email, $mobile, $i, $address, $cost, $room_type, $card, $i
			    );
			}//getCards

			dynamicQuery("select * from customer;");

		
		?>
		</center>
	
	
</body>

</html>