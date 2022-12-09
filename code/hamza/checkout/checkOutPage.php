<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>


<div class="container">
    <div class="container rounded bg-white ">
        <div class="row d-flex justify-content-center pb-5">
            <div class="col-sm-4 col-md-6 ml-1">
                <div class="py-4 d-flex flex-row">
                    <h5><span class="fa fa-check-square-o"></span><b>YOUTRAIN</b> | </h5><span class="pl-2">Pay</span>
                </div>
                <h4 class="green">$85.00</h4>
                <h4>Diabetes Pump & Supplies</h4>
                <div class="d-flex pt-2">
                    <div><p><b>Information about travel.</b><span class="green"></span></p></div>
                    <div class="ml-auto"><p class="text-primary"><i class="fa fa-plus-circle text-primary"></i>Add insurance card</p></div>
                </div>
                <p>Insurance claims and all necessary dependencies will be submitted to your insurer for the coverred portion of this order</p>
                <div class="rounded bg-light d-flex">
                    <div class="p-2">Aetna-Open Access</div>
                    <div class="ml-auto p-2">OAP</div>
                </div>
                <hr>
                <div class="pt-2">
                    <div class="d-flex">
                        <div><p><b>Patient Balance.</b><span class="green">$13.24</span></p></div>
                        <div class="ml-auto p-2"><p class="text-primary"><i class="fa fa-plus-circle text-primary"></i>Add payment card</p></div>
                    </div>
                    <p>
                        This is an estimate for the portion of your order (not covered by insurance) due 
                        today . once insurance finalizes their review refunds and/or balances will reconcile automatically.
                    </p>
                    <form class="pb-3">
                        <div class="d-flex flex-row align-content-center">
                            <div class="pt-2 pr-2"><input type="radio" name="radio1" id="r1" checked></div>
                            <div class="rounded border d-flex w-100 px-2">
                                <div class="pt-2"><p><i class="fa fa-cc-visa text-primary pr-2"></i>Visa Debit Card</p></div>
                                <div class="ml-auto pt-2">************3456</div>
                            </div>
                        </div>
                    </form>
                    <form class="pb-3">
                        <div class="d-flex flex-row w-100">
                            <div class="pt-2 pr-2"><input type="radio" name="radio2" id="r2"></div>
                            <div class="rounded  d-flex w-100 px-2">
                                <div class="pt-2"><p><i class="fa fa-cc-mastercard pr-2"></i>Mastercard Office</p></div>
                                <div class="ml-auto pt-2">************1038</div>
                            </div>
                        </div>
                    </form>
                    <div>
                    <button type="button" class="btn btn-primary launch" data-toggle="modal" data-target="#staticBackdrop"> <i class="fa fa-rocket"></i> Pay Now
</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-4 offset-md-1 mobile">
                <div class="py-4 d-flex justify-content-end">
                    <h6><a href="#">Cancel and return to website</a></h6>
                </div>
                <div class="bg-light rounded d-flex flex-column">
                    <div class="p-2 ml-3"><h4>Ticket</h4></div>
                    <div class="p-2 d-flex">
                        <div class="col-8">Price for children</div>
                        <div class="ml-auto">$186.76</div>
                    </div>
                    <div class="p-2 d-flex">
                        <div class="col-8">Price for adult</div>
                        <div class="ml-auto">$0.00</div>
                    </div>
                    <div class="p-2 d-flex">
                        <div class="col-8"> Number of booked seats</div>
                        <div class="ml-auto">$0.00</div>
                    </div>

                 
                    
                    <div class="border-top px-4 mx-3"></div>
                    <div class="p-2 d-flex pt-3">
                        <div class="col-8"><b>Total Price</b></div>
                        <div class="ml-auto"><b class="green">$85.00</b></div>
                        
                    </div>
                    <button onclick="window.print()">print</button>

                </div>
            </div>        
        </div>
    </div>
    </div>


    <!-------------------------->
  

   
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-body"> <div class="text-right"> <i class="fa fa-close close" data-dismiss="modal"></i> </div> <div class="tabs mt-3"> <ul class="nav nav-tabs" id="myTab" role="tablist"> <li class="nav-item" role="presentation"> <a class="nav-link active" id="visa-tab" data-toggle="tab" href="#visa" role="tab" aria-controls="visa" aria-selected="true"> <img src="https://i.imgur.com/sB4jftM.png" width="80"> </a> </li> <li class="nav-item" role="presentation"> <a class="nav-link" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab" aria-controls="paypal" aria-selected="false"> <img src="https://i.imgur.com/yK7EDD1.png" width="80"> </a> </li> </ul> <div class="tab-content" id="myTabContent"> <div class="tab-pane fade show active" id="visa" role="tabpanel" aria-labelledby="visa-tab"> <div class="mt-4 mx-4"> <div class="text-center"> <h5>Credit card</h5> </div> <div class="form mt-3"> <div class="inputbox"> <input type="text" name="name" class="form-control" required="required"> <span>Cardholder Name</span> </div> <div class="inputbox"> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> <span>Card Number</span> <i class="fa fa-eye"></i> </div> <div class="d-flex flex-row"> <div class="inputbox"> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> <span>Expiration Date</span> </div> <div class="inputbox"> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> <span>CVV</span> </div> </div> <div class="px-5 pay"> <button class="btn btn-success btn-block">Add card</button> </div> </div> </div> </div> <div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypal-tab"> <div class="px-5 mt-5"> <div class="inputbox"> <input type="text" name="name" class="form-control" required="required"> <span>Paypal Email Address</span> </div> <div class="pay px-5"> <button class="btn btn-primary btn-block">Add paypal</button> </div> </div> </div> </div> </div> </div> </div> </div>
</div>
    <!-------------------------->
  

    
    <link rel="stylesheet" href="styles.css">

<!-- 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 
 <!--Script Link  put befor end of </body> -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>