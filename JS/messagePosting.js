/**
 * Created by Neil on 27/06/2016.
 */
$(document).on("click", "#insertComment", function () {
    var name = this.name;
    var textareaname = "comment"+name;
    var text = $('textarea#'+textareaname).val();
    alert(text);
    $.ajax({
        url: 'Actions/messages.php',
        type: 'post',
        data: {action: name, param: text},
        success: function (output) {
            alert('success');}
})});