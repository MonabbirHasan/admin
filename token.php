<?php include 'src/header.php'; ?>
    <section class="container">
       <div class="form-wrapper">
       <form>
           <h5>Step 1</h5>
           <div class="form-group">
               <label for="exampleFormControlSelect1">Please select payment method</label>
               <select class="form-control" id="exampleFormControlSelect1">
                   <option>1</option>
                   <option>2</option>
                   <option>3</option>
                   <option>4</option>
                   <option>5</option>
                </select>
            </div>
            <h5>Step 2</h5>
            <div class="form-group">
                <label for="exampleFormControlInput1">Enter the amount in USD</label>
               <div class="d-flex">
               <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter the amount in USD">
                <div class="input-text d-flex">
                   <div class="ml-3 pl-3">
                   <span>0.0000000</span>
                    <p>ETH</p>
                   </div>
                    <div class="ml-3 pl-3">
                    <span>0.0000000</span>
                    <p>BLUNT</p>
                    </div>
                </div>
               </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Private Code (Optional)</label>
                <div class="d-flex">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Private Code (Optional)">
                <button class="submit-btn">apply private code</button>
                </div>
            </div>
            <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
      I hereby agree to the<a href="payment agreement and token sale terms"></a>
      </label>
    </div>
    <button class="last-btn">pay with crypto</button>
        <div class="text-box">
        <p>*A processing fee may be charged by the payment gateway</p>
        <p>Tokens will appear on your dashboard after payment is successfully made and approved by our team.</p>
        </div>
        <div class="text-box">
        <p>Please note: BLUNT tokens will be distributed to all purchasers after completion of stage 3 of the pre-sale.</p>
        <p>Tokens will appear on your dashboard after payment is successfully made and approved by our team.</p>
        </div>
       </div>
        </form>
    </section>
    <?php include 'src/footer.php'; ?>
