$(document).ready(function() 
{

	//continue
	$("#continue").click(function()
	{
		var category	 = $("#category").val();
		//modal for Basic School
		if(category == "Basic School") {
		$("#modal-basic").modal({backdrop: "static"});
	} 
		//modal for Junior School
		if(category == "Junior Secondary School") {
			$("#modal-junior").modal({backdrop: "static"});
		}
		//modal for Senior School
		if(category == "Senior Secondary School") {
			$("#modal-senior").modal({backdrop: "static"});
		}
		//modal for Online Examination
		if(category == "Online Examination") {
			$("#modal-others").modal({backdrop: "static"});
		}	
})


	//next from Modal
	$("#next").click(function()
	{
		var catclass	 = $("#catclass").val();
		var subject 	 = $("#subject").val();
		var hour 	 	 = $("#hour").val();
		var minutes	 	 = $("#minutes").val();

	//validate form
	var a = document.forms["uploadquestion"]["subject"].value;

	if (a == null || a == "") {
    $(toastr.error('Please create a subject'));
        return false;
    }
    //end of form validation

		$.ajax
	(
	{
		type 		:  'post',
		url			:  '../functions/init.php',
		data 		:  {catclass:catclass,subject:subject,hour:hour,minutes:minutes},
		success 	:  function(data)
		{
			$(toastr.error(data)).html(data);
		}
	}
		)		
})


	//jssnext from Modal
	$("#jssnext").click(function()
	{
		var jssclass	 = $("#jssclass").val();
		var jsssubject 	 = $("#jsssubject").val();
		var jsshour 	 = $("#jsshour").val();
		var jssminutes	 = $("#jssminutes").val();

	//validate form
	var a = document.forms["uploadjss"]["jsssubject"].value;

	if (a == null || a == "") {
    $(toastr.error('Please create a subject'));
        return false;
    }
    //end of form validation

		$.ajax
	(
	{
		type 		:  'post',
		url			:  '../functions/init.php',
		data 		:  {jssclass:jssclass,jsssubject:jsssubject,jsshour:jsshour,jssminutes:jssminutes},
		success 	:  function(data)
		{
			$(toastr.error(data)).html(data);
		}
	}
		)		
})


		//sssnext from Modal
	$("#seniornext").click(function()
	{
		var seniorclass	 	 = $("#seniorclass").val();
		var seniorsubject 	 = $("#seniorsubject").val();
		var sshour 			 = $("#sshour").val();
		var ssminutes		 = $("#ssminutes").val();

	//validate form
	var a = document.forms["uploadsenior"]["seniorsubject"].value;

	if (a == null || a == "") {
    $(toastr.error('Please create a subject'));
        return false;
    }


    //end of form validation

		$.ajax
	(
	{
		type 		:  'post',
		url			:  '../functions/init.php',
		data 		:  {seniorclass:seniorclass,seniorsubject:seniorsubject,sshour:sshour,ssminutes:ssminutes},
		success 	:  function(data)
		{
			$(toastr.error(data)).html(data);
		}
	}
		)		
})






			//online from Modal
	$("#online").click(function()
	{
		var onlinesubject 	 = $("#onlinesubject").val();
		var othour 			 = $("#othour").val();
		var otminutes		 = $("#otminutes").val();

	//validate form
	var a = document.forms["uploadonline"]["onlinesubject"].value;

	if (a == null || a == "") {
    $(toastr.error('Please create a subject'));
        return false;
    }
    //end of form validation

		$.ajax
	(
	{
		type 		:  'post',
		url			:  '../functions/init.php',
		data 		:  {onlinesubject:onlinesubject,othour:othour,otminutes:otminutes},
		success 	:  function(data)
		{
			$(toastr.error(data)).html(data);
		}
	}
		)		
})




		//Validate UploadQuestions
	$("#Questionaire").click(function()
	{
		var sn 			 = $("#sn").val();
		var ques 		 = $("#ques").val();
		var oa 			 = $("#oa").val();
		var ob 	 	     = $("#ob").val();
		var oc 	 		 = $("#oc").val();
		var od 	 		 = $("#od").val();
		var correct 	 = $("#correct").val();
		var subj 	 	 = $("#subj").val();

		if(correct == "Option A") {

			var option = oa;
		} else {

			if(correct == "Option B") {

				var option = ob;

			} else {

				if (correct == "Option C") {

					var option = oc;

				} else {

					if (correct == "Option D") {

						var option = od;
					}
				} 
			}
		}

	//validate form
	var a = document.forms["uploadQuestionaire"]["sn"].value;
	var b = document.forms["uploadQuestionaire"]["ques"].value;
	var c = document.forms["uploadQuestionaire"]["oa"].value;
	var d = document.forms["uploadQuestionaire"]["ob"].value;
	var e = document.forms["uploadQuestionaire"]["oc"].value;
	var f = document.forms["uploadQuestionaire"]["od"].value;
	var g = document.forms["uploadQuestionaire"]["correct"].value;

	if (a == null || a == "") {
    $(toastr.error('Please create a serial number'));
        return false;
    } else {

    	if (b == null || b == "") {
    $(toastr.error('Please type in a question'));
        return false;
    } else {

    	if (c == null || c == "") {
    $(toastr.error('Please input Option A'));
        return false;
    } else {

    	if (d == null || d == "") {
    $(toastr.error('Please input Option B'));
        return false;
    } else {

    	if (e == null || e == "") {
    $(toastr.error('Please input Option c'));
        return false;
    } else {

    	if (f == null || f == "") {
    $(toastr.error('Please input Option D'));
        return false;
    } else {

    	if (g == null || g == "") {
    $(toastr.error('Please input a correct answer'));
        return false;
    }
    }
    }
    }
    }

    }

    }
    //end of form validation

		$.ajax
	(
	{
		type 		:  'post',
		url			:  '../functions/init.php',
		data 		:  {sn:sn,ques:ques,oa:oa,ob:ob,oc:oc,od:od,option:option,subj:subj},
		success 	:  function(data)
		{
			$(toastr.error(data)).html(data);
		}
	}
		)		
})



	//deleting question
	$("#movedel").click(function()
	{
		var delsn 	 = $("#delsn").val();
		var val 	 = $("#val").val();

	//validate form
	var a = document.forms["deleting"]["delsn"].value;

	if (a == null || a == "") {
    $(toastr.error('Please type in a serial number'));
        return false;
    }
    //end of form validation

		$.ajax
	(
	{
		type 		:  'post',
		url			:  '../functions/init.php',
		data 		:  {delsn:delsn,val:val},
		success 	:  function(data)
		{
			$(toastr.error(data)).html(data);
		}
	}
		)		
})




	//deleting subject
	$("#btndelsbj").click(function()
	{
		var delsbj 	 = $("#delsbj").val();

		$.ajax
	(
	{
		type 		:  'post',
		url			:  '../functions/init.php',
		data 		:  {delsbj:delsbj},
		success 	:  function(data)
		{
			$(toastr.error(data)).html(data);
		}
	}
		)		
})


	//resetting subject
	$("#reseted").click(function()
	{
		var subb 	 = $("#subb").val();

		$.ajax
	(
	{
		type 		:  'post',
		url			:  '../functions/init.php',
		data 		:  {subb:subb},
		success 	:  function(data)
		{
			$(toastr.error(data)).html(data);
		}
	}
		)		
})


	//update access code
	$("#updateaccess").click(function()
	{
		var ascode 	 = $("#ascode").val();
		$(toastr.error('Loading Please wait...'));
		$.ajax
	(
	{
		type 		:  'post',
		url			:  '../functions/init.php',
		data 		:  {ascode:ascode},
		success 	:  function(data)
		{
			$(toastr.error(data)).html(data);
		}
	}
		)		
})

	//start cbt
	$("#startcbt").click(function()
	{
		var cbt 	 = $("#cbt").val();
		$(toastr.error('Loading Please wait...'));
		window.location.href = "../cbt/./startcbt?id="+cbt;	
})
})