<?php

class ShopHandler extends ContactsLogic {

    public function collectProducts() {
        $sql = "SELECT * FROM products";
		$results = $this->DataHandler->readsData($sql);
		$products = array();
		while ($resultsLoop = $results->fetch(PDO::FETCH_ASSOC)) {
            array_push($products, array(
                "id"=>$resultsLoop['id'],
                "name"=>$resultsLoop['name'],
                "description"=>$resultsLoop['description'],
                "src"=>$resultsLoop['src'],
                "stock"=>$resultsLoop['stock'],
                "value"=>$resultsLoop['value']
            ));
		}
		return $products;
	}
    public function collectProduct($id) {
        $sql = "SELECT * FROM products WHERE id =" . $id;
		$results = $this->DataHandler->readsData($sql);
		$products = array();
		while ($resultsLoop = $results->fetch(PDO::FETCH_ASSOC)) {
            array_push($products, array(
                "id"=>$resultsLoop['id'],
                "name"=>$resultsLoop['name'],
                "description"=>$resultsLoop['description'],
                "src"=>$resultsLoop['src'],
                "stock"=>$resultsLoop['stock'],
                "value"=>$resultsLoop['value']
            ));
		}
		return $products;
    }
    public function sendMail($email) {
        $to = $email;
        $subject = "G69 Merch order";

        $message = "
        <html>
        <head>
        <title>Merch order</title>
        </head>
        <body>
        <div style='width: max-content;  background=var(--grey);height: min-content;margin: auto;background: #57575712;'>
        <h1 style='margin: 0;background: #233241;color: white; text-align:center;'>Youre merch order is in progres and will arive in the next couple of days.</h1>
        <p style='padding: 10px; text-align:center;'>you wil be notified when the product gets shiped with further details.</p>
        </div>
        </body>
        </html>
        ";
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // More headers
        $headers .= 'From: <webmaster@example.com>' . "\r\n";
        $headers .= 'Cc: myboss@example.com' . "\r\n";
        mail($to,$subject,$message,$headers);

        if(@mail($to,$subject,$message,$headers)) {
          //echo "Mail Sent Successfully";
          return true;
        }else{
          return false;
          //echo "Mail Not Sent";
        }
    }
    public function order($product, $email, $firstname, $lastname, $city, $street, $postal) {
        $productID = $product[0]['id'];
        $sql = "INSERT INTO `orders` (`id`, `email`, `firstname`, `lastname`, `city`, `street`, `postal`, `productID`) VALUES (NULL, '$email', '$firstname', '$lastname', '$city', '$street', '$postal', '$productID')";
		$result = $this->DataHandler->createData($sql);
		return $result;
    }
}



?>
