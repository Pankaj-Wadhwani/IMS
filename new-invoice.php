<!DOCTYPE html>
<html lang="en">
<head>
    <title>Invoice - suresh kumhar</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i'>
    <link href='css/style.css' rel='stylesheet'>
    <link rel='stylesheet' href='css/invoice-template.css'>
</head>
<body>
    <div class='container-fluid main-container p-5'>
        <div class="buttons text-center">
            <div class="btn btn-primary print-hidden" id="printBtn">PRINT</div>
        </div>
        <div class='invoice'>
            <div class='container shop-details p-0 mb-5'>
                <h2 class='shop-name'>SAKSHI JEWELLERS</h2>
                <h6 class='shop-address'>Address: Jai Ganesh Shopping Centre, Shop No. 11, Achole Road, Nallasopara (E), 401209.</h6>
                <h6 class='shop-address'>Mob no.: 9881617616</h6>
            </div>
            <div class='invoice-header mb-5'>
                <div class='label-bold b-bottom'>Tax Invoice</div>
                <div class='invoice-details'>
                    <div class='row m-0'>
                        <div class='col-md-4 b-bottom p-0'>
                            <div class='label b-bottom'>Invoice No.</div>
                            <div class='label'>INVSJ-16</div>
                        </div>
                        <div class='col-md-4 b-left b-bottom b-right'>

                        </div>
                        <div class='col-md-4 b-bottom p-0'>
                            <div class='label b-bottom'>Invoice Date</div>
                            <div class='label'>2019-08-26</div>
                        </div>
                    </div>
                </div>
                <div class='container customer-details'>
                    <div class='customer-name'>suresh kumhar</div>
                    <div class='customer-address'>NSP</div>
                </div>

            </div>
            <div class="invoice-body bord">
                <div class="invoice-main-body">
                    <div class="invoice-body-heading">
                        <div class="columns">
                            <div class="row m-0">
                                <div class="b-right col-md-1"></div>
                                <div class="b-right col-md-4"></div>
                                <div class="b-right col-md-1"></div>
                                <div class="b-right col-md-1"></div>
                                <div class="b-right col-md-2"></div>
                                <div class="b-right col-md-1"></div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                        <div class="row b-bottom m-0 headings">
                            <span class="col-md-1 heading font-weight-bold">HSN Code</span>
                            <span class="col-md-4 heading font-weight-bold">Particulars</span>
                            <span class="col-md-1 heading font-weight-bold">Net Wt.</span>
                            <span class="col-md-1 heading font-weight-bold">Rate</span>
                            <span class="col-md-2 heading font-weight-bold">Amount</span>
                            <span class="col-md-1 heading font-weight-bold">GST %</span>
                            <span class="col-md-2 heading font-weight-bold">Amount with GST</span>
                            
                        </div>
                    </div>
                    <div class="invoice-body-contents">
                                        <div class="row m-0">
                    <span class="col-md-1">7113</span>
                    <span class="col-md-4">ring</span>
                    <span class="col-md-1">1 50</span>
                    <span class="col-md-1">&#8377;10</span>
                    <span class="col-md-2">&#8377;10</span>
                    <span class="col-md-1">3 %</span>
                    <span class="col-md-2">&#8377;10.3</span>
                </div>
                    </div>
                </div>
                <div class="invoice-body-footer b-top row m-0 pr-0">
                <div class="col-md-7"></div>
                    <div class="col-md-2 b-left  total-amount">
                        <span class="text-14 total-amount-content">TOTAL : &#8377;10</span>
                    </div>
                    <div class="gst col-md-3 b-left">
                        <div class="text-14">ROUND/OFF:</div>
                        <div class="text-14">GRAND TOTAL : &#8377;10.3</div>
                    </div>
                </div>
                <div class="amount-in-words b-top row m-0">
                    <span class="col-md-12">Amount in words: Ten  Rupees .three  Paise</span>
                </div>
                <div class="gstin-panno row m-0 b-top">
                    <div class="col-md-12 gstin-panno-content">
                        <div class='gstin'>GSTIN: 27AIVPP0970D1ZX</div>
                        <div class='pan-no'>PAN NO: AIVPP0970D1ZX</div>
                    </div>
                </div>
           </div>
           <br>
           <br>
           <div class="main-footer row m-0">
               <div class="received-goods col-md-5">
                   <span>RECEIVED ABOVE GOODS E. AND O.E</span>
                   <br>
                   <br>
                   <span>NOTE:- NO E-WAY BILL IS REQUIRED TO BE GENERATED AS THE GOODS COVERED UNDER THIS INVOICE ARE EXEMPTED AS PER SERIAL NO. 4/5 TO THE ANNEXURE TO RULE 138 (14) OF THE CGST RULES OF 2017</span>
                </div>
                <div class="col-md-2 offset-1 bord customer-sign-body p-0">
                        <div class="customer-sign-content b-top">
                            CUSTOMER SIGN
                        </div>
                </div>
                <div class="col-md-4 b-top b-right b-bottom p-0 for-shop">
                            <div class="for-shop-heading text-center b-bottom text-uppercase">
                                FOR SAKSHI JEWELLERS
                            </div>
                            <div class="for-shop-content text-center b-top">
                                <div class="for-shop-main-content">
                                    PROPRIETOR/AUTH.SIGN
                                </div>
                            </div>
                </div>
            </div>
            <div class="offset-8 text-center col-md-4 b-bottom b-right b-left">THANKS</div>
            <br>
            <br>
            <div class="final-footer row m-0">
                <div class="col-md-12 text-center bord p-0">
                    <div class="b-bottom">SUBJECT TO MUMBAI JURISDICTION</div>
                    <div>THIS IS A COMPUTER GENERATED INVOICE</div>
                </div>
            </div>
    </div>
    <script src='vendor/jquery/jquery.min.js'></script>
    <script src='vendor/bootstrap/js/bootstrap.bundle.min.js'></script>
    <script src='js/invoices/print-invoice.js'></script>
</body>
</html>