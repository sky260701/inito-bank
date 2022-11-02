

<!DOCTYPE html>
<html>
<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link rel="stylesheet" href="customer_add_style.css">
</head>

<body>
  
  <form class="add_customer_form" action="atm_simulator_action.php" method="post">
    
    <div class="flex-container-form_header">
      <h4> currently working on atm simulator <br> please use above method</h4>
            <h2 id="form_header">ATM Simulator</h2>
        </div>

 
       <div class="flex-container">
            <div class=container>
                <label>Enter Amount (in INR) :</label>
<br>
                <input name="amt" size="24" type="text" required />
            </div>
        </div>

        <div class="flex-container">
   
         <div class=container>
                <label>Type :</label>
            </div>
            <div class="flex-container-radio">
             
   <div class="container">
                    <input type="radio" name="type" value="debit" id="debit-radio" checked>
                
    <label id="radio-label" for="debit-radio"><span class="radio">Debit</span></label>
                </div>
             
   <div class="container">
                    <input type="radio" name="type" value="credit" id="credit-radio">
      
              <label id="radio-label" for="credit-radio"><span class="radio">Credit</span></label>
                </div>
   
         </div>
        </div>

        <div class="flex-container">
            <div  class=container>
            
    <label>PIN(4 digit) :</b></label><br>
                <input name="pin" size="12" type="password" required />
    
        </div>
        </div>

        <div class="flex-container">
            <div class="container">
               
 <button type="submit">Submit</button>
            </div>

            <div class="container">
              
  <button type="reset" class="reset" onclick="return confirmReset();">Reset</button>
            </div>
   
     </div>

    </form>

    <script>
    function confirmReset() {
        return confirm('Do you really want to reset?')
    }
  
  </script>


</body>

</html>