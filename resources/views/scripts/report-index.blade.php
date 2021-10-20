@section('page-script')
    <script>

        // tabs
        var activeLineClass = "bg-green-300";
        var activeBtnClass = "text-gray-500 font-bold";

        $("#buttonRegisteredUser").click(function(){
            $("#divActiveInactiveUser").hide();
            $("#divCompletedEvaluation").hide();
            $("#divRegisteredUser").show();

            $(this).addClass(activeBtnClass);
            $("#buttonActiveInactiveUser").removeClass(activeBtnClass);
            $("#buttonCompletedEvaluation").removeClass(activeBtnClass);

            $("#lineRegisteredUser").addClass(activeLineClass);
            $("#lineActiveInactiveUser").removeClass(activeLineClass);
            $("#lineCompletedEvaluation").removeClass(activeLineClass);
        });
        $("#buttonActiveInactiveUser").click(function(){
            $("#divActiveInactiveUser").show();
            $("#divCompletedEvaluation").hide();
            $("#divRegisteredUser").hide();

            $(this).addClass(activeBtnClass);
            $("#buttonRegisteredUser").removeClass(activeBtnClass);
            $("#buttonCompletedEvaluation").removeClass(activeBtnClass);

            $("#lineRegisteredUser").removeClass(activeLineClass);
            $("#lineActiveInactiveUser").addClass(activeLineClass);
            $("#lineCompletedEvaluation").removeClass(activeLineClass);
        });
        $("#buttonCompletedEvaluation").click(function(){
            $("#divActiveInactiveUser").hide();
            $("#divCompletedEvaluation").show();
            $("#divRegisteredUser").hide();

            $(this).addClass(activeBtnClass);
            $("#buttonRegisteredUser").removeClass(activeBtnClass);
            $("#buttonActiveInactiveUser").removeClass(activeBtnClass);

            $("#lineRegisteredUser").removeClass(activeLineClass);
            $("#lineActiveInactiveUser").removeClass(activeLineClass);
            $("#lineCompletedEvaluation").addClass(activeLineClass);
        });

        // Registered Users script
        $("#registeredUserCheckboxSpecificDate").change(function(){
            if($(this).is(':checked')) {
                $("#registeredUserSpecificDate").css({ display: "" });
                $("#registeredUserBetweenDate").css({ display: "none" });
                console.log("specific date");
            } else {
                $("#registeredUserBetweenDate").css({ display: "" });
                $("#registeredUserSpecificDate").css({ display: "none" });
                console.log("between date");
            }

        });

        $("#registeredUserDate").change(function() {
            if($(this).val() != "") {
                $(this).removeClass('border-2 border-red-200');
            }
        });
        $("#registeredUserStartDate").change(function() {
            if($(this).val() != "") {
                $(this).removeClass('border-2 border-red-200');
            }
        });
        $("#registeredUserEndDate").change(function() {
            if($(this).val() != "") {
                $(this).removeClass('border-2 border-red-200');
            }
        });





        // Active & Inactive Users script
            $("#userActivityCheckboxSpecificDate").change(function(){
                if($(this).is(':checked')) {
                    $("#userActivitySpecificDate").css({ display: "" });
                    $("#userActivityBetweenDate").css({ display: "none" });
                    console.log("specific date");
                } else {
                    $("#userActivityBetweenDate").css({ display: "" });
                    $("#userActivitySpecificDate").css({ display: "none" });
                    console.log("between date");
                }
            });

            $("#userActivityDate").change(function() {
                if($(this).val() != "") {
                    $(this).removeClass('border-2 border-red-200');
                }
            });
            $("#userActivityStartDate").change(function() {
                if($(this).val() != "") {
                    $(this).removeClass('border-2 border-red-200');
                }
            });
            $("#userActivityEndDate").change(function() {
                if($(this).val() != "") {
                    $(this).removeClass('border-2 border-red-200');
                }
            });




        // completed evaluation script
            $("#completedEvaluationCheckboxSpecificDate").change(function(){
                if($(this).is(':checked')) {
                    $("#divCESpecificDate").css({ display: "" });
                    $("#divCEBetweenDates").css({ display: "none" });
                    console.log("specific date");
                } else {
                    $("#divCEBetweenDates").css({ display: "" });
                    $("#divCESpecificDate").css({ display: "none" });
                    console.log("between date");
                }

            });

            $("#completedEvaluationExtensionService").change(function(){
                getWebinars($(this).val());
            });

            $("#completedEvaluationDate").change(function() {
                if($(this).val() != "") {
                    $(this).removeClass('border-2 border-red-200');
                }
            });
            $("#completedEvaluationStartDate").change(function() {
                if($(this).val() != "") {
                    $(this).removeClass('border-2 border-red-200');
                }
            });
            $("#completedEvaluationEndDate").change(function() {
                if($(this).val() != "") {
                    $(this).removeClass('border-2 border-red-200');
                }
            });




        // Download Buttons Functions

            // Registered Users
            function download_report_registeredUser_evaluation() {
                var specific_date = $("#registeredUserDate").val();
                var start_date = $("#registeredUserStartDate").val();
                var end_date = $("#registeredUserEndDate").val();

                var dateNotNull = true;

                if($("#registeredUserCheckboxSpecificDate").is(':checked')) {
                    var date = 'date='+specific_date;
                    if(specific_date != "") {
                        var dateNotNull = false;
                    }
                } else {
                    var date = 'start_date='+start_date+'&end_date='+end_date;
                    if(start_date != "" || end_date != "") {
                        var dateNotNull = false;
                    }
                }

                if(dateNotNull == true) {
                    if(dateNotNull == true) {
                        $("#registeredUserDate").addClass('border-2 border-red-200');
                        $("#registeredUserStartDate").addClass('border-2 border-red-200');
                        $("#registeredUserEndDate").addClass('border-2 border-red-200');
                    } else {
                        $("#registeredUserDate").removeClass('border-2 border-red-200');
                        $("#registeredUserStartDate").removeClass('border-2 border-red-200');
                        $("#registeredUserEndDate").removeClass('border-2 border-red-200');
                    }
                    alert('Please provide all necessary information.');
                } else {
                    location.href='/program-coordinator/reports/registered-users/?date=' +date;
                }
            }



            // User Activity Report
            function download_report_userActivity_evaluation() {
                var specific_date = $("#userActivityDate").val();
                var start_date = $("#userActivityStartDate").val();
                var end_date = $("#userActivityEndDate").val();


                var dateNotNull = true;

                if($("#userActivityCheckboxSpecificDate").is(':checked')) {
                    var date = 'date='+specific_date;
                    if(specific_date != "") {
                        var dateNotNull = false;
                    }
                } else {
                    var date = 'start_date='+start_date+'&end_date='+end_date;
                    if(start_date != "" || end_date != "") {
                        var dateNotNull = false;
                    }
                }

                if(dateNotNull == true) {
                    if(dateNotNull == true) {
                        $("#userActivityDate").addClass('border-2 border-red-200');
                        $("#userActivityStartDate").addClass('border-2 border-red-200');
                        $("#userActivityEndDate").addClass('border-2 border-red-200');
                    } else {
                        $("#userActivityDate").removeClass('border-2 border-red-200');
                        $("#userActivityStartDate").removeClass('border-2 border-red-200');
                        $("#userActivityEndDate").removeClass('border-2 border-red-200');
                    }
                    alert('Please provide all necessary information.');
                } else {
                    location.href='/program-coordinator/reports/active-inactive-users/?date=' +date;
                }
            }

            // Completed Evaluation Report
            function download_report_completed_evaluation() {
            var specific_date = $("#completedEvaluationDate").val();
            var start_date = $("#completedEvaluationStartDate").val();
            var end_date = $("#completedEvaluationEndDate").val();
            var extension_service_id = $("#completedEvaluationExtensionService").val();
            var webinar_id = $("#completedEvaluationWebinar").val();

            var dateNotNull = true;

            if($("#completedEvaluationCheckboxSpecificDate").is(':checked')) {
                var date = 'date='+specific_date;
                if(specific_date != "") {
                    var dateNotNull = false;
                }
            } else {
                var date = 'start_date='+start_date+'&end_date='+end_date;
                if(start_date != "" || end_date != "") {
                    var dateNotNull = false;
                }
            }

            if(dateNotNull == true || extension_service_id == "" || webinar_id == "") {
                if(dateNotNull == true) {
                    $("#completedEvaluationDate").addClass('border-2 border-red-200');
                    $("#completedEvaluationStartDate").addClass('border-2 border-red-200');
                    $("#completedEvaluationEndDate").addClass('border-2 border-red-200');
                } else {
                    $("#completedEvaluationDate").removeClass('border-2 border-red-200');
                    $("#completedEvaluationStartDate").removeClass('border-2 border-red-200');
                    $("#completedEvaluationEndDate").removeClass('border-2 border-red-200');
                }
                alert('Please provide all necessary information.');
            } else {
                location.href='/program-coordinator/reports/completed-evaluation/?' +date+'&extension_service_id='+extension_service_id+'&webinar_id='+webinar_id;
            }
        }


        // fetch data

        $(document).ready(function(){
            getExtensionServices();
        });

        function getExtensionServices() {
            $.ajax({
				url: '/fetch_extension_services/',
		        type: 'GET',
		        dataType: 'json',
		        success: function(data){
		        	$("#completedEvaluationExtensionService").empty();
                    if(data.length != 0) {
                        $('#completedEvaluationExtensionService').append('<option value="0">All</option>');
                    }
		            $.each(data,function(key, value){
                        $('#completedEvaluationExtensionService').append('<option value="'+value.id+'">'+value.name+'</option>');
		            });
                    getWebinars($("#completedEvaluationExtensionService").val());
		        }
			});
        }

        function getWebinars(extension_service_id) {
            console.log(extension_service_id);
            $.ajax({
				url: '/fetch_published_webinars/'+extension_service_id,
		        type: 'GET',
		        dataType: 'json',
		        success: function(data){
		        	$("#completedEvaluationWebinar").empty();
                    if(data.length != 0) {
                        $('#completedEvaluationWebinar').append('<option value="0">All</option>');
                    }
		            $.each(data,function(key, value){
                        $('#completedEvaluationWebinar').append('<option value="'+value.id+'">'+value.title+'</option>');
		            });
		        }
			});
        }
    </script>
@endsection
