<?php
session_start();
$con=mysqli_connect('localhost', 'root', '9636463361', 'userregistration');
if($con){
}else{
	echo "no connection";
}
echo '<p class="variablecolor">'.$_SESSION["Username"].'</p>';

?>
<div class="logout" style="text-align: right;">
        <a href="logout.php">Log Out</a>
    </div><br>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
    
		<section id="appointment" class="appointment section-bg">

      <div class="container">

        <div class="section-title">
          <h2>WELCOME TO FOOD STORE</h2>
          <p>Meet, Eat & Enjoy the true test. Making a reservation at Delicious is easy and takes just a couple of minutes</p>
        </div>

        <form action="" method="post" role="form">
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <select name="department" id="department" class="form-control">
                <option value="">Select Table</option>
                <option value="Department 1">Table 1</option>
                <option value="Department 2">Table 2</option>
                <option value="Department 3">Table 3</option>
                <option value="Department 1">Table 4</option>
                <option value="Department 2">Table 5</option>
                <option value="Department 3">Table 6</option>
                <option value="Department 3">Table 7</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <select name="dishes" id="doctor" class="form-control">
                <option value="">Select Dishes</option>
                <option value="Doctor 1">Chhole Bhature</option>
                <option value="Doctor 2">Bharwa Bhindi</option>
                <option value="Doctor 3">Pindi Chana</option>
                <option value="Doctor 1">Masala Chai</option>
                <option value="Doctor 2">Samosa</option>
                <option value="Doctor 3">Kulche</option>
                <option value="Doctor 1">Jalebi</option>
                <option value="Doctor 2">Dhokla</option>
                <option value="Doctor 3">Aloo Parantha</option>
              </select>
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            <div class="validate"></div>
          </div>
          <center><button type="submit" name="submit" class="btn" value="Send">BOOK A TABLE NOW</button></center><br>
            <?php include 'book_form.php'; ?>
            <?php echo $alert; ?>
            <script type="text/javascript">
              if(window.history.replaceState){
              window.history.replaceState(null, null, window.location.href);
              }
            </script>
        </form>

      </div>
    </section>
    <div class="wrapper">
        <div class="title">
            <h4>our menu</h4>
        </div>
        <div class="menu">
            <div class="single-menu">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Aloo_gobi.jpg/120px-Aloo_gobi.jpg" alt="">
                <div class="menu-content">
                    <h4>Aloo gobi <span>$45</span></h4>
                    <p>Cauliflower with potatoes sautéed with garam masala, turmeric, sometimes kalonji and curry leaves.</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Aloo_Tikki_served_with_chutneys.jpg/120px-Aloo_Tikki_served_with_chutneys.jpg" alt="">
                <div class="menu-content">
                    <h4>Aloo tikki <span>$45</span></h4>
                    <p>Patties of potato mixed with some vegetables fried</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Aloo_Mattar.jpg/120px-Aloo_Mattar.jpg" alt="">
                <div class="menu-content">
                    <h4>Aloo matar <span>$45</span></h4>
                    <p>A Potatoes and peas in curry with some best spieces</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b0/Spicy_alloo_with_tadka_mirchi.jpg/120px-Spicy_alloo_with_tadka_mirchi.jpg" alt="">
                <div class="menu-content">
                    <h4>Aloo shimla mirch<span>$45</span></h4>
                    <p>hard, unleavened bread cooked in most of areas of Rajasthan, and in some parts of India.</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d6/Delhi_Chaat_with_saunth_chutney.jpg/120px-Delhi_Chaat_with_saunth_chutney.jpg" alt="">
                <div class="menu-content">
                    <h4>Chaat<span>$45</span></h4>
                    <p>Street food. Usually containing potato patty fried in oil, topped with sweet yogurt, and other sauces and spices</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Chapatiroll.jpg/120px-Chapatiroll.jpg" alt="">
                <div class="menu-content">
                    <h4>Chapati<span>$45</span></h4>
                    <p>unleavened flatbread originating from the Indian subcontinent and staple in India</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Chana_masala.jpg/120px-Chana_masala.jpg" alt="">
                <div class="menu-content">
                    <h4>Chicken Tikka masala<span>$45</span></h4>
                    <p>Chicken marinated in a Yogurt tomato sauce. It is known to have a creamy texture. </p>
                </div>
            </div>
            <div class="single-menu">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Dal_Makhani.jpg/120px-Dal_Makhani.jpg" alt="">
                <div class="menu-content">
                    <h4>Dal<span>$45</span></h4>
                    <p>Assorted types of lentils, such as toor, urad, chana, masoor dal</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Poha%2C_a_snack_made_of_flattened_rice.jpg/120px-Poha%2C_a_snack_made_of_flattened_rice.jpg" alt="">
                <div class="menu-content">
                    <h4>Poha <span>$45</span></h4>
                    <p>Specialty from Madhya Pradesh. Common snack in central part of India. Flattended rice, potato, turmeric.</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/Gajjar_ka_halwa_%28carrot_halwa%29.JPG/120px-Gajjar_ka_halwa_%28carrot_halwa%29.JPG" alt="">
                <div class="menu-content">
                    <h4>Gajar ka halwa<span>$45</span></h4>
                    <p>sweet dish native to U.P. / Punjab. Carrot, Milk, Ghee, Cashew.</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/JalebiIndia.jpg/120px-JalebiIndia.jpg" alt="">
                <div class="menu-content">
                    <h4>Imarti<span>$45</span></h4>
                    <p>spherically meshed sweet dish from North India made up of batter from moong dal dipped in sugary syrup</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Khichuri-edit.jpg/120px-Khichuri-edit.jpg" alt="">
                <div class="menu-content">
                    <h4>Khichdi<span>$45</span></h4>
                    <p>Rice cooked with daal and veggies and sauteed with some spieces </p>
                </div>
            </div>
            <div class="single-menu">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Matkakulfi.jpg/120px-Matkakulfi.jpg" alt="">
                <div class="menu-content">
                    <h4>Kulfi falooda<span>$45</span></h4>
                    <p>dessert to ward off sweltering heat of summers in all over country</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Paneer_Kofta_Curry_-_Kolkata_2011-09-20_5426.JPG/120px-Paneer_Kofta_Curry_-_Kolkata_2011-09-20_5426.JPG" alt="">
                <div class="menu-content">
                    <h4>Kofta<span>$45</span></h4>
                    <p>Gram flour balls fried with vegetables. Gram flour, veggies, rolled into balls with gram flour and fried in oil and then cooked with curry.</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Litti_Chokha.jpg/120px-Litti_Chokha.jpg" alt="">
                <div class="menu-content">
                    <h4>Litti chokha<span>$45</span></h4>
                    <p> baked salted wheat flour cake filled with sattu (baked chickpea flour) and some special spices</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Saagroti.jpg/120px-Saagroti.jpg" alt="">
                <div class="menu-content">
                    <h4>Makki roti, sarson saag<span>$45</span></h4>
                    <p>Creamed sarson mustard leaves, with heavily buttered roti made from corn flour. Punjabi winter favorite.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="form_group">
          <input type="input" class="form_field" placeholder="Total Products">
          <label for="name" class="form_label">Products</label>
        </div>
    <div class="form_group">
          <input type="input" class="form_field" placeholder="Total Price">
          <label for="name" class="form_label">Price</label>
    </div><br><br><br><br><br><br><br><br>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" style="text-align: center;">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="W58SLJE854UH6">
        <input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!" style="width: 250px;">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="5" height="5">
    </form><br><br><br><br><br><br>
</body>
</html>
