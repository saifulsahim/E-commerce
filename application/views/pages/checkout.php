<script type="text/javascript">


    var xmlhttp = false;
    // Check if we are using IE.

    try{

        //if the Javascript version is greater than 5 .
        xmlhttp = new ActiveXObject("Msxm12.XMLHTTP");
        // alert(xmlhttp);
        //alert(You are using Microsoft IE);
    }
    catch(e){
        //alert(e);
        //if not, then use the older active x object.

        try{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch(E){
            xmlhttp = false;
        }
    }
    // alert(typeof XMLHttpRequest123);
    // If we are using  a non -IE browser, create a javascript instance
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined'){
        xmlhttp = new XMLHttpRequest();
        //alert("You are not using Microsoft IE);
    }

    function makerequest(given_text,objID)
    {
        //alert(given_text);
        //var_obj = document.getElementById (objID);
        //serverPage = 'search.php?text='given_text+ '&abc='+d23;
        serverPage = '<?php echo base_url()?>checkout/ajax_email_check/'+given_text;
        xmlhttp.open("GET",serverPage);
        xmlhttp.onreadystatechange = function() {
            //alert(xmlhttp.readyState);
             //alert(xmlhttp.status);

            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                //alert(xmlhttp.responseText);
                document.getElementById(objID).innerHTML = xmlhttp.responseText;



                if(xmlhttp.responseText == 'Already Exists !' )
                {

                    document.getElementById('sbtn').disabled = true;
                }
                if(xmlhttp.responseText == 'Email Address Required' )
                {

                    document.getElementById('sbtn').disabled = true;
                }

                if(xmlhttp.responseText == 'Available' ){

                    document.getElementById('sbtn').disabled = false;
            }

            }
        }

    xmlhttp.send(null);
    }
</script>

<?php
//if(!isset($this->session->customer_id))
//{
//redirect('checkout');
//}

?>

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Check out</li>
            </ol>
        </div><!--/breadcrums-->

        <div class="step-one">
            <h2 class="heading">Step1: CheckOut Method</h2>
        </div>


<!--        <div class="register-req">-->
<!--            <p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>-->
<!--        </div><!--/register-req-->


            <div class="row">
                <div class="col-sm-6">
                    <h4>Create New Account</h4>
                    <div class="shopper-info">

                        <form action="<?php echo base_url()?>customer-registration" method="post">

                            <input type="text" name="customerName" placeholder="Customer Name" value="<?php echo set_value('customerName')?>"  required >

                            <?php echo form_error('customerName')?>

                            <input type="text" name="emailAddress" onblur="makerequest(this.value,'res')" placeholder="Email Address" required>
                            <span id ="res" style="color: blue"></span>

                            <input type="password" name="password" placeholder="Password"  value="<?php echo set_value('password')?>" required>
                            <?php echo form_error('password')?>

                            <input type="password" name="confirmPassword" placeholder="Confirm password" required>
                            <input type="submit" id="sbtn" name="rbtn" value="Register" class="btn btn-primary " >
                        </form>
<!--                        <a class="btn btn-primary" href="">Get Quotes</a>-->
<!--                        <a class="btn btn-primary" href="">Continue</a>-->
                    </div>
                </div>




        <div class="col-sm-6 ">

            <h4>Login Your Account</h4>
            <div class="shopper-info">
                <form action="<?php echo base_url()?>login" method="post">

                    <input type="text" name="emailAddress" placeholder="Email Address" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button class="btn btn-primary" type="submit" name="btn">Login</button>

                </form>
                <!--                        <a class="btn btn-primary" href="">Get Quotes</a>-->




            </div>
        </div>
        </div>
    </div>
</section> <!--/#cart_items-->



