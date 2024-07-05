@include('Homepage.layout.header')
<!-- Header End -->

<style>
    @media(max-width: 768px){
        .loan-section{
            margin:0;
            padding:0;
        }
    }
</style>



<!-- Rooms Section Begin -->
<section class="loan-section">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="loan-amount">Loan Amount</label>
                        <input type="text" id="loan-amount" class="form-control" placeholder="100,000.00">
                    </div>
                    <div class="form-group">
                        <label for="interest-rate">Select Interest</label>
                        <select id="interest-rate" class="form-control">
                            <option value="">0%</option>
                            <option value="0.06">6%</option>
                            <option value="0.07">7%</option>
                            <option value="0.08">8%</option>
                            <option value="0.09">9%</option>
                            <option value="0.10">10%</option>
                            <option value="0.11">11%</option>
                            <option value="0.12">12%</option>
                            <option value="0.13">13%</option>
                            <option value="0.14">14%</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="button" value="Calculate" class="btn btn-block form-control" onclick="calculateResults()" />
                    </div>

                </div>
                
               
                    <div class="col-md-7">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Years</th>
                                        <th>Monthly Payment</th>
                                        <th>Total Payment</th>
                                        <th>Total Interest</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1 year</td>
                                        <td id="monthly-payment-1"></td>
                                        <td id="total-payment-1"></td>
                                        <td id="total-interest-1"></td>
                                    </tr>
                                    <tr>
                                        <td>2 years</td>
                                        <td id="monthly-payment-2"></td>
                                        <td id="total-payment-2"></td>
                                        <td id="total-interest-2"></td>
                                    </tr>
                                    <tr>
                                        <td>3 years</td>
                                        <td id="monthly-payment-3"></td>
                                        <td id="total-payment-3"></td>
                                        <td id="total-interest-3"></td>
                                    </tr>
                                    <tr>
                                        <td>4 years</td>
                                        <td id="monthly-payment-4"></td>
                                        <td id="total-payment-4"></td>
                                        <td id="total-interest-4"></td>
                                    </tr>
                                    <tr>
                                        <td>5 years</td>
                                        <td id="monthly-payment-5"></td>
                                        <td id="total-payment-5"></td>
                                        <td id="total-interest-5"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <small class="text-gray-100"><b> DISCLAIMER: </b>Please note that computation is based on diminishing balance. Indicative interest rate is still subject to company approval based on prevailing market rate.</small>
                    </div>
               
            </div>
        </div>



    </div>
</section>




<script>
    function calculateResults() {
        const amount = parseFloat(document.getElementById("loan-amount").value);
        const interestRate = parseFloat(document.getElementById("interest-rate").value);

        const years1 = 1;
        const years2 = 2;
        const years3 = 3;
        const years4 = 4;
        const years5 = 5;

        const monthlyInterestRate = interestRate / 12;
        const numberOfPayments1 = years1 * 12;
        const numberOfPayments2 = years2 * 12;
        const numberOfPayments3 = years3 * 12;
        const numberOfPayments4 = years4 * 12;
        const numberOfPayments5 = years5 * 12;


        const x1 = Math.pow(1 + monthlyInterestRate, numberOfPayments1);
        const x2 = Math.pow(1 + monthlyInterestRate, numberOfPayments2);
        const x3 = Math.pow(1 + monthlyInterestRate, numberOfPayments3);
        const x4 = Math.pow(1 + monthlyInterestRate, numberOfPayments4);
        const x5 = Math.pow(1 + monthlyInterestRate, numberOfPayments5);

        const monthlyPayment1 = (amount * x1 * monthlyInterestRate) / (x1 - 1);
        const monthlyPayment2 = (amount * x2 * monthlyInterestRate) / (x2 - 1);
        const monthlyPayment3 = (amount * x3 * monthlyInterestRate) / (x3 - 1);
        const monthlyPayment4 = (amount * x4 * monthlyInterestRate) / (x4 - 1);
        const monthlyPayment5 = (amount * x5 * monthlyInterestRate) / (x5 - 1);

        const totalPayment1 = monthlyPayment1 * numberOfPayments1;
        const totalInterest1 = totalPayment1 - amount;

        const totalPayment2 = monthlyPayment2 * numberOfPayments2;
        const totalInterest2 = totalPayment2 - amount;

        const totalPayment3 = monthlyPayment3 * numberOfPayments3;
        const totalInterest3 = totalPayment3 - amount;

        const totalPayment4 = monthlyPayment4 * numberOfPayments4;
        const totalInterest4 = totalPayment4 - amount;

        const totalPayment5 = monthlyPayment5 * numberOfPayments5;
        const totalInterest5 = totalPayment5 - amount;

        document.getElementById("monthly-payment-1").textContent = formatNumber(monthlyPayment1);
        document.getElementById("total-payment-1").textContent = formatNumber(totalPayment1);
        document.getElementById("total-interest-1").textContent = formatNumber(totalInterest1);

        document.getElementById("monthly-payment-2").textContent = formatNumber(monthlyPayment2);
        document.getElementById("total-payment-2").textContent = formatNumber(totalPayment2)
        document.getElementById("total-interest-2").textContent = formatNumber(totalInterest2);

        document.getElementById("monthly-payment-3").textContent = formatNumber(monthlyPayment3);
        document.getElementById("total-payment-3").textContent = formatNumber(totalPayment3);
        document.getElementById("total-interest-3").textContent = formatNumber(totalInterest3);

        document.getElementById("monthly-payment-4").textContent = formatNumber(monthlyPayment4);
        document.getElementById("total-payment-4").textContent = formatNumber(totalPayment4);
        document.getElementById("total-interest-4").textContent = formatNumber(totalInterest4);

        document.getElementById("monthly-payment-5").textContent = formatNumber(monthlyPayment5);
        document.getElementById("total-payment-5").textContent = formatNumber(totalPayment5);
        document.getElementById("total-interest-5").textContent = formatNumber(totalInterest5);

        function formatNumber(number) {
            return number.toLocaleString('en-PH', {
                style: 'currency',
                currency: 'PHP'
            });
        }
    }
</script>
@include('Homepage.layout.end')

</body>

</html>