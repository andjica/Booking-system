<?php
if(isset($arrayOfDisableDates))
{
    foreach($arrayOfDisableDates as $daterange)
    {
        foreach($daterange as $date){
            $disabledDates[]=$date->format("Y-m-d");
        }
    }
}
?>

<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
@if(isset($disabledDates))
<div id="disable-dates" data-dates="{{json_encode($disabledDates)}}">
</div>
@endif
<div class="card card0 border-0 mt-2 mb-5">
                <div class="row">
                    <div class="col-12">
                        <div class="card card00 m-2 border-0">
                            <div class="row text-center justify-content-center px-3">
                                <p id="back" class="prev text-danger" style="dispaly:Block"><span class="fa fa-long-arrow-left"> Go Back</span></p>
                                <h3 class="mt-4 p-2">Simple Reservation for {{$room->name}}</h3>
                            </div>
                            <div class="d-flex flex-md-row px-3 mt-4 flex-column-reverse">
                                <div class="col-md-4">
                                    <div class="card1">
                                        <ul id="progressbar" class="text-center">
                                            <li class="active step0"></li>
                                            <li class="step0"></li>
                                            <li class="step0"></li>
                                            <li class="step0"></li>
                                        </ul>
                                        <h4 class="mb-5 andjica">Choose date for reservation</h4>
                                        <h4 class="mb-5 andjica2">Fill in information</h4>
                                        <h4 class="mb-5 andjica3">Check Reservation</h4>
                                    </div>
                                </div>
                                <div class="col-md-8 border-left border-top rounded">
                                    <div class="card2 first-screen show ml-2">
                                    <div class="row text-center mt-2 mb-2">
                                    <div class="card andjica-tab">
                                                <div class="card-header">
                                                <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
                                                    <li class="nav-item">
                                                    <a class="nav-link active" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                                                    </li>
                                                    <li class="nav-item">
                                                    <a class="nav-link"  href="#history" role="tab" aria-controls="history" aria-selected="false">Information about stuff</a>
                                                    </li>
                                                    <li class="nav-item">
                                                    <a class="nav-link" href="#deals" role="tab" aria-controls="deals" aria-selected="false">Deals</a>
                                                    </li>
                                                </ul>
                                                </div>
                                                <div class="card-body">
                                                <h4 class="card-title">{{$room->name}}</h4>
                                                <h6 class="card-subtitle mb-2"><img src="{{asset('/')}}img/svg_icon/location.svg" alt="">&nbsp;{{$room->city->country->name}}, {{$room->city->name}} - {{$room->address}}</h6>
                                                <br>
                                                <div class="tab-content mt-3">
                                                    <div class="tab-pane active" id="description" role="tabpanel">
                                                    <ul>
                                                        <li>
                                                            <div class="single_info_doc">
                                                                <img src="{{asset('/')}}img/svg_icon/square.svg" alt="" class="andjica-icon">
                                                                <span>{{$room->square}}Sqft</span> &nbsp;&nbsp;
                                                                <img src="{{asset('/')}}img/svg_icon/bed.svg" alt="" class="andjica-icon">
                                                                <span>{{$room->beds}}</span>&nbsp;&nbsp;
                                                                <img src="{{asset('/')}}img/svg_icon/bath.svg" alt="" class="andjica-icon">
                                                                <span>{{$room->number_of_bath}} Bath</span>&nbsp;&nbsp;
                                                                 <i class="fa text-danger fa-paw"></i>&nbsp;Pets {{$room->pets}}

                                                                <span class="badge badge-warning"><span class="amount">From ${{$room->prize}}</span> per night</span>

                                                            </div>
                                                        </li>

                                                    </ul>
                                                    </div>

                                                    <div class="tab-pane" id="history" role="tabpanel" aria-labelledby="history-tab">
                                                    <div class="card-body">
                                                        <!-- Name -->
                                                        <h4 class="card-title font-weight-bold">Posted by: {{$room->user->name}}</h4>
                                                        <hr>
                                                        <!-- Quotation -->
                                                        <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos,
                                                            adipisci</p>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane" id="deals" role="tabpanel" aria-labelledby="deals-tab">
                                                    <p class="card-text">Immerse yourself in the colours, aromas and traditions of Emilia-Romagna with a holiday in Bologna, and discover the city's rich artistic heritage.</p>
                                                    <a href="#" class="btn btn-danger btn-sm">Get Deals</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        <div class="row text-center px-3 mr-2">
                                        <div class="col">

                                            <label for="exampleStartdate mt-2">Check in</label>
                                            <input id="date-start-input" name="start" class="form-control" placeholder="Start date">
                                            <small id="emailHelp" class="form-text text-muted">For free days see in calendar.</small>
                                            <div id="start-error"></div>
                                        </div>
                                        <div class="col">
                                        <label for="exampleEnddate">Check out</label>
                                            <input id="date-end-input" name="end" class="form-control" placeholder="End date">
                                            <small id="emailHelp" class="form-text text-muted">For free days see in calendar.</small>
                                            <div id="end-error"></div>
                                        </div>

                                        </div>
                                      <div class="row px-3 mt-1 mb-5">
                                          <div class="custom-control custom-checkbox">
                                                <input checked id="customCheck1" type="checkbox" class="custom-control-input">
                                                 <label for="customCheck1" class="custom-control-label">I want to receive promo emails</label>
                                         </div>
                                        </div>
                                        <div class="row px-3 mt-1 mb-5">
                                        <p class="prev text-danger"><span class="fa fa-long-arrow-left"  id="back"> Go Back</span></p>
                                        <div class="next-button text-center mt-1 ml-2" id="first-next" data-id="{{$room->id}}">Next <span class="fa fa-arrow-right"></span> </div>
                                        </div>

                                    </div>
                                    <div class="card2 ml-2">
                                        <div class="row px-3 mt-3">
                                        <form>
                                            <div class="row">




                                                <div class="col-lg-12">
                                                    <h4 class="text-center"> Fill here in your details </h4>
                                                <div class="row">
                                                        <div class="col-lg-6">
                                                            <p>Firstname</p>
                                                        <input type="text" class="form-control" placeholder="" id="firstName">
                                                            <div id="name-error"></div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                        <p>Last name</p>

                                                        <input type="text" class="form-control" placeholder="" id="lastName">
                                                            <div id="last-name-error"></div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                        <p>number of people</p>

                                                        <input type="text" class="form-control" placeholder="" id="numberOfPeople">
                                                            <div id="number-error"></div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                        <p>Purpose of renting</p>

                                                        <input type="text" class="form-control" placeholder="" id="purposeOfRenting">
                                                            <div id="purpose-error"></div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                        <p>What type of project</p>

                                                        <input type="text" class="form-control" placeholder="" id="typeOfProject">
                                                            <div id="project-error"></div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                        <p>What is your role</p>

                                                        <input type="text" class="form-control" placeholder="" id="role">
                                                            <div id="role-error"></div>
                                                        </div>
                                                    </div>
                                              </div>
                                            </div>



                                        </form>

                                        <div id="second-next" class="next-button text-center mt-5 ml-2 bg-info validated">Next <span class="fa fa-arrow-right "></span> </div>
                                        </div>



                                    </div>
                                    <div class="card2 ml-2">
                                        <div class="row px-3 mt-3">
                                        <div class="pay-wrapper" style="    width: 100%;">
                			<div class="bill">
	                			<div class="bill-cell">
	            				<div class="bill-cell" style="margin-bottom: 13px">
	                				<div class="bill-item">
                                        <div class="bill-unit">
                                            Dear:  <span id="firstN"></span>
                                        </div>
		            					<div class="bill-unit">
		            						Room:  <span>{{$room->name}}</span>
		            					</div>

		            					<span class="price" id="pricePerRoom">{{$room->prize}}</span>
		            				</div>
		            				<div class="bill-item people">
		            					<div class="bill-unit">
		            						Adult : <span id="numberOfAdults"></span>
		            					</div>
		            				</div>
                                    <div class="bill-item people">
                                        <div class="bill-unit">
                                            Number of nights : <span id="numberOfNights"></span>
                                        </div>
                                    </div>
		            				<div class="bill-item service">
		            					<div class="bill-unit">
		            						Rooms &amp; Services :
		            					</div>
		            					<span class="price">$80</span>
		            				</div>
	                			</div>
	                			<div class="bill-cell">
	                				<div class="bill-item vat">
		            					<div class="bill-unit">
		            						Vat 8% :
		            					</div>
		            					<span class="price">$08</span>
		            				</div>
		            				<div class="bill-item total-price">
		            					<div class="bill-unit">
		            						Total Price :
		            					</div>
		            					<span class="price" id="total-price-for-room"></span>
		            				</div>
		            				<div class="checkbox-circle">
										<label>
											<input type="radio" name="payment" value="full payment" checked=""> Full Payment<br>
											<span class="checkmark"></span>
										</label>
										<label>
											<input type="radio" name="payment" value="10% Deposit"> 10% Deposit
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="bill-item total">
		            					<div class="bill-unit">
		            						<span>20% Deposit</span>
		            						Pay the rest on arrival
		            					</div>
		            					<span class="price">$78</span>
		            				</div>
	                			</div>
	            			</div>

                		</div>
                        <div id="confirmation-button" class="next-button text-center mt-3 ml-2" style="width: 100%;">Confirmation <span class="fa fa-arrow-right"></span> </div>

                                        </div>
                                    </div>
                                    <div class="card2 ml-2">
                                        <div class="row px-3 mt-2 mb-4 text-center" id="success">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <style>
            @font-face {
  font-family: "Poppins-Regular";
  src: url("../fonts/poppins/Poppins-Regular.ttf"); }
@font-face {
  font-family: "Poppins-Medium";
  src: url("../fonts/poppins/Poppins-Medium.ttf"); }
@font-face {
  font-family: "Bitter-Regular";
  src: url("../fonts/bitter/Bitter-Regular.ttf"); }
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

body {
  font-family: "Poppins-Regular";
  font-size: 15px;
  color: black;
  margin: 0; }

:focus {
  outline: none; }

textarea {
  resize: none; }

input, textarea, select, button {
  font-family: "Poppins-Regular";
  font-size: 15px;
  color: black; }

p, h1, h2, h3, h4, h5, h6, ul {
  margin: 0; }

ul {
  padding: 0;
  margin: 0;
  list-style: none; }

a {
  text-decoration: none; }

textarea {
  resize: none; }

img {
  max-width: 100%;
  vertical-align: middle; }

.wrapper {
  height: 100vh;
  background: #f9f6f1;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  background: url("../images/form-wizard-bg.jpg");
  background-size: cover; }

.inner {
  width: 909px; }

.image-holder {
  position: relative; }
  .image-holder h3 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%); }

h3 {
  font-family: "Bitter-Regular";
  font-size: 30px;
  color: black;
  text-transform: uppercase;
  padding: 9px 23px;
  border: 1px solid rgba(255, 255, 255, 0.5);
  font-weight: 400;
  letter-spacing: 0.3px; }

.wizard {
  background: url("../images/form-content-bg.png") repeat;
  padding: 62px 60px 58px 62px;
  display: flex; }
  .wizard .steps {
    width: 26.05%;
    margin-right: 68px; }
  .wizard .content {
    width: 73.95%; }

.steps ul {
  border-left: 3px solid rgba(242, 242, 242, 0.4); }
.steps li {
  margin-bottom: 16px;
  display: flex;
  align-items: center;
  height: 31px;
  position: relative; }
  .steps li a {
    color: black;
    font-family: "Poppins-Medium";
    font-size: 15px;
    padding-left: 18px; }
    .steps li a:before {
      content: "";
      width: 3px;
      height: 31px;
      position: absolute;
      left: -3px;
      top: 0; }
  .steps li.current a {
    color: #edc948; }
    .steps li.current a:before {
      background: #edc948; }

.content h4 {
  display: none; }

label {
  margin-bottom: 7px;
  display: block;
  font-size: 14px; }

.form-group .form-row {
  margin-bottom: 27px; }

.form-row {
  display: flex;
  margin-bottom: 29px; }
  .form-row.mb-21 {
    margin-bottom: 21px; }
  .form-row .form-holder, .form-row .select {
    width: 50%;
    margin-right: 30px; }
    .form-row .form-holder:last-child, .form-row .select:last-child {
      margin-right: 0; }
    .form-row .form-holder.w-100, .form-row .select.w-100 {
      width: 100%;
      margin-right: 0; }
    .form-row .form-holder.mr-20, .form-row .select.mr-20 {
      margin-right: 20px; }
  .form-row .select .form-holder {
    width: 100%;
    margin-right: 0; }

.form-holder {
  position: relative; }
  .form-holder span.lnr-chevron-down {
    position: absolute;
    bottom: 10px;
    right: 0;
    font-size: 10px; }
  .form-holder span.lnr-calendar-full {
    position: absolute;
    bottom: 12px;
    right: 0;
    font-size: 12px; }
  .form-holder span.placeholder {
    position: absolute;
    bottom: 8px;
    left: 0;
    font-size: 14px; }

.select {
  position: relative; }
  .select .select-control {
    height: 34px;
    border-bottom: 1px solid #5d718e;
    width: 100%;
    font-size: 14px;
    padding: 0;
    display: flex;
    align-items: center;
    cursor: pointer; }
  .select .dropdown {
    display: none;
    position: absolute;
    top: 100%;
    width: 100%;
    background: black;
    color: #999;
    z-index: 9;
    border: 1px solid #81acee; }
    .select .dropdown li {
      padding: 2px 10px; }
      .select .dropdown li:hover {
        background: #81acee;
        color: black; }

.form-control {
  background: none;
  height: 34px;
  border: none;
  border-bottom: 1px solid #5d718e;
  width: 100%;
  font-size: 14px;
  padding: 0; }
  .form-control.pl-85 {
    padding-left: 85px; }
  .form-control.pl-96 {
    padding-left: 96px; }
  .form-control::-webkit-input-placeholder {
    color: black; }
  .form-control::-moz-placeholder {
    color: black; }
  .form-control:-ms-input-placeholder {
    color: black; }
  .form-control:-moz-placeholder {
    color: black; }
  .form-control:focus {
    border-bottom: 1px solid #e6e6e6; }

textarea.form-control {
  padding: 6px 0; }

.option {
  color: #999;
  padding-left: 20px; }

select.form-control {
  -moz-appearance: none;
  -webkit-appearance: none;
  cursor: pointer;
  color: black; }
  select.form-control option[value=""][disabled] {
    display: none; }

select option {
  padding: 0 15px; }

.section-style {
  display: flex; }
  .section-style .board-wrapper {
    width: 50%;
    margin-right: 30px; }
  .section-style .form-wrapper, .section-style .pay-wrapper {
    width: 50%; }

.board-inner {
  background: black;
  color: #012353;
  font-size: 14px;
  padding: 22px 33px 13px 21px; }
  .board-inner div {
    margin-bottom: 8px; }
    .board-inner div:last-child {
      margin-bottom: 0; }
  .board-inner .board-item span {
    margin-left: 13px; }
  .board-inner .board-line {
    display: flex;
    justify-content: space-between; }
    .board-inner .board-line div {
      margin-bottom: 0; }

.bill {
  border: 1px solid black;
  padding: 18px 20px 11px 20px; }
  .bill .bill-item {
    display: flex;
    justify-content: space-between;
    margin-bottom: 7px; }
    .bill .bill-item .price {
      font-family: "Poppins-Medium";
      color: #edc948; }
    .bill .bill-item.people {
      justify-content: flex-start; }
      .bill .bill-item.people .bill-unit:first-child {
        margin-right: 28px; }
    .bill .bill-item.service {
      margin-top: 31px; }
    .bill .bill-item.vat {
      margin-bottom: 14px; }
    .bill .bill-item.total-price {
      margin-bottom: 21px; }
      .bill .bill-item.total-price .price {
        font-size: 17px; }
    .bill .bill-item.total {
      font-size: 12px;
      align-items: center; }
      .bill .bill-item.total span {
        display: block;
        margin-left: 0;
        font-size: 14px; }
      .bill .bill-item.total .price {
        font-size: 17px; }
  .bill .bill-unit span {
    margin-left: 2px; }
  .bill .bill-cell {
    padding-bottom: 7px;
    border-bottom: 1px solid #5d718e;
    margin-bottom: 15px; }
    .bill .bill-cell:last-child {
      margin-bottom: 0;
      padding-bottom: 0;
      border: none; }


.checkbox {
  position: relative;
  padding-left: 25px; }
  .checkbox label {
    cursor: pointer; }
    .checkbox label a {
      color: #edc948; }
      .checkbox label a:hover {
        color: #d4b43f; }
  .checkbox input {
    position: absolute;
    opacity: 0;
    cursor: pointer; }
  .checkbox input:checked ~ .checkmark:after {
    display: block; }

.checkmark {
  position: absolute;
  top: 3px;
  left: 0;
  height: 14px;
  width: 15px;
  border: 1px solid black;
  font-family: Material-Design-Iconic-Font;
  font-size: 13px; }
  .checkmark:after {
    position: absolute;
    top: 0;
    left: 1px;
    display: none;
    content: '\f26b';
    color: black; }

.checkbox-circle {
  display: flex;
  justify-content: space-between;
  margin-bottom: 16px; }
  .checkbox-circle label {
    padding-left: 19px;
    cursor: pointer;
    font-size: 12px;
    display: inline-block;
    position: relative; }
  .checkbox-circle input {
    position: absolute;
    opacity: 0;
    cursor: pointer; }
  .checkbox-circle input:checked ~ .checkmark:after {
    display: block; }
  .checkbox-circle .checkmark {
    position: absolute;
    top: 3px;
    left: 0;
    height: 12px;
    width: 12px;
    border-radius: 50%;
    border: 1px solid black; }
    .checkbox-circle .checkmark:after {
      content: "";
      top: 3px;
      left: 3px;
      width: 4px;
      height: 4px;
      border-radius: 50%;
      background: black;
      position: absolute;
      display: none; }

@media (max-width: 1500px) {
  .wrapper {
    height: auto;
    min-height: 100vh;
    padding: 80px 0; } }
@media (max-width: 1199px) {
  .wrapper {
    padding: 0; } }
@media (max-width: 991px) {
  .wizard {
    padding: 50px; } }
@media (max-width: 767px) {
  .wizard {
    padding: 50px 20px;
    flex-direction: column; }
    .wizard .steps {
      width: 100%;
      margin-right: 0;
      margin-bottom: 30px; }
    .wizard .content {
      width: 100%; }

  .section-style {
    flex-direction: column; }
    .section-style .board-wrapper {
      width: 100%;
      margin-right: 0;
      margin-bottom: 50px; }
    .section-style .form-wrapper, .section-style .pay-wrapper {
      width: 100%; }

  .form-row {
    display: block;
    margin-bottom: 0; }
    .form-row .form-holder {
      width: 100%;
      margin-right: 0; }
    .form-row .select {
      width: 100%;
      margin-right: 0; }

  .form-control, .select-control {
    margin-bottom: 29px; }

  .form-holder span.placeholder {
    bottom: 36px; }
  .form-holder span.lnr-chevron-down, .form-holder span.lnr-calendar-full {
    bottom: 39px; }

  .select span.lnr-chevron-down {
    bottom: 10px; }

  h3 {
    width: 90%;
    text-align: center; } }

/*# sourceMappingURL=style.css.map */
.panel-body{
    padding:5px !important;
}

.next-button {
    width: 18%;
    height: 50px;
    color: #fff;
    padding: 10px;
    cursor: pointer;
    border-radius: 30px;
    line-height: 28px;
    text-align: center;
    background: orange !important;}


    .nov{
        border-top-right-radius: 20px;
    border-top-left-radius: 20px;
}
    }

            </style>
