$(function() {
	function validateForm() {
		var messages = [];
	    if (document.contact.fullname.value=="")
	    {
	        messages.push("Please enter your Full Name.");
	    }
	    if (document.contact.phone.value=="")
	    {
	        messages.push("Please enter your Phone number.");
	    }
	    if (document.contact.email.value=="")
	    {
	        messages.push("Please enter your Email.");
	    }
	    if (document.contact.comments.value=="")
	    {
	        messages.push("Please tell us about your project.");
	    }

	    if (messages.length > 0) {
	        alert(messages.join('\n'));
	        return false;
	    } else 
{	        return true;
	    }
	}
});
