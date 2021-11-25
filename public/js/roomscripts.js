$(document).ready(function () {

    $(window).on('load',function(){
        localStorage.clear();
    })
    disableDates();

    $('#confirmation-button').on('click',function(){

        var firstName = localStorage.getItem('firstName');
        var lastName = localStorage.getItem('lastName');
        var number_of_days = localStorage.getItem('numberOfDays');
        var purposeOfRenting = localStorage.getItem('purposeOfRenting');
        var typeOfProject = localStorage.getItem('typeOfProject');
        var role = localStorage.getItem('role');
        var numberOfPeople = localStorage.getItem('numberOfPeople');
        var startDate = localStorage.getItem('startDate');
        var endDate = localStorage.getItem('endDate');
        var totalPrice = localStorage.getItem('sum');
        var room_id = $('#first-next').attr('data-id');


        $.ajax({
            url:BASE_URL+"/reservate",
            method:"post",
            data:{
                "_token": TOKEN,
                firstName,
                lastName,
                purposeOfRenting,
                typeOfProject,
                number_of_days,
                numberOfPeople,
                role,
                startDate,
                endDate,
                totalPrice,
                room_id
            },
            success:function(response){


               /* var text = ` <h2 class="col-12 text-danger"><strong>Success !</strong></h2>
                                            <div class="col-12 text-center">
                                                <img class="tick" src="https://i.imgur.com/WDI0da4.gif"></div>
                                            <h6 class="col-12 mt-2"><i>You have succesfully booked this room. <B>You will receive an E-mail with confirmation about your booking</b></i></h6>
                                        </div>`;
                $('#success').append(text);*/
                room = response.roomid;
                resid = response.resid;
                console.log(resid);
                //alert(resid);
                /*alert('https://wmclocations.com/public/res/'+resid);*/

                //window.location = 'https://wmclocations.com/public/res/'+resid;

                /*linkout ="https://wmclocations.com/public/res/"+resid;
                if(window.location.href == linkout)
                    {
                        location.reload();
                    }
                    else
                    {
                       alert(5);
                    }*/
                window.location = '/res/' + resid;
            }
        })
    })

    $('#second-next').on('click',function(){

        var regEx = /^[a-zA-Z ]+$/;
        var regExNum = /^[0-9]$/;
        var firstName = $('#firstName');
        var lastName = $('#lastName');
        var numberOfPeople = $('#numberOfPeople');
        var purposeOfRenting = $('#purposeOfRenting');
        var typeOfProject = $('#typeOfProject');
        var role = $('#role');
        if(!regEx.test(firstName.val()))
        {
            $('#name-error').text("Fill your name");
            window.errors.push("name error");
        }

        if(!regEx.test(lastName.val()))
        {
            $('#last-name-error').text("Fill your last name");
            window.errors.push("last name error");

        }
        if(!regExNum.test(numberOfPeople.val()))
        {
            $('#number-error').text("Fill number of people with number");
            window.errors.push("number of people error");
        }
        if(purposeOfRenting.val()=="")
        {
            $('#purpose-error').text("Fill purpose of trip");
            window.errors.push("error");

        }
        if(typeOfProject.val()=="")
        {
            $('#project-error').text("Fill type of project");
            window.errors.push("error");

        }

        if(role.val()=="")
        {
            $('#role-error').text("Fill role");
            window.errors.push("error");

        }



        if(window.errors.length == 0)
        {
            var firstName = $('#firstName').val();
            var lastName = $('#lastName').val();
            var numberOfPeople = $('#numberOfPeople').val();
            var purposeOfRenting = $('#purposeOfRenting').val();
            var typeOfProject = $('#typeOfProject').val();
            var role = $('#role').val();
            var pricePerRoom = $('#pricePerRoom').text();
            localStorage.setItem('firstName',firstName);
            localStorage.setItem('lastName',lastName);
            localStorage.setItem('numberOfPeople',numberOfPeople);
            localStorage.setItem('purposeOfRenting',purposeOfRenting);
            localStorage.setItem('typeOfProject',typeOfProject);
            localStorage.setItem('role',role);

            $('#numberOfAdults').text(numberOfPeople);
            $('#firstN').text(firstName);


            var numberOfDays = localStorage.getItem('numberOfDays');
            var totalPrice = pricePerRoom*numberOfDays;
            localStorage.setItem('sum',JSON.stringify(totalPrice));

            $('#numberOfNights').text(numberOfDays);
            $('#total-price-for-room').text(totalPrice);

        }



    })

    $('#date-end-input').on('change',checkDates);
    $('#first-next').on('click',checkDates);

});
    function checkDates()
    {
        var startDate = $('#date-start-input').val();
        if(startDate == "")
        {
            window.errors.push("bad start date");
            $('#start-error').text("You must fill start date");
        }
        localStorage.setItem('startDate',startDate);
        var endDate = $('#date-end-input').val();
        if(endDate == "")
        {
            window.errors.push("bad end date");
            $('#end-error').text("You must fill end date");
        }
        localStorage.setItem('endDate',endDate);
        var room_id = $('#first-next').attr('data-id');


        $.ajax({
            url:BASE_URL+"/checkdates",
            method:"post",
            data:{
                "_token": $('#token').val(),
                startDate,
                endDate,
                room_id
            },
            success:function(dates){
                // $("#first-next").removeClass('validated');
                var wantedDates = dates.wantedDates;
                var disabledDates = dates.disabledDates;

                var numberOfDays = wantedDates.length;

                localStorage.setItem('numberOfDays',JSON.stringify(numberOfDays));

                for(wantedDate of wantedDates)
                {
                    for(disabledDate of disabledDates)
                    {
                        if(wantedDate===disabledDate)
                        {

                            alert("You have choosen iregular dates");
                        }

                    }
                }

            }
        })
    }
    function disableDates()
    {
        if($('#disable-dates').attr('data-dates').length > 0)
        {
            var disableDates = $('#disable-dates').attr('data-dates');
            var array = JSON.parse(disableDates);

            $('#date-start-input').datepicker({
                beforeShowDay: function (date) {
                    var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
                    return [array.indexOf(string) == -1]
                }
            })
            $('#date-end-input').datepicker({
                beforeShowDay: function (date) {
                    var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
                    return [array.indexOf(string) == -1]
                }
            })
        }

   }

