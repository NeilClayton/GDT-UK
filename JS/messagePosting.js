/**
 * Created by Neil on 27/06/2016.
 */
$(document).on("click", "#insertComment", function () {
    var name = this.name;
    var textareaname = "comment" + name;
    var text = $('textarea#' + textareaname).val();
    $.get('Actions/messages.php', {id:name, msg:text}, function(data){
        $('#posts').load(location.href + ' #posts');
    })
});

$(document).on("click", '#newMessageFeed', function(){
   var text = $('textarea#post-message').val();
    $.get('Actions/messages.php', {newMsg:text}, function(data){
        $('.tab-content').load(location.href + ' .tab-content');

    })
});